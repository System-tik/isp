<template >
    <div class="h-screen bg-cover " >
        
        <Splide :options="{ 
            type: 'fade',
            rewind: true,
            
            autoplay: true,
            interval: 4000,
            speed: 1000,
            arrows: true,
            pagination: true,
            drag: true,
            keyboard: true
        }">
            <SplideSlide v-for="header in store.headers" :key="header.id">
                <div class="flex items-center justify-center h-screen bg-cover " style="background-image: url('img/bg/isp-fond.svg'); background-color: #f3f6ff;">
                    <div class="hidden h-full grid-cols-2 gap-5 px-4 py-10 bg-cover sm:px-8 md:grid lg:gap-14 xl:gap-20 md:px-16 lg:px-32 xl:px-64 2xl:px-80" >
                        <div class="flex flex-col justify-center gap-5 py-20" >
                            <div class="text-gray-500 xl:text-2xl 2xl:text-3xl ">
                                {{header["titre"]}}
                            </div>
                            
                            <div class="font-bold text-gray-800 lg:text-2xl xl:text-4xl ">
                                {{header["sous"]}} <br> 
                            </div>
                            <div class="py-10">
                                <p>
                                    {{ header["descrip"] }} <br> 
                                </p>
                            </div>
                            <div >
                                <span class="px-5 py-4 text-white bg-blue-700 rounded"><router-link to="/inscription" class="">Inscription</router-link></span>
                            </div>
                            
                        </div>
                        <div class="h-full">
                            <img :src="'storage/header/'+header['id']+'.svg'" alt="" class="h-full animate__animated animate__backInLeft" style="border-radius: 70px 5px 5px 5px">
                        </div> 
                    </div>
                </div>
            </SplideSlide>
        </Splide>
    </div>
    <div>
         <div>
             {{ }}
        </div>
    </div>
</template>

<script>
    import { Splide, SplideSlide } from '@splidejs/vue-splide';
    import { store } from '../state/store.js'
    export default ( {
        components: {
            Splide,
            SplideSlide,
        },
        data(){
            return {
                store,
            }
        },
       
    } );

</script>
