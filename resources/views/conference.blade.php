<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 initial-scale=1.0,user-scalable=no, viewport-fit=cover​">
    <meta http-equiv="Content-Type" content="text/html;charset=windows-1256">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Programme-evenements</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<style>

    
    .body {
        background-color: white;

    }





    @media screen and (max-width: 601px) {
        table {
            border-collapse: collapse;
            width: 80%;
            margin-bottom: 5%;
            justify-content: center;
padding: 5%;

        }

        .header_conf {
            background: #224474;

            padding: 5%;




        }

        td {
        border-bottom: 1px solid #d1d1d1;
        padding: 10%;
        color: #224474;
    }


    .col-xl-3{
        margin: 5%;
    }


    .col-md-8{
    margin: 5%;
}
    }
   


    @media screen and (min-width: 601px) {

td{
    width: 70%
}
        table {
            border-collapse: collapse;
            width: 90%;

            margin-top: 5%;

            justify-content: center;

        }

        .header_conf {
            background: #224474;
            padding: 2%;





        }
    }


    th {
        color: #224474;
    }

    th a {
        font-weight: 300;
    }


    .t1 {
        table-layout: fixed;
    }

    th,
    td {
        border-bottom: 1px solid #d1d1d1;
        padding: 1%;
        color: #224474;
    }

    .header_conf h5 {
        color: white;

        padding-bottom: 0%;
        padding-top: 1%;
        font-size: 14px;
        text-transform: uppercase;

    }

    .header_conf h5 a {
        color: white;
        font-weight: 300;
        padding-bottom: 0%;

    }

    .header_conf h1 {
        color: white;
        font-weight: 500;
        font-size: 40px;

        padding-bottom: 0%;
        padding-top: 0%;

    }

    .container-fluid {
        margin: 0%;
        padding: 0%;
    }

    #under-and-over {
        text-decoration-line: underline;
        text-decoration-style: solid;
        text-decoration-color: orange;
        text-decoration-thickness: 3px;
        font-size: medium;
    }

    .container-fluid {
        background-color: white;
    }
    .row .contenu {
        padding-left:2%;
        width: 100%;
    }



    @media only screen and (min-width: 600px) {
  /* For tablets: */

  .leftpart{
margin-left:10px;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */

}
</style>

<body>
   
@if(session()->has('error'))
        <div style="color:#721c2;"  class="alert alert-danger" role="alert">
 <p class="alert {{ session('alert-class') }}">{{ session('error') }}
    <a href="/parintervenant" style="color:#721c2;" >retour a la liste des intervenants </a></p>
 
        </div>
        {{ session()->forget('error'); }}
        
       @else
    

        <div id="content">


            <i class="fa-solid fa-arrow-right"></i>





            <div class="row">
                <div class="col-md-1 " style="        background:#224474;
"></div>
                <div class="col-xl-10  header_conf">

                    <!-- header -->


                    <h5>Responsable: ><a >{{ $Conferences->reposnable }} </a></h5>

                    <br>
                    <h1 style="color: white;" id="titreconferance">{{ $Conferences->titre }}</h1>


                    <span>
                        <h5> <i class="fas fa-clock"></i> Date : <a >{{ $Conferences->date }}</a> | <a  color>{{ $Conferences->heure_deb }}-{{ $Conferences->heure_fin }}</a><br><br><i class="fas fa-calendar-check">
                            </i> Évènement : <a  color> 
                                @switch($Conferences->evenement_conf)
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
                            </a><br><br><i class="fas fa-arrow-down"></i> Programme détaillé :<a  > cliquer ci-contre </a></h5>
                    </span>


                    </nav>





                </div>
                <div class="col-xl-1 " style="        background:#224474;"></div>




                <div class="row contenu " >
                    <div class="col-md-1 " style="background-color:  white"></div>
                    <div class="col-xl-3 " style="padding-top:2% ;"  >
                        <table>
                            <tr>
                                <th colspan="2">Catégorie :  </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  
                                    @switch($Conferences->cat_conf)
    @case(1)
    A.G 
            @break
 
    @case(2)
    A.I 
            @break
 
            
    @case(3)
    A 
            @break

            @case(4)
            A.M 
            @break

            @case(5)
            C 
                        @break
            @case(6)
            T.R.
            @break
 
    @default
        Default case...
@endswitch
                                </td>
                                <th></th>
                            </tr>
                            <tr>
                                <th colspan="2">Lieu : </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td colspan="2"> {{ $Conferences->lieu}}
                                </td>
                                <th></th>
                            </tr>


                            <tr>
                              
                             
                            </tr>
                            <tr>
                                <th colspan="2">Salle : </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td colspan="2"> {{ $Conferences->salle}}
                                </td>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-8 " style="background-color: white; width:100%">



                        <table class="t2">
                            <tr>
                                <th colspan="2">Responsable : <a> {{ $Conferences->reposnable}}
                            </tr>
                            <tr>
                                <th colspan="2"> Modérateur·trice : <a >{{ $Conferences->moderater}}</a></th>

                            </tr>

<tr>

                                <th colspan="2"> Discutant·e : <a >{{ $Conferences->discutant}}</a></th>
                                </tr>




                            <!-- <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Nombre de documents</th>
        </tr> -->
                            <tr>
                                <th > Les intervenant·e·s : </th>
                                <th></th>
                            </tr>
                            
                            @foreach($Conferences->intervenants as $intervenant)
                            <tr>
                                <td >
                                    <a >{{ $intervenant -> nom_prenom }}  </a>

                                </td>
                            <td >
                                    <a>{{ $intervenant -> universite }} </a>







                                </td>@endforeach

                              
                            </tr>


                              <tr>
                                <td colspan="2">

                                <p>  {!! $Conferences->details !!} </p>

                                </td>
                            </tr>  

                        </table>

                        <style>a:hover,a:focus{
                            outline: none;
                            text-decoration: none;
                        }
                        .tab .nav-tabs{ border-bottom: 2px solid #e8e8e8; }
                        .tab .nav-tabs li a{
                            display: block;
                            padding: 10px 20px;
                            margin: 0 5px 1px 0;
                            background: #fff;
                            font-size: 20px;
                            font-weight: 700;
                            color: #224474;
                            text-align: center;
                            border: none;
                            border-radius: 0;
                            z-index: 2;
                            position: relative;
                            transition:all 0.3s ease 0s;
                        }
                        .tab .nav-tabs li a:hover,
                        .tab .nav-tabs li.active a{
                            color: #224474;
                            border: none;
                        }
                        .tab .nav-tabs li.active a:before{
                          
                        }
                        .tab .nav-tabs li.active a:after{
                            content: "";
                            width: 100%;
                            height: 3px;
                            background: #224474;
                            position: absolute;
                            bottom: -1px;
                            left: 0;
                            z-index: -1;
                            transition: all 0.3s ease 0s;
                        }
                        .tab .tab-content{
                            padding: 30px 20px 20px;
                            margin-top: 0;
                            background: #fff;
                            font-size: 15px;
                            color: grey;
                            line-height: 30px;
                            border-radius: 0 0 5px 5px;
                        }
                        .tab .tab-content h3{
                            font-size: 24px;
                            margin-top: 0;
                        }
                        @media only screen and (max-width: 479px){
                            .tab .nav-tabs li{
                                width: 100%;
                                text-align: center;
                            }
                            .tab .nav-tabs li.active a:before{
                                content: "\f105";
                                bottom: 15%;
                                left: 0;
                                right: auto;
                            }
                        }</style>
                        
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab" role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Résumé en Francais</a></li>
                                                <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Résumé en Arabe</a></li>
                                                <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Résumé en Anglais</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content tabs">
                                                <div role="tabpanel" class="tab-pane fade in active" id="Section1" dir="rtl" al>
                                                    {!! $Conferences->resumes_fr !!}
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="Section2">
                                                
                                                    <div class="card-body"  dir="rtl" al
                                                        
                                                    <p  style="direction: rtl; text-align: right;" style="text-align: center;">
                                                    
                                                        {!! $Conferences->resumes_ar !!}
                                                    
                                                    </p>
                                              </div>                        </div>
                                                <div role="tabpanel" class="tab-pane fade" id="Section3">
                                                    
                                                    <p>  {!! $Conferences->resumes_ang !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
               >


            </div>


        </div>
    </div>
    @endif


{{-- test --}}

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
