<div>

    <div class="grid grid-cols-4 gap-4 px-10">
        <div class="p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Départements</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Nom département</label>
                    <input wire:model="nomdep" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Id section</label>
                    <select name="" id="" wire:model="idsec">
                        @foreach ($section as $ids)
                            <option  value="{{ $ids->id }}">{{ $ids->nomsec }}</option>
                        @endforeach
                    </select>
                    {{-- <input wire:model="idsec" type="text" class="w-full border-gray-200 rounded"> --}}
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
                <tr class="flex w-full gap-10 py-3 border-b">
                    <td>Id</td>
                    <td class="">Nom</td>
                    <td class="flex-1">Section</td>
                </tr>
                @foreach ($departements as $i)
                <tr wire:click="selectedId({{$i}})" class="flex w-full gap-4 border-b cursor-pointer hover:bg-gray-50">
                    <td>{{ $i->id }}</td>
                    <td class="">{{ $i->nomdep }}</td>
                    <td class="">{{ $ids->nomsec }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>









    {{-- <input type="nomdep" wire:model="nomdep">
    <input type="idsec" wire:model="idsec">

    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>

    @foreach ($departements as $departement)
        <p wire:click="selectedId({{$departement}})">{{ $departement->nomdep }}</p>
    @endforeach --}}
</div>
