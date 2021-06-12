<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class UserHello extends Component
{
    // en este caso estamos colocando como propiedad publica de un componente livewire a un conjunto de modelos de Eloquent (de la clase user), los cuales estaran disponibles automaticamente en la vista bajo la referencia de la variable users

    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function deleteUser($name) {
        User::where('name', $name)->first()->delete();
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user-hello');
    }
}

// RECUERDA QUE: Los componentes padre e hijo en livewire son independientes (each component is completly independent)

/* EVENSTS
When it comes to "inter-component" communication, Livewire offers a singular, simple, but powerful pattern: Events.  use them to make two or more components talk to each other, or even how they can talk to third-party javascript code.

Livewire components can communicate with each other through a global event system. As long as two Livewire components are living on the same page, they can communicate using events and listeners.

*/