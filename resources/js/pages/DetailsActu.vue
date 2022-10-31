<template>
    <div v-for="actu in store.actus">
        <div v-if="actu.id=== store.a">
            <div class="h-38" style="background-color:#f4f6ff;">
                <div class="flex flex-col w-full items-center justify-center py-6 mt-20">
                    <div class="">
                        <span class="text-sm">
                            <router-link to="/" class="underline hover:text-blue-600">Accueil</router-link>
                            <span> / <router-link to="/Actualite" class="underline hover:text-blue-600">Actualités</router-link></span>
                            <span> / Détails de l'actualité</span>
                        </span>
                    </div>
                    <div class="mt-3">
                        <h1 class="text-3xl font-bold text-gray-900">{{store.actus.length > 0 ? actu['titre'] : null}}</h1>
                    </div>
                </div>
                <div class="px-64 py-2 font-medium items-start justify-start">
                    <h5 class="text-xs text-gray-900">Par {{store.actus.length > 0 ? actu['auteur'] : null}}| 29/09/2022</h5>
                </div>
            </div>
            
            <div class="px-64 mb-10">
                <div class="px-28 mt-5">
                    <img :src="'/storage/actualite/'+actu.id+'/0.png'" alt="" class="w-full h-80 rounded-md">
                    <p class="text-justify py-5 text-gray-700 mt-4">
                        {{store.actus.length > 0 ? actu['descrip'] : null}}
                    </p>
                    <router-link to="/Actualite" class="hover:text-blue-600 text-sm font-bold">&larr; Précédent</router-link>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 mb-10">
        <div class="px-52 py-8">
            <h1 class="text-xl font-semibold text-gray-900">A lire également</h1>
        </div>
        <div v-for="actu in store.actus">
            <div class="flex items-center justify-center gap-8 py-2 px-52" v-if="store.a != actu['id']">
                <div class="">
                    <div class="">
                        <img :src="'/storage/actualite/'+actu.id+'/0.png'" alt="" class="w-full h-64 rounded-md">
                    </div>
                    <div>
                        <p class="text-blue-900 text-sm">Event</p>
                        <h4 class="text-xl font-bold">
                            {{store.actus.length > 0 ? actu["titre"] : null}}<br> 
                        </h4>
                        <span class="text-xs">Par {{store.actus.length > 0 ? actu["auteur"] : null}}<br>| 29/09/2022</span>
                        <p class="text-sm mt-2 text-justify font-thin">
                            {{store.actus.length > 0 ? actu["descrip"] : null}}<br> 
                        </p>
                        <router-link to="/DetailsActu" class="text-sm font-bold mt-2 hover:text-blue-600" @click="store.a = actu['id'];store.Top()">Lire la suite &rarr;</router-link>
                    </div>
                </div>
        </div>
            <!-- <div class="">
                <div class="">
                    <img src="/img/img1.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-blue-900 text-sm">Event</p>
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
            <div class="">
                <div class="">
                    <img src="/img/img1.jpeg" alt="" class="w-full h-64 rounded-md">
                </div>
                <div>
                    <p class="text-blue-900 text-sm">Event</p>
                    <h4 class="text-xl font-bold">La rentrée académique</h4>
                    <span class="text-xs">Par ISP/MBANZA-NGUNGU | 29/09/2022</span>
                    <p class="text-sm mt-2 text-justify font-thin">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, blanditiis fuga.
                        Sint quam placeat quidem laudantium minus consequuntur quisquam odit ullam.
                        Voluptatem error placeat voluptates, accusantium tempore sit iure voluptas.
                    </p>
                </div>
                <router-link to="/DetailsActu" class="text-sm font-bold mt-2 hover:text-blue-600">Lire la suite &rarr;</router-link>
            </div> -->
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
    }
}
</script>