<div>
    <input type="nomsec" wire:model="nomsec">
    @error('nomsec')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($sections as $section)
        <p wire:click="selectedId({{$section}})">{{ $section->nomsec }}</p>
    @endforeach
</div>
