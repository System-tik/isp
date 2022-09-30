<div>
    <input type="nomopt" wire:model="nomopt">
    @error('nomopt')<span>{{$message}}</span><br>@enderror
    <input type="iddep" wire:model="iddep">
    @error('iddep')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($options as $option)
        <p wire:click="selectedId({{$option}})">{{ $option->nomopt }}</p>
    @endforeach
</div>
