<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer_cus;
use Livewire\Attributes\On;

class CustomerForm extends Component
{
    public bool $open = false;

    public ?Customer_cus $customer = null;

    public string $cus_corporatename = '';
    public string $cus_commercialname = '';
    public string $cus_taxid = '';

    protected $rules = [
        'cus_corporatename' => 'required|string|max:255',
        'cus_commercialname' => 'nullable|string|max:255',
        'cus_taxid' => 'nullable|string|max:50',
    ];

    #[On('customer-edit')]
    public function edit(Customer_cus $customer)
    {
        $this->resetValidation();

        $this->customer = $customer;
        $this->cus_corporatename = $customer->cus_corporatename ?? '';
        $this->cus_commercialname = $customer->cus_commercialname ?? '';
        $this->cus_taxid = $customer->cus_taxid ?? '';

        $this->open = true;
    }

    public function update()
    {
        $this->validate();

        if ($this->customer) {
            $this->customer->update([
                'cus_corporatename' => $this->cus_corporatename,
                'cus_commercialname' => $this->cus_commercialname,
                'cus_taxid' => $this->cus_taxid,
            ]);

            $this->dispatch('customer-updated'); // evento para refrescar la tabla
            $this->open = false;
        }
    }

    public function render()
    {
        return view('livewire.customer.customer-form');
    }
}
