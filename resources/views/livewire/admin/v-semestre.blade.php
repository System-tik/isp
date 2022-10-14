<div>
    <div class="grid grid-cols-4 gap-4 px-10">
        <div class="p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Semestres</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Système</label>
                    <input type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Niveau</label>
                    <textarea type="text" class="w-full border-gray-200 rounded h-44"></textarea>
                </div>
    
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button class="px-2 text-lg text-white bg-gray-600">Clear</button>
                    <button class="px-2 text-lg text-white bg-green-600">Enregistrer</button>
                    <button class="px-2 text-lg text-white bg-yellow-600">Modifier</button>
                    <button class="px-2 text-lg text-white bg-red-600">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="col-span-3 p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
            <table class="w-full">
                <tr class="flex w-full gap-2 py-3 border-b">
                    <td>Id</td>
                    <td class="flex-1">Système</td>
                    <td class="flex-1">Niveau</td>
                </tr>
            </table>
        </div>
    </div>




    {{-- <input type="system" wire:model="system">
    @error('system')<span>{{$message}}</span><br>@enderror
    <input type="niveau" wire:model="niveau">
    @error('niveau')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($semestres as $semestre)
        <p wire:click="selectedId({{$semestre}})">{{ $semestre->niveau }}</p>
    @endforeach --}}
</div>
