<template class="mt-10">
    <div class="flex flex-col items-center justify-center w-full py-6 mt-20" style="background-color:#f4f6ff;">
        <div class="">
            <span class="text-sm"><router-link to="/" class="underline hover:text-blue-600">Accueil</router-link><span> / A propos de nous</span></span>
        </div>
        <div class="mt-3">
            <h1 class="text-3xl font-bold text-gray-900">ISP MBANZA-NGUNGU</h1>
        </div>
    </div>

    <!-- Presentation ISP -->
    <div class="grid-cols-6 gap-8 px-4 mt-10 mb-10 lg:grid lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80">
        <div class="hidden col-span-2 lg:grid">
            <img src="img/etu2.jpg" class="h-64 border rounded" alt="" srcset="">
            <h5 class="mt-2 text-sm font-medium text-center">Directeur Général</h5>
            <p class="text-sm text-center">Professeur en Chimie</p>
        </div>
        <div class="grid-cols-4 col-span-4 gap-5 sm:grid">
            <div class="col-span-2">
                <h4 class="mb-4 font-medium text-gray-900">
                    {{store.abouts.length > 0 ? store.abouts[3]["titre"] : null}}
                </h4>
                <p class="text-justify text-gray-700">
                    {{store.abouts.length > 0 ? store.abouts[3]["descrip"] : null}}
                </p>
            </div>
            <div class="col-span-2 mt-4 sm:mt-0">
                <h4 class="mb-4 font-medium text-gray-900">
                    {{store.abouts.length > 0 ? store.abouts[0]["titre"] : null}}
                </h4>
                <p class="text-justify text-gray-700">
                    {{store.abouts.length > 0 ? store.abouts[0]["descrip"] : null}}
                </p>
            </div>

        </div>
    </div>

    <!-- Garantie du succes -->
    <div class="gap-6 px-4 py-10 mt-10 sm:flex lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80" style="background-color:#f8fafc">
        <div class="basis-1/2">
            <h4 class="mb-5 text-sm font-semibold" style="color:#fbc766;">Garantie du succès</h4>
            <h4 class="text-lg font-bold text-gray-900 md:text-2xl">Pourquoi étudier chez nous ?</h4>
            <p class="mt-4 text-justify text-gray-500 text-md">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero facilis animi</p>
            <div class="mt-5 text-justify text-gray-500">
                <p><span class="font-bold text-blue-600">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><span class="font-bold text-blue-600">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><span class="font-bold text-blue-600">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><span class="font-bold text-blue-600">- </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="flex items-center justify-center basis-1/2">
            <img src="img/deux.jpg" alt="" class="w-full h-64 rounded"/>
        </div>
    </div>

    <!-- Notre pedagogie -->
    <!-- <hr class="bg-gray-900"/> -->
    <div class="flex flex-col items-center justify-center px-4 py-12 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80" style="background-image:url('img/blob1.svg') ; background-repeat: no-repeat;background-position-x: 300px;">
        <div class="">
            <h4 class="text-sm font-semibold" style="color:#fbc766">L'Education est une Puissance</h4>
        </div>
        <div class="mt-4 text-lg font-bold text-center text-gray-900 md:text-2xl">
            <h2>Une Pédagogie adaptée pour votre réussite professionnelle</h2>
        </div>
        <div class="">
            <p class="text-center text-gray-700">Passez dès maintenant à l'action en vous inscrivant en toute simplicité et sans vous déplacer.</p>
        </div>
        <div class="mt-8">
            <router-link to="/Inscription" class="p-3 font-medium text-center text-white bg-blue-700 rounded">Inscription</router-link>
        </div>
    </div>
    <!-- <hr class="bg-gray-900"> -->
    <!-- Le corps academique -->
    <div class="flex flex-col items-center justify-center px-4 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80 py-14 bg-gray-50">
        <div class="">
            <h4 class="mb-5 text-sm font-semibold" style="color:#fbc766;">Le Corps Académique</h4>
        </div>
        <div class="">
            <h4 class="text-lg font-bold text-gray-900 md:text-2xl">Le Comité de Gestion</h4>
        </div>

        <!-- Le trio -->
        <div class="flex gap-4 mt-3">
            <div class="mt-6 basis-1/3">
                <div class="border rounded">
                    <img src="img/etu2.jpg" alt="" srcset="" class="h-28 sm:h-40 md:h-60"/>
                </div>
                <h5 class="mt-2 text-sm font-medium text-center">Secrétaire Général Académique</h5>
                <p class="text-sm text-center">Professeur en Chimie</p>
            </div>
            <div class="mt-6 basis-1/3">
                <div class="border rounded">
                    <img src="img/etu2.jpg" alt="" srcset="" class="h-28 sm:h-40 md:h-60"/>
                </div>
                <h5 class="mt-2 text-sm font-medium text-center">Directeur Général</h5>
                <p class="text-sm text-center">Professeur en Chimie</p>
            </div>
            <div class="mt-6 basis-1/3">
                <div class="border rounded">
                    <img src="img/etu2.jpg" alt="" srcset="" class="h-28 sm:h-40 md:h-60"/>
                </div>
                <h5 class="mt-2 text-sm font-medium text-center">Secrétaire Général Administratif</h5>
                <p class="text-sm text-center">Professeur en Chimie</p>
            </div>
        </div>
    </div>

</template>
<script>
import {store} from '../state/store.js'
    export default {
      name :'About',
      data() {
        return {
            store
            // results :[]
        }
      },
        created(){
        // axios
        //     .get('http://127.0.0.1:8000/api/about')
        //     .then(reponse =>this.results=reponse.data)
      }
    }
</script>