<div>
    <div class="flex flex-col gap-2">
        <div class="p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Semestres</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Nom</label>
                    <input type="text" class="w-full border-gray-200 rounded" wire:model="nom">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Niveau</label>
                    <select name="" id="" wire:model="niveau_id">
                        <option>Choisir niveau</option>
                        @foreach ($niveaux as $idn)
                        <option value="{{ $idn->id }}">{{ $idn->lib }}</option>
                        @endforeach
                    </select>
                </div>
    
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button class="px-2 text-lg text-white bg-gray-600" wire:click="clear">Clear</button>
                    <button class="px-2 text-lg text-white bg-green-600"wire:click="store">Enregistrer</button>
                    <button class="px-2 text-lg text-white bg-yellow-600"wire:click="update">Modifier</button>
                    <button class="px-2 text-lg text-white bg-red-600"wire:click="delete">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="p-3 bg-white rounded-lg shadow ">
            <h1 class="pb-2 text-xl font-bold border-b">Les semestres</h1>
            <table class="w-full">
                @foreach ($semestres as $sem)
                    
                <tr wire:click="selectedId({{$sem}})" class="border-b cursor-pointer hover:bg-gray-50">
                    <td class="text-center bg-blue-200">{{$loop->index+1}}</td>
                    <td>
                        {{$sem->nom}} | {{$sem->lib}}
                    </td>
                </tr>
                @endforeach
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
