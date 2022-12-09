<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Intervenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IntervenantController extends Controller
{
    public function show()
    {

     

             $Intervenants = Intervenant::with('conferences')->get() ;
      return view('parintervenant',['Intervenants'=>$Intervenants]);
    }
    
    public function details($id){
    try {
      $Intervenantss = Intervenant::where('id',$id)->get()->count();
   
               $Intervenants = Intervenant::find($id)->conferences ;
               $nom_prenom = Intervenant::find($id)->nom_prenom ;
           
            return view('parintervenant-details',['Intervenants'=>$Intervenants,
             'nom_prenom'=>$nom_prenom]);
    } catch (\Throwable $th) {
      session()->flash('error', 'Probleme de chargement des données  !');
      return view('parintervenant');
    }
  }
          
    
}
