<template>
    <div class="px-4 py-5 lg:px-32 sm:px-8 md:px-16 xl:px-64 2xl:px-80 bg-slate-50">
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
        <div class="grid grid-cols-1 gap-3 mb-5 sm:grid-cols-2">
            
            <div class="">
                <img src="/img/deux.jpg" alt="" class="w-full h-72">
                <h1 class="text-lg text-center text-gray-500">Home</h1>
            </div>
            <div class="hidden sm:grid">
                <img src="/img/un.jpg" alt="" class="w-full h-72">
                <h1 class="text-lg text-center text-gray-500">Reception</h1>
            </div>
            
        </div>
        
        
    </div>
    <div>
        <CorpsAcademique/>
    </div>

</template>
<script>
    export default{
        name : 'Infrastructure',
        components:{
        
        }
    }
</script>