<div>


    @livewire('say-hi', ['name' => $name])

    <button wire:click = "resetName('Bingo')">Reset Name</button>

    <form action="#" wire:submit.prevent  = "resetName('Bingo')" >
        <button>Reset Name from a form </button>
    </form>

    <button wire:mouseenter = 'resetName($event.target.innerText)'>Reset Name</button>
    <!-- esta ultima funcion integrada $event.target.innerText nos permite pasar como parametro a un metodo de la clase del componente el contenido que este detro de la etiqueta html  ... Ademas podemos usar cualquier evento que queramos con la funcion wire:*** como se hace normalmente con JS, incluso puedes añadir eventos customizados de librerias externas -->


</div>

<!--  input type= 'text' wire:model.lazy = 'name'>   Lo que hace el .lazy es modificar el comportamiento del data binding haciendo que la peticion ajax para actualizar el componente solo se envie cuando el cliente quite el focus del campo  -->

<!--DATA BINDING

    la propiedad 'wire:model' le dice al componente: 'hey quiero que relaciones el contenido de este input con ña propiedad publica del controllador con el nombre que le allamos dado de valor a la propiedad (en este caso la propiedad name).  De esta forma, el valor de la propiedad publica será actualizado en tiempo real cada vez que ocurra un cambio en el input'

    FUNCIONAMIENTO: este comportamiento funciona de la siguiente manera: cuando haces un cambio en el input livewire envia un request ajax al servidor informando el cambio, luego el servidor responde con un codigo de html y JS que se compara con el que ya existia, si existe algun cambio, entonces inteligentemente livewire actualiza el cambio renderizando el componente (solo el componente)... y esto es lo que general el comportamiento de tiempo real

    Su funcionamiento es parecido al de las directivas de VueJs pero este framework es mas poderoso

    ANY INPUT : puedes utilizar este comoportamiento de wire:model data binding para cualquier tipo de input 

-->