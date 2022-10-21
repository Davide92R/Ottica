<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller{

    public function home() {
        return view('welcome');
    }

    public function visiteOptometriche(){
        return view('visiteOptometriche');
    }

    public function Ecografie(){
        return view('Ecografie');
    }

    public function OCT(){
        return view ('OCT');
    }

    public function chirurgiaEstetica(){
        return view ('chirurgiaEstetica');
    }

    public function contatti(){
        return view ('contatti');
    }
}
