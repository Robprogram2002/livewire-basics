<div>
    <h4>{{$contact->name}}  - {{$contact->surname}}</h4>
    {{now()}}
    <button wire:click = '$refresh'>Refresh</button> {{$variable}}
    <button wire:click = "emitFoo">Refres (to parent event)  </button>
</div>
