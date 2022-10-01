<div>
    <input type="nombatiment" wire:model="nombatiment">
    @error('nombatiment')<span>{{$message}}</span><br>@enderror
    <input type="descrip" wire:model="descrip">
    @error('descrip')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($infrastructures as $infrastructure)
        <p wire:click="selectedId({{$infrastructure}})">{{ $infrastructure->nombatiment }}</p>
    @endforeach
</div>
