<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use App\Livewire\Customers\Detail;
use App\Livewire\Customers\CustomerEdit;
use App\Models\Customer_cus;
use Livewire\WithPagination;
use Illuminate\Support\Facades\URL;

class CustomerGrid extends Component
{
    use WithPagination; 
    public string $searchText = '';

    protected $listeners = [
        'customers.updated' => '$refresh',
    ];

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

    public function editCustomer(int $id): void
    {
        $this->dispatch('customers.edit:open', id: $id)->to(CustomerEdit::class);
    }

    public function getPageUrl($pageName, $page)
    {
        return URL::current() . "?{$pageName}={$page}";
    }

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
