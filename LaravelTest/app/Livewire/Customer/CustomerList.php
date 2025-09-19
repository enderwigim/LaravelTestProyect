<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer_cus;
use Livewire\WithPagination;

class CustomerList extends Component
{
    use WithPagination;

    public int $perPage = 10;
    public int $maxPerPage = 25;

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {   
        $customers = Customer_cus::query()
            ->select(['cus_id', 'cus_corporatename', 'cus_commercialname', 'cus_taxid'])
            ->orderBy('cus_id', 'desc')
            ->paginate($this->perPage);

        $maxPerPage = $customers.count()
        // Pasa $customers a la vista (NO lo guardes en propiedad pública)
        return view('livewire.customer.customer-list', compact('customers'));
    }
}
