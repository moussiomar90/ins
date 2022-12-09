<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
  public function show($id)
  {
try {
  $Conferences  = Conference::with('intervenants')->where('id', $id)->get();
     
 
  return view('conference', ['Conferences' => $Conferences[0]]);
} catch (\Exception $exeption) {
  session()->flash('error', 'Probleme de chargement des données !');

  return redirect( )->back();

}

    
  }
}
