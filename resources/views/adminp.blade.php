<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin  Insaniyyat</title>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./css/stylelist.css">

</head>



<body>
<nav class="navbar navbar-light bg-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/adminp">Participants</a>
  <a class="navbar-brand" href="/adminv">Visiteurs</a>

 @if(Auth::user()->name === 'admin')
 <a class="navbar-brand" href="/register">Ajouter un utilisateur</a>
 <a class="navbar-brand" href="/listadmin">Liste des utilisateur</a>
 @endif

<div style="float: right; margin-right:10px;">

<a   href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

  <span>  {{ __('se deconnecter ') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


</div>
<div style="float: right; margin-right:10px;">
 <span>Bonjour {{Auth::user()->name}} </span>

 </div>
</nav>
    <!-- partial:index.partial.html -->
    <div class="container">
        <h2>Sélectionnez le nombre des lignes</h2>
        <div class="form-group">
            <!--		Show Numbers Of Rows 		-->
            <select class="form-control" name="state" id="maxRows">
                <option value="5000">Show ALL Rows</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="70">70</option>
                <option value="100">100</option>
            </select>

        </div>

        <table class="table table-striped table-class" id="table-id">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th> <i> Nationalité </i> <br> <strong>Pays</strong> </th>
                    <th> <i> Faculté </i> <br> <strong>Labo</strong> </th>
                    <th> <i> Universite </i> <br> <strong>Institution</strong> </th>
                    <th> <i> Statut </i> <br> <strong>Statut particulier</strong> </th>
                    <th> Visite</th>
                    <th>Exemption</th>
                    <th>confirmation</th>
                </tr>

            </thead>

            <tbody>
                @foreach($participants as $participant)
                <tr>
                    <td> {{ $participant->nom }} {{ $participant->prenom }}</td>
                    <td> {{ $participant->email }} </td>
                    <td>{{ $participant->telephone }}</td>
                    <td><i>{{ $participant->nationalite }} </i><br><strong>{{ $participant->paysresidence }}</strong> </td>
                    <td>@if($participant->faculte  === Null)
                    <i>--</i>
                    @else
                    <i>{{ $participant->faculte }}</i>
                    @endif <br>


                    @if($participant->labo  === Null)
                    <i>--</i>
                    @else
                    <i>{{ $participant->labo }}</i>
                    @endif
                </td>
                    <td>

                    @if($participant->universite  === Null)
                    <i>--</i>
                    @else
                    <i>{{ $participant->universite }}</i>
                    @endif

                       <br><strong>

                    @if($participant->institution === Null)
                    <strong>--</strong>
                    @else
                    <strong>{{ $participant->institution}}</strong>
                    @endif


                </strong> </td>
                    <td><i>{{ $participant->statut }} </i><br>
                        @if ($participant->statut_particulier ===0 )

                        <strong>Non</strong>
                        @else
                        <strong>Oui</strong>
                        @endif
                    </td>

                    <td>@if ($participant->visite === 0 )

                        <strong>Non</strong>
                        @else
                        <strong>Oui</strong>
                        @endif
                    </td>

                    <td>@if ($participant->exemption === 0 )

                        <strong>Non</strong>
                        @else
                        <strong>Oui</strong>
                        @endif
                    </td>

                    <td>@if ($participant->confirmation === 0 )

                    <a href={{ "/update/".$participant->id }}  class="btn btn-primary">Confirmation</a>
@else
<img src='/img/1004739.png' style="width: 20px;">
<br>
<span style="font-size: 10px;">utilisateur confirmé </span>
@endif
</td>



                </tr>
                @endforeach

            </tbody>

        </table>

        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">

                    <li data-page="prev">
                        <span>
                            < <span class="sr-only">(current)
                        </span></span>
                    </li>
                    <!--	Here the JS Function Will Add the Rows -->
                    <li data-page="next" id="prev">
                        <span> > <span class="sr-only">(current)</span></span>
                    </li>
                </ul>
            </nav>
        </div>

    </div> <!-- 		End of Container -->



    <!--  Developed By Yasser Mas -->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Pagination Table</title>
    <title>JQ Pagination</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./style.css">

</head>





    <!--  Developed By Yasser Mas -->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="./js/script.js"></script>

</body>

</html>
