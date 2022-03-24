


<div class="col-lg-10" style=" margin-left: auto;
    margin-right: auto" >
    <div  >
            @if (session()->has('vsuccess'))
        <div class="alert alert-primary" role="alert">
            {{session()->get('vsuccess')}}
        </div>
        @endif
                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2" style="border-left: solid #0096AA;">

                    <h3 class="form_title" style="color:#0096AA">   |  Visiteur
</h3>

                </div> <!-- End -->
                <div class="tab-content">

                    <div id="" class="tab-pane fade show active pt-3">
                        <form role="form" action="/vcreate" method="POST">
                            @csrf
                            <div class="form-group"> <label for="username">

                                </label>


                                <div class="form-group">

                                <div class=" row mb-3">
                    <div class="col-md-6">


                                    <input type="text" name="nom" placeholder="Nom" required minlength="2" class="form-control ">
                                </div>
                                <div class="col-md-6">

                                    <input type="text" name="prenom" placeholder="Prénom" required minlength="2" class="form-control ">

                                </div></div>


                                <div class=" row mb-3">
                    <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email" required minlength="2" class="form-control ">
                    </div>
                    <div class="col-md-6">
                                   <input type="number" name="tel" placeholder="Tel" required minlength="5" class="form-control ">


                    </div>  </div>
                    <div class="row">
                                    <div class="col-lg-12" style="">
                                                <div class="form-group" style="">

                                                    <input type="text"  name="qualite" placeholder="Qualité" list="l2"  class="form-control"  >
                                             <datalist id="">
                                                   <select class="" id="l2"  name="qualitelist">

                                                        <option value="" selected disabled></option>
                                                        <option>Press Média</option>
                                                        <option>ONG</option>
                                                        <option>Universitaire</option>
                                                        <option>Etudiant.E.S</option>
                                                        <option>Professionnel secteur privée ou publique</option>
                                                        <option>Autre</option>

                                                    </select>
                                               </div>
                                            </div>
                                </div>

                            </div>

                            <button type="submit" class="subscribe btn  btn-block shadow-sm" style="background-color: #224474; color:aliceblue">s'inscrire</button>


                            </form>
                         </div>
                </div>
                <br>

            </div>
            </div>

