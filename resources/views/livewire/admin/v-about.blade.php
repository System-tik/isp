<div class="grid grid-cols-4 gap-4 px-10">
    <div class="p-3 bg-white rounded-lg shadow">
        <h1 class="pb-2 text-xl font-bold border-b">Info about</h1>
        
        <div class="flex flex-col gap-5 py-5">
            <div class="flex flex-col">
                <label for="" class="py-1">Titre</label>
                <input type="text" class="w-full border-gray-200 rounded">
            </div>
            <div class="flex flex-col">
                <label for="" class="py-1">Description</label>
                <textarea type="text" class="w-full border-gray-200 rounded h-96"></textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <button class="px-10 py-2 text-lg text-white bg-gray-600">Clear</button>
                <button class="px-10 py-2 text-lg text-white bg-green-600">Enregistrer</button>
                <button class="px-10 py-2 text-lg text-white bg-yellow-600">Modifier</button>
                <button class="px-10 py-2 text-lg text-white bg-red-600">Supprimer</button>
            </div>
        </div>
    </div>
    <div class="col-span-3 p-3 bg-white rounded-lg shadow">
        <h1 class="pb-2 text-xl font-bold border-b">Liste des données</h1>
        <table class="w-full">
            <tr class="flex w-full gap-2 py-3 border-b">
                <td>Id</td>
                <td class="flex-1">Titre</td>
                <td class="flex-1">Description</td>
            </tr>
        </table>
    </div>
</div>
