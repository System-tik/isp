<div>
    <div class="grid grid-cols-4 gap-4 px-10">
        <form method="GET" class="p-3 bg-white rounded-lg shadow" enctype="multipart/form-data">
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
        </form>
        <div class="col-span-3 p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
            <table class="w-full">
                <tr class="flex w-full gap-6 py-3 border-b">
                    <td>Id</td>
                    <td class="">Nom batiment</td>
                    <td class="flex-1">Description</td>
                    <td>image</td>
                </tr>
                @foreach ($infrastructures as $i)
                <tr wire:click="selectedId({{$i}})" class="flex w-full gap-8 border-b cursor-pointer hover:bg-gray-50">
                    <td>{{ $i->id }}</td>
                    <td class="">{{ $i->nombatiment }}</td>
                    <td class="flex-1">{{ $i->descrip }}</td>
                    <td><img src="{{ asset('storage/gallerie/'.$i->id.'.png') }}" class="w-10"></td>
                </tr>
                @endforeach
            </table>
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
