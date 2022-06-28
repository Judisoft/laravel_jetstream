<div>
    <input type="text" wire:model="name">
    <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
    </select>

    {{implode(" ,", $greeting) }} {{ $name }} @if($loud) ! @endif

</div>
