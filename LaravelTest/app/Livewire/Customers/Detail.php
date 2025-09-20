<?php

namespace App\Livewire\Customers;

use Livewire\Component;

class Detail extends Component
{
    public bool $open = false;

    public ?array $customer = null;

    protected $listeners = [
        'customers.detail:open' => 'openModal',
    ];

    public function openModal(int $id): void
    {
        // 🔹 Datos de ejemplo estáticos
        $data = [
            1 => ['code' => 'CLI-0001', 'trade_name' => 'Comercial Norte', 'company' => 'Integra QS S.A.', 'cif' => 'A12345678'],
            2 => ['code' => 'CLI-0002', 'trade_name' => 'Distribuciones Sur', 'company' => 'LogiWare SL', 'cif' => 'B87654321'],
            3 => ['code' => 'CLI-0003', 'trade_name' => 'Retail Centro', 'company' => 'Retailing group LTD', 'cif' => 'C11223344'],
            4 => ['code' => 'CLI-0004', 'trade_name' => 'Mayorista Este', 'company' => 'Comex Iberia', 'cif' => 'B55443322'],
        ];

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
