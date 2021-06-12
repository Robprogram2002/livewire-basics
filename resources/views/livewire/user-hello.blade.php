<div>

    @foreach($users as $user)
        @livewire('say-hi-user', ['user' => $user], key($user->id))
        <button wire:click = "deleteUser('{{$user->name}}')">Eliminar</button>
    @endforeach

</div>
