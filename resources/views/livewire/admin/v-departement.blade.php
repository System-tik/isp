<div>
    <input type="nomdep" wire:model="nomdep">
    <input type="idsec" wire:model="idsec">

    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>

    @foreach ($departements as $departement)
        <p wire:click="selectedId({{$departement}})">{{ $departement->nomdep }}</p>
    @endforeach
</div>
