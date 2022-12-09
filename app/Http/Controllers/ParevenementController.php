<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Intervenant;
use Illuminate\Http\Request;
use Throwable;

class ParevenementController extends Controller
{
    public function show($id)
    {
if (!is_numeric($id) ){
    session()->flash('error', 'Probleme de chargement des données !');
    return view('parevenement');

  
}
else{
    if($id > 12 || $id < 1  ){
        session()->flash('error', 'Probleme de chargement des données !');
    return view('parevenement');
    }

    else{
     
        $Conferences = Conference::where('evenement_conf' , '=', $id) ->orderBy('heure_deb', 'asc')->get();
        return view('parevenement', ['Conferences' => $Conferences ,'id'=>$id  ]);
    }
}

 
           
        

    }
}
