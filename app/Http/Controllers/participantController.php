<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use App\Http\Requests\StorePartcipant;
use App\Models\User;
use App\Rules\MailValidator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

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
    public function create(Request $request,$lang)
    {
        App::setLocale($lang);

        $request->validate([
               'nom'=>'required | min:2',
            'prenom'=>'required | min:2',
            'email'=>'required|email|',
            'email'=> new MailValidator(),
            'paysresidence'=>'required | min:2',
            'universite'=>'required_without_all:faculte,labo,institution',
            'faculte'=>'required_without_all:universite,labo,institution',
            'labo'=>'required_without_all:universite,faculte,institution',
            'institution'=>'required_without_all:universite,faculte,labo',
            'statut'=>'required'

        ],
        [
            'required' =>__('validation.required'),
            'min' => __('validation.min'),
            'email'=>__('validation.email'),
            'unique' =>__('validation.unique'),
            'password.min' =>'taille manimale de :attribute est 6 ',
            'required_without_all' =>__('validation.required_without_all'),
            /*'faculte'=>'required_without:universite,labo,institution',
            'labo'=>'required_without:universite,faculte,institution',
            'institution'=>'required_without:universite,faculte,labo'*/
        ]);
       /* $result = DB::table('participants')->where('email',$request->email)->get()->count();
        // dd( $result  );
         if ( $result > 0 ){

             //$request->session()->flash('$error','Email exist deja ');
             return redirect()->back()->with('error','You have no permission for this page!');
         }
         else {*/
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
    /*}
       /* $Participant = new Participant();
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
 return redirect()->back();*/
    }

}
