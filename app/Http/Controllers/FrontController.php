<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome(){
            return view('welcome');
    }

    public function ChiSiamo(){

        $students = [
            ["name"=>"Aurel", "surname"=>"Gjonaj"],
            ["name"=>"Alberto", "surname"=>"Ugato"],
            ["name"=>"Alberto", "surname"=>"Orofino"],
            ["name"=>"Andrea", "surname"=>"Scagliarini"],
            ["name"=>"Angelo", "surname"=>"Rizzo"],
            ["name"=>"Antonio", "surname"=>"Gallo"],
            ["name"=>"Damiano", "surname"=>"Speciale"],
            ["name"=>"Giovanni", "surname"=>"Russo"],
            ["name"=>"Giuseppe", "surname"=>"Iunico"],
            ["name"=>"Giuseppe", "surname"=>"Pace"],
            ["name"=>"Jacopo", "surname"=>"Di Fiori"],
            ["name"=>"Jacopo", "surname"=>"Fornaro"],
            ["name"=>"Tatiana", "surname"=>"Deiana"],
            ["name"=>"Ertygen", "surname"=>"Sula"],
            ["name"=>"Asia", "surname"=>"Derinaldis"],
        ];
    
    
        return view('ChiSiamo', ['studenti'=>$students]);
    }

    public function Servizi(){
            return view('Servizi');
        }

    public function DoveTrovarci(){
        return view('DoveTrovarci');
    }
}
