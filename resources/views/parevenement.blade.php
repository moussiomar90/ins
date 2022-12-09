<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 initial-scale=1.0,user-scalable=no, viewport-fit=cover​">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Programme-evenements</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href=" {{ asset('css/ligne.css') }}">
    <link rel="stylesheet" href=" {{ asset('style.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/paginate.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    @if(session()->has('error'))
    <div style="color:#721c2;"  class="alert alert-danger" role="alert">
        <p class="alert {{ session('alert-class') }}">{{ session('error') }}
           <a href="/parevenement/1" style="color:#721c2;" >retour a la page des Evenement </a></p>
        
               </div>  {{ session()->forget('error'); }}
@else
<div id="scroll_to_top"></div>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Programme</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Programme</p>
                <li >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Par jour</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                        <a href="/session/2022-09-20/Amphithéâtre Carthage al-Hadatha">Mardi 20 septembre</a>

                        </li>
                        <li>
                            <a href="/session/2022-09-21/Amphithéâtre Carthage al-Hadatha">Mercredi 21 septembre</a>
                        </li>
                        <li>
                            <a href="/session/2022-09-22/Amphithéâtre Carthage al-Hadatha">Jeudi 22 septembre</a>
                        </li>
                        <li>
                            <a href="/session/2022-09-23/Amphithéâtre Carthage al-Hadatha">Vendredi 23 septembre</a>
                        </li>
                        <li>
                            <a href="/session/2022-09-24/Amphithéâtre Carthage al-Hadatha">Samedi 24 septembre</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                <a href="/parevenement/1">Par évènement</a>
                </li>

                <li>
                <a href="/parintervenant">Par intervenant</a>
                </li>

            </ul>


        </nav>
        <style>
            #scroll_to_top {
  position: fixed;
  width: 25px;
  height: 25px;
  bottom: 50px;
  right: 50px;
}

	
.container-fluid .h1{
        font-size: 2.5rem
    }
        </style>
        <div id="scroll_to_top">
            <a href="#top"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>
            </a>
        </div>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <h1 style="color: white;">Par événement </h1>
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>



                </div>

            </nav>


            <div>
                <style>

    </style>
                <!-- section date -->

                <!-- section bouton -->
                    <div class="bouton active col-12 col-s-6" >
                    <a href="/parevenement/1" >        <span class="button" @if ($id == '1') style="color: coral;" @endif>Session inaugurale ➜</span></a>
                    <a href="/parevenement/2">     <span class="button"  @if ($id == '2') style="color: coral;" @endif>Symposium CriseS ➜</span></a>
                    <a href="/parevenement/3">   <span class="button" @if ($id == '3') style="color: coral;" @endif>Cycle "Les sciences humaines et sociales au Maghreb et ailleurs : bilans et perspectives” ➜</span></a>
                    <a href="/parevenement/4">   <span class="button" @if ($id == '4') style="color: coral;" @endif>Congrès INSANIYYAT ➜</span></a>
                    <a href="/parevenement/5">   <span class="button" @if ($id == '5') style="color: coral;" @endif>Rencontre « Traduction et Circulation des savoirs »</span></a>
                    <a href="/parevenement/6"> <span class="button" @if ($id == '6') style="color: coral;" @endif> Rencontre « Humanités numériques » ➜</span>
                    <a href="/parevenement/7">   <span class="button" @if ($id == '7') style="color: coral;" @endif>Rencontre« Sciences sociales et Société » ➜</span></a>
                    <a href="/parevenement/8">   <span class="button" @if ($id == '8') style="color: coral;" @endif>Rencontre “Arts, culture et cinéma”➜</span></a>
                    <a href="/parevenement/9">    <span class="button" @if ($id == '9') style="color: coral;" @endif>@INSANIYYAT - Congrès de l’IAMES ➜</span></a>



                    <a href="/parevenement/10"> <span class="button" @if ($id == '10') style="color: coral;" @endif>@INSANIYYAT - Sousse ➜</span></a>

                      <a href="/parevenement/11">  <span class="button" @if ($id == '11') style="color: coral;" @endif>@INSANIYYAT - Diex ➜</span></a>
                      <a href="/parevenement/12">  <span class="button" @if ($id == '12') style="color: coral;" @endif>Session de clôture ➜</span></a>

                <!-- section bouton fin -->

                    </div>

                </div>
                <div class="container-fluid" >
                    
                    <div class="panel">
                        <div class="body">
                            <div   style="float: right;" >
                                @if(sizeOf($Conferences )>0)
                                
                                <input type="search" id="searchBox" placeholder="Rechercher"  >

                                @endif
                            </div>
                        </div>
                    </div>
                    <table class="myTable table hover" style="min-width: 70%;">
                        <tbody>
                 
                            
                            @foreach($Conferences  as $Conference)
                         
                        <tr>
                            <td id="tagtd"><?php
                                // Return current date from the remote server
                                $heure_deb= date_create($Conference-> heure_deb);
                                $heure_fin= date_create($Conference-> heure_fin);
                                echo date_format($heure_deb, 'H');
                                echo "h-";
                                echo date_format($heure_fin, 'H');
                                echo "h";
                                ?> <div>       Salle:{{ $Conference-> salle }} </div></td>
                            <td  ><a href="/conference/{{$Conference->id}}"><b> {{ $Conference-> titre}} </b> </a>
                                 <div>   {{ $Conference-> reposnable}}</div></td>
                         
                             
                        </tr>
                        @endforeach
                      
                        </tbody>
                    </table>
                </div>
@endif
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
      <script type="text/javascript" src="{{ asset('js/paginate.js') }}"></script>
      <script>
  
          let options = {
              numberPerPage:5, //Cantidad de datos por pagina
              goBar:true, //Barra donde puedes digitar el numero de la pagina al que quiere ir
              pageCounter:true, //Contador de paginas, en cual estas, de cuantas paginas
          };
      
          let filterOptions = {
              el:'#searchBox' //Caja de texto para filtrar, puede ser una clase o un ID
          };
      
          paginate.init('.myTable',options,filterOptions);
      </script>
</body>

</html>
