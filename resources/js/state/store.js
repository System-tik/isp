import { reactive } from 'vue'
import axios from 'axios' 
export const store = reactive({
    // Valeurs pour l'identifier les actualités par rapport au click
    a : 2,
    //Click to Top
    Top(){
        document.documentElement.scrollTop =0
    },
    // Abouts tableau et la methodes API
    abouts : [],
    getAbouts(){
        axios
            .get('http://127.0.0.1:8000/api/about')
            .then(reponse => this.abouts = reponse.data)
            
    },
    // Options tableau et la methode API
    options : [],
    getOptions (){
        axios
            .get('http://127.0.0.1:8000/api/option')
            .then(reponse => this.options = reponse.data)
    },
    // departement tableau et la methode API
    departements : [],
    getDepartement(){
        axios
            .get('http://127.0.0.1:8000/api/departement')
            .then(reponse => this.departements = reponse.data)
    },
     // semestres tableau et la methode API
    semestres : [],
    getSemestre(){
        axios
            .get('http://127.0.0.1:8000/api/semestre')
            .then(reponse => this.semestres = reponse.data)
    },
     // semestres tableau et la methode API
    headers : [],
    getHeaders(){
        axios
            .get('http://127.0.0.1:8000/api/headers')
            .then(reponse => this.headers = reponse.data)
    },
     // actualités tableau et la methode API
    actus : [], 
    getActus(){
        axios
            .get('http://127.0.0.1:8000/api/actus')
            .then(reponse => this.actus = reponse.data.reverse())
    },
    //Textes legaux 
    textes : [],
    getTextes(){
        axios
            .get('http://127.0.0.1:8000/api/textes')
            .then(reponse => this.textes = reponse.data)
    },
    // les conditions d'admition
    conditions : [],
    getConditions(){
        axios
            .get('http://127.0.0.1:8000/api/condition')
            .then(reponse => this.conditions = reponse.data)
    },
    // Programmes 
    programs : [],
    getPrograms(){
        axios
            .get('http://127.0.0.1:8000/api/program')
            .then(reponse => this.programs = reponse.data)
    },
    // Frais
    frais: [],
    getFrais(){
        axios
            .get('http://127.0.0.1:8000/api/frais')
            .then(reponse => this.frais = reponse.data)
    },

    //Sections
    sections: [],
    getSection(){
        axios
            .get('http://127.0.0.1:8000/api/section')
            .then(reponse => this.sections = reponse.data)
    },

    //infrastructure
    galleries:[],
    getGallerie(){
        axios
            .get('http://127.0.0.1:8000/api/infrastructure')
            .then(reponse => this.galleries = reponse.data)
    },

    //COMITE
    comites:[],
    getComite(){
        axios
            .get('http://127.0.0.1:8000/api/comites')
            .then(reponse => this.comites = reponse.data)
    },

})
