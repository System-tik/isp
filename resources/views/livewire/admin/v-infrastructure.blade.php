<div>
    <div class="grid grid-cols-12 gap-4 px-10">
        <div class="col-span-5 p-3 bg-white rounded-lg shadow lg:col-span-4" >
            <h1 class="pb-2 text-xl font-bold border-b">Infrastructures</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Nom batiment</label>
                    <input wire:model="nombatiment" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Description</label>
                    <textarea wire:model="descrip" type="text" class="w-full border-gray-200 rounded h-28"></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Choisir une image</label>
                    <input wire:model="photo" type="file" name="img" id="">
                </div>
                <div class="flex flex-col">
                    <img src="" alt="Pas d'image" srcset="">
                </div>
                
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button wire:click="clear" class="px-2 text-lg text-white bg-gray-600">Clear</button>
                    <button wire:click="store" class="px-2 text-lg text-white bg-green-600">Enregistrer</button>
                    <button wire:click="update" class="px-2 text-lg text-white bg-yellow-600">Modifier</button>
                    <button wire:click="delete" class="px-2 text-lg text-white bg-red-600">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="col-span-7 p-3 bg-white rounded-lg shadow lg:col-span-8">
            <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
            <div class="grid w-full grid-cols-12">
                {{-- <tr class="flex w-full gap-2 py-3 border-b">
                    <td class="flex-1">Nom section</td>
                </tr> --}}
                @foreach ($infrastructures as $i)
                <div wire:click="selectedId({{$i}})" class="flex flex-col w-full col-span-6 p-1 text-justify border-b rounded shadow cursor-pointer xl:col-span-4 2xl:col-span-3 hover:bg-gray-50">
                    <img src="{{asset('storage/gallerie/'.$i->id.'.png')}}?{{rand()}}" alt="" srcset="">
                    <p class="text-lg font-bold">{{ $i->nombatiment }}</p>
                    <p class="">{{ $i->descrip }}</p>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>




    {{-- <input type="nombatiment" wire:model="nombatiment">
    @error('nombatiment')<span>{{$message}}</span><br>@enderror
    <input type="descrip" wire:model="descrip">
    @error('descrip')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($infrastructures as $infrastructure)
        <p wire:click="selectedId({{$infrastructure}})">{{ $infrastructure->nombatiment }}</p>
    @endforeach --}}
</div>
