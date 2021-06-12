<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Project extends Component
{
    public $name = 'Laravel';

    //livewire use the constructure method for internal function so, we use the mount method insted

    public function mount($name) {
        // this is the first thing that will hapend when the component is called

        $this->name = $name;
    }

    // Para recibir datos desde una peticion http (request), debemos recoger estos datos en el metodo mount. A continuacion un codigo de ejemplo:

    /*
     public function mount(Request $request) {

        $this->name = $request->input('name);
     }
    */

    public function render()
    {
        return view('livewire.project');
    }
}

/* LIFECYCLE HOOKS

Each Livewire component undergoes a lifecycle (mount, updating, updated). Lifecycle hooks allow you to run code at any part of the component's lifecyle, or before specific properties are updated.

>>>>> 'mount'  ->	Runs once, immediately after the component is instantiated, but before render() is called

>>>>> 'hydrate' ->  Runs on every request, immediately after the component is hydrated, but before an action is performed, or render() is called

>>>>> 'updating' ->	Runs before any update to the Livewire component's data

>>>>> 'updated' ->	Runs after any update to the Livewire component's data

>>>>> 'updatingFoo' ->	Runs before a property called $foo is updated

>>>>> u'pdatedFoo' ->	Runs after a property called $foo is updated

*/ 
