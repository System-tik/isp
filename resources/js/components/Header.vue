<template >
    <div class="" >
        
        <Splide :options="{ 
            type: 'fade',
            rewind: true,
            
            autoplay: true,
            interval: 2000,
            speed: 1000,
            arrows: true,
            pagination: true,
            drag: true,
            keyboard: true
        }">
            <SplideSlide>
                <div class="flex items-center justify-center bg-cover md:h-screen " style="background-image:url('img/bg/isp-fond.svg'); background-color: #f3f6ff;">
                    <div class="h-full gap-5 px-4 py-10 bg-cover md:grid-cols-2 sm:px-8 md:grid lg:gap-14 xl:gap-20 md:px-16 lg:px-32 xl:px-40 2xl:px-80" >
                        <div class="flex flex-col justify-center gap-5 py-20">
                            <div class="text-center text-gray-500 xl:text-2xl 2xl:text-3xl md:text-left">
                                BIENVENUE !
                            </div>
                            
                            <div class="font-bold text-center text-gray-800 lg:text-2xl xl:text-4xl md:text-left">
                                Prenez votre inscription à l'ISP <br> Mbanza-ngungu
                            </div>
                            <div class="py-10 text-center md:text-left">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, ipsum cumque, ut aperiam rep</p>
                            </div>
                            <div class="text-center md:text-left">
                                <span class="px-5 py-4 text-white bg-blue-700 rounded"><router-link to="/inscription" class="">Inscription</router-link></span>
                            </div>
                            
                        </div>
                        <div class="hidden h-full md:block">
                            <img src="/img/header/h1.svg" alt="" class="h-full animate__animated animate__backInLeft" style="border-radius: 70px 5px 5px 5px">
                        </div> 
                    </div>
                </div>
            </SplideSlide>
            <SplideSlide>
                <div class="flex items-center justify-center bg-cover md:h-screen " style="background-image:url('img/bg/isp-fond.svg'); background-color: #f3f6ff;">
                    <div class="h-full gap-5 px-4 py-10 bg-cover md:grid-cols-2 sm:px-8 md:grid lg:gap-14 xl:gap-20 md:px-16 lg:px-32 xl:px-40 2xl:px-80" >
                        <div class="flex flex-col justify-center gap-5 py-20">
                            <div class="text-center text-gray-500 xl:text-2xl 2xl:text-3xl md:text-left">
                                BIENVENUE !
                            </div>
                            
                            <div class="font-bold text-center text-gray-800 lg:text-2xl xl:text-4xl md:text-left">
                                L'éducation est un puissant moteur<br> du développement
                            </div>
                            <div class="py-10 text-center md:text-left">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, ipsum cumque, ut aperiam rep</p>
                            </div>
                            <div class="text-center md:text-left">
                                <span class="px-5 py-4 text-white bg-blue-700 rounded"><router-link to="/inscription" class="">Inscription</router-link></span>
                            </div>
                            
                        </div>
                        <div class="hidden h-full md:block">
                            <img src="/img/header/h2.svg" alt="" class="h-full animate__animated animate__backInLeft" style="border-radius: 70px 5px 5px 5px">
                        </div> 
                    </div>
                </div>
            </SplideSlide>
           <!--  <SplideSlide>
                <div class="flex items-center justify-center h-screen bg-cover " style="background-image:url('img/bg/isp-fond.svg'); background-color: #f3f6ff;">
                    <div class="hidden h-full grid-cols-2 gap-5 px-4 py-10 bg-cover sm:px-8 md:grid lg:gap-14 xl:gap-20 md:px-16 lg:px-32 xl:px-64 2xl:px-80" >
                        <div class="flex flex-col justify-center gap-5 py-20">
                            <div class="text-gray-500 xl:text-2xl 2xl:text-3xl ">
                                BIENVENUE !
                            </div>
                            
                            <div class="font-bold text-gray-800 lg:text-2xl xl:text-4xl ">
                                L'éducation est un puissant moteur<br> du développement
                            </div>
                            <div class="py-10">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, ipsum cumque, ut aperiam rep</p>
                            </div>
                            <div >
                                <span class="px-5 py-4 text-white bg-blue-700 rounded"><router-link to="/inscription" class="">Inscription</router-link></span>
                            </div>  
                            
                        </div>
                        <div class="hidden h-full">
                            <img src="/img/header/h2.svg" alt="" class="h-full animate__animated animate__backInLeft" style="border-radius: 70px 5px 5px 5px">
                        </div> 
                    </div>
                </div>
            </SplideSlide> -->
        </Splide>
    </div>
</template>

<script>
    import { Splide, SplideSlide } from '@splidejs/vue-splide';
    export default ( {
        components: {
            Splide,
            SplideSlide,
        },
    } );
</script>
