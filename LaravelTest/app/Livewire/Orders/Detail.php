<?php

namespace App\Livewire\Orders;

use Livewire\Component;
use \App\Models\Docheader_doh;

class Detail extends Component
{
    public bool $open = false;

    public $order = null;

    protected $listeners = [
        'orders.detail:open' => 'openModal',
    ];

    public function openModal(int $id): void
    {
        // Cargar datos del cliente desde la base de datos
        $this->order = Docheader_doh::select('doh_id', 'doh_date', 'doh_totalamount', 'cus_doh_fk')
             ->with(['customer:cus_id,cus_commercialname',
                     'doclines:dli_id,doh_dli_fk,dli_description,dli_quantity,dli_price']) 
             ->where('doh_id', $id)
             ->first();


        //dd($this->order);
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
