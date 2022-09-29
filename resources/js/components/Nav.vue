<template>
    <div class="flex items-center justify-between px-4 py-3 sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-80">
        <div>
            <img src="/img/logo.jpeg" alt="" class="w-16">
        </div>
        <div class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <div class="items-center hidden text-sm text-gray-500 md:flex md:gap-3 lg:gap-5 xl:gap-10">
            <div>
                <router-link  to="/">Accueil</router-link>
            </div>
            <div>
                <router-link to="/about">Apropos de l'ISP</router-link>
            </div>
            <div>
                <router-link to="/inscription" class="flex gap-2">
                    <p>
                        Inscription
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </router-link>
            </div>
            <div>
                <router-link to="/actualite">Actualite</router-link>
            </div>
            <div class="px-5 py-2 text-white bg-blue-500 rounded-sm md:ml-10 lg:ml-16 xl:ml-20">
                <router-link to="/contact">CONTACT</router-link>
            </div>
            <!-- <div>
                <router-link to="/frais">Frais</router-link>
            </div>
            <div>
                <router-link to="/programme">Programme</router-link>
            </div> -->
        </div> 
    </div>
</template>