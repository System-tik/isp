<template>
    <div>
        <Nav/>
        <Header/>
        <About/>
        <Formation/>
        <Infrastructure/>
        <Footer/>

    </div>
</template>
<script>
import Nav from '../components/Nav.vue';
import Header from '../components/Header.vue';
import About from '../components/About.vue';
import Formation from '../components/Formation.vue';
import Infrastructure from '../components/Infrastructure.vue';
import Footer from '../components/Footer.vue';
export default{
    name : 'Home',
    components:{
        Nav,
        Header,
        About,
        Formation,
        Infrastructure,
        Footer
    }

}
</script>