<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function redirectMail(){
        return view ('redirectMail');
    }

    public function submit(Request $request){
        // dd($request->all());
        $name= $request->input('name');
        $email= $request->input('email');
        $message= $request->input('message');
        
        // dd($name,$email,$message);
        $contact=compact('name', 'email','message');
        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('redirectMail'));

        // return redirect(route('home'))->with('message', 'Grazie per averci contattati! Le risponderemo presto');
    }
}
