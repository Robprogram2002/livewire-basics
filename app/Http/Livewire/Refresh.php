<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Refresh extends Component
{

    public $contact;
    public $variable;


    //aqui, la propiedad listeners almacena los eventos que escuchara este componente, los cuales se identifican como las key de este array asociativo con el nombre del evento, y como valor se establece el metodo que queremos se ejecute en este componente cuando se esvuche el metodo

    //listeners -> array asociativo donde las llaves son los nombres de los eventos que el componente escucha y como valor estan los metodos que se ejecutaran como reaccion al evento
    protected $listeners = ['refreshChildren' => 'refreshMe'];

    //para acortar tambien se puede usar lo siguiente:  (ademas, recuerda que el metodo de respuesta puede llamarse igual que el evento que se escucha, de tal forma que ya no es necesario nombrarlo)
    //protected $listeners = ['refreshChildren' => $refresh]

    public function mount($contact)
    {
        $this->contact = $contact;
    }

    public function refreshMe($someVariable)
    {
        $this->variable = $someVariable;
    }

    public function emitFoo() {

        $this->emitUp('foo');
        // Aqui estamos generando un evento hacia un componente padre
    }

    public function render()
    {
        return view('livewire.refresh');
    }
}
