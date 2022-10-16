<div>
    <div>
        <div class="grid grid-cols-4 gap-4 px-10">
            <div class="p-3 bg-white rounded-lg shadow">
                <h1 class="pb-2 text-xl font-bold border-b">Niveaux</h1>
    
                <div class="flex flex-col gap-1 py-2">
                    <div class="flex flex-col">
                        <label for="" class="py-1">Libellé</label>
                        <input wire:model="lib" type="text" class="w-full border-gray-200 rounded">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="py-1">Système</label>
                        <select name="" id="" wire:model="system_id">
                            @foreach ($systemes as $ids)
                            <option value="{{ $ids->id }}">{{ $ids->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="grid grid-cols-2 gap-4 py-4">
                        <button wire:click="clear" class="px-2 text-lg text-white bg-gray-600">Clear</button>
                        <button wire:click="store" class="px-2 text-lg text-white bg-green-600">Enregistrer</button>
                        <button wire:click="update" class="px-2 text-lg text-white bg-yellow-600">Modifier</button>
                        <button wire:click="delete" class="px-2 text-lg text-white bg-red-600">Supprimer</button>
                    </div>
                </div>
            </div>
            <div class="col-span-3 p-3 bg-white rounded-lg shadow">
                <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
                <table class="w-full">
                    <tr class="flex w-full gap-20 py-3 border-b">
                        <td>Id</td>
                        <td class="">Libellé</td>
                        <td class="flex-1">Système</td>
                    </tr>
                    @foreach ($niveaux as $i)
                    <tr wire:click="select({{$i}})" class="flex w-full gap-20 border-b cursor-pointer hover:bg-gray-50">
                        <td class="">{{ $i->id }}</td>
                        <td class="">{{ $i->lib }}</td>
                        <td class="flex-1">{{ $ids->libelle }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
