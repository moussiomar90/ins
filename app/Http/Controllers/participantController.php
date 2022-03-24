<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use App\Http\Requests\StorePartcipant;
use App\Models\User;

class participantController extends Controller
{
    public function show()
    {
        $participants = Participant::all();
        return view('adminp',['participants'=>$participants]);
    }
    public function confirmation($id)
    {

        Participant::where('id', $id)
        ->update(['confirmation' => 1,]);

      return redirect()->back();
    }


     function sendEmail($email)
    {
        $details = [
            'title' => 'Mail from ADMI',
            'body' => 'This is for testion'
        ];
        Mail::to($email,'Insaniyyat')->send(new TestMail($details));

    }
    public function create(Request $request)
    {
       // StorePartcipant::create($request->all());
        $request->validate([
               'nom'=>'required | min:2',
            'prenom'=>'required | min:2',
            'email'=>'required|email|unique:Participants',
            'paysresidence'=>'required | min:2',
            'universite'=>'required_without_all:faculte,labo,institution',
            'faculte'=>'required_without_all:universite,labo,institution',
            'labo'=>'required_without_all:universite,faculte,institution',
            'institution'=>'required_without_all:universite,faculte,labo',
            'statut'=>'required'

        ],
        [
            'required' => 'veuillez renseigner le  champ :attribute  .',
            'min' => 'taille manimale de :attribute est 2 .',
            'email'=>'format adresse electronique incorrect',
            'unique' =>'Cette adresse e-mail est déjà utilisée!',
            'password.min' =>'taille manimale de :attribute est 6 ',
            'required_without_all' =>"l'un de ces champs doit être renseigné",
            'faculte'=>'required_without:universite,labo,institution',
            'labo'=>'required_without:universite,faculte,institution',
            'institution'=>'required_without:universite,faculte,labo'
        ]);

        $Participant = new Participant();
        $Participant->nom=$request->nom;
        $Participant->prenom=$request->prenom;
        $Participant->email=$request->email;
        $Participant->telephone =$request->telephone ;
        $Participant->nationalite=$request->nationalite;
        $Participant->paysresidence =$request->paysresidence ;

        $Participant->statut_particulier =$request->statutparticulier;

        $Participant->universite=$request->universite;
        $Participant->faculte =$request->faculte ;
        $Participant->labo = $request->labo;
        $Participant->institution =$request->institution ;
        $Participant->statut =$request->statut ;

        $Participant->exemption =$request->exemption;

        $Participant->visite =$request->visite ;


       $Participant->save();
     $request->session()->flash('psuccess','informations ajouter avec succes . vous recevrez un mail de confirmation');

    $this->sendEmail($request->email);
 return redirect()->back();
    }

}
