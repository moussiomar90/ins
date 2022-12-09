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
@if(session()->has('psuccess'))
   <script type="text/javascript">
      swal({
          title:'Votre inscription a bien été prise en compte. Vous recevrez un mail de confirmation. Attention, cet e-mail pourrait passer dans vos spams.',
          text:"Afin de valider votre Inscription, veuillez régler les frais par virement bancaire sur le compte de l’IRMC ou par Bon de commande.",

          timer:10000
      })
  </script>
  @endif

@yield('main')
</body>

</html>
