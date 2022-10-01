<div>
    <input type="idoption" wire:model="idoption">
    @error('idoption')<span>{{$message}}</span><br>@enderror
    <input type="nomCours" wire:model="nomCours">
    @error('nomCours')<span>{{$message}}</span><br>@enderror
    <input type="descrip" wire:model="descrip">
    @error('descrip')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($programmes as $program)
        <p wire:click="selectedId({{$program}})">{{ $program->nomCours }}</p>
    @endforeach
</div>
