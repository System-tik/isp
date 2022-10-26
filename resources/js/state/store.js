import { reactive } from 'vue'
import axios from 'axios' 
export const store = reactive({
    abouts : [],
    options : [],
    departements : [],
    semestres : [],
    // Les methodes 
    getAbouts(){
        axios
            .get('http://127.0.0.1:8000/api/about')
            .then(reponse => this.abouts = reponse.data)
            
    },
    getOptions (){
        axios
            .get('127.0.0.1:8000/api/option')
            .then(reponse => this.options = reponse.data)
    },
    getDepartement(){
        axios
            .get('http://127.0.0.1:8000/api/departement')
            .then(reponse => this.departements = reponse.data)
    },
    getSemestre(){
        axios
            .get('http://127.0.0.1:8000/api/departement')
            .then(reponse => this.semestres = reponse.data)
    }
})
