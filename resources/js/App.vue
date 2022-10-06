<template>
    <!-- <div class="p-5 text-white bg-black">
        <router-link  to="/">Home</router-link>
        <router-link to="/actualite">Actualite</router-link>
        <router-link to="/inscription">Inscription</router-link>
        <router-link to="/frais">Frais</router-link>
        <router-link to="/programme">Programme</router-link>
        <router-link to="/about">About</router-link>
    </div> -->
    <Nav/>
    <router-view></router-view>
    <Footer/>
</template>
<script>
    import Nav from './components/Nav.vue';
    import Footer from './components/Footer.vue';
    export default{
        name : 'Home',
        components:{
            Nav,
            Footer
        }
    
    }
    </script>