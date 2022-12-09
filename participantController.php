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
        $data =  array(

            'subject'=>'validation inscription',
            'to'=>  $email,
            'bcc'=>'onetouch1198@gmail.com',
            'key'=>'123AZE!rty',
            'body0' => "<div style='background-color: rgb(240, 236, 236);'>


            <center>
                <h2> Votre inscription a bien été prise en compte.</h2>
            </center>
            <center>
                <p> Afin de la valider, veuillez régler les frais par virement bancaire sur le compte de l’IRMC ou par Bon
                    de commande.
                </p>
            </center>

            <center>
                <p>20 Rue Mohamed Ali Tahar, Tunis 1002</p>
            </center>

            <center>   <p>+216 71 796 722</p></center>

            <center>
                <p>Si vous avez sollicité une exemption, celle-ci sera examinée dans les meilleurs délais par le comité
                    d'organisation
                </p>
            </center>
        </div>",

        );

           $ch = curl_init();

           $option = array(
        CURLOPT_URL => "http://www.riadi.rnu.tn/mailing/PHPMailer-master/mail_insanniyat_at_cck2.php",
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_RETURNTRANSFER =>1

           );

           curl_setopt_array($ch ,$option);

           $result = curl_exec($ch);

           curl_close($ch);

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
