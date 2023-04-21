<template>
    <div>
        
        <Nav/>    
        <router-view></router-view>
        <Footer/>
        <button id="retour" @click="Top()" class="fixed p-2 text-white bg-gray-900 bottom-5 right-2 animate__animated animate__bounce">Top</button>
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
        }, methods:{
            Top(){
                window.scroll({
                    top:0,
                    behavior:'smooth'
                })
            }
        },
        
    }
    document.addEventListener("DOMContentLoaded",function (event) {
        var btn = document.getElementById('retour');
        btn.classList.add('hidden');
        window.addEventListener('scroll',()=>{
            if(document.documentElement.scrollTop > 60){
                btn.classList.remove('hidden')
            } else {
                btn.classList.add('hidden')
            }
        })

    })

</script>
    