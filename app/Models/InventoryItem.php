<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $fillable = ['equipment_number', 'equipment_type',
    'equipment', 'room', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
