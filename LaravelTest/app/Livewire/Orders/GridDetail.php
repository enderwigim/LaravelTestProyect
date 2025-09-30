<?php

namespace App\Livewire\Orders;

use Livewire\Component;
use App\Models\Docheader_doh;

class GridDetail extends Component
{
    public Docheader_doh $order;

    public function mount($order){
        $this->order = $order;
    }
    
    
    public function render()
    {
        return view('livewire.orders.grid-detail');
    }
}
