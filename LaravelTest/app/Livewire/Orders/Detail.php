<?php

namespace App\Livewire\Orders;

use Livewire\Component;
use \App\Models\Docheader_doh;

class Detail extends Component
{
    public bool $open = false;

    public ?array $order = null;

    protected $listeners = [
        'orders.detail:open' => 'openModal',
    ];

    public function openModal(int $id): void
    {
        // Cargar datos del cliente desde la base de datos
        $data = Docheader_doh::all()
            ->keyBy('doh_id')
            ->with('customer')
            ->toArray();

        $this->order = $data[$id] ?? null;
        $this->open = true;
    }

    public function closeModal(): void
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.orders.detail');
    }
}
