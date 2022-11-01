<div class="" 
    x-data="{
        
    }"
>
    <div class="flex gap-2 px-10">
        <div class="p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Comité de gestion de l'ISP</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Titre</label>
                    <input wire:model="titre" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">niveau titre</label>
                    <input wire:model="niveau" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Nom complet</label>
                    <input wire:model="noms" type="text" class="w-full border-gray-200 rounded" >
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Image</label>
                    <input wire:model="photo" type="file" class="w-full border-gray-200 rounded">
                </div>
    
                <div class="grid grid-cols-2 gap-4 py-4">
                    <button wire:click="clear" class="px-2 text-lg text-white bg-gray-600">Clear</button>
                    <button class="px-2 text-lg text-white bg-green-600" @click="show_alert(0)">Enregistrer</button>
                    <button class="px-2 text-lg text-white bg-yellow-600" @click="show_alert(1)">Modifier</button>
                    <button class="px-2 text-lg text-white bg-red-600" @click="show_alert(2)">Supprimer</button>
                </div>
            </div>
        </div>
        <div class="flex-1 p-2 bg-white rounded-lg shadow ">
            <h1 class="pb-2 text-xl font-bold border-b">Les infos</h1>
            <div class="grid w-full grid-cols-12">
                {{-- <tr class="flex w-full gap-2 py-3 border-b">
                    <td class="flex-1">Nom section</td>
                </tr> --}}
                @foreach ($comites as $i)
                <div wire:click="selectedId({{$i}})" class="flex flex-col col-span-6 p-1 text-justify border-b rounded shadow cursor-pointer 2xl:col-span-3 xl:col-span-4 hover:bg-gray-50">
                    <img src="{{asset('storage/comite/'.$i->id.'.png')}}" alt="" srcset="" class="">
                    <p class="text-lg font-bold">{{ $i->titre }}</p>
                    <p class="">{{ $i->niveau }}</p>
                    <p class="">{{ $i->noms }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 flex flex-col items-center justify-center w-screen h-screen transition duration-500 transform" x-show="alert_open" x-transition.duration.500ms style="background-color: rgba(0, 0, 0, 0.267);">
        <div class="flex flex-col w-1/4 p-5 bg-white rounded-lg" @click.outside="alert_open=false">
            <div class="flex">
                <p class="flex-1 text-xl font-bold">Confirmation</p>
                <button class="text-lg font-bold text-gray-800" @click="alert_open=false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>                      
                </button>
            </div>
            <div class="flex items-center gap-5 py-5 text-justify">
                <p class="flex-1 text-lg">
                    Vous êtes sur le point <b x-show="type[0]">d'enregistrer</b><b x-show="type[1]">de modifier</b><b x-show="type[2]">de supprimer</b> <br>
                    Êtes-vous sûr de vouloir le faire
                </p>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-32 h-32">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>                      
                </div>
            </div>
            <div class="flex items-center justify-end gap-2 pt-2 border-t">
                <button class="w-40 px-2 py-1 text-lg text-gray-600 border rounded bg-gray-50" @click="alert_open=false">Annuler</button>
                <button wire:click="store" class="w-40 px-2 py-1 text-lg text-white bg-green-600 rounded" x-show="type[0]" @click="alert_open=false">Enregistrer</button>
                <button wire:click="update" class="w-40 px-2 py-1 text-lg text-white bg-yellow-600 rounded" x-show="type[1]" @click="alert_open=false">Modifier</button>
                <button wire:click="delete" class="w-40 px-2 py-1 text-lg text-white bg-red-600 rounded" x-show="type[2]" @click="alert_open=false">Supprimer</button>
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
