<style>
    .ligne {
        text-decoration: underline overline #224474;
    }
</style>
<div class="container py-5">
        <!-- For demo purpose -->
        <div class="row mb-12">



        </div>
        <div class="row">

        
        @include('view.visiteurs')


        </div>
        </div>
        <div>
            <div class="container">
                <div class="row col-lg-12 col-md-12 col-xs-12" >
                    <div>
                        <h3 class="titreprog">{{__('registration.Frais d’inscription')}}

 <div id="carre"></div>
                        </h3>
                    </div>


                </div>

                    <style>



.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px

}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

* {
    outline: none
}

.table th,
.table thead th {

    font-weight: 500

}

.table thead th {
    vertical-align: bottom;
}

.table th {
    padding: 0,5rem;
    color:#224474;
    vertical-align: top;
}

.table th,
.table thead th {
    font-weight: 500

}

th {
    text-align: inherit;
    color:#224474;

}
th {
    font-size: large;
    color:#224474;

}

.m-b-20 {
    margin-bottom: 20px
}





</style>
        <div class="container" style=" margin-top: 20px">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 ">
            <div class="card">

                <div class="table-responsive">
                    <table class="table" style="    color:#224474;
">

                        <tbody class="customtable">
                            <tr>
                                <th> </th>
                                <td>50 TND - 15€
</td>
                                <td>{{__('registration.pour les Doctorant.e.s ou Post-Doctorants issus d’un établissement du Sud')}}.</td>
                            </tr>
                            <tr>
                                <th>  </th>
                                <td>80 TND - 25€</td>
                                <td>{{__('registration.pour les Doctorant.e.s ou Post-Doctorants issus d’un établissement du Nord')}}.</td>
                            </tr>
                            <tr>
                                <th> </label> </th>
                                <td>165 TND - 50€</td>
                                <td>{{__('registration.pour les chercheur.e.s ou enseignants-chercheurs d’un pays du Sud')}}.</td>
                            </tr>
                            <tr>
                                <th> </label> </th>
                                <td>230 TND - 70€</td>
                                <td>{{__('registration.pour les chercheur.e.s ou enseignants-chercheurs d’un pays du Nord')}}.</td>
                            </tr>
                            <tr>
                                <th> </label> </th>
                                <td>{{__('registration.exemption')}}</td>

                                <td> {{__('registration.pour les étudiants de licence et master dans le public')}}.</td>
                            </tr>
                            <tr>
                                <th>  </th>
                                <td>{{__('registration.exemption')}} </td>

                                <td>{{__('registration.pour les membres d’un comité Insaniyyat')}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <br>
    <br>
<hr>
<p class="pprog">{{__('registration.Ces frais vous donnent le droit d’assister aux différentes journées et activités du Forum  et comprennent la fourniture de la documentation et la prise en charge des pause-café, des déjeuners et du transport du lieu de résidence des participants au lieu du Forum durant les 5 jours de la manifestation. Les frais de déplacement internationaux et d’hébergement sont à la charge du participant. T’es tarifs préférentiels négociés avec une liste d’ hôtels de Tunis sont disponible sur la page')}} <a href="/hebergement">hébergement</a>.
</p>
<div style="margin:5%">
                        <h3 class="titreprog">{{__('registration.Modalités de paiement')}} : </h3> <div id="carre"></div>

<p class="pprog">{{__('registration.Le paiement doit s’effectuer')}}<b> {{__('registration.par un virement bancaire')}}</b> {{__('registration.vers l’un des comptes bancaires suivants')}}  : </p>
 <ul class="pprog" style="margin-left: 10%;">

 {{ asset('img/pdf/RIB IRMC_TRESOR PUBLIC-01.png') }}

 <li><a href="{{ asset('img/pdf/RIB IRMC_TRESOR PUBLIC-01.png') }}" target="_blank" ><i class="fa fa-file"></i><u style="color: #224474;">{{__('registration.Compte pour paiement en Euros (EUR)')}}</a></a></u>
</li>

<li><a href="{{ asset('img/pdf/RIB IRMC_TRESOR PUBLIC-01.png') }}" target="_blank" ><i class="fa fa-file"></i><u style="color: #224474;">{{__('registration.Compte pour paiement en Dinar tunisiens (TND)')}}</a></a></u>
</li></ul>




 <p class="pprog"> {{__('registration.Mention obligatoire : Insaniyyat suivi par votre Nom et Prénom.')}}

 {{__('registration.Pour ceux qui veulent valider')}}  <b>{{__('registration.par Bon de Commande,')}}</b> {{__('registration.ce dernier doit être libellé au nom de l’IRMC :  20 rue Mohamed Ali Tahar, Mutuelleville, 1002, Tunis-TUNISIE.')}} <br><br>
 {{__('registration.Pour pouvoir valider votre participation au Forum,Veuillez nous envoyer une copie scannée de')}}<b> {{__('registration.l’ordre de virement bancaire')}} </b>{{__('registration.ou de')}} <b>{{__('registration.votre Bon de Commande')}}</b> {{__('registration.par e-mail à  : inscription.insaniyyat@gmail.com. pour pouvoir valider votre participation au Forum')}}.
</p>
<a target="_blank">

</p>


                    </div>
</div>
            </div>
        </div>

        <style>
            .fond-container {
                background-image: url("fond-container.png");
                background-repeat: no-repeat;
                background-position: right;
            }
            img{
                width: 12%;
            }
        </style>
        <!-- div-frais-inscription -->


            </div>

        </div>


    </div>
    @include('Partials.footer')
