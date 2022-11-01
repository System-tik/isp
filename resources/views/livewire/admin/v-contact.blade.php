<div>
    <div class="grid gap-2 grid-row-4">
        <div class="p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">contacts</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label  for="" class="py-1">Option</label>
                    <input type="text" class="w-full border-gray-200 rounded" wire:model="contenu">
                </div>
                <div class="py-2">
                    <label  for="" class="py-1">icon</label>
                    <textarea class="w-full rounded" rows="3" wire:model="icon"></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Département</label>
                    <select name="" id="" wire:model="type">
                        <option>Choisir le type de contact</option>
                        <option value="tel">Téléphone</option>
                        <option value="mailto">Emaol</option>
                        <option value="rx">Réseau social</option>
                    </select>
                    {{-- <label for="" class="py-1">Id département</label>
                    <input type="text" class="w-full border-gray-200 rounded"> --}}
                </div>
    
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button wire:click="clear" class="px-2 text-lg text-white bg-gray-600">Clear</button>
                    <button wire:click="store" class="px-2 text-lg text-white bg-green-600">Enregistrer</button>
                    <button wire:click="update" class="px-2 text-lg text-white bg-yellow-600">Modifier</button>
                    <button wire:click="delete" class="px-2 text-lg text-white bg-red-600">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="p-2 bg-white rounded-lg shadow ">
            <h1 class="pb-2 text-xl font-bold border-b">Les contacts</h1>
            <table class="w-full">
                @foreach ($contacts as $i)
                <tr wire:click="selectedId({{$i}})" class="border-b cursor-pointer hover:bg-gray-50">
                    <td class="px-2 bg-blue-200">{{$loop->index+1}}</td>
                    <td class="">
                        <p>{{ $i->contenu }}</p>
                        {{ $i->type }}
                    </td>                    
                </tr>
                @endforeach
            </table>
        </div>
    </div>





    {{-- <input type="contenu" wire:model="contenu">
    @error('contenu')<span>{{$message}}</span><br>@enderror
    <input type="type" wire:model="type">
    @error('type')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($contacts as $option)
        <p wire:click="selectedId({{$option}})">{{ $option->contenu }}</p>
    @endforeach --}}
</div>
