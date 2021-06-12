<div>
    <input type="text" wire:model= 'name'><br>
    <input type="checkbox" wire:model = 'laud'><br>
    <select wire:model = 'greetings'>
        <option>hello</option>
        <option>goodBye</option>
        <option>See you later</option>
        <option>See you tomorrow</option>
    </select><br>

    @if ($laud)
    {{$greetings}} {{ strtoupper( $name)}}
    @endif
    <br>
</div>
