<template>
    <div class="flex flex-col w-full items-center justify-center py-6 mt-20" style="background-color:#f4f6ff;">
        <div class="">
            <span class="text-sm">
                <router-link to="/" class="underline hover:text-blue-600">Accueil</router-link><span> / Actualités</span>
            </span>
        </div>
        <div class="mt-3">
            <h1 class="text-3xl font-bold text-gray-900">Actualités</h1>
        </div>
    </div>

    <div class="px-64 mb-10">
        <!-- Actu content -->
        <div class="flex items-center justify-center gap-8 mt-10">
            <div class="">
                <div class="">
                    <img src="/img/iimg3.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-blue-900 text-sm">Evénement</p>
                    <h4 class="text-xl font-bold">La rentrée académique</h4>
                    <span class="text-xs">Par ISP/MBANZA-NGUNGU | 29/09/2022</span>
                    <p class="text-sm mt-2 text-justify font-thin">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, blanditiis fuga. 
                        Sint quam placeat quidem laudantium minus consequuntur quisquam odit ullam. 
                        Voluptatem error placeat voluptates, accusantium tempore sit iure voluptas.
                    </p>
                    <router-link to="/DetailsActu" class="text-sm font-bold mt-2 hover:text-blue-600">Lire la suite &rarr;</router-link>
                </div>
            </div>
            <div class="">
                <div class="">
                    <img src="/img/img1.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-blue-900 text-sm">Formation</p>
                    <h4 class="text-xl font-bold">La rentrée académique</h4>
                    <span class="text-xs">Par ISP/MBANZA-NGUNGU | 29/09/2022</span>
                    <p class="text-sm mt-2 text-justify font-thin">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, blanditiis fuga. 
                        Sint quam placeat quidem laudantium minus consequuntur quisquam odit ullam. 
                        Voluptatem error placeat voluptates, accusantium tempore sit iure voluptas.
                    </p>
                </div>
                <router-link to="/DetailsActu" class="text-sm font-bold mt-2 hover:text-blue-600">Lire la suite &rarr;</router-link>
            </div>
        </div>
    </div>
</template>