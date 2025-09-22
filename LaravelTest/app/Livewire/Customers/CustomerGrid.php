<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use App\Livewire\Customers\Detail;
use App\Models\Customer_cus;
use Livewire\WithPagination;

class CustomerGrid extends Component
{
    //public array $customers = [];
    
    public string $searchText = '';

    public function updatingSearchText(): void
    {
        $this->reset(); 
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
        $customers = Customer_cus::query()
            ->when($this->searchText, function ($query) {
                $query->where(function ($q) {
                    $q->where('cus_id', 'like', '%' . $this->searchText . '%')
                      ->orWhere('cus_corporatename', 'ilike', '%' . $this->searchText . '%')
                      ->orWhere('cus_commercialname', 'like', '%' . $this->searchText . '%')
                      ->orWhere('cus_taxid', 'ilike', '%' . $this->searchText . '%');
                });
            })
            ->orderBy('cus_id')
            ->paginate(10);


        return view('livewire.customers.customer-grid', [
            'customers' => $customers,
        ]);
    }
}
