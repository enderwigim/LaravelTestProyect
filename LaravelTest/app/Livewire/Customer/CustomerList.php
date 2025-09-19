<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer_cus;

class CustomerList extends Component
{
    public $customers;

    public function mount()
    {
        $this->customers = Customer_cus::all();
    }

    public function render()
    {
        return view('livewire.customer.customer-list');
    }
}
