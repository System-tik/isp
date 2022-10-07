<template>
<<<<<<< HEAD
    <div>
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
        <button id="retour" @click="Top()" class="fixed bottom-5 right-2 bg-gray-900 p-2 text-white animate__animated animate__bounce">Top</button>
=======
    <!-- <div class="p-5 text-white bg-black">
        <router-link  to="/">Home</router-link>
        <router-link to="/actualite">Actualite</router-link>
        <router-link to="/inscription">Inscription</router-link>
        <router-link to="/frais">Frais</router-link>
        <router-link to="/programme">Programme</router-link>
        <router-link to="/about">About</router-link>
    </div> -->
    <div class="flex flex-col justify-between">
        <div class="flex-1">
            <Nav/>    
            <router-view></router-view>
        </div>
        <Footer/>
>>>>>>> 6a3c67277219c3a932b373c80c3b5c0b66ca6dc5
    </div>
</template>
<script>
    import Nav from './components/Nav.vue';
    import Footer from './components/Footer.vue';
    export default{
        name : 'Home',
        components:{
            Nav,
            Footer
        },
        methods: {
            Top(){
                // let btn = document.getElementById('retour');
               window.scroll({
                top:0,
                behavior : 'smooth'
               })
            },
           

        }

    }
    document.addEventListener("DOMContentLoaded", function (event) {
        
        var btn = document.getElementById('retour');
        btn.classList.add('hidden');
        window.addEventListener('scroll',()=>{
            if(document.documentElement.scrollTop > 60 || document.body.scrollTop>60){
                btn.classList.remove('hidden')
            } else{
                btn.classList.add('hidden')
            }
        })
    });
    </script>
