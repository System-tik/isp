<div>
    <div class="grid gap-2 grid-row-4">
        <div class="p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Options</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label  for="" class="py-1">Option</label>
                    <input type="text" class="w-full border-gray-200 rounded" wire:model="nomopt">
                </div>
                <div class="py-2">
                    <label  for="" class="py-1">Description</label>
                    <textarea class="w-full rounded" rows="3" wire:model="description"></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Département</label>
                    <select name="" id="" wire:model="iddep">
                        <option>Choisir Département</option>
                        @foreach ($departements as $idd)
                        <option value="{{ $idd->id }}">{{ $idd->nomdep }}</option>
                        @endforeach
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
            <h1 class="pb-2 text-xl font-bold border-b">Les options</h1>
            <table class="w-full">
                @foreach ($options as $i)
                <tr wire:click="selectedId({{$i}})" class="border-b cursor-pointer hover:bg-gray-50">
                    <td class="px-2 bg-blue-200">{{$loop->index+1}}</td>
                    <td class="">
                        <p>{{ $i->nomopt }}</p>
                        {{ $i->nomdep }}
                    </td>                    
                </tr>
                @endforeach
            </table>
        </div>
    </div>





    {{-- <input type="nomopt" wire:model="nomopt">
    @error('nomopt')<span>{{$message}}</span><br>@enderror
    <input type="iddep" wire:model="iddep">
    @error('iddep')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($options as $option)
        <p wire:click="selectedId({{$option}})">{{ $option->nomopt }}</p>
    @endforeach --}}
</div>
