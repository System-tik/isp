<template>
    <div>
        <Nav/>
        <Header/>
    </div>
</template>
<script>
import Nav from '../components/Nav.vue';
import Header from '../components/Header.vue';
export default{
    name : 'Home',
    components:{
        Nav,
        Header
    }

}
</script>