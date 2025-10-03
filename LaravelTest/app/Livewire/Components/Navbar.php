<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public string $selectedOption;

    public function mount()
    {
        if (request()->routeIs('clientes')) {
            $this->selectedOption = 'Clientes';
        } elseif (request()->routeIs('pedidos')) {
            $this->selectedOption = 'Pedidos';
        } else {
            $this->selectedOption = 'Clientes';
        }
    }
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

        if ($option === 'Clientes') {
            return redirect()->route('clientes'); // navegación a la ruta
        }

        if ($option === 'Pedidos') {
            return redirect()->route('pedidos'); // navegación a la ruta
        }
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
