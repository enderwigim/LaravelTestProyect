<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public string $selectedOption = '';

    public function setOption(string $option)
    {
        $this->selectedOption = $option;
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
