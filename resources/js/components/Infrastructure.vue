<template>
    <div class="gap-10 px-4 py-10 sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-80" >
        <div class="flex flex-col w-full ">
            <div class="w-full py-2 text-center text-blue-800 xl:text-lg 2xl:text-2xl">
                <p>Gallerie des images</p>
            </div>
            <div class="pb-10 text-sm text-center text-gray-500 ">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            </div>
            <div data-aos="zoom-in-up" class="w-full ">
                <Splide  :options="{
                    perPage:2,
                    rewind: true,
                    gap   : '1rem',
                    autoplay : true,
                    loop : true,
                }" class="flex flex-col justify-center w-full mb-5 md:flex-row"> 
                    <SplideSlide>
                        <div class="image" @click="VoirPhoto()">
                            <img src="/img/deux.jpg" alt="" class="w-full h-72" id="photo1">
                            <h1 class="text-lg text-center text-gray-500" id="photo2">Home</h1>
                        </div>

                    </SplideSlide> 
                    <SplideSlide>
        </div>
    </div>
</template>
<script>
    export default{
        name : 'Infrastructure',
        components:{
            Splide,
            SplideSlide,
        },
        methods: {
            VoirPhoto(){
                let photo = document.querySelectorAll('image'),attribut;
            }
        },
    } ;
</script>