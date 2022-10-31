<div>
    {{-- In work, do what you enjoy. --}}
    <div class="grid grid-cols-12 gap-4 px-10">
        <div class="col-span-5 p-3 bg-white rounded-lg shadow lg:col-span-4">
            <h1 class="pb-2 text-xl font-bold border-b">Calendrier</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Activité</label>
                    <input wire:model="activite" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="">Description</label>
                    <textarea wire:model="descrip" type="text" class="w-full h-20 border-gray-200 rounded"></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="" class="">Début</label>
                    <input wire:model="debut" type="date" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="">Fin</label>
                    <input wire:model="fin" type="date" class="w-full border-gray-200 rounded">
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
                <tr class="grid w-full grid-cols-5 py-3 text-xs border-b lg:text-sm lg:gap-4 ">
                    <td>Id</td>
                    <td class="">Activité</td>
                    <td class="">Description</td>
                    <td class="">Début</td>
                    <td class="flex-1">Fin</td>
                </tr>
                @foreach ($calendriers as $i)
                <tr wire:click="select({{$i}})" class="grid w-full grid-cols-5 text-xs border-b cursor-pointer lg:text-sm lg:gap-4 hover:bg-gray-50">
                    <td class="">{{ $i->id }}</td>
                    <td class="">{{ $i->activite }}</td>
                    <td class="">{{ $i->descrip }}</td>
                    <td class="">{{ $i->debut }}</td>
                    <td class="">{{ $i->fin }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>










    <div>
        {{-- <input type="text" placeholder="titre" wire:model='titre'>
        <input type="text" placeholder="description" wire:model='descrip'>
        <button wire:click='delete'>CREER</button>
        @foreach ($abouts as $i)
        <div wire:click="select({{$i}})" >{{$i}}</div>
            
        @endforeach --}}
    </div>
</div>
