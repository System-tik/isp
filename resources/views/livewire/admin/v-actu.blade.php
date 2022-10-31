<div class="">
    <div class="flex gap-2 px-10">
        <div class="p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Info de l'entête</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Titre</label>
                    <input wire:model="titre" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Auteur</label>
                    <input wire:model="auteur" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Description</label>
                    <textarea wire:model="descrip" class="w-full border-gray-200 rounded" rows="5"></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Image</label>
                    <input wire:model="photos" type="file" class="w-full border-gray-200 rounded" multiple>
                </div>
    
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button wire:click="clear" class="px-2 text-lg text-white bg-gray-600">Clear</button>
                    <button wire:click="store" class="px-2 text-lg text-white bg-green-600">Enregistrer</button>
                    <button wire:click="update" class="px-2 text-lg text-white bg-yellow-600">Modifier</button>
                    <button wire:click="delete" class="px-2 text-lg text-white bg-red-600">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="flex-1 p-2 bg-white rounded-lg shadow ">
            <h1 class="pb-2 text-xl font-bold border-b">Les infos</h1>
            <div class="grid w-full grid-cols-12">
                {{-- <tr class="flex w-full gap-2 py-3 border-b">
                    <td class="flex-1">Nom section</td>
                </tr> --}}
                @foreach ($actus as $i)
                <div wire:click="selectedId({{$i}})" class="flex flex-col w-full col-span-6 p-1 text-justify border-b rounded shadow cursor-pointer xl:col-span-4 2xl:col-span-3 hover:bg-gray-50">
                    <img src="{{asset('storage/actualite/'.$i->id.'/0.png')}}" alt="" srcset="">
                    <p class="text-lg font-bold">{{ $i->titre }}</p>
                    <p class="">{{ $i->auteur }}</p>
                    <p class="">{{ $i->descrip }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>





    {{-- <input type="nomsec" wire:model="nomsec">
    @error('nomsec')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($sections as $section)
        <p wire:click="selectedId({{$section}})">{{ $section->nomsec }}</p>
    @endforeach --}}
</div>
