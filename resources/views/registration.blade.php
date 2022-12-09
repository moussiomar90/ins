<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="insaniyyat">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insaniyyat</title>    <link rel="icon" type="image/png" href="img/picto-logo.png" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Css Styles -->

    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

</head>
<body>

 



    <style>
        body{margin: 0;
            padding: 0;}
        img {
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        @media (max-width:300px) {
            img {
                width: 90%;
padding: 20%;
            }
        }
    </style>
    <header class="header header-expand-lg fixed-top" style="background-color:white;">
        <div class="container">
            <style>
                @font-face {
  font-family: 'ArbFONTS-Adobe Arabic SHIN Typo Bold';
  src: url('fonts/ArbFONTS-Adobe\ Arabic\ SHIN\ Typo\ Bold.ttf');
}
@font-face {
  font-family: 'Avenir-Font';
  src: url('fonts/AvenirLTStd-Roman.otf');
}

            </style>
            <div class="row">
                <div class="banner-image"></div>
                <div class="col-sm-1 col-md-2">
                    <div class="header__logo">
                        <a href="/"><img srcset="{{ asset('img/logo.png') }}"
                        src="{{ asset('img/logo.png') }}" style="width: auto; height: 50px; "></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active" ><a  >Le Forum</a>
                                    <ul class="dropdown">
                                        <li><a href="/presentation" >Présentation</a></li>
                                        <li><a href="/datesclesetlieux">Dates clés et Lieux</a></li>
                                        <li><a href="/registration">Inscription & frais</a></li>
                                        <li><a href="/organisateursetcomites">Organisateurs &Comités</a></li>
                                        <li><a href="/partenaires">Partenaires</a></li>
                                        <li><a href="/conferenciersinvites">Célébrités invitées</a></li>
                                        <li><a href="/participants">Participants</a></li>


                                    </ul>
                                </li>

                                <li  ><a   >Programme </a>
                                    <ul class="dropdown">
                                        <li><a href="/ceremoniedouverture" >Cérémonie d’ouverture
                                        </a></li>
                                        <li><a href="/Evènementsscientifiques">Evènements scientifiques</a></li>
                                        <li><a href="/Rencontres thématiques">Rencontres thématiques</a></li>
                                        <li><a href="/Événements Satellites">Événements Satellites</a></li>



                                    </ul>
                                <li><a  >Activités culturelles  </a><ul class="dropdown">

                                    <li><a href="/foiredulisvre" >Foire du livre
                                    </a></li>
                                    <li><a href="/Festival du Films">Festival du Film
                                    </a></li>
                                    <li><a href="/Expositions et performances">Expositions et Performances</a></li>
                                    <li><a href="/soireemusicales">Soirées Musicales</a></li>



                                </ul>

                                <li><a  >Visite & hébergement  </a><ul class="dropdown">

                                    <li><a href="/infospratique">Infos Pratique
                                    </a></li>
                                    <li><a href="/hebergement" >Hebergement
                                    </a></li>
                                    <li><a href="/decouvrir">Découvrir</a></li>

                                </ul>
                                </a></li>
                                <li><a href="/galerie">Presse et médias
</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="/about.html" >Conférence de Presse</a></li>
                                        <li><a href="/portfolio.html">Articles</a></li>

                                    </ul> -->
                                </li>
             <style>
             .button-viztype {
    border: none;
    height:30px;
    font-size: 0.9em;




}</style>

                                    @if(app()->getLocale()== 'fr')
                                    <a href="/registration/en" id="langlink">ANG </a>
@else
<a href="/registration/fr" id="langlink">FRA </a>

                                    @endif



                        </nav>
                    </div>


                </div>


            </div>
            <div id="mobile-menu-wrap"></div>
        </div>


    </div>

    </header>


    <head>    <meta name="viewport" content="width=device-width, initial-scale=1.0 initial-scale=1.0,user-scalable=no, viewport-fit=cover​" alt="insaniyyat">
<style>
    @media screen and (max-width: 601px) {
        #header{

            margin-top:20%;
   }
}

@media screen and (min-width: 601px) {
        #header{

            margin-top:5%;
   }
}
#header {

height: 245px;   background: url("{{ asset('img/banniere/inscriptionetfrais.png') }}") center center / cover no-repeat;
}
</style>
<div id="preloder">
        <div class="loader"></div>
    </div>
<nav class="bg-dark navbar-dark">
  <div class="container">
    <a href="" class="navbar-brand"><i class="fas fa-tree mr-2"></i>insaniyyat</a>
  </div>
  </nav>
   <section id="header" class="jumbotron text-center">


</section>
</head>

<style>

</style>





    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>


    <script  src="{{ asset('js/mixitup.min.js') }}"></script>
    <script  src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script   src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script  src="{{ asset('js/main.js') }}"></script>
    @include('view.inscription')

</body>

</html>
