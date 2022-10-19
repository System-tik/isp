<div>

    <div class="flex flex-col gap-2">
        <div class="p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Départements</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Nom département</label>
                    <input wire:model="nomdep" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Section</label>
                    <select name="" id="" wire:model="idsec">
                        <option>Choisir une section</option>
                        @foreach ($sections as $ids)
                            <option  value="{{ $ids->id }}">{{ $ids->nomsec }}</option>
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
        <div class="flex-1 p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Les departements</h1>
            <table class="w-full">
                @foreach ($departements as $i)
                <tr wire:click="selectedId({{$i}})" class="w-full border-b cursor-pointer hover:bg-gray-50">
                    <td class="pl-3 bg-blue-200">{{ $loop->index + 1 }}</td>
                    <td class="">
                        <p>{{ $i->nomdep }}</p>
                        {{ $i->nomsec }}
                    </td>
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
