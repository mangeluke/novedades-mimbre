<?php

namespace App\Livewire;

use Livewire\Component;

class MainContent extends Component
{
    public $selectedMenu = 'inicio'; // Variable para almacenar la opción seleccionada

    public function render()
    {
        return view('livewire.main-content');
    }
}
