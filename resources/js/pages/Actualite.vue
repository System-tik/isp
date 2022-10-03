<template>
    <div class="flex flex-col items-center justify-center w-full py-6 mt-20" style="background-color:#f4f6ff;">
        <div class="">
            <span class="text-sm">
                <router-link to="/" class="underline hover:text-blue-600">Accueil</router-link><span> / Actualités</span>
            </span>
        </div>
        <div class="mt-3">
            <h1 class="text-3xl font-bold text-gray-900">Actualités</h1>
        </div>
    </div>

    <div class="px-4 mb-10 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80">
        <!-- Actu content -->
        <div class="items-center justify-center gap-8 mt-10 sm:flex">
            <div class="">
                <div class="">
                    <img src="/img/iimg3.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-sm text-blue-900">Evénement</p>
                    <h4 class="text-xl font-bold">La rentrée académique</h4>
                    <span class="text-xs">Par ISP/MBANZA-NGUNGU | 29/09/2022</span>
                    <p class="mt-2 text-sm font-thin text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, blanditiis fuga. 
                        Sint quam placeat quidem laudantium minus consequuntur quisquam odit ullam. 
                        Voluptatem error placeat voluptates, accusantium tempore sit iure voluptas.
                    </p>
                    <router-link to="/DetailsActu" class="mt-2 text-sm font-bold hover:text-blue-600">Lire la suite &rarr;</router-link>
                </div>
            </div>
            <div class="">
                <div class="">
                    <img src="/img/img1.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-sm text-blue-900">Formation</p>
                    <h4 class="text-xl font-bold">La rentrée académique</h4>
                    <span class="text-xs">Par ISP/MBANZA-NGUNGU | 29/09/2022</span>
                    <p class="mt-2 text-sm font-thin text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, blanditiis fuga. 
                        Sint quam placeat quidem laudantium minus consequuntur quisquam odit ullam. 
                        Voluptatem error placeat voluptates, accusantium tempore sit iure voluptas.
                    </p>
                </div>
                <router-link to="/DetailsActu" class="mt-2 text-sm font-bold hover:text-blue-600">Lire la suite &rarr;</router-link>
            </div>
        </div>
    </div>

    <div class="px-4 mb-10 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80">
        <!-- Actu content -->
        <div class="items-center justify-center gap-8 mt-10 sm:flex">
            <div class="">
                <div class="">
                    <img src="/img/iimg3.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-sm text-blue-900">Evénement</p>
                    <h4 class="text-xl font-bold">La rentrée académique</h4>
                    <span class="text-xs">Par ISP/MBANZA-NGUNGU | 29/09/2022</span>
                    <p class="mt-2 text-sm font-thin text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, blanditiis fuga. 
                        Sint quam placeat quidem laudantium minus consequuntur quisquam odit ullam. 
                        Voluptatem error placeat voluptates, accusantium tempore sit iure voluptas.
                    </p>
                    <router-link to="/DetailsActu" class="mt-2 text-sm font-bold hover:text-blue-600">Lire la suite &rarr;</router-link>
                </div>
            </div>
            <div class="">
                <div class="">
                    <img src="/img/img1.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-sm text-blue-900">Formation</p>
                    <h4 class="text-xl font-bold">La rentrée académique</h4>
                    <span class="text-xs">Par ISP/MBANZA-NGUNGU | 29/09/2022</span>
                    <p class="mt-2 text-sm font-thin text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, blanditiis fuga. 
                        Sint quam placeat quidem laudantium minus consequuntur quisquam odit ullam. 
                        Voluptatem error placeat voluptates, accusantium tempore sit iure voluptas.
                    </p>
                </div>
                <router-link to="/DetailsActu" class="mt-2 text-sm font-bold hover:text-blue-600">Lire la suite &rarr;</router-link>
            </div>
        </div>
    </div>
</template>