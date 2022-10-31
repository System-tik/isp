<div class="">
    <div class="flex gap-2 px-10">
        <div class="p-2 bg-white rounded-lg shadow">
            <h1 class="pb-2 text-xl font-bold border-b">Publication Recherches</h1>
    
            <div class="flex flex-col gap-1 py-2">
                <div class="flex flex-col">
                    <label for="" class="py-1">Titre</label>
                    <input wire:model="titre" type="text" class="w-full border-gray-200 rounded">
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Type</label>
                    <select wire:model="type" class="w-full border-gray-200 rounded">
                        <option>Choisir un type</option>
                        <option value="Thèse">Thèse</option>
                        <option value="Memoire">Memoire</option>
                        <option value="Article">Article</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Description</label>
                    <textarea wire:model="descrip" class="w-full border-gray-200 rounded" rows="5"></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="" class="py-1">Fichier</label>
                    <input wire:model="fichier" type="file" class="w-full border-gray-200 rounded">
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
            <div class="grid w-full grid-cols-12 gap-3 py-2">
                {{-- <tr class="flex w-full gap-2 py-3 border-b">
                    <td class="flex-1">Nom section</td>
                </tr> --}}
                @foreach ($reches as $i)
                <div wire:click="selectedId({{$i}})" class="flex flex-col w-full col-span-6 p-1 text-justify border-b rounded shadow cursor-pointer xl:col-span-4 2xl:col-span-3 hover:bg-gray-50">
                    {{-- <img src="{{asset('storage/recherches/'.$i->id.'.pdf')}}" alt="" srcset=""> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full text-blue-600 h-28">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>                          
                    <div class="absolute flex items-center justify-end">
                        <a href="{{asset('storage/recherches/'.$i->id.'.pdf')}}" class="w-10 p-2 shadow-lg" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>  
                        </a>
                    </div>
                    <p class="text-lg font-bold">{{ $i->titre }}</p>
                    <p class="">{{ $i->type }}</p>
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
