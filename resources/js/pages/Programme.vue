<template>
    <div class="flex flex-col items-center justify-center w-full py-6 mt-20" style="background-color:#f4f6ff;">
        <div class="">
            <span class="text-sm"><router-link to="/" class="underline hover:text-blue-600">Accueil</router-link><span> / Frais</span></span>
        </div>
        <div class="mt-3">
            <h1 class="text-3xl font-bold text-gray-900">ISP MBANZA-NGUNGU</h1>
        </div>
    </div>
    <div class="px-4 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80">
        <div >
            <div class="text-xl sm:text-4xl text-slate-700 ">
                Programme de cours
            </div>
            <div class="w-full pt-10 text-lg font-bold text-center sm:text-3xl text-slate-700">
                Annee academique 2022-2023
            </div>
        </div>

        
        <div class="py-10">
            <div class="py-8 text-gray-600 text-md sm:text-xl">
                1. INFORMATIQUE ET TECHNOLOGIE
            </div>
            <div class="flex flex-col gap-1 ">
                <div class="grid grid-cols-4 px-5 py-2 " style="background-color:#f4f6ff;">
                    <span class="p-1 font-bold text-center border cursor-pointer decoration-inherit hover:text-blue-600">PREMIERE LICENCE (L1)</span>
                    <span class="p-1 font-bold text-center border cursor-pointer decoration-inherit hover:text-blue-600">DEUXIEME LICENCE (L2)</span>
                    <span class="p-1 font-bold text-center border cursor-pointer decoration-inherit hover:text-blue-600">TROISIEME LICENCE(L3)</span>
                    <span class="p-1 font-bold text-center border cursor-pointer decoration-inherit hover:text-blue-600">QUATRIEME LICENCE (L4)</span>
                </div>
                <div class="p-2 mt-3 shadow-xl">
                    <table class="table w-full text-lg">
                        <thead>
                            <tr class="text-left border-t border-b">
                                <th class="px-2 border-r">Cours / UE</th>
                                <th class="px-2 border-r">Description</th>
                                <th class="px-2 border-r">Nombre de crédit</th>
                                <th class="px-2">Semestre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- C'est ici que tu dois placer ta boucle -->
                            <tr class="border-b">
                                <td class="px-2">Informatique et bureautique</td>
                                <td class="px-2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem inventore nesciunt.</p></td>
                                <td class="px-2">6</td>
                                <td class="px-2"> S1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {store} from '../state/store.js'
export default {
    data() {
        return {
            store
        }
    },
}
</script>