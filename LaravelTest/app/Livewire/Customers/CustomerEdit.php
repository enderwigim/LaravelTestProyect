<?php

namespace App\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer_cus;

class CustomerEdit extends Component
{
    public bool $open = false;

    public ?Customer_cus $customer = null;

    protected $listeners = [
        'customers.edit:open' => 'openModal',
    ];

    // Se mapean los valores ya que al cargar el modelo no se muestran los datos.
    public string $cus_commercialname = '';
    public string $cus_corporatename = '';
    public ?string $cus_taxid = '';

    public function openModal(int $id): void
    {
        $this->customer = Customer_cus::find($id);

        $this->cus_commercialname = $this->customer->cus_commercialname;
        $this->cus_corporatename = $this->customer->cus_corporatename;
        $this->cus_taxid = $this->customer->cus_taxid;

        $this->open = true;
    }

    public function save(): void
    {
        $this->validate([
            'cus_commercialname' => 'required|string|max:255',
            'cus_corporatename' => 'required|string|max:255',
            'cus_taxid' => 'required|string|max:50',
        ]);

        $this->customer->cus_commercialname = $this->cus_commercialname;
        $this->customer->cus_corporatename = $this->cus_corporatename;
        $this->customer->cus_taxid = $this->cus_taxid;

        $this->customer->save();

        //Lanzo el evento updated, este lo podré estar escuchando desde el customerGrid para que se refresque la pagina.
        $this->dispatch('customers.updated');
        $this->closeModal();
    }
    public function closeModal(): void
    {
        $this->reset(['open', 'customer']);
        
    }


    public function render()
    {
        return view('livewire.customers.customer-edit');
    }
}