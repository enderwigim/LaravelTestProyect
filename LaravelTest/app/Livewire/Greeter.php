<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = '';
    public $greetingMessage = '';

    public function changeGreeting() {

    }
    public function render()
    {
        return view('livewire.greeter');
    }
}
