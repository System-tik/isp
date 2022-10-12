<template>
    <div class="flex flex-col items-center gap-10 px-4 py-10 sm:px-8 md:px-16 lg:px-32 xl:px-64 2xl:px-80" >
        <div class="lg:px-44 md:px-24 xl:px-52 2xl:px-64 ">
            <div class="text-center text-blue-800 xl:text-lg 2xl:text-3xl">
                Nos orientations à votre disposition
            </div>
            <div class="py-2 text-sm text-center text-gray-500 ">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ab consectetur mollitia atque aliquam id ratione Lorem ipsum dolor sit amet consectetur, adipisici
            </div>
        </div>
        <div class="flex flex-col items-center gap-1" >
            <div class="grid grid-cols-1 gap-1 sm:grid-cols-2 md:grid-cols-3">
                <div>
                    <FormationCards/>
                </div>
                <div>
                    <FormationCards/>
                </div>
                <div class="hidden md:grid">
                    <FormationCards/>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-1 sm:grid-cols-2 md:grid-cols-3">
                <div>
                    <FormationCards/>
                </div>
                <div class="hidden sm:grid">
                    <FormationCards/>
                </div>
                <div class="hidden md:grid">
                    <FormationCards/>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import FormationCards from '../components/FormationCards.vue';
    export default{
        name : 'Formation',
        components : {
            FormationCards
        }
    }
</script>