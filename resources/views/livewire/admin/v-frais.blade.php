<div>
    {{-- Success is as dangerous as failure. --}}
    <div>
        <input type="text" placeholder="titre" wire:model='type'>
        <input type="number" placeholder="description" wire:model='montant'>
        <button wire:click='delete'>CREER</button>
        @foreach ($fraiss as $i)
        <div wire:click="select({{$i}})" >{{$i}}</div>
            
        @endforeach
    </div>
</div>
