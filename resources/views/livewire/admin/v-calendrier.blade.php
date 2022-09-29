<div>
    {{-- In work, do what you enjoy. --}}
    <div>
        <input type="text" placeholder="titre" wire:model='titre'>
        <input type="text" placeholder="description" wire:model='descrip'>
        <button wire:click='delete'>CREER</button>
        @foreach ($abouts as $i)
        <div wire:click="select({{$i}})" >{{$i}}</div>
            
        @endforeach
    </div>
</div>
