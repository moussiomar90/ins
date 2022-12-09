<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur;

class visiteurController extends Controller
{
    public function show()
    {
        $visiteurs = Visiteur::all();
        return view('adminv',['visiteurs'=>$visiteurs] );
    }
    public function create(Request $request)
    {
        $request->validate([
            'nom'=>'required | min:2',
            'prenom'=>'required | min:2',
            'email'=>'required|email|unique:Participants',
            'qualite'=>'required | min:2',
           'tel'=>'required | min:2',

        ],
        [
            'required' => 'veuillez renseigner le  champ :attribute  .',
            'min' => 'taille manimale de :attribute est 2 .',
            'email' =>'Adresse mail existe deja ',
            'password.min' =>'taille manimale de :attribute est 6 '
        ]);
        $visiteur = new Visiteur();
        $visiteur->nom=$request->nom;
        $visiteur->prenom=$request->prenom;
        $visiteur->email=$request->email;

        $visiteur->qualite=$request->qualite;
        $visiteur->telephone=$request->tel;
        $visiteur->save();
        $request->session()->flash('vsuccess','informations ajouter avec succes');
        return redirect('/registration/fr');
    }
}
