<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ClienteInfo extends Component
{
    public $nombreCliente;

    public function mount()
    {
        if (Auth::check()) {
            $this->nombreCliente = Auth::user()->name;
        } else {
            $this->nombreCliente = 'Invitado';
        }
    }
    public function render()
    {
        return view('livewire.cliente-info');
    }
}
