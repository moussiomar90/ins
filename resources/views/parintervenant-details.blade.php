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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href=" {{ asset('style.css') }}" type="text/css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Programme</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Programme</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Par Jour</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Mardi 20 septembre</a>
                        </li>
                        <li>
                            <a href="#">Mercredi 21 septembre</a>
                        </li>
                        <li>
                            <a href="#">Jeudi 22 septembre</a>
                        </li>
                        <li>
                            <a href="#">Vendredi 23 septembre</a>
                        </li>
                        <li>
                            <a href="#">Samedi 24 septembre</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Par évènement</a>
                </li>

                <li>
                    <a href="#">Par intervenant</a>
                </li>

            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <h1 style="color: white;">Par intervenant > {{$nom_prenom }}</h1>
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>



                </div>

            </nav>


            <div>

    <style>

        </style>
                <!-- section pagination alpha -->




                <!-- section pagination alpha -->


                </div>




                <div class="boxdetais" >
<div class="row">
<div class="col-lg-9">
<ul  style="list-style: none;">


    <!-- <li id="responsable" ><a>Mohamed Moussi</a> <a>5</a> <a>documents</a></li> -->
    </ul>
    <table class="t2">
        <!-- <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Nombre de documents</th>
        </tr> -->
        @foreach($Intervenants as $Intervenant)
          <tr>
            <td><a>{{$Intervenant -> titre }}  </a>


            <td><a href="/conference/{{$Intervenant -> id }}"><i class="fa fa-file" style="font-size:18px;color:#224474"></i></a></td>
          </tr>
          @endforeach
      @if (sizeof($Intervenants) == 0)

<center>pas d'article pour cet(te)intervenant(e)</center>

      @endif


    </table>
</div>


</div>


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
</body>

</html>
