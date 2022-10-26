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
        // console.log(store.abouts ? store.abouts : 1);
        // axios
        //      .get('http://127.0.0.1:8000/api/about')
        //      .then(reponse => console.log(reponse.data))
    }

}
</script>