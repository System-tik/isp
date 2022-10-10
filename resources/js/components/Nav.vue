<template>
    <div class="absolute top-0 flex items-center justify-between w-screen px-4 py-3 bg-transparent sm:px-8 md:px-16 lg:px-32 xl:px-40 2xl:px-80" style=" z-index:1000;">
        <div class="pt-2">
            <img src="/img/logo2.jpeg" alt="" class="w-16">
        </div>
        <div class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"  @click="voir=true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <transition name="custom-classes"
            enter-active-class="animate__animated animate__fadeInLeft"
            leave-active-class="animate__animated animate__slideOutRight">

                <div v-if="voir" class="fixed top-0 left-0 w-screen h-screen bg-gray-900 ">
                    <div class="flex items-center justify-end px-2 text-2xl text-white border-b">
                        <span class="animate__animated animate__rotateIn" @click="voir =false" >X</span>
                    </div>
    
                    <div class="flex flex-col gap-1 text-xl text-gray-300 ">
                        <div class="px-5 py-2 border-b border-gray-800">
                            <router-link  to="/">Accueil</router-link>
                        </div>
                       
                     
                        <div class="px-5 py-2 border-b border-gray-800" @click="etat=!etat">
                            <p>Inscription</p>
                            <transition name="custom-classes"
                            enter-active-class="animate__animated animate__fadeInLeft"
                            leave-active-class="animate__animated animate__bounceOutRight">
                                <div class=""  v-if="etat">
                                    <div class="flex flex-col gap-2 text-base">
                                        <router-link to="/inscription" class="">Admission</router-link>
                                        <router-link to="/inscription" class="">Frais</router-link>
                                        <router-link to="/inscription" class="">Programme de cours</router-link>
                                    </div>
                                </div>
                            </transition>
                        </div> 
                        <div class="px-5 py-2 border-b border-gray-800">
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
            </transition>
        </div>
        <div class="items-center hidden text-sm font-medium text-gray-900 md:flex md:gap-3 lg:gap-5 xl:gap-10">
            <div>
                <router-link  to="/">Accueil</router-link>
            </div>
            <div class="dropdown">
                <p>A propos de l'ISP</p>
                <div class=" dropdown-content">
                    <div class="py-2"></div>
                    <div class="flex flex-col w-56 gap-2 px-0 text-base bg-gray-50">
                        <router-link to="/about" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Presentation ISP</router-link>
                        <router-link to="/texteLegaux" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Textes legaux</router-link>
                    </div>
                </div>
            </div> 
              
            <div class="dropdown">
                <p>Inscription</p>
                <div class=" dropdown-content">
                    <div class="py-2"></div>
                    <div class="flex flex-col w-56 gap-2 px-0 text-base bg-gray-50">
                        <router-link to="/inscription" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Admission</router-link>
                        <router-link to="/frais" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Frais academiques</router-link>
                        <router-link to="/programme" class="px-4 py-2 transition duration-500 transform border-b hover:bg-blue-600 hover:text-white">Programme des cours</router-link>
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
<script>
export default {
    data() {
        return {
            voir : false,
            etat : false
        }
    },
}
</script>