
<div class="col-lg-10 "style=" margin-left: auto;
    margin-right: auto">
    <div class="card ">

        <div class="card-header">

            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2" style="border-left: solid #0096AA;">
                <h3 class="form_title" style="color:#0096AA">Participant et intervenant </h3>
            </div>


            <div class="tab-content mt-3">


                <form method="POST" action="/pcreate">
                    @csrf
<!-- nom/prenom -->
                    <div class=" row mb-3">
                    <div class="col-md-6">
                         @if ($errors->first('nom'))
                        <input type="text" class="form-control" minlength="2" required name="nom" id="exampleInputEmail1" value="{{ old('nom') }}" style="border: 1px solid red;"  placeholder="Nom" value="{{ old('nom') }}" aria-describedby="emailHelp">
                        <div class="alert-danger">{{$errors->first('nom')}}</div>
                        @else
                        <input type="text" class="form-control" minlength="2" required name="nom" id="exampleInputEmail1" placeholder="Nom" value="{{ old('nom') }}" aria-describedby="emailHelp">
                        @endif
                    </div>


                    <div class="col-md-6">
                    @if ($errors->first('prenom'))
                        <input type="text" class="form-control" required name="prenom" value="{{ old('prenom') }}" style="border: 1px solid red;" minlength="2" id="exampleInputPassword1" placeholder="Prénom">
<div class="alert-danger">{{$errors->first('prenom')}}</div>
                        @else
                  <input type="text" class="form-control" required name="prenom" value="{{ old('prenom') }}"  minlength="2" id="exampleInputPassword1" placeholder="Prénom">

                  @endif


                    </div>
</div>
<!-- fin nom/prenom -->
<!-- email/tel -->

<div class=" row mb-3">
<div class="col-md-6">

@if ($errors->first('email'))
<input type="email" class="form-control" required name="email" value="{{ old('email') }}" style="border: 1px solid red;"  id="email" placeholder="E-mail">
<div class="alert-danger">{{$errors->first('email')}}</div>
@else
<input type="email" class="form-control" required name="email" value="{{ old('email') }}"   id="email" placeholder="E-mail">

@endif


                    </div>

                    <div class="col-md-6 ">

                            <input type="number" class="form-control"  minlength="1" id="exampleInputPassword1" name="telephone" placeholder="Téléphone (Facultatif)">

                        </div>

</div>
<!-- email/tel -->

<div class="row mb-3">
                        <div class="col-md-6 ">
                        @if ($errors->first('nationalite'))
                            <input type="text" class="form-control" required minlength="2" value="{{ old('nationalite') }}" style="border: 1px solid red;" id="exampleInputPassword1" name="nationalite" placeholder="Nationalité">
                            <div class="alert-danger">{{$errors->first('nationalite')}}</div>

                            @else
<input type="text" class="form-control" required minlength="2" value="{{ old('nationalite') }}"  id="exampleInputPassword1" name="nationalite" placeholder="Nationalité">

                            @endif
                        </div>
                        <div class="col-md-6 ">
                        @if ($errors->first('paysresidence'))
<input type="text" class="form-control" required minlength="2" id="exampleInputPassword1" value="{{ old('paysresidence') }}" style="border: 1px solid red;" name="paysresidence" placeholder="Pays de Résidence">
<div class="alert-danger">{{$errors->first('paysresidence')}}</div>
@else
<input type="text" class="form-control" required minlength="2" id="exampleInputPassword1" name="paysresidence" value="{{ old('paysresidence') }}" placeholder="Pays de Résidence">

@endif

</div>
                    </div>
                    <div class="row">

<div class=" col-lg-6 form-group ">
    <p style="color:#0096AA; color: grey; text-align:justify"><strong>Avez-vous besoin d’une assistance particulière pour l’obtention du visa ?</strong></p>

</div>
<!-- ::::::::: -->

<div class="col-lg-3 col-md-9 col-xs-12  "style=" margin:0 auto">
<input type="radio" id="flexRadioDefault1"
     name="statutparticulier" value="1" style="margin-right: 5%">
    <label for="flexRadioDefault1" style="margin-right: 5%">Oui</label>

    <input type="radio" id="flexRadioDefault1"
     name="statutparticulier" value="0" checked >
    <label for="flexRadioDefault2">Non</label>
</div>

<div class="col-lg-12" >

<p style="color: grey; font-size:10pt;text-align: justify; margin:-2% 0 0 0;
">Si oui, précisez la demande et envoyez les pièces justificatives par email à <a href="mailto::Insaniyyattunis2022@gmail.com">Insaniyyattunis2022@gmail.com.</a>
</p>
</div>
</div>

                    <hr>
                    <div class="row">
                                        <div class="col-md-12"style="" >
                                                <div class="form-group mb-12" >
                                                @if ($errors->first('statut'))
                                                    <input type="text"  name="statut" value="{{ old('statut') }}"   placeholder="--Choisir votre statut--" list="l1"  class="form-control"   >
                                                    <div class="alert-danger">{{$errors->first('statut')}}</div>
                                             @else
                                             <input type="text"  name="statut" value="{{ old('statut') }}"  placeholder="--Choisir votre statut--" list="l1"  class="form-control"   >

                                                    @endif

                                                    <datalist id="l1">
                                                   <select class="form-control autre" id="" size="3">

                                                        <option value="" selected disabled ></option>
                                                        <option value="Doctorant.e ou Postdoctorant.e" >issu.e d'un établissement du Sud : 50 TND/15 €</option>
                                                        <option value="Doctorant.e ou Postdoctorant.e" >issu.e d'un établissement du Nord : 80 TND/25 €</option>
                                                        <option value="Chercheur.e ou Enseignant.e-chercheur.e">d’un pays du Sud : 165 TND/50 €</option>
                                                        <option value="Chercheur.e ou Enseignant.e-chercheur.e">d’un pays du Nord : 230 TND/70 €</option>
                                                        <option value="Etudiant.e (Licence ou Master)">exempté.e</option>
                                                        <option value="Membre d’un comité d’Insaniyyat">exempté</option>
                                                        <option value="Autre"  >165 TND/50 €</option>



                                                    </select></div>
                                               </div>
                                            </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                        @if ($errors->first('universite'))
                            <input type="text" class="form-control"  value="{{ old('universite') }}" minlength="2" id="exampleInputPassword1" name="universite" placeholder="Université">
                            <div class="alert-danger">{{$errors->first('universite')}}</div>
                        @else
                        <input type="text" class="form-control" value="{{ old('universite') }}"   minlength="2" id="exampleInputPassword1" name="universite" placeholder="Université">

                            @endif

                        </div>
                        <div class="col-md-6">
                        @if ($errors->first('faculte'))
                            <input type="text" class="form-control" value="{{ old('faculte') }}"  minlength="2" id="exampleInputPassword1" name="faculte" placeholder="Faculté, Institut, Ecole">
                            <div class="alert-danger">{{$errors->first('faculte')}}</div>

                            @else
                            <input type="text" class="form-control" value="{{ old('faculte') }}" minlength="2" id="exampleInputPassword1" name="faculte" placeholder="Faculté, Institut, Ecole">

                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">


                    <div class="col-md-6">
                    @if ($errors->first('labo'))
                            <input type="text" class="form-control"   minlength="2" value="{{ old('labo') }}"  id="exampleInputPassword1" name="labo" placeholder="Laboratoire de recherche">
                            <div class="alert-danger">{{$errors->first('labo')}}</div>
@else
<input type="text" class="form-control"   minlength="2" id="exampleInputPassword1" name="labo" value="{{ old('labo') }}"  placeholder="Laboratoire de recherche">

@endif
                        </div>

                        <div class="col-md-6">
                        @if ($errors->first('institution'))

                            <input type="text" class="form-control"   minlength="2" id="exampleInputPassword1" value="{{ old('institution') }}" name="institution" placeholder="Institution non académique">
                            <div class="alert-danger">{{$errors->first('institution')}}</div>

                            @else

<input type="text" class="form-control"   minlength="2" id="exampleInputPassword1" name="institution" placeholder="Institution non académique" value="{{ old('institution') }}" >

@endif
                        </div>




                                        </div>


                    <!-- champpaysresidence -->

                    <!-- finchampspaysresidence -->
<!-- champ refugié -->

<!-- fin champ refugié -->

<hr>

<div class="row">

<div class=" col-lg-6 form-group ">
<p style="color:#0096AA; color: grey; text-align:justify; "> <strong>Demandez-vous une exemption des frais d’inscription ?</strong>
</p><br>
</div>



<div class="col-lg-3 col-md-9 col-xs-12 "style=" margin:0 auto">
<input type="radio" id="flexRadioDefault1"
    required name="exemption" value="1" style="margin-right: 5%">
    <label for="flexRadioDefault1" style="margin-right: 5%;">Oui</label>

    <input type="radio" id="flexRadioDefault1"
     name="exemption" value="0" checked>
    <label for="flexRadioDefault2">Non</label>
</div>

<div class="col-lg-12" >
<p style="color: grey; font-size:10pt;text-align: justify;margin:-4% 0 0 0;
"></u>Si oui, envoyez votre demande par mail à <a href="mailto::Insaniyyattunis2022@gmail.com">Insaniyyattunis2022@gmail.com.</a>
</a> L’exemption s’adresse aux jeunes chercheurs non titulaires, en particulier des pays du Sud. La demande d’exemption peut être accompagnée d’une demande de soutien financier pour la mobilité qui sera examinée par le comité d’organisation. </p>
</div>
</div>





    <hr>





<div class="row">

<div class=" col-lg-6 form-group ">
<p style="color:#0096AA; color: grey; text-align:justify ; margin-right:20px"> <strong>Voulez-vous réserver pour la visite du musée du Bardo et du site de Carthage le 25 septembre 2022 ?</strong>
</p><br>
</div>



<div class="col-lg-3 col-md-9 col-xs-12 "style=" margin:0 auto">
<input type="radio" id="flexRadioDefault1"
    required name="visite" value="1"style="margin-right: 5%" >
    <label for="flexRadioDefault1" style="margin-right: 5%;">Oui</label>

    <input type="radio" id="flexRadioDefault1"
     name="visite" value="0" checked>
    <label for="flexRadioDefault2">Non</label>
</div>

<div class="col-lg-12" >
<p href="#" style=" color:grey;"></p></div>
</div>









            </div>

        </div>
    </div> <!-- End -->
    <!-- Paypal info -->
    <div class="form-group"> <label for="username">
        </label> <button type="submit" class="subscribe btn   btn-block shadow-sm" style="background-color: #224474; color:aliceblue">s'inscrire</button>

        </form>

    </div>
</div>
