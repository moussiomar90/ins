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
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
    <main class="mt-5 pt-3" id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Dashboard</h4>
                </div>
            </div>
            @if(session()->has('failed'))
            <div class="alert alert-success">
            {{ session('failed') }}
            </div>
  
            @endif
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body py-5">
                            <h1 style="font-size: 60px;">{{$countconf}} </h1>conférences
                        </div>

                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-warning text-dark h-100">
                        <div class="card-body py-5">
                            <h1 style="font-size: 60px;"> {{ $countInter }} </h1>Intervenants
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <span><i class="bi bi-table me-2"></i> conférence</span>
                        <a href="/dashboard_add" class="btn btn-primary" type="submit" href="">
                            <i class="bi bi-plus"> Ajouter conférence</i>
</a>

                        <div class="col-md-3 mb-3">

                        </div>

              <table id="example" class="table table-striped data-table" style="margin-top:150px; width: 100%">
                                    <thead>

                                        <tr>
                                          <th>Titre
                                          </th>
                                          <th>événement</th>
                                          <th>Lieu</th>
                                          <th>Date</th>
                                <th>Heure Deb</th>
                                <th>Heure Fin</th>
                                <th>Responsable</th>
                                <th>Modérateur</th>
                                <th>Discutant(e)</th>
                                <th>ACTION</th>
                                        
                                        </tr>
                                    </thead>
         
                                    <tbody>
                                      @foreach($Conferences  as $Conference)
                                        <tr>
                                      
                                          <td>{{ $Conference->titre}}
                                          </td>
                                          <td> 
                                    
                                            @switch($Conference->evenement_conf)
                                            @case(1)
                                            Session inaugurale
                                                @break
                                         
                                            @case(2)
                                            Symposium CriseS
                                                    @break
                                        
                                                    @case(3)
                                                    Cycle "Les sciences humaines et sociales au Maghreb et ailleurs : bilans et perspectives”  
                                                    
                                                    @break
                                        
                                                    @case(4)
                                                    Congrès INSANIYYAT
                                                @break
                                         
                                            @case(5)
                                            Rencontre « Traduction et Circulation des savoirs »            @break
                                        
                                                    @case(6)
                                                    Rencontre « Humanités numériques »
                                                    @break
                                        
                                        
                                                    @case(7)
                                                    Rencontre« Sciences sociales et Société »        @break
                                         
                                            @case(8)
                                            Rencontre “Arts, culture et cinéma”            @break
                                        
                                                    @case(9)
                                                    @INSANIYYAT - Congrès de l’IAMES            
                                                    @break
                                                    @case(10)
                                                    @INSANIYYAT - Sousse            @break
                                                    @case(11)
                                                    @INSANIYYAT - Diex         
                                                    @break
                                                    @case(12)
                                                    Session de clôture
                                                    @break
                                         
                                            @default
                                                Default case...
                                        @endswitch
                                          </td>
                                          <td>{{ $Conference->lieu }}</td>
                                          <td>{{ $Conference->date }}</td>
                                          <td>{{ $Conference->heure_deb }}</td>
                                          <td>{{ $Conference->heure_fin }}</td>
                                          <td>{{ $Conference->reposnable}}
                                          </td>
      
                                          <td>{{ $Conference->reposnable}}</td>
                                          <td> 
                                            {{ $Conference->moderater}}
      
                                          </td>
                                          <td >
                                              <div style="min-width:100px;">
                                           <div style="float:left; margin-right:5px;"> <a href="dashboard/edit/{{ $Conference->id}}" type="button" class="btn btn-info">
                                                <i class="fas fa-edit"></i>                                          
                                          </a></div>
                                          <div style="float:left;">
                                          <a href="dashboard/delete/{{ $Conference->id }}" type="button" class="btn btn-danger">
                                          
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                          
                                          </a>
                                          </div>
                                              </div>
                                          </td>

              </tr>@endforeach

              </tbody>
              </table>
                                            
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
    
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://unpkg.com/trix@2.0.0-alpha.0/dist/trix.umd.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
    

  </body>
</html>
