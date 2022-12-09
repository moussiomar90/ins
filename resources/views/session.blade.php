<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 initial-scale=1.0,user-scalable=no, viewport-fit=cover​">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Programme</title>

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
           <a href="/session/2022-09-20/Amphithéâtre%20Carthage%20al-Hadatha'" style="color:#721c2;" >retour a la page Par jour </a></p>
        
               </div>  {{ session()->forget('error'); }}
@else
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Programme</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Programme</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Par jour</a>
                    <ul class="collapse list-unstyled  "  id="homeSubmenu">
                   @if($date ==  "2022-09-20")
                        <li  class="active">
                            <a href="/session/2022-09-20/Amphithéâtre Carthage al-Hadatha">Mardi 20 septembre</a>
                        </li>
                        @else
                        <li  >
                            <a href="/session/2022-09-20/Amphithéâtre Carthage al-Hadatha">Mardi 20 septembre</a>
                        </li>
                        @endif

                        @if($date ==  "2022-09-21")
                        <li class="active">
                            <a href="/session/2022-09-21/Amphithéâtre Carthage al-Hadatha">Mercredi 21 septembre</a>
                        </li>
                        @else
                        <li>
                            <a href="/session/2022-09-21/Amphithéâtre Carthage al-Hadatha">Mercredi 21 septembre</a>
                        </li>
                        @endif

                        @if($date ==  "2022-09-22")
                        <li class="active" >
                            <a href="/session/2022-09-22/Amphithéâtre Carthage al-Hadatha">Jeudi 22 septembre</a>
                        </li>
                        @else
                        <li>
                            <a href="/session/2022-09-22/Amphithéâtre Carthage al-Hadatha">Jeudi 22 septembre</a>
                        </li>
                        @endif
                        @if($date ==  "2022-09-23")
                        <li class="active">
                            <a href="/session/2022-09-23/Amphithéâtre Carthage al-Hadatha">Vendredi 23 septembre</a>
                        </li>
                        @else
                        <li>
                            <a href="/session/2022-09-23/Amphithéâtre Carthage al-Hadatha">Vendredi 23 septembre</a>
                        </li>
                        @endif
                        @if($date ==  "2022-09-24")
                        <li class="active">
                            <a href="/session/2022-09-24/Amphithéâtre Carthage al-Hadatha">Samedi 24 septembre</a>
                        </li>
                        @else
                        <li>
                            <a href="/session/2022-09-24/Amphithéâtre Carthage al-Hadatha">Samedi 24 septembre</a>
                        </li>
                        @endif
                    </ul>
                </li>
                <li>
                <a href="/parevenement/1">Par évènement</a>
                </li>

                <li>
                    <a href="/parintervenant">Par intervenant</a>
                </li>

            </ul>


        </nav>
        <div id="scroll_to_top"></div>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <h1 style="color: white;">

                    @switch($date)
    @case('2022-09-20')
    Mardi 20 septembre
        @break

    @case('2022-09-21')
    Mercredi 21 septembre
        @break

        @case('2022-09-22')
        Jeudi 22 septembre
        @break
        @case('2022-09-23')
        Vendredi 23 septembre
        @break
        @case('2022-09-24')
    Samedi 24 septembre
        @break
@endswitch



                </h1>
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
                
                    <div class="bouton col-lg-12">

                    @isset($date)
                  

                    @if ($lieu === "Amphithéâtre Carthage al-Hadatha")

                    <a  style="color: coral;"href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/Amphithéâtre Carthage al-Hadatha"
                     class="button"> 
Amphithéâtre Carthage al-Hadatha ➜</a>
@else
<a   href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/Amphithéâtre Carthage al-Hadatha" 
class="button">Amphithéâtre Carthage al-Hadatha ➜</span>

@endif
@if ($lieu === "ISAMM")

                    <a style="color: coral;" href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/ISAMM" class="button ">
                        ISAMM➜</a>
                        @else
                        <a   href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/ISAMM" class="button ">
                        ISAMM➜</a>
                        @endif
                        @if ($lieu === "Cité de la culture")
                    <a style="color: coral;" href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/Cité de la culture" class="button">
                        Cité de la culture ➜</a>
                        @else
                        <a   href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/Cité de la culture" class="button">Cité de la culture ➜</a>

                        @endif
                        @if ($lieu === "ESCT")
                    <a style="color: coral;"  href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/ESCT" class="button">ESCT ➜</a>
                    @else
                    <a  href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/ESCT" class="button">ESCT ➜</a>
                    @endif
                    @if ($lieu === "FLAHM")
<a  style="color: coral;" href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/FLAHM" class="button">FLAHM ➜</a>
@else
<a    href="http://{{$_SERVER['REMOTE_ADDR']}}:8000/session/{{$date}}/FLAHM" class="button">FLAHM ➜</a>


    @endif                  
@endisset
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

                
</div>


@endif
<style>
    #scroll_to_top{
                    position: fixed;
                    width: 25px;
                    height: 25px;
                    bottom: 50px;
                    right: 50px;
                  }
                  
                      
                          </style>
                          <div id="scroll_to_top">
                              <a href="#top"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>
                              </a>
                          </div>

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
