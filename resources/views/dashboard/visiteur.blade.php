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
            <h4>Dashboard Visiteurs</h4>
          </div>
        
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-3" >
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5"><h1 style="font-size: 60px;">  {{$visiteurscount }}</h1>Visiteurs   </div>

            </div>
          </div>
         
          </div>


        </div>

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
              
              </form>
<hr>
              <table id="example" class="table table-striped data-table" style="margin-top:150px; width: 100%">
                                    <thead>

                                        <tr>
                                            <th>Nom 
                                            </th>
                                            <th>prenom </th>
                                            <th>Email </th>
                                            <th>Telephone </th>
                                            <th>Qualité </th>
                                        </tr>
                                    </thead>
         
                                    <tbody>
                                    @foreach($visiteurs  as $visiteur)
                                        <tr>
                                      
                                            <td>  {{ $visiteur->nom}}
                                            </td>
                                            <td>{{ $visiteur->prenom}}</td>
                                            <td>{{ $visiteur->email}}</td>
                                            <td>{{ $visiteur->telephone}}</td>
                                            <td>{{ $visiteur->qualite}}</td>

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
