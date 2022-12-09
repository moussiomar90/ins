<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styledash.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css"/>
    
    <title>Dashboard</title>
</head>
  <body>
  
    <!-- top navigation bar -->
    @include('/dashboard/layout/topnav');
    <!-- top navigation bar -->

       <!-- offcanvas -->
    @include('/dashboard/layout/offcanvas');
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
    
        <div class="row">
          <div class="col-md-12 mb-3">
            <style>
                header{
                  background-color: #224474;
                  height: 80px;
                  font-size: 1.9em;
                  color: white;
              padding: 2%;
                }</style>
                <body>
                 
              <div class="container">
                <form class="row g-3" id="myform"  action="/dashboard/update" method="POST"
                 enctype="multipart/form-data">
                @csrf
              <header>
                    <a>  Modification conferences
                    </a>    </header>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div>
          
                    @endif
                    <div class="col-md-4">
                      <label for="inputEmail4" class="form-label">ID   </label>
                     
  <input type="text" name="id" readonly class="form-control" value="{{ $conference->id }}">
                    </div>
                   <hr>
                  <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Titre   </label>
                   
 
                    <input type="text" class="form-control" value="{{ $conference->titre }}" 
                    name="title" id="inputEmail4" required >

               
                
                
                  </div>
                  <div class="col-md-4">
                      <label for="inputState" class="form-label">événement {{old('evenement_conf')}}</label>
                      <select id="evenement_conf" class="form-select" name="evenement_conf">
                        
                        <option value="1" @if( $conference->evenement_conf == '1' )  selected @endif>Session inaugurale</option>
                        <option   @if($conference->evenement_conf == '2'  )  selected @endif  value="2" >Symposium CriseS</option>
                        <option   @if( $conference->evenement_conf == '3'  )  selected @endif    value="3" >Cycle "Les sciences humaines et sociales au Maghreb et ailleurs : bilans et perspectives”</option>
                        <option   @if( $conference->evenement_conf == '4'  )  selected @endif   value="4" >Congrès INSANIYYAT</option>
                        <option   @if( $conference->evenement_conf == '5'  )  selected @endif   value="5" >Rencontre « Traduction et Circulation des savoirs »</option>
                        <option   @if( $conference->evenement_conf == '6'  )  selected @endif   value="6" >Rencontre « Humanités numériques »</option>
                        <option   @if( $conference->evenement_conf == '8'  )  selected @endif   value="8" >Rencontre “Arts, culture et cinéma”</option>
                        <option  @if( $conference->evenement_conf == '9'  )  selected @endif    value="9" >@INSANIYYAT - Congrès de l’IAMES</option>
                        <option    @if( $conference->evenement_conf == '10'  )  selected @endif   value="10" >@INSANIYYAT - Sousse</option>
                        <option   @if( $conference->evenement_conf == '11' )  selected @endif   value="11" >@INSANIYYAT - Diex</option>
                        <option  @if( $conference->evenement_conf == '12' )  selected @endif    value="12" >Session de clôture</option>
                      </select>
                  </div>
                  <fieldset class=" col-md-3">
                      <legend class="col-form-label col-sm-2 pt-0">Catégorie:</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cat_conf" id="gridRadios1" value="1" @if( $conference->cat_conf == '1' )  checked @endif>
                          <label class="form-check-label" for="gridRadios1">
                              A.G ( Atelier du GIS)

                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cat_conf" id="gridRadios2" @if( $conference->cat_conf == '2' )  checked @endif value="2">
                          <label class="form-check-label" for="gridRadios2">
                              A.I ( Atelier IAMES)

                          </label>
                        </div>
                        <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="cat_conf" id="gridRadios3" @if( $conference->cat_conf == '3' )  checked @endif value="3" >
                          <label class="form-check-label" for="gridRadios3">
                              A (Atelier)

                          </label>
                        </div>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="cat_conf" id="gridRadios2" @if( $conference->cat_conf == '4' )  checked @endif value="4">
                          <label class="form-check-label" for="gridRadios2">
                              A.M (Atelier marié)


                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cat_conf" id="gridRadios2" @if( $conference->cat_conf == '5' )  checked @endif value="5">
                          <label class="form-check-label" for="gridRadios2">
                              C (conférence)


                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="cat_conf" id="gridRadios2" @if( $conference->cat_conf == '6' )  checked @endif value="6">
                          <label class="form-check-label" for="gridRadios2">
                              T.R. ( Tables Rondes)


                          </label>
                        </div>


                    </fieldset>
                    <hr>
              <h2 style="color: #224474">    | Date et Lieu
              </h2>
                    <div class="col-md-3">
                      <label for="inputState" class="form-label">Lieu</label>
                      <select id="lieu" name="lieu" class="form-select" >
                       
                        <option value="AMPHITHÉÂTRE CARTHAGE AL-HADATHA" @if( $conference->lieu == 'AMPHITHÉÂTRE CARTHAGE AL-HADATHA' )  selected @endif  >AMPHITHÉÂTRE CARTHAGE AL-HADATHA</option>
                        <option value="ISAMM" @if( $conference->lieu == 'ISAMM' )  selected @endif>ISAMM</option>
                        <option value="CITÉ DE LA CULTURE" @if( $conference->lieu == 'CITÉ DE LA CULTURE' )  selected @endif >CITÉ DE LA CULTURE</option>
                        <option value="ESCT" @if( $conference->lieu == 'ESCT' )  selected @endif >ESCT</option>
                        <option value="FLAHM"  @if( $conference->lieu == 'FLAHM' )  selected @endif >FLAHM</option>
                      </select>
                  </div>



                    <div class="col-md-3">
                      <label for="inputState" class="form-label">Date    </label>
                      <select id="date" name="date" class="form-select">
                     
                      
                        <option value="2022-09-20" @if( $conference->date == '2022-09-20' )  selected @endif >Jour 1 : 20/09/2022</option>
                        <option value="2022-09-21"  @if( $conference->date == '2022-09-21' )  selected @endif>Jour 2 : 21/09/2022</option>

                        <option value="2022-09-22"  @if( $conference->date == '2022-09-22' )  selected @endif>Jour 3 : 22/09/2022</option>
                        <option value="2022-09-23"  @if( $conference->date == '2022-09-23' )  selected @endif>Jour 4 : 23/09/2022</option>
                        <option value="2022-09-24"  @if( $conference->date == '2022-09-24' )  selected @endif>Jour 5 : 24/09/2022</option>

                      </select>
                  </div>


                  <fieldset class=" col-md-2">
                      <legend class="col-form-label col-sm-2 pt-0">Créneau Horaire</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="heure" id="gridRadios1" value="1" @if( $conference->heure_deb == '08:45:00' )  checked @endif>
                          <label class="form-check-label" for="gridRadios1">
                            8:45-10:45

                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="heure" id="gridRadios2" value="2" @if( $conference->heure_deb == '11:00:00' )  checked @endif>
                          <label class="form-check-label" for="gridRadios2">
                            11.00-13.00


                          </label>
                        </div>


                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="heure" id="gridRadios2" value="3" @if( $conference->heure_deb ==  '14:00:00' )  checked @endif>
                          <label class="form-check-label" for="gridRadios2">
                            14.00-16.00


                          </label>
                        </div>
                        
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="heure" id="gridRadios2" value="4" @if( $conference->heure_deb ==  '16:15:00' )  checked @endif>
                          <label class="form-check-label" for="gridRadios2">
                            16.15-18.15


                          </label>
                        </div>

                      </div></fieldset>




                      {{-- SALLE a voir  --}}
                      <div class="col-3">
                  
                        <label for="inputAddress" class="form-label">Salle</label>
                        
                        <input type="text" value="{{ $conference->salle }}" class="form-control" id="inputAddress" required name ="salle" placeholder="....">
    
                       
                      </div>
        {{-- SALLE a voir  --}}









                  <div class="col-4">
                  
                    <label for="inputAddress" class="form-label">Responsable</label>
                    
                    <input type="text" class="form-control" id="inputAddress"
                       name ="reposnable" value="{{ $conference->reposnable }}">

                    

                  </div>
                  <div class="col-4">
                   
                    <label for="inputAddress2" class="form-label">Discutant(e)</label>
                   
                    <input type="text" class="form-control" id="inputAddress2"  
                     name="discutant" value="{{ $conference->discutant }}">

                 
                  </div>
                  <div class="col-4">
                      <label for="inputAddress2" class="form-label"  >Modérateur </label>

                       
<input type="text" class="form-control"   id="inputAddress2" name="moderater" value="{{ $conference->moderater }}">

 
                    
                    </div>
                    <hr>
                    <h2 style="color: #224474">    | Intervenants
                    </h2>

                    <table class="table table-bordered" id="dynamicTable">
                        <tr>
                            <th>Nom</th>
                           
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td> 
                              
                             
                              <select    id="intervenant" class="form-control">
                            <option  >
                            </option>
                              @foreach($Intervenants as $Intervenant)
                          
                              <option value="{{  $Intervenant->nom_prenom  }}">
                              {{  $Intervenant->nom_prenom }}
                          </option>
                          
                         
                        
                              @endforeach
                              </select>
            
                            <div id="countryList" >
                
                </div>
                          </td>
                           <td>
                             <button type="button" name="add" id="add" class="btn btn-success">Ajouter</button>
                            
                            </td>
                        </tr>
                        @foreach($conferencewithInter as $Intervenant)
                        <tr>
                            <td><input type="text" id="addel" value="{{$Intervenant->nom_prenom}} " 
                            name="addmore[{{$loop->index+1 }}][nom]" placeholder="..." class="form-control" readonly="readonly"/></td> <td>
                            <button type="button" class="btn btn-danger remove-tr">X</button></td>
                        </tr>
                        @endforeach
                    </table>
        
     
        <div>
                    <label for="description">Description: </label>

                    <input id="x" type="hidden" name="details" value="{{ $conference->details}}"  >
  <trix-editor input="x"> </trix-editor>
   

  <div>
    <div style="background-color:rgb(240, 240, 240)">

      <h2 style="color: #224474">les résumés:</h2>



      <div>
       <label for="description">Francais: </label>
       
       <input id="resumes_fr" type="hidden" name="resumes_fr" value="{{ $conference->resumes_fr}}"  >
       <trix-editor input="resumes_fr"> </trix-editor>
        
       
       </div>




       <div>
         <label for="description">Arabe: </label>
         
         <input id="resumes_ar" type="hidden" name="resumes_ar" value="{{ $conference->resumes_ar}}"  >
         <trix-editor input="resumes_ar"> </trix-editor>
          
         
         </div>


         <div>
           <label for="description">Anglais: </label>
           
           <input id="resumes_ang" type="hidden" name="resumes_ang" value="{{ $conference->resumes_ang}}" >
           <trix-editor input="resumes_ang"> </trix-editor>
            
           
           </div>

     </div>

 
                  


                  <div class="col-12">
                  <input type="submit">
                  </div>
                </form>
              
              </div>

                </body>


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">
    var i = {{$count}};

       $("#add").click(function(){

         
if (i<8){

  if($('#intervenant').val() ==""){
      alert('champ vide ')
    }
 else{
  ++i;

           $("#dynamicTable").append('<tr><td><input type="text" id="addel" value="'+  $('#intervenant').val()+'" name="addmore['+i+'][nom]" placeholder="..." class="form-control" readonly="readonly"/></td> <td><button type="button" class="btn btn-danger remove-tr">X</button></td></tr>');
          }
       
          }});

       $(document).on('click', '.remove-tr', function(){
            $(this).parents('tr').remove();
       });
    </script>
    <script>
      $( "#myform" ).submit(function( event ) {
   
        if($('#evenement_conf').val()=="Choisir"){
          alert("veuillez vérifier le champ Evenement");
          event.preventDefault();
        }
        if($('#lieu').val()=="choisir.."){
          alert("veuillez vérifier le champ lieu");
          event.preventDefault();
        }
        if($('#date').val()=="choisir.."){
          alert("veuillez vérifier le champ date");
          event.preventDefault();
        }
   if($('#addel').length ){
       
    if($('#x').val() ==""){
      alert("Champ details est VIde");
      event.preventDefault();
    }
	}else{
		alert("Liste des intervenant est vide");
    event.preventDefault();
	} 
  
   
});
</script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://unpkg.com/trix@2.0.0-alpha.0/dist/trix.umd.js"></script>
    <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('/js/script.js')}} "></script>
    

  </body>
</html>
