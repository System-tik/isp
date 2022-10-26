<template>
    <div class="gap-10 px-4 py-10 md:py-20 lg:flex sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-80 lg:py-40 bg-gray-50">
        <div class="" data-aos="zoom-in-up">
            <img src="/img/ab.png" alt="" class="h-full">
        </div>
        <div class="flex flex-col w-full gap-3 px-5 py-3 lg:w-4/6" data-aos="fade-up-left">
            <div class="text-gray-800 xl:text-lg 2xl:text-xl" data-aos="fade-left">
                ISP MBANZA-NGUNGU
            </div>
            <div class="font-bold text-gray-800 xl:text-lg 2xl:text-xl" data-aos="fade-left">
                Institut superieurs et pedagogique
            </div>
            <div class="text-justify text-gray-700 " data-aos="fade-up-right">
                <div>
                    {{store.abouts.length > 0 ? store.abouts[0]["descrip"] : null}}
                </div>
            </div>
            <div class="w-40 px-3 py-2 text-sm text-center text-white bg-blue-500 rounded-sm">
                <router-link to="/about">EN SAVOIR PLUS</router-link>
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
            // abouts : []
            store
        }
      },
      mounted() {
        // axios
        //     .get('http://127.0.0.1:8000/api/about')
        //     .then(reponse => this.abouts.push(reponse.data[0]))
      },
    }
</script>