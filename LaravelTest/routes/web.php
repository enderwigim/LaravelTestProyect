<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Add route for customer index
// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::view('/customers', 'customers.index')->name('customers.index');



require __DIR__.'/auth.php';
