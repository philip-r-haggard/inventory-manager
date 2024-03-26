<?php

use App\Models\InventoryItem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $items = InventoryItem::where('user_id', auth()->id())->get();
    return view('home', ['items' => $items]);
});

//Log in related routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

//Blog post related routes
Route::post('/create-inventory-item', [InventoryItemController::class, 'createInventoryItem']);
Route::get('/edit-inventory-item/{item}', [InventoryItemController::class, 'showEditScreen']);
Route::put('/edit-inventory-item/{item}', [InventoryItemController::class, 'actuallyUpdateInventoryItem']);
Route::delete('/delete-inventory-item/{item}', [InventoryItemController::class, 'deleteInventoryItem']);
