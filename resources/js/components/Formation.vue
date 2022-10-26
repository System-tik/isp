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
        <div class="flex flex-col items-center gap-1" data-aos="flip-down">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3" >
                <div v-for="option in options">
                    <FormationCards :nom='option.nomopt' :descrip='option.description' :id='option.id' />
                </div>
            </div>   
        </div>
    </div>
</template>
<script>
    import FormationCards from '../components/FormationCards.vue';
    import axios from 'axios';
    export default{
        name : 'Formation',
        components : {
            FormationCards
        },
        data() {
            return {
                 options : []
                
            }
        },
        mounted(){
            axios
                .get('http://127.0.0.1:8000/api/option')
                .then(reponse => this.options = reponse.data)
        }
    }
</script>