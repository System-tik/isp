<div>
    <div class="grid grid-cols-4 gap-4 px-10">
        <div class="p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Programme</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Option</label>
                    <select name="" id="" wire:model="idoption">
                        @foreach ($options as $idopt)
                        <option value="{{ $idopt->id }}">{{ $idopt->nomopt }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Semestre</label>
                    <select name="" id="" wire:model="semestre_id">
                        @foreach ($semestres as $sem)
                        <option value="{{ $sem->id }}">{{ $sem->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="" class="">Cours</label>
                    <input type="text" class="w-full border-gray-200 rounded" wire:model="nomCours">
                </div>
                <div class="flex flex-col">
                    <label for="" class="">Description</label>
                    <textarea type="text" class="w-full border-gray-200 rounded h-28" wire:model="descrip"></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="" class="">Credit</label>
                    <input type="text" class="w-full border-gray-200 rounded" wire:model="credit">
                </div>
    
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button class="px-2 text-lg text-white bg-gray-600" wire:click="clear">Clear</button>
                    <button class="px-2 text-lg text-white bg-green-600" wire:click="store">Enregistrer</button>
                    <button class="px-2 text-lg text-white bg-yellow-600" wire:click="update">Modifier</button>
                    <button class="px-2 text-lg text-white bg-red-600" wire:click="delete">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="col-span-3 p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
            <table class="w-full">
                @foreach ($programmes as $pgrm)    
                <tr class="py-3 border-b">
                   <td>{{$pgrm->nomcours}}</td>
                   <td>kfjfj</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>





    {{-- <input type="idoption" wire:model="idoption">
    @error('idoption')<span>{{$message}}</span><br>@enderror
    <input type="nomCours" wire:model="nomCours">
    @error('nomCours')<span>{{$message}}</span><br>@enderror
    <input type="descrip" wire:model="descrip">
    @error('descrip')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($programmes as $program)
        <p wire:click="selectedId({{$program}})">{{ $program->nomCours }}</p>
    @endforeach --}}
</div>
