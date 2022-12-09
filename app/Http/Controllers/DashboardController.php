<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Intervenant;
use App\Models\Visiteur;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class DashboardController extends Controller
{
    public function show()
    {
          $Conferences = Conference::with('intervenants')->get();
           $Countconf=  $Conferences->count();
             $countInter =  Intervenant::all()->count();
         
                     return view('dashboard.index',['Conferences'=>$Conferences ,
         'countconf'=> $Countconf,'countInter'=>$countInter  ]);
    }

    public function showInter()
    {
     
        $Countconf=  Conference::all()->count();
         $countInter =  Intervenant::all()->count();
          $Intervenants =Intervenant::all();
       return view('dashboard.addIntervenant',['Intervenants'=>$Intervenants,
       'Countconf'=> $Countconf ,
       'countInter'=>$countInter ]);
    }

    public function storeInter(Request $request){
        $request->validate([
            'nom_prenom'=>'required | min:2',
        'universite'=>'required | min:2',
        ],
        [
            'required' => 'veuillez renseigner le  champ :attribute  .',
            'min' => 'taille manimale de :attribute est 2 .',
            
        ]);
        $Intervenant = new Intervenant();
        $Intervenant->nom_prenom=$request->nom_prenom;
        $Intervenant->universite=$request->universite;
       
        $Intervenant->save();
        session()->flash('success', 'Ajout effectué avec succés');

        return redirect()->back() ;

    }
    public function deleteInter($id){
        $nomintervenant =  Intervenant::find( $id);
        Intervenant::where('id', $id)->delete();
        session()->flash('delete', " les donnes de utilisateur ". $nomintervenant->nom_prenom." ont ete supprimes");
        return redirect()->back();

    }

    public function delete($id)
    {

        Conference::where('id', $id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {

        $Conferences= Conference::where('id', $id)->delete();
        return view('dashboard.index',['Conferences'=>$Conferences ] );
    }
    public function store( Request $request)
    {
      
        $request->validate([
            'title'=>'required | min:2',
             
            'details'=>'min:2',
     ],
     [
        'required' => 'veuillez renseigner le  champ :attribute  .',
            'min' => 'taille manimale de :attribute est 2 .',
     ]);
        
        
        
 
    
       
  
         $stack =[];
 try {
     foreach($request->addmore as $key => $team)
{
 
     $intervenant =  Intervenant::where("nom_prenom",$team['nom'])->get();
     if (in_array($intervenant[0]->id,$stack))
     {
        
     }
     else{
        array_push($stack, $intervenant[0]->id);
     }
     
    
}
    


 } catch (\Throwable $th) {
    return redirect()->back()->with(['listerror'=>"Un problème est survenu veuillez réessayer de nouveau"]);
 }
        
 
 
       $conferencce = new Conference();

        $conferencce->titre=$request->title;
        $conferencce->evenement_conf=$request->evenement_conf;
        $conferencce->cat_conf= $request->cat_conf;

        $conferencce->lieu=$request->lieu;
        $conferencce->date=$request->date;
        $conferencce->salle= $request->salle;
        $conferencce->details=$request->details;
        $conferencce->type= "D14";
        $conferencce->thematique ="thmatiue";
         
        $conferencce->etat=5;
         switch ($request->heure){
            case('1'):
                $conferencce->heure_deb	='08:45:00';
                $conferencce->heure_fin	='10:45:00';
                break;
                case('2'):
                    $conferencce->heure_deb	='11:00:00';
                    $conferencce->heure_fin	='13:00:00';
                    break;
                    case('3'):
                        $conferencce->heure_deb	='14:00:00';
                        $conferencce->heure_fin	='16:00:00';
                        break;
                        case('4'):
                            $conferencce->heure_deb	='16:15:00';
                            $conferencce->heure_fin	='18:15:00';
                            break;
         }
        $conferencce->reposnable=$request->reposnable;
        $conferencce->discutant=$request->discutant;
        $conferencce->moderater=$request->moderater;
        $conferencce->resumes_fr=$request->resumes_fr;
        $conferencce->resumes_ar=$request->resumes_ar;
        $conferencce->resumes_ang=$request->resumes_ang;
         $conferencce->save();
          

         $conferencce->intervenants()->sync($stack);
         session()->flash('success', 'Ajout effectué avec succés');

         return redirect()->back() ;
    }
    public function showvisiteur(){
        $visiteurs =  Visiteur::all();
        $visiteurscount =  Visiteur::all()->count();
       return view('dashboard.visiteur',['visiteurs'=>$visiteurs ,'visiteurscount'=>$visiteurscount]);
        
    }
    public function editconf($id){

         $conference = Conference::find($id);
          $conferencewithInter = Conference::find($id)->intervenants()->get();
          $count = $conferencewithInter->count();
         $Intervenants =Intervenant::all();
      if ($conference){
        return view('dashboard.editConf',['conference'=>$conference,'conferencewithInter'=>$conferencewithInter ,
        'Intervenants'=>$Intervenants,'count'=>$count ,'id'=>$id] );
      }
       else{
        session()->flash('failed', 'Probleme de chargment');
        return redirect()->back();

       }
        
    }

    public function updateConf( Request $request){
       
        $conferencce = Conference::find($request->id);
    $stack =[];
    try {
        foreach($request->addmore as $key => $team)
   {
    
        $intervenant =  Intervenant::where("nom_prenom",$team['nom'])->get();
        if (in_array($intervenant[0]->id,$stack))
        {
           
        }
        else{
           array_push($stack, $intervenant[0]->id);
        }
        
       
   }
       
   
   
    } catch (\Throwable $th) {
       return redirect()->back()->with(['listerror'=>"Un problème est survenu veuillez réessayer de nouveau"]);
    }
    $conferencce->titre=$request->title;
    $conferencce->evenement_conf=$request->evenement_conf;
    $conferencce->cat_conf= $request->cat_conf;

    $conferencce->lieu=$request->lieu;
    $conferencce->date=$request->date;
    $conferencce->salle= $request->salle;
    $conferencce->details=$request->details;
    $conferencce->type= "D14";
    $conferencce->thematique ="thmatiue";
     
    $conferencce->etat=5;
     switch ($request->heure){
        case('1'):
            $conferencce->heure_deb	='08:45:00';
            $conferencce->heure_fin	='10:45:00';
            break;
            case('2'):
                $conferencce->heure_deb	='11:00:00';
                $conferencce->heure_fin	='13:00:00';
                break;
                case('3'):
                    $conferencce->heure_deb	='14:00:00';
                    $conferencce->heure_fin	='16:00:00';
                    break;
                    case('4'):
                        $conferencce->heure_deb	='16:15:00';
                        $conferencce->heure_fin	='18:15:00';
                        break;
     }
    $conferencce->reposnable=$request->reposnable;
    $conferencce->discutant=$request->discutant;
    $conferencce->moderater=$request->moderater;
    $conferencce->resumes_fr=$request->resumes_fr;
    $conferencce->resumes_ar=$request->resumes_ar;
    $conferencce->resumes_ang=$request->resumes_ang;
     
     $conferencce->save();
      
   
 $conferencce->intervenants()->detach();
 $conferencce->intervenants()->sync( $stack);
     session()->flash('success', 'modification effectué avec succés');

     return redirect()->back();
    }

    public function showadd()
    {
        $Conferences = Conference::with('intervenants')->get();
            $Countconf=  $Conferences->count();
            $countInter =  Intervenant::all()->count();
              $Intervenants  = Intervenant::all();
        return view('dashboard.addEvent', ['Countconf'=> $Countconf ,
        'countInter'=>$countInter ,'Intervenants'=>$Intervenants ]);
    }
}
