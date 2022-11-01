<div class="">
    <div class="grid grid-cols-12 gap-4 px-10">
        <div class="col-span-5 p-3 bg-white rounded-lg shadow lg:col-span-4">
            <h1 class="pb-2 text-xl font-bold border-b">Frais</h1>
    
            <div class="flex flex-col gap-1 py-2">
                {{-- <div class="flex flex-col">
                    <label for="" class="py-1">Type</label>
                    <input wire:model="type" type="text" class="w-full border-gray-200 rounded">
                </div> --}}
                <div class="flex flex-col">
                    <label for="" class="py-1">Montant</label>
                    <input wire:model="montant" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Option</label>
                    <select name="" id="" wire:model="option_id">
                        <option>Choisir l'option</option>
                        @foreach ($options as $op)
                        <option value="{{ $op->id }}">{{ $op->nomopt }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Niveau</label>
                    <select name="" id="" wire:model="niveau_id">
                        <option>Choisir le niveau</option>
                        @foreach ($niveaux as $idn)
                        <option value="{{ $idn->id }}">{{ $idn->lib }}</option>
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
        <div class="col-span-7 p-3 bg-white rounded-lg shadow lg:col-span-8">
            <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th>N°</th>
                        <th>Niveau</th>
                        <th>Montant</th>
                    </tr>
                </thead>
                @foreach ($fraiss as $i)
                <tr wire:click="select({{$i}})" class="border-b cursor-pointer hover:bg-gray-50">
                    <td class="">{{ $loop->index + 1 }}</td>
                    {{-- <td class="">{{ $i->type }}</td> --}}
                    <td class="">{{ $i->lib }}</td>
                    <td class="">{{ $i->nomopt }}</td>
                    <td class="">{{ $i->montant }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>







   {{--  <input type="type" wire:model="type">
    @error('type')<span>{{$message}}</span><br>@enderror
    <input type="montant" wire:model="montant">
    @error('montant')<span>{{$message}}</span><br>@enderror
    
    <button wire:click="store">add</button>
    <button wire:click="update">update</button>
    <button wire:click="delete">delete</button>
    @error('selectedId')<span>{{$message}}</span><br>@enderror


    @foreach ($frais as $frai)
        <p wire:click="selectedId({{$frai}})">{{ $frai->type }}</p>
    @endforeach --}}
</div>
