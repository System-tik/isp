import { createWebHistory, createRouter } from "vue-router";

import Home from '../pages/Home.vue';
import Actualite from '../pages/Actualite.vue';
import Inscription from '../pages/Inscription.vue';
import Programme from '../pages/Programme.vue';
import Frais from '../pages/Frais.vue';
import About from '../pages/About.vue';
import DetailsActu from '../pages/DetailsActu.vue';
import texteLegaux from '../pages/texteLegaux.vue'

const routes = [
    {
        name : 'home',
        path : '/',
        component : Home
    },
    {
        name : 'actu',
        path : '/actualite',
        component : Actualite
    },
    {
        name : 'inscription',
        path : '/inscription',
        component : Inscription
    },
    {
        name : 'Programme',
        path : '/programme',
        component : Programme
    },
    {
        name : 'Frais',
        path : '/frais',
        component : Frais
    },
    {
        name : 'About',
        path : '/about',
        component : About
    },
    {
        name : 'DetailsActu',
        path : '/DetailsActu',
        component : DetailsActu
    },
    {
        name : 'Texte Legaux',
        path : '/texteLegaux',
        component : texteLegaux
    }  
];

const router = createRouter({
    history : createWebHistory(),
    routes
});

export default router