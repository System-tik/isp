<template>
    <div class="px-4 py-5 lg:px-32 sm:px-8 md:px-16 xl:px-40 2xl:px-80 bg-slate-50">
        <div class="lg:px-44 md:px-24 xl:px-52 2xl:px-64 ">
            <div class="py-2 text-center text-blue-800 xl:text-lg 2xl:text-2xl">
                Gallerie des images
            </div>
            <div class="pb-10 text-sm text-center text-gray-500 ">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            </div>
            <div >
                <Splide  :options="{
                    perPage:2,
                    rewind: true,
                    gap   : '1rem',
                    autoplay : true,
                    loop : true,
                }" class="flex flex-col justify-center mb-5 md:flex-row"> 
                    <SplideSlide>
                        <div class="">
                            <img src="/img/deux.jpg" alt="" class="w-full h-72">
                            <h1 class="text-lg text-center text-gray-500">Home</h1>
                        </div>
                    </SplideSlide> 
                    <SplideSlide>
                        <div class="">
                            <img src="/img/un.jpg" alt="" class="w-full h-72">
                            <h1 class="text-lg text-center text-gray-500">Reception</h1>
                        </div>
                    </SplideSlide>                  
                    <SplideSlide>
                        <div class="">
                            <img src="/img/deux.jpg" alt="" class="w-full h-72">
                            <h1 class="text-lg text-center text-gray-500">Home</h1>
                        </div>
                    </SplideSlide> 
                    <SplideSlide>
                        <div class="">
                            <img src="/img/un.jpg" alt="" class="w-full h-72">
                            <h1 class="text-lg text-center text-gray-500">Reception</h1>
                        </div>
                    </SplideSlide>                  
                </Splide>                
            </div>                       
        </div>
        <div>
            <CorpsAcademique/>
        </div>
    </div>

</template>
<script>
    import { Splide, SplideSlide } from '@splidejs/vue-splide';
    export default ({
        name : 'Infrastructure',
        components:{
            Splide,
            SplideSlide,
        },
        // setup(){
        //     const options ={
        //                     perPage :2,
        //                     type : 'loop',
        //                     rewind : true,
        //                     autoplay: true,
        //                     interval: 2000,
        //                     speed: 1000,
        //                     arrows: true,
        //                     pagination: true,
        //                     drag: true,
        //                  }
        // }
    } );
</script>