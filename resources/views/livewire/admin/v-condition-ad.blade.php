<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <input type="text" placeholder="descrip" wire:model="descrip">
    <button wire:click="update">Ajouter</button>

    @foreach ($conditions as $i)
    <div wire:click="select({{$i}})" >{{$i}}</div>
        
    @endforeach
   <div>
</div>
