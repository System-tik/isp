<template>
    <div>    
        <Header/>
        <About/>
        <Formation/>
        <Infrastructure/>
    </div>
</template>
<script>
import Nav from '../components/Nav.vue';
import Header from '../components/Header.vue';
import About from '../components/About.vue';
import Formation from '../components/Formation.vue';
import Infrastructure from '../components/Infrastructure.vue';
import Footer from '../components/Footer.vue';
// Les API
import {store} from '../state/store.js'
export default{
    name : 'Home',
    components:{
        Nav,
        Header,
        About,
        Formation,
        Infrastructure,
        Footer
    },
    data(){
        return{
           store
        }
    },
    mounted(){
        store.getAbouts()
        store.getHeaders()
        store.getActus()
        store.getTextes()
        store.getConditions()
        store.getPrograms()
        store.getOptions()
        store.getFrais()
        store.getSection()
        store.getOptions()
        store.getGallerie()
        store.getComite()
    }

}
</script>