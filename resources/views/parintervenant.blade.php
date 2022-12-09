<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 initial-scale=1.0,user-scalable=no, viewport-fit=cover​">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Programme-evenements</title>

		<!-- Bootstrap CSS CDN -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<!-- Our Custom CSS -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href=" {{ asset('dist/alphaListNav.css') }} " />
		<style>
			.container {

				padding-right: 15px;
				padding-left: 15px;
				margin-right: auto;
				margin-left: auto;
				width: 100%;

			}
		</style>
		<!-- Font Awesome JS -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	</head>
	<body>

		<div class="wrapper">
			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar-header" >
					<img src="img/logo.png" width="50%"/>
					<p style="font-size: 14px" ><a href="https://insaniyyat.com/">retour vers la page accueil</a></p>

				</div>

				<ul class="list-unstyled components">
					<p>Programme</p>
					<li >
						<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Par jour</a>
						<ul class="collapse list-unstyled  "  id="homeSubmenu">
							 
								 <li  >
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
					<li>
						<a href="/parevenement/1">Par évènement</a>
					</li>

					<li class="active">
						<a href="/parintervenant">Par intervenant</a>
					</li>

				</ul>


			</nav>
			<div id="scroll_to_top"></div>
			<!-- Page Content  -->
			<div id="content">

				<nav class="navbar navbar-expand-lg navbar-light ">
					<div class="container-fluid">
						<h1 style="color: white;">Par Intervenant</h1>
						<button type="button" id="sidebarCollapse" class="btn btn-info">
							<i class="fas fa-align-left"></i>
							<span></span>
						</button>



					</div>

				</nav>
				<div class="container">
					<div class="omar">
						<ul id="list-nav" class="list-nav">

@foreach ($Intervenants as $Intervenant)
							<li class="item-class"><a >{{$Intervenant -> nom_prenom }} </a><span style="float:right;">{{ sizeof( $Intervenant -> conferences ) }} <a href="/parintervenant-details/{{$Intervenant ->id }}"> Document(s) </a></span></li>

@endforeach
						</ul>

								</div>


				</div>

			</div>




				</div>

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
					$(document).ready(function() {
						$('#sidebarCollapse').on('click', function() {
							$('#sidebar').toggleClass('active');
						});
					});
				</script>
			<script src="{{ asset('dist/alphaListNav.min.js') }}"></script>
				<script>
				// Create new instance of AlphaListNav
				const listElem = document.getElementById('list-nav');

				const cityList = new AlphaListNav(listElem, {
					includeAll: false,
					includeNums: false,
					initLetter: 'a',
					includeOther: true,
				});

				const listElem2 = document.getElementById('demoList1');
				const fruitList = new AlphaListNav(listElem2, {
					initLetter: 'a',
				});
			</script>



	</body>
</html>
