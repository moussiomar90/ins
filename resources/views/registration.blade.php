@extends('layout.main')

@section('main')



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
     @include('Partials.menu')

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
height: 245px;   background: url(img/banniere/inscriptionetfrais.png) center center / cover no-repeat;
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


    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    @include('view.inscription')

@endsection
