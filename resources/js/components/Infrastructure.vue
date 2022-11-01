<template>
    <div>
    </div>
    <div class="gap-10 px-4 py-10 sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-80" >
        <div class="flex flex-col w-full ">
            <div class="w-full py-2 text-center text-blue-800 xl:text-lg 2xl:text-2xl">
                <p>Gallerie des images</p>
            </div>
            <div class="pb-10 text-sm text-center text-gray-500 ">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            </div>
            <div data-aos="zoom-in-up" class="w-full">
                <Splide  :options="{
                    perPage:2,
                    rewind: true,
                    gap   : '1rem',
                    autoplay : true,
                    loop : true,
                }" class="w-full mb-5 md:flex-row"> 
                    <SplideSlide v-for="gallerie in store.galleries" :key="gallerie.id">
                        <div class=" image" @click="VoirPhoto()">
                            
                            <img :src="'/storage/gallerie/'+gallerie['id']+'.png'" alt="" class="w-full rounded-lg h-72" id="photo1">
                            <h1 class="text-lg text-center text-gray-500 " id="photo2">{{gallerie["nombatiment"]}}</h1>
                        </div>
                    </SplideSlide> 
                </Splide>
            </div>
        </div>
        <!-- <div @click="results()">
            voir
        </div> -->     
    </div>
</template>
<script>
import { store } from '../state/store.js'
    export default {
        name : 'Infrastructure',
        data(){
            return {
                store
            }
        }
    }

</script>
<!-- 
     

          

 -->