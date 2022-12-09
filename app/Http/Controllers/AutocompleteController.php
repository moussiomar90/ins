<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AutocompleteController extends Controller
{
    function index()
    {
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
      
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('intervenants')
        ->where('nom', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      
      foreach($data as $row)
      {
       $output .= '
       <li><a >'.$row->nom.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
