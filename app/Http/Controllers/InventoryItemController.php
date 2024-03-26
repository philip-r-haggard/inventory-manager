<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use Illuminate\Http\Request;

class InventoryItemController extends Controller
{
    public function deleteInventoryItem(InventoryItem $item) {
        if (auth()->user()->id === $item['user_id']) {
            $item->delete();
        }
        return redirect('/');
    }

    public function actuallyUpdateInventoryItem(InventoryItem $item, Request $request) {
        if (auth()->user()->id !== $item['user_id']) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'equipment_number' => 'required',
            'equipment_type' => 'required',
            'equipment' => 'required',
            'room' => 'required'
        ]);

        $incomingFields['equipment_number'] = strip_tags($incomingFields['equipment_number']);
        $incomingFields['equipment_type'] = strip_tags($incomingFields['equipment_type']);
        $incomingFields['equipment'] = strip_tags($incomingFields['equipment']);
        $incomingFields['room'] = strip_tags($incomingFields['room']);

        $item->update($incomingFields);
        return redirect('/');
    }

    public function showEditScreen(InventoryItem $item) {
        if (auth()->user()->id !== $item['user_id']) {
            return redirect('/');
        }

        return view('edit-inventory-item', ['item' => $item]);
    }

    public function createInventoryItem(Request $request) {
        $incomingFields = $request->validate([
            'equipment_number' => 'required',
            'equipment_type' => 'required',
            'equipment' => 'required',
            'room' => 'required'
        ]);

        $incomingFields['equipment_number'] = strip_tags($incomingFields['equipment_number']);
        $incomingFields['equipment_type'] = strip_tags($incomingFields['equipment_type']);
        $incomingFields['equipment'] = strip_tags($incomingFields['equipment']);
        $incomingFields['room'] = strip_tags($incomingFields['room']);
        $incomingFields['user_id'] = auth()->id();
        InventoryItem::create($incomingFields);
        return redirect('/');
    }
}
