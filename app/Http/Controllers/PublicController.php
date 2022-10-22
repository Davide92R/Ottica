<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller{

    public function home() {

        $doctors=[
            ['name'=>'Davide', 'surname'=>'Roggero', 'description'=>'Esperto di carne', 'url'=>'https://api.lorem.space/image/face?w=250&h=350'],
            ['name'=>'Michele', 'surname'=>'De Girolamo', 'description'=>'Non ci vede per la cataratta ma è oculista', 'url'=>'https://api.lorem.space/image/face?w=250&h=350&hash=9D9539E7'],
            ['name'=>'Nicolò', 'surname'=>'Manfredi', 'description'=>'Dottore esperto', 'url'=>'https://api.lorem.space/image/face?w=250&h=350&hash=4F32C4CF']
        ];
        return view('welcome', ['doctors'=>$doctors]);
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

    public function redirectMail(){
        return view ('redirectMail');
    }

    public function submit(Request $request){
        // dd($request->all());
        $name= $request->input('name');
        $email= $request->input('email');
        $message= $request->input('message');
        // *dati per personalizzare la mail di ringraziamento utente
        // dd($name,$email,$message);
        $contact=compact('name', 'email','message');

        // dati da mandare all'admin del sito via mail
        $adminContact = compact("name", "email", "message");
        Mail::to($email)->send(new ContactMail($contact));
        Mail::to("admin@gmail.com")->send(new AdminMail($adminContact));
        return redirect(route('redirectMail'));

        // return redirect(route('home'))->with('message', 'Grazie per averci contattati! Le risponderemo presto');
    }
}
