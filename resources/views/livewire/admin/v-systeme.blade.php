<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="flex flex-col gap-2">
        <div class="p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Systeme</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Libellé</label>
                    <input wire:model="libelle" type="text" class="w-full border-gray-200 rounded">
                </div>
    
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button wire:click="clear" class="px-2 text-lg text-white bg-gray-600">Clear</button>
                    <button wire:click="store" class="px-2 text-lg text-white bg-green-600">Enregistrer</button>
                    <button wire:click="update" class="px-2 text-lg text-white bg-yellow-600">Modifier</button>
                    <button wire:click="delete" class="px-2 text-lg text-white bg-red-600">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Les systèmes</h1>
            <table class="w-full">
                @foreach ($systemes as $i)
                <tr wire:click="select({{$i}})" class="flex w-full gap-5 border-b cursor-pointer hover:bg-gray-50">
                    <td class="px-2 bg-blue-200">{{ $loop->index }}</td>
                    <td class="flex-1">{{ $i->libelle }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    
</div>
