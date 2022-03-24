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

<a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <h4>  {{ __('Logout') }}</h4>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


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
                <th>ID_db</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Supprimer</th>


                </tr>

            </thead>

            <tbody>
                @foreach($admins as $admin)
                <tr>
                <td> {{ $admin->id }} </td>
                    <td> {{ $admin->name }} </td>
                    <td> {{ $admin->email }} </td>
                    @if($admin->name  !== 'admin')
<td><a href={{ "/deladmin/".$admin->id }}  class="btn btn-danger">Supprimer</a></td>
@endif

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
