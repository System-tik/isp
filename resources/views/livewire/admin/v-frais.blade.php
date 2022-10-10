<div class="">
    
    <input type="type" wire:model="type">
    @error('type')<span>{{$message}}</span><br>@enderror
    <input type="montant" wire:model="montant">
    @error('montant')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($frais as $frai)
        <p wire:click="selectedId({{$frai}})">{{ $frai->type }}</p>
    @endforeach
</div>
