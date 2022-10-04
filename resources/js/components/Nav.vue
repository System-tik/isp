<template>
    <div class="absolute top-0 flex items-center justify-between w-screen px-4 py-3 bg-transparent sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-80" style=" z-index:1000;">
        <div class="pt-2">
            <img src="/img/logo2.jpeg" alt="" class="w-16">
        </div>
        <div class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"  @click="voir=true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <div v-if="voir" class="animate__animated bg-gray-900 w-screen fixed left-0 top-0 h-screen animate__fadeInLeft">
                <div class="flex justify-end items-center text-white px-2 text-2xl border-b animate__animated animate__fadeInRight ">
                    <span class="animate__animated  animate__rotateIn" @click="voir=false" >X</span>
                </div>

                <div class=" flex flex-col gap-1 text-xl text-gray-300">
                    <div class="px-5 py-2 border-b border-gray-800">
                        <router-link  to="/">Accueil</router-link>
                    </div>
                    <div class="px-5 py-2 border-b border-gray-800">
                        <router-link to="/about">Apropos de l'ISP</router-link>
                    </div>


                    <div class="px-5 py-2 border-b border-gray-800" @click="etat=!etat,anim=!anim">
                        <p>Inscription</p>
                        <div class="animate__animated" :class="{'animate__fadeInDown':etat,'animate__fadeInLeft':anim}" v-if="etat">
                            <div class="flex flex-col gap-2 text-base">
                                <router-link to="/inscription" class="">Admission</router-link>
                                <router-link to="/inscription" class="">Frais</router-link>
                                <router-link to="/inscription" class="">Programme de cours</router-link>
                            </div>
                        </div>
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
        </div>
        <div class="items-center hidden text-sm font-medium text-gray-900 md:flex md:gap-3 lg:gap-5 xl:gap-10">
            <div>
                <router-link  to="/">Accueil</router-link>
            </div>
            <div>
                <router-link to="/about">Apropos de l'ISP</router-link>
            </div>


            <div class="dropdown">
                <p>Inscription</p>
                <div class="dropdown-content">
                    <div class="flex flex-col gap-2 text-base">
                        <router-link to="/inscription" class="">Inscription</router-link>
                        <router-link to="/inscription" class="">Inscription</router-link>
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
            etat : false,
            anim : false
        }
    },
}
</script>