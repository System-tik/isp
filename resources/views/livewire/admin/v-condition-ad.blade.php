<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="grid grid-cols-4 gap-4 px-10">
        <div class="p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Conditions d'admission</h1>
    
            <div class="flex flex-col gap-5 py-5">
                <div class="flex flex-col">
                    <label for="" class="py-1">Description</label>
                    <textarea type="text" wire:model="descrip" class="w-full border-gray-200 rounded h-44"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <button wire:click="clear" class="px-2 text-lg text-white bg-gray-600">Clear</button>
                    <button wire:click="store" class="px-2 text-lg text-white bg-green-600">Enregistrer</button>
                    <button wire:click="update" class="px-2 text-lg text-white bg-yellow-600">Modifier</button>
                    <button wire:click="delete" class="px-2 text-lg text-white bg-red-600">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="col-span-3 p-3 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
            <table class="w-full">
                <tr class="flex w-full gap-6 py-3 border-b">
                    <th>Id</th>
                    <th class="">Description</th>
                </tr>
                @foreach ($conditions as $i)
                <tr wire:click="select({{$i}})" class="flex w-full gap-6 border-b cursor-pointer hover:bg-gray-50">
                    <td class="">{{ $i->id }}</td>
                    <td class="">{{ $i->descrip }}</td>
                </tr>
                @endforeach 
            </table>
        </div>
    </div>






    {{-- <input type="text" placeholder="descrip" wire:model="descrip">
    <button wire:click="store">Ajouter</button>
    @foreach ($conditions as $i)
        <div wire:click="select({{$i}})" >{{$i->descrip}}</div>  
    @endforeach --}}
   
</div>
