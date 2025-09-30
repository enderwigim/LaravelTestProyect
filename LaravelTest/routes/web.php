<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\CustomerController;


use App\Livewire\Customers\Index as CustomersPage;
use App\Livewire\Orders\OrderGrid as OrdersPage;

Route::get('/clientes', CustomersPage::class)->name('clientes');
Route::get('/pedidos', OrdersPage::class)->name('pedidos');
// Add route for customer index
// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
//Route::view('/customers', 'customers.index')->name('customers.index');




