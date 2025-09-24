<?php

namespace App\Livewire\Home;

use Livewire\Component;

class HomePageController extends Component
{
    // Este componente va a ser el que se encargue de llamar la pagina principal y controlar cuando se muestran los clientes o los pedidos.
    public string $selectedOption = 'Clientes';

    protected $listeners = [
            'showCustomers' => 'showCus',
            'showOrders' => 'showOrders'
        ];

    public function showCus()
    {
        $this->selectedOption = "Clientes";
    }

    public function showOrders()
    {
         $this->selectedOption = "Pedidos";
    }


    public function render()
    {
        return view('livewire.home.home-page-controller');
    }
}
