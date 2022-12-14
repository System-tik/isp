<?php

namespace App\Http\Controllers\ApiClient;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\actualite;
use App\Models\calendrier;
use App\Models\comite;
use App\Models\condition;
use App\Models\departement;
use App\Models\frais;
use App\Models\header;
use App\Models\insfrastruct;
use App\Models\program;
use App\Models\recherchesc;
use App\Models\section;
use App\Models\semestre;
use App\Models\system;
use App\Models\option;
use App\Models\textlegaux;

class apiController extends Controller
{
    public function about()
    {
        try {
            $abouts = about::all();
            return response()->json($abouts);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }
    public function calendrier(){
        try {
            $calendriers=calendrier::all();
            return response()->json($calendriers);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }


    public function condition(){
        try {
            $conditions=condition::all();

            return response()->json( $conditions);

        } catch (\Exception $th) {

            return response()->json($th->getMessage());
        }
    }
    public function departement(){
        try {
            $departements=departement::all();
            return response()->json($departements);

        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }

    public function frais()
    {
        try {
            $frais=frais::join('niveaux', 'niveaux.id', '=', 'frais.niveau_id')->join('options', 'options.id', '=', 'frais.option_id')->get('*');
 
            return response()->json($frais);
 
         } catch (\Exception $th) {
             return response()->json($th->getMessage());
         }
    }

    public function infrastructure()
    {
        try {
            $infrastructures=insfrastruct::all();
 
            return response()->json($infrastructures);
 
         } catch (\Exception $th) {
             return response()->json($th->getMessage());
         }
    }
    
    public function option()
    {
        try {
            $options=option::join('departements', 'departements.id', '=', 'options.iddep')->get('*');
 
            return response()->json($options);
 
         } catch (\Exception $th) {
             return response()->json($th->getMessage());
         }
    }

    public function program()
    {
        try {
            $programmes=program::join('semestres', 'semestres.id', '=','programs.semestre_id')
            ->join('options', 'options.id', '=', 'programs.idoption')
            ->get(['programs.*', 'semestres.nom as semestre', 'options.nomopt as option']); 
 
            return response()->json($programmes);
 
         } catch (\Exception $th) {
             return response()->json($th->getMessage());
         }
    }

    public function section()
    {
        try {
            $sections=section::all();
 
            return response()->json($sections);
 
        } catch (\Exception $th) {
             return response()->json($th->getMessage());
        }
    }
    
    public function semestre()
    {
        try {
            $semestres=semestre::all();

            return response()->json($semestres);

        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }

    public function system()
    {
        try {
            $systems=system::all();
            return response()->json($systems);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }
    /* get actualites data by API */
    public function actus()
    {
        try {
            $data=actualite::all();
            return response()->json($data);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }

    /* get header data by API */
    public function headers()
    {
        try {
            $data=header::all();
            return response()->json($data);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }
    /* get textes legaux data by API */
    public function textes()
    {
        try {
            $data=textlegaux::all();
            return response()->json($data);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }
    /* get recherche data by API */
    public function recher()
    {
        try {
            $data=recherchesc::all();
            return response()->json($data);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }
    public function comites()
    {
        try {
            $data=comite::all();
            return response()->json($data);
        } catch (\Exception $th) {
            return response()->json($th->getMessage());
        }
    }
}
