<div>
    <input type="system" wire:model="system">
    @error('system')<span>{{$message}}</span><br>@enderror
    <input type="niveau" wire:model="niveau">
    @error('niveau')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($semestres as $semestre)
        <p wire:click="selectedId({{$semestre}})">{{ $semestre->niveau }}</p>
    @endforeach
</div>
