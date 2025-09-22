<?php

namespace App\Livewire\Customers;

use Livewire\Component;

use \App\Models\Customer_cus;

class Detail extends Component
{
    public bool $open = false;

    public ?array $customer = null;

    protected $listeners = [
        'customers.detail:open' => 'openModal',
    ];

    public function openModal(int $id): void
    {
        // Cargar datos del cliente desde la base de datos
        $data = Customer_cus::all()->keyBy('cus_id')->toArray();

        $this->customer = $data[$id] ?? null;
        $this->open = true;
    }

    public function closeModal(): void
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.customers.detail');
    }
}
