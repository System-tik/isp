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
        <div>
            <div class="py-8 text-gray-600 text-md sm:text-xl">
                1. INFORMATIQUE ET TECHNOLOGIE
            </div>
            <div class="flex flex-col gap-1 ">
                <div class="grid grid-cols-12 px-5 py-2 " style="background-color:#f4f6ff;">
                    <div class="col-span-6 text-xs text-gray-600 sm:text-lg">
                        CYCLE
                    </div>
                    <div class="hidden col-span-6 text-xs text-gray-600 xl:grid sm:text-lg">
                        PROMOTION 
                    </div>
                    <div class="grid col-span-6 text-xs text-gray-600 xl:hidden sm:text-lg">
                        LICENCE (LMD)
                    </div>
                </div>
                <div class="grid grid-cols-12 px-5 py-2 xl:hidden " style="background-color:#f4f6ff;">
                    <div class="flex justify-center col-span-12 text-xs text-gray-600 sm:text-lg">
                        PROMOTION 
                    </div>
                </div>
                <div class="grid grid-cols-12 px-5 py-2 " style="background-color:#f4f6ff;">
                    <div class="hidden col-span-6 text-xs text-gray-600 xl:grid sm:text-lg">
                        LICENCE (LMD)
                    </div>
                    <div class="flex col-span-12 gap-4 text-xs text-gray-600 xl:col-span-6 sm:text-lg">
                        <span class="font-bold decoration-inherit">PREMIERE LICENCE (L1)</span>
                        <span class="font-bold decoration-inherit">DEUXIEME LICENCE (L2)</span>
                        <span class="font-bold decoration-inherit">TROISIEME LICENCE(L3)</span>
                        <span class="font-bold decoration-inherit">QUATRIEME LICENCE (L4)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>