<?php

namespace App\Http\Livewire;

use Livewire\Component;

//esta es una clase componente de livewire que funciona como si fuera un controlador exclusivamente para el componente con el que fue creado

class HelloWorld extends Component
{
    public $name = 'Roberto Martinez';
    public $laud = false;
    public $greetings = 'hello';
    
    //como la clase y el componente creado con livewire estan conectados internamente, cualquier propiedad creada de manera piblica en la clase, estará automaticamnete disponible en el componente (la vista) sin necesidad de pasarlo explicitamente por el metodo view()

    public function resetName($name = 'Guy') {

        $this->name = $name;
        //tambien podemos usar metodos para controlar el componente de livewire a partir de su clase, como las propiedades publicas estan disponibles en ambos canales y en tiempo real, si cambiamos la propiedad 'name' desde la clase, este cambio tambien se verá en el componente (la vista)
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
