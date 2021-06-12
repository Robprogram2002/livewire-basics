<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class NewContact extends Component
{
    public $contacts;

    // ahora estaremos escuchando un evento enviado desde un componnete hijo hacia un componente padre
    protected $listeners = ['foo' => '$refresh'];

    public function mount() 
    {
        $this->contacts = Contact::all();
    }

    public function refreshChildren()
    {
        //aqui estamos emitiendo un evento desde el componente padre
        $this->emit('refreshChildren', 'foo');

        //el primer parametro es el nombre del evento, el cual será escuchado en los componentes hijos y el segundo es informacion opcional que podemos pasar a los componentes que escuchen el evento
    }

    // EVENT (COMO FUNCIONA)
    //El metodo anterior genera un evento que es esvuchado por los componentes hijos provocando que todos se refresquen cuando el padre lo hago, este compprtamiento se debe a que cuando se entrelazan componentes usando eventos, lo que ocurre es que primero se lleva a cabo la peticion ajax de quien emite el evento y enseguida se llevan a cabo un conjunto de peticiones ajax de los componentes que escucharon el evento

    //En si, no ocurre una actualizacion a nivel global, sino que cada componente se actualiza a si mismo a traves de una peticion ajax una tras otra en cadena al escuchar el evento

    public function render()
    {
        return view('livewire.new-contact');
    }
}