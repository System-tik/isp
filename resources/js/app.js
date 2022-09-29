import { createApp } from "vue"

import App from './App.vue';
import axios from 'axios';
import router from './router';

const app = createApp(App)
app.config.globalProperties.$axiox = axios
app.use(router)
app.mount('#app')