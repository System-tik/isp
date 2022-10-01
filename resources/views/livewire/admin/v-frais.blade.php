<div>
<<<<<<< HEAD
    {{-- Success is as dangerous as failure. --}}
    <div>
        <input type="text" placeholder="titre" wire:model='type'>
        <input type="number" placeholder="description" wire:model='montant'>
        <button wire:click='delete'>CREER</button>
        @foreach ($fraiss as $i)
        <div wire:click="select({{$i}})" >{{$i}}</div>
            
        @endforeach
    </div>
=======
    
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
>>>>>>> 923c6d82289a2e489d10d661787e60bf0363d471
</div>
