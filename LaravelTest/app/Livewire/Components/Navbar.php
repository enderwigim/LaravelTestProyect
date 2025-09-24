<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public string $selectedOption = 'Clientes';

    public function updatedSelectedOption($value)
    {
        if ($value == "Clientes")
            $this->dispatch("showCustomers");
        else if ($value == "Pedidos")
            $this->dispatch("showOrders");
    }

    public function setOption(string $option)
    {
        $this->selectedOption = $option;
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
