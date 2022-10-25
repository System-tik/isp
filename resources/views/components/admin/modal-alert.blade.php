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