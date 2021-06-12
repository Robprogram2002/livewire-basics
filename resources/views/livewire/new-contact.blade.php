<div>
    
    <h3>este espacio es de los componentes hijos</h3>
    <hr>
    @foreach($contacts as $contact)
        @livewire('refresh', ['contact' => $contact], key($contact->id))
    @endforeach
    
    <hr>

    <h3>este espacio es del componente padre</h3>
    {{now()}}
      <!--<button wire:click = '$refresh'>Refresh</button> este boton padre tiene un comportamiento completamente independiente al de sus hijos, de tal forma que al refrescar el componente padre no se refrescan los componentes hijos -->


      <!--Aqui se esta llamando a un metodo que generará un evento el cual será escuchado por todos los componentes hijos, provocando que cuando se apriete este button se refresquen tanto el padre como el hijo -->
      <button wire:click = "refreshChildren">Refresh</button>


      <!-- EVENTOS DESDE JS

        <button wire:click = "$emit('refreshChildren')"></button>

        El button anterior esta utilizando una funcion magica de JS que nos permite enviar o generar un evento desde la vista al presionar el button. Aqui ocurre, que tods los hijos que escuchen el evento se actualizarán pero este mismo componente no lo hará (solo se refrescan los que escuchan el evento y no quien lo genera)

        "Si emites un evento desde JS este se saltará el camino natural y solo afectará a quienes escuchen el evento y no quien lo genere"

        WINDOW.LIVEWIRE:  esta es la porsion de livewire que este disponible desde JS, es un objeto window que corre en el navegador. De esta forma, tu puedes emitir un evento usando JS desde cualquier parte (incluso desde la consolo) y el resultado dependerá de si hay algun componente escuchando dicho evento 
      
      -->
</div>
