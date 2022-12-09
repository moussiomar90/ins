<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0 initial-scale=1.0,user-scalable=no, viewport-fit=cover​">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insaniyyat</title>
    <link rel="icon" type="image/png" href="img/picto-logo.png" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link href="https:fonts/ArbFONTS-Adobe Arabic SHIN Typo Bold" type="text/css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <script src="js/owl.carousel.min.js"></script>	<script src="js/jquery.owl-filter.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->

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
                        <a href="./"><img srcset="img/logo.png"
                            src="img/logo.png" style="width: auto; height: 50px; "></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li ><a  >{{__('navbar.forum')}}</a>
                                    <ul class="dropdown">
                                        <li><a href="./presentation" >{{__('navbar.presentation')}}</a></li>
                                        <li><a href="./datesclesetlieux">{{__('navbar.Dates clés et Lieux')}}</a></li>
                                        <li><a href="./registration/{{app()->getLocale()}}"> {{__('navbar.Inscription & frais')}}</a></li>
                                        <li><a href="./organisateursetcomites"> {{__('navbar.Organisateurs &Comités')}}</a></li>
                                        <li><a href="./partenaires">{{__('navbar.Partenaires')}}</a></li>
                                        <li><a href="./conferenciersinvites"> {{__('navbar.Célébrités invitées')}}</a></li>
                                        <li><a href="./participants">{{__('navbar.Participants')}}</a></li>


                                    </ul>
                                </a></li>

                                <li  ><a   >{{__('navbar.Programme')}} </a>
                                    <ul class="dropdown">
                                        <li><a href="./ceremoniedouverture" >{{__('navbar.Cérémonie d’ouverture')}}
                                        </a></li>
                                        <li><a href="./Evènementsscientifiques"> {{__('navbar.Evènements scientifiques')}}</a></li>
                                        <li><a href="./Rencontres thématiques"> {{__('navbar.Rencontres thématiques')}}</a></li>
                                        <li><a href="./Événements Satellites">{{__('navbar.Événements Satellites')}}</a></li>



                                    </ul>
                                <li><a  >{{__('navbar.Activitésculturelles')}} </a><ul class="dropdown">

                                    <li><a href="./foiredulisvre" > {{__('navbar.Foire du livre')}}
                                    </a></li>
                                    <li><a href="./Festival du Films">{{__('navbar.Festival du Film')}}
                                    </a></li>
                                    <li><a href="/Expositions et performances">{{__('navbar.Expositions et Performances')}}</a></li>
                                    <li><a href="./soireemusicales">{{__('navbar.Soirées Musicales')}}</a></li>



                                </ul>

                                <li><a >{{__('navbar.Visite et hébergement')}} </a><ul class="dropdown">

                                    <li><a href="./infospratique">{{__('navbar.Infos Pratique')}}
                                    </a></li>
                                    <li><a href="./hebergement" >{{__('navbar.Hebergement')}}
                                    </a></li>
                                    <li><a href="./decouvrir">{{__('navbar.Découvrir')}}</a></li>

                                </ul>
                                </a></li>
                                <li><a href="./galerie">{{__('navbar.Presse et médias')}}
</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="./about.html" >Conférence de Presse</a></li>
                                        <li><a href="./portfolio.html">Articles</a></li>

                                    </ul> -->
                                </li>
             <style>
             .button-viztype {
    border: none;
    height:30px;
    width: 30px;
    font-size: 0.9em;
padding: auto;

}</style> @if(app()->getLocale()== 'fr')
                                    <a href="/en" id="langlink">ANG </a>
@else
<a href="/fr" id="langlink">FRA </a>

                                    @endif




                        </nav>
                    </div>


                </div>


            </div>
            <div id="mobile-menu-wrap"></div>
        </div>


    </div>

    </header>


    <!-- Header End -->

    <!-- Hero Section Begin -->

    <section class="hero">
        <div class="hero__slider owl-carousel">
       <div class="hero__item set-bg"   class=img-responsive >
                <div class="container">
                    <div class="row" style="display:fix ">

                        <div class="col-lg-6 col-sm-9">
                            <div class="hero__text">

                                <h2 style="font-family:'ArbFONTS-Adobe Arabic SHIN Typo Bold'; color: #224474;letter-spacing: 0px; font-size: 48px;line-height: 1.2; margin-bottom: -2px;
                                ">منتدى     دوليّ      في     العلوم      الانسانيّة       و     الاجتماعيّة</h2>


                                <h2 style="font-family:'Avenir-Font'; letter-spacing:9px;font-size: 21px;font-style: normal; font-weight: normal;color: #224474 ; margin-bottom:5px; line-height: 1.2;"> International Forum for </h2>

                               <h2 style="letter-spacing: 2px;font-size: 24px;font-style: normal; line-height: 1.2;color: #224474;line-height: normal;margin-top:8px;margin-bottom:20px; "> Humanities and Social Sciences</h2>
                    <div id="carre"></div>

                            </div>
                            <h4 id="herotitre"><span style="font-family:'Avenir-Font';font-weight:500;color: #224474; font-size: 25px;letter-spacing: .2rem; margin-top:50px;
                                " ><strong>Tunis</strong> 20-24 </span>تـــونـس</span> </h4>

                                 <h4 id="herotitre"><span style="font-family:'Avenir-Font';font-weight:800;color: #224474; font-size: 22px;letter-spacing: .0rem;
                                    " > Septembre 2022  </span>سبتمبـر</span> </h4>

                                <div style="margin-top:12px"></div>
                                    <div class="d-flex">
                                    <button class="styled3" type="button3" style="color: aliceblue; margin-top: 10px;border:0px; margin-right:1% "  ><a style="color:white" href="/registration/{{app()->getLocale()}}" >{{__('index.Inscription')}} </a><span class="arrow_carrot-right"></button>
                                    <button class="styled3" type="button3" style="background-color:transparent; margin-top: 10px;     border:2px solid #224474;
"><a style="color:#224474" href="#" >Programme </a> <span class="arrow_carrot-right"></span></button>

                                </div>
                                  </div>

                                  <div class="col-lg-6 text-lg-right  mt-5 mt-lg-0">

                                    <div class="banner"> <img src="img/hero/insaniyyat-heroimage.png" alt="insaniyyat_"> </div>
                                 </div>
                                </div>
                        </div>


                    </div>



            </div></div>
            <STYle>
            @media screen and (max-width: 640px) {
  .banner {
    position: absolute;
    left: -999em;
  }
}
</STYle>





            <section class="intro-section spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-9">
                            <div class="service-slider">
                                <div class="ss-single">
                                    <img style="width: 100%; height: 100%; object-fit: cover;"src="img/presentation/insaniyyat-presentation.jpg" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-9 col-lg-6 col-md-6 service-text " style="padding: auto; padding-bottom:10s%">
                          <style>
                              @media screen and (min-width: 601px) {
  div.title {
    font-size: 45px;
    color: #224474;
    font-weight:700;
                            letter-spacing: .1rem;
                            text-transform : uppercase;

  }
}

@media screen and (max-width: 600px) {
  div.title {
    font-size: 35px;
    color: #224474;
    font-weight:700;
                            letter-spacing: .1rem;
                            text-transform : uppercase;

  }
}

                          </style>
<div class="title">Présentation</div>

                        <div id="carre"></div>
                            <p style="  font-size: 16px;
                            font-family: 'Montserrat', sans-serif;
                            color: #224474;
                            font-weight: 400;
                            line-height: 26px;

                           text-align: justify;">
                               {{__('index.presentation')}}...
                                <a href="/presentation" style="color:#224474 ;" > <b>  {{__('index.LIRE PLUS')}}<span class="arrow_carrot-down"></span></a>

                            </div>
                    </div>
                </div>
            </section>


            <!-- chiffres clé -->
            <section class="secondsection">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2" "></div>


<style>
    *{margin: 0; padding: 0%;}
    .cart{position: relative; width: 80%;margin: 0% auto;}
    .cart img{width: 100%; margin-top:50% ;width:60%  }
    .carttitle{color: #224474; position: absolute; top: 20%; width: 100%; text-align: left center; font-size: 50px;
    color: #224474;
    font-weight:700;
                            letter-spacing: .1rem;
                            text-transform : uppercase;}
</style>

                        <div class="col-lg-2 col-md-2 col-sm-1">
                            <div class="cart"></div>
                            <img  src="img/chiffrecle/1.svg"   >


                          </svg>     <div class="carttitle" style=" margin: bottom 1000px;;">400  <p style="color: #224474; font-size: 9px;line-height: normal; width: 70%;  margin: 0 0 0px 0;

font-weight: 600; ">{{__('index.Propositions')}}</p></div>  </div>





                          <div class="col-lg-2 col-md-2 col-sm-1" >
                            <div class="cart"></div>
                            <img  src="img/chiffrecle/1.svg"  margin >


                          </svg>     <div class="carttitle" style=" margin: bottom 1000px;" >35<p style="color: #224474; font-size: 9px;line-height: normal; width: 70%; margin: 0 0 0px 0;font-weight: 600;">{{__('index.Pays Différents,Dont 39% De Tunisie')}}</p></div>  </div>


                          <div class="col-lg-2 col-md-2 col-sm-1" >
                            <div class="cart"></div>
                            <img  src="img/chiffrecle/1.svg"  margin >


                          </svg>     <div class="carttitle" style=" margin: bottom 1000px;;">30<p style="color: #224474;font-size: 9px;letter-spacing: normal; line-height: normal; width: 70%;font-weight: 600;">{{__('index.Disciplines Des Sciences Humaines Et Sociales')}} </p></div>  </div>

                          <div class="col-lg-2 col-md-2 col-sm-1" >
                            <div class="cart"></div>
                            <img  src="img/chiffrecle/1.svg"  margin >


                          </svg>     <div class="carttitle" style=" margin: bottom 1000px;;">1500 <p style="color: #224474; font-size: 9px; line-height: normal; width: 70%;font-weight: 600;">{{__('index.Personnes À Tunis En Septembre
                            2022')}}</p></div>  </div>


                        </div>
                        </div>
                        </div>

                        </div>














        </div>
    </section>
    <!-- Hero Section End -->
    <div style="margin: 100px;"></div>

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="title-white">
                      <style>                              @media screen and (min-width: 601px) {
                        div.title-white {
                          font-size: 50px;
                          color: #ffffff;
                          font-weight:700;
                                                  letter-spacing: .1rem;
                                                  text-transform : uppercase;

                        }
                      }

                      @media screen and (max-width: 600px) {
                        div.title-white {
                          font-size: 40px;
                          color: #ffffff;
                          font-weight:700;
                                                  letter-spacing: .1rem;
                                                  text-transform : uppercase;

                        }
                      }</style>
                        <div >

                            Evène- <br>
                                ments <br>
                                scient-<br>
                                ifiques</h2>
                        </div>


                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="services__item">


                        <p>{{__('index.ambition')}}. </p>


                        <button  type="button"  onclick="window.location.href = '/Evènementsscientifiques';"  class="styled3" type="button3" style="color: aliceblue; margin-top: 10px;"  class="styled3" type="button3" style="color: aliceblue; margin-top: 10px;" > Programme <span class="arrow_carrot-right"></button>
                    </div>



                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-4 col-md-3 col-sm-9">
                            <div class="services__item" style="padding: 0%; margin:auto;">
                                <!-- <p class="services__item" style="padding: 0%; margin-bottom:-20px; border: left 1px white ;" >Lundi 24,sept. 2022 à 14h</p> -->
                                <h4>{{__('index.titre1')}}</h4>
                                <p
                                margin-right: auto;">{{__('index.soustitre1')}}</p>
                                <p style="text-transform: uppercase;font-weight: bold;
                                " > <a href="/Evènementsscientifiques" style="color:white"> {{__('index.LIRE PLUS')}}</a> <span class="arrow_carrot-down"></span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-9">
                            <div class="services__item" style="padding: 0%; margin:auto;">
                                <h4>{{__('index.titre2')}}</h4>
                                <p
                                margin-right: auto;">{{__('index.soustitre2')}}
                                </p>
                                <p style="text-transform: uppercase;font-weight: bold;
                                " > <a href="/Evènementsscientifiques" style="color:white">   {{__('index.LIRE PLUS')}}</a> <span class="arrow_carrot-down"></span></p>
                            </div>
                        </div>
  <div class="col-lg-4 col-md-3 col-sm-9">
    <div class="services__item" style="padding: 0%; margin:auto;">
        <h4>{{__('index.titre3')}}</h4>
        <p
        margin-right: auto;">{{__('index.soustitre3')}}</p>
        <p style="text-transform: uppercase;font-weight: bold;
                                " > <a href="/Evènementsscientifiques" style="color:white">   {{__('index.LIRE PLUS')}}</a> <span class="arrow_carrot-down"></span></p>
                        </div>

                    </div> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <!-- Rncontre Section  -->
    <style>
    @media screen and (min-width: 601px) {
        div.title {
          font-size: 40px;
          color: #224474;
          font-weight:700;
                                  letter-spacing: -2px;
                                  text-transform : uppercase;

        }
      }

      @media screen and (max-width: 600px) {
        div.title {
          font-size: 35px;
          color: #224474;
          font-weight:700;
                                  letter-spacing: .1rem;
                                  text-transform : uppercase;

        }
      }</style>
<section class="rencontre">


    <style>
        *{margin: 0; padding: 0%;}
        .cart{position: relative; width: 80%;margin: 0% auto;}
        .cart img{width: 100%; margin-top:50% ;width:60%  }
        .carttitle{color: #224474; position: absolute; top: 20%; width: 100%; text-align: left center; font-size: 50px;
        color: #224474;
        font-weight:700;
                                letter-spacing: .1rem;
                                text-transform : uppercase;}
    </style>

</section>
<div class="container" style="margin-top: 2%;">
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-9" style="margin: 10% auto;;" >


                                    </style>
          <!-- <div class="title" >Rencontres
            thématiques

        </div> -->
        <h2 class="titre " style="color: #224474;  top: 20%; width: 100%; text-align: left center; font-size: 50px;
            color: #224474;
            font-weight:700;
                                    letter-spacing: .1rem;
                                    text-transform : uppercase; text-align:justify">   {{__('index.Rencontres')}}

             </h2>
        <div id="carre"></div>

        <p style="color: #224474;text-align:justify">{{__('index.descriptionrencontre')}}
           </p>


            <button   class="styled3" type="button3" style="color: aliceblue; margin-top: 10px;" style="background-color:white; margin-top: 10px;     border:2px ridge #224474;
" onclick="window.location.href = '/Evènementsscientifiques';" >{{__('index.voir le contenu')}}  <span class="arrow_carrot-right"></button>

</div>










    <div class="col-lg-8">


                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style=" padding-right:4px">
                            <div class="services__item" style="background-color: #17427C; height:340px; ">
                                <div class="services__item__icon">
                                    <img src="img/icons/1.png" alt="">
                                </div>
                                <h4>{{__('index.rencontre1')}}
</h4>
                                <p>
                                {{__('index.sousren1')}}
<br><a href="/Rencontres%20thématiques" style="color:#F9F9F9" >  {{__('index.LIRE PLUS')}} <span class="arrow_carrot-down"></span></a>
                                </p>                   </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style=" padding-left:1px">
                            <div class="services__item"style="background-color:#0099CC; height:340px;">
                                <div class="services__item__icon">
                                    <img src="img/icons/2.png" alt="">
                                </div>
                                <h4>{{__('index.rencontre2')}}
</h4>
                                <p>

                                {{__('index.sousren2')}}                               <br><a href="/Rencontres%20thématiques" style="color:#F9F9F9" >  {{__('index.LIRE PLUS')}} <span class="arrow_carrot-down"></span></a>
                            </p></div>
                        </div>



                        <div class="col-lg-6 col-md-4 col-sm-6" style="margin-top: -40px; padding-right:4px" >
                            <div class="services__item"style="background-color: #005c96; height:340px; ">
                                <div class="services__item__icon">
                                    <img src="img/icons/3.png" alt="">
                                </div>

                                <h4>{{__('index.rencontre3')}}
</h4>
                                <p style="margin-bottom: 0px;">
                                {{__('index.sousren3')}}


                                <br><a href="/Rencontres%20thématiques" style="color:#F9F9F9" >  {{__('index.LIRE PLUS')}} <span class="arrow_carrot-down"></span></a>

                            </p>
                            </div>
                        </div>



                        <div class="col-lg-6 col-md-4 col-sm-6" style="margin-top: -40px; padding-left:2px">
                            <div class="services__item"style="background-color:#1167b1;height:340px; ">
                                <div class="services__item__icon">
                                    <img src="img/icons/4.png" alt="">
                                </div>
                                <h4>{{__('index.rencontre4')}}

</h4>
                                <p>
                                {{__('index.sousren4')}}
                                <br><a href="/Rencontres%20thématiques" style="color:#F9F9F9" >  {{__('index.LIRE PLUS')}} <span class="arrow_carrot-down"></span></a>
  </p>
                            </div>
                        </div>

     <!-- finrow    -->
                        </div>






                    </div>



		</div>

    </div>

</div>
</div>

</section>
<div style="height:30px ;background:white
"></div>
<div style="background-color: #F9F9F9;">
<div class="container" >
    <!-- Work Section Begin -->
    <section class="Rencontres
    thématiques">
        <div class="work__gallery">
            <div class="grid-sizer"></div><br>
            <div class="work__item wide__item"  style='background-color:#F9F9F9'>
               <h2 class="titre" style="color: #224474; position: absolute; top: 20%; width: 100%; text-align: left center; font-size: 50px;
               color: #224474;
               font-weight:700;
                                       letter-spacing: .1rem;
                                       text-transform : uppercase;">               {{__('index.titreeve')}}
                </h2>
                <div style="  margin-right:80%;
                margin-top:85%;
                    width  : 60px;
                    height : 3px;
                    background : #224474;
                    margin-bottom: 10px;
                  "></div>

            </div>
            <div class="work__item large__item set-bg" data-setbg="img/presentation/1.png" >
                <div class="work__item__hover">
                    <div class="work__item__hover" >

                        <ul>

                            <li>20 Septembre 2022</li>
                            <h4>{{__('index.malouf')}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.597" height="12.593" viewBox="0 0 12.597 12.593">
                                <g id="Groupe_74" data-name="Groupe 74" transform="translate(-230.104 -316.945)">
                                  <path id="Tracé_94" data-name="Tracé 94" d="M236.4,329.575q-2.013,0-4.026,0a2.127,2.127,0,0,1-2.264-2.26q0-4.026,0-8.052a2.126,2.126,0,0,1,2.252-2.272c1.292,0,2.585,0,3.877,0a.744.744,0,0,1,.8.469.7.7,0,0,1-.735.932c-.957.011-1.913,0-2.87,0-.4,0-.8,0-1.193,0a.653.653,0,0,0-.729.706q-.007,4.175,0,8.35a.652.652,0,0,0,.715.719q4.175.006,8.35,0a.652.652,0,0,0,.71-.725c.005-1.342,0-2.684,0-4.026,0-.608.429-.957.929-.777a.678.678,0,0,1,.468.689c.006,1.4.032,2.809-.008,4.212a2.08,2.08,0,0,1-2.146,2.031C239.154,329.582,237.775,329.574,236.4,329.575Z" transform="translate(0 -0.039)" fill="#fff"/>
                                  <path id="Tracé_95" data-name="Tracé 95" d="M310.253,318.352c-.4,0-.708.009-1.016,0a.689.689,0,0,1-.752-.7.678.678,0,0,1,.745-.7q1.323-.015,2.646,0a.721.721,0,0,1,.779.8q.012,1.3,0,2.609a.684.684,0,0,1-.683.763.694.694,0,0,1-.715-.772c-.008-.3,0-.61,0-.915l-.1-.055c-.514.53-1.024,1.066-1.545,1.59-.893.9-1.794,1.79-2.69,2.686-.218.218-.484.37-.765.215-.195-.107-.431-.331-.448-.519a1.023,1.023,0,0,1,.281-.709c1.31-1.342,2.645-2.66,3.972-3.986C310.041,318.581,310.114,318.5,310.253,318.352Z" transform="translate(-69.967 0)" fill="#fff"/>
                                </g>
                              </svg>

                                </h4>
                            <li>

                                </li>
                        </ul>
                    </div>
                </div>
            </div>
                 7
                 <div class="work__item wide__item set-bg"  data-setbg="img/presentation/2.png">

                    <div class="work__item__hover" >

                        <ul>

                            <li>20 Septembre 2022</li>
                            <h4>{{__('index.feslivre')}}<svg xmlns="http://www.w3.org/2000/svg" width="12.597" height="12.593" viewBox="0 0 12.597 12.593">
                                <g id="Groupe_74" data-name="Groupe 74" transform="translate(-230.104 -316.945)">
                                  <path id="Tracé_94" data-name="Tracé 94" d="M236.4,329.575q-2.013,0-4.026,0a2.127,2.127,0,0,1-2.264-2.26q0-4.026,0-8.052a2.126,2.126,0,0,1,2.252-2.272c1.292,0,2.585,0,3.877,0a.744.744,0,0,1,.8.469.7.7,0,0,1-.735.932c-.957.011-1.913,0-2.87,0-.4,0-.8,0-1.193,0a.653.653,0,0,0-.729.706q-.007,4.175,0,8.35a.652.652,0,0,0,.715.719q4.175.006,8.35,0a.652.652,0,0,0,.71-.725c.005-1.342,0-2.684,0-4.026,0-.608.429-.957.929-.777a.678.678,0,0,1,.468.689c.006,1.4.032,2.809-.008,4.212a2.08,2.08,0,0,1-2.146,2.031C239.154,329.582,237.775,329.574,236.4,329.575Z" transform="translate(0 -0.039)" fill="#fff"/>
                                  <path id="Tracé_95" data-name="Tracé 95" d="M310.253,318.352c-.4,0-.708.009-1.016,0a.689.689,0,0,1-.752-.7.678.678,0,0,1,.745-.7q1.323-.015,2.646,0a.721.721,0,0,1,.779.8q.012,1.3,0,2.609a.684.684,0,0,1-.683.763.694.694,0,0,1-.715-.772c-.008-.3,0-.61,0-.915l-.1-.055c-.514.53-1.024,1.066-1.545,1.59-.893.9-1.794,1.79-2.69,2.686-.218.218-.484.37-.765.215-.195-.107-.431-.331-.448-.519a1.023,1.023,0,0,1,.281-.709c1.31-1.342,2.645-2.66,3.972-3.986C310.041,318.581,310.114,318.5,310.253,318.352Z" transform="translate(-69.967 0)" fill="#fff"/>
                                </g>
                              </svg>

                                </h4>
                            <li>

                                </li>
                        </ul>
                    </div>
                </div>
                <div class="work__item wide__item set-bg"class="desc"  >

                    <div >
                     <p style="color: #224474; text-align:justify; padding-right:3%">  {{__('index.souseve')}}</p>
                     <button class="styled3" type="button3" style="background-color:white; margin-top: 10px;     border:2px ridge #224474;
"> voir le contenu <span class="arrow_carrot-right"></button>
                    </div>

                </div>
                <style>
                        .desc {
                order: -0;
                text-align: right;
            }

                    </style>

            <!-- 2ddddddddddd -->

            <div class="work__item wide__item set-bg" style='background-color:#F9F9F9'  data-setbg="img/presentation/3.jpg">

                <div class="work__item__hover" >
                    <div class="work__item__hover" >

                        <ul>

                            <li>20 Septembre 2022</li>
                            <h4> <a href="/"> {{__('index.expo')}}<svg xmlns="http://www.w3.org/2000/svg" width="12.597" height="12.593" viewBox="0 0 12.597 12.593">
                                <g id="Groupe_74" data-name="Groupe 74" transform="translate(-230.104 -316.945)">
                                  <path id="Tracé_94" data-name="Tracé 94" d="M236.4,329.575q-2.013,0-4.026,0a2.127,2.127,0,0,1-2.264-2.26q0-4.026,0-8.052a2.126,2.126,0,0,1,2.252-2.272c1.292,0,2.585,0,3.877,0a.744.744,0,0,1,.8.469.7.7,0,0,1-.735.932c-.957.011-1.913,0-2.87,0-.4,0-.8,0-1.193,0a.653.653,0,0,0-.729.706q-.007,4.175,0,8.35a.652.652,0,0,0,.715.719q4.175.006,8.35,0a.652.652,0,0,0,.71-.725c.005-1.342,0-2.684,0-4.026,0-.608.429-.957.929-.777a.678.678,0,0,1,.468.689c.006,1.4.032,2.809-.008,4.212a2.08,2.08,0,0,1-2.146,2.031C239.154,329.582,237.775,329.574,236.4,329.575Z" transform="translate(0 -0.039)" fill="#fff"/>
                                  <path id="Tracé_95" data-name="Tracé 95" d="M310.253,318.352c-.4,0-.708.009-1.016,0a.689.689,0,0,1-.752-.7.678.678,0,0,1,.745-.7q1.323-.015,2.646,0a.721.721,0,0,1,.779.8q.012,1.3,0,2.609a.684.684,0,0,1-.683.763.694.694,0,0,1-.715-.772c-.008-.3,0-.61,0-.915l-.1-.055c-.514.53-1.024,1.066-1.545,1.59-.893.9-1.794,1.79-2.69,2.686-.218.218-.484.37-.765.215-.195-.107-.431-.331-.448-.519a1.023,1.023,0,0,1,.281-.709c1.31-1.342,2.645-2.66,3.972-3.986C310.041,318.581,310.114,318.5,310.253,318.352Z" transform="translate(-69.967 0)" fill="#fff"/>
                                </g>
                              </svg>

                                </h4>

                        </ul>
                    </div>
                </div>
            </div>
        </div></div></div>
    </section>
    <!-- Work Section End -->






 <!-- Logo Begin -->
 <div class="logo spad">
    <div class="container ">
        <h3 style="color:#BFBFBF;text-transform: uppercase; font-size:30px">{{__('index.organisepar')}}</h3>
        <!-- <h1 style="color:#dddddd; font-size: 30pt;letter-spacing: -3px;">organisé par</h1> -->
<br>        <div class="row " >

<div class="col-lg-2 logo "><img src="img/logo/20.png"></div>
<div class="col-lg-2 logo "><img src="img/logo/27.png"></div>

<div class="col-lg-2 logo "><img src="img/logo/28.png"></div>


<div class="col-lg-2 logo "><img src="img/logo/31.png"></div>



<div class="col-lg-2 logo "><img src="img/logo/18.png"></div>


<div class="col-lg-2 logo "><img src="img/logo/26.png"></div>




</div>
        <br>
        <h3 style="color:#BFBFBF; text-transform: uppercase;">{{__('index.partenaire')}} </h3>   <br>
        <div class="logo__carousel owl-carousel ">
        <a href="#" class="logo__item"><img src="img/logo/32.png"alt="amavi"></a>

        <a href="#" class="logo__item"><img src="img/logo/24.png"alt="amavi"></a>
        <a href="#" class="logo__item"><img src="img/logo/2.png" alt="flsh"></a>
            <a href="#" class="logo__item"><img src="img/logo/3.png" alt="cres"></a>
            <a href="#" class="logo__item"><img src="img/logo/4.png" alt="crasc"></a>
            <a href="#" class="logo__item"><img src="img/logo/5.png" alt="amed"></a>
        <a href="#" class="logo__item"><img src="img/logo/6.png" alt="ifpo"></a>
            <a href="#" class="logo__item"><img src="img/logo/7.png" alt="ird"></a>
            <a href="#" class="logo__item"><img src="img/logo/8.png" alt="cfmeshu"></a>
            <a href="#" class="logo__item"><img src="img/logo/9.png" alt="cgc"></a>
            <a href="#" class="logo__item"><img src="img/logo/10.png" alt="cjb" ></a>
            <a href="#" class="logo__item"><img src="img/logo/11.png" alt="inp"></a>
            <a href="#" class="logo__item"><img src="img/logo/13.png" alt="casaarabes"></a>
            <a href="#" class="logo__item"><img src="img/logo/14.png" alt="betounsi"></a>
            <a href="#" class="logo__item"><img src="img/logo/15.png" alt="sasamo"></a>

            <a href="#" class="logo__item"><img src="img/logo/19.png" alt="psl"></a>
            <a href="#" class="logo__item"><img src="img/logo/22.png" alt="bondin"></a>
            <a href="#" class="logo__item"><img src="img/logo/21.png" alt="orange"></a>
            <a href="#" class="logo__item"><img src="img/logo/14.png" alt="betounsi"></a>
            <a href="#" class="logo__item"><img src="img/logo/16.png" alt="boga"></a>
            <a href="#" class="logo__item"><img src="img/logo/17.png" alt="cristaline"></a>
            <a href="#" class="logo__item"><img src="img/logo/23.png" alt="afrahgroup"></a>
        </div>
    </div>
</div>

    <!-- Footer Section Begin -->
    @include('Partials.footer')

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
