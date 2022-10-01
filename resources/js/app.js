import '@splidejs/vue-splide/css';
import { createApp } from "vue"

import App from './App.vue';
import axios from 'axios';
import router from './router';
import VueSplide from '@splidejs/vue-splide';

const app = createApp(App)
app.config.globalProperties.$axiox = axios
app.use(router)
app.use( VueSplide );
app.mount('#app')