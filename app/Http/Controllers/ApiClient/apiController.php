<?php

namespace App\Http\Controllers\ApiClient;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\calendrier;
use App\Models\condition;
use App\Models\departement;
use App\Models\frais;
use App\Models\insfrastruct;
use App\Models\program;
use App\Models\section;
use App\Models\semestre;
use App\Models\system;
use App\Models\option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $frais=frais::all();
 
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
            $options=option::all();
 
            return response()->json($options);
 
         } catch (\Exception $th) {
             return response()->json($th->getMessage());
         }
    }

    public function program()
    {
        try {
            $programmes=program::all();
 
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


}
