<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use App\Livewire\Customers\Detail;

class CustomerGrid extends Component
{
    public array $customers = [];
    public array $originalCustomers = [];
    public string $searchText = '';

    public function mount(): void
    {
        // Datos de ejemplo (estáticos)
        $this->customers = [
            [
                'id' => 1,
                'codigo' => 'CLI-0001',
                'nombre_comercial' => 'Comercial Norte',
                'empresa' => 'Integra QS S.A.',
                'cif' => 'A12345678',
            ],
            [
                'id' => 2,
                'codigo' => 'CLI-0002',
                'nombre_comercial' => 'Distribuciones Sur',
                'empresa' => 'LogiWare SL',
                'cif' => 'B87654321',
            ],
            [
                'id' => 3,
                'codigo' => 'CLI-0003',
                'nombre_comercial' => 'Retail Centro',
                'empresa' => 'Retailing group LTD',
                'cif' => 'C11223344',
            ],
            [
                'id' => 4,
                'codigo' => 'CLI-0004',
                'nombre_comercial' => 'Mayorista Este',
                'empresa' => 'Comex Iberia',
                'cif' => 'B55443322',
            ],
        ];

        $this->originalCustomers = $this->customers;
    }

    // Stubs para enganchar modales cuando los tengas listos
    public function seeDetail(int $id): void
    {
        // Abre modal de detalle
        $this->dispatch('customers.detail:open', id: $id)->to(Detail::class);
    }

    // public function editar(int $id): void
    // {
    //     // Abre modal de edición (lo conectarás después)
    //     $this->dispatch('customers-editar:abrir', id: $id);
    // }

    public function render()
    {
        return view('livewire.customers.customer-grid');
    }
}
