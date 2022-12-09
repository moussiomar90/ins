<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
 
    public function show( $date,$lieu)
    {


                

                if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
                  if ( $date  =="2022-09-20" 
                  || $date  =="2022-09-21" || 
                  $date  =="2022-09-22" || 
                   $date  =="2022-09-23" || 
                   $date  =="2022-09-24"    ){

                    

                    
                    $Conferences = DB::table('conferences')
                    ->where('date', '=', $date)
                    ->where('lieu', '=', $lieu)
                    ->get();
                    
                    return view('session',['Conferences'=>$Conferences,'date'=>$date,'lieu'=>$lieu]);
                  
                  }
                  else{
  
                    session()->flash('error', 'Probleme de chargement des données !');
                    return redirect('/session/2022-09-20/Amphithéâtre%20Carthage%20al-Hadatha' );
                  }
              } else {
                session()->flash('error', 'Probleme de chargement des données !');
                    return redirect('/session/2022-09-20/Amphithéâtre%20Carthage%20al-Hadatha' );
              }
            

 
    }
    public function lieu( $date )
    {
      
      session()->flash('error', 'Probleme de chargement des données !');
      return redirect('/session/2022-09-20/Amphithéâtre%20Carthage%20al-Hadatha' );
    }
}
