<template>
    <div class="absolute top-0 flex items-center justify-between w-screen px-4 py-3 bg-transparent sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-80" style=" z-index:1000;">
        <div class="pt-2">
            <img src="/img/logo2.jpeg" alt="" class="w-16">
        </div>
        <div class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <div class="items-center hidden text-sm font-medium text-gray-900 md:flex md:gap-3 lg:gap-5 xl:gap-10">
            <div>
                <router-link  to="/">Accueil</router-link>
            </div>
            <div>
                <router-link to="/about">Apropos de l'ISP</router-link>
            </div>


            <div class="dropdown">
<<<<<<< HEAD
                <p>Inscription</p>
                <div class=" dropdown-content">
                    <div class="py-2"></div>
                    <div class="flex flex-col w-56 gap-2 px-0 text-base bg-gray-50">
                        <router-link to="/inscription" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Admission</router-link>
                        <router-link to="/frais" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Frais academiques</router-link>
                        <router-link to="/programme" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Programme des cours</router-link>
=======
                <p class="hover:cursor-pointer">Inscription</p>
                <div class="dropdown-content">
                    <div class="flex flex-col gap-2">
                        <router-link to="/inscription" class="hover:bg-blue-600 hover:text-white hover:rounded hover:px-4">Inscription</router-link>
                        <hr>
                        <router-link to="/inscription" class="text-sm hover:bg-blue-600 hover:text-white hover:rounded hover:px-4">Programme des cours</router-link>
>>>>>>> c0b84b4694412f9d61c4d2b1963387035fa524cf
                    </div>
                </div>
            </div> 
            <div>
                <router-link to="/actualite">Actualite</router-link>
            </div>
            
            <div class="px-5 py-2 text-white bg-blue-700 rounded-sm md:ml-10 lg:ml-16 xl:ml-20">
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