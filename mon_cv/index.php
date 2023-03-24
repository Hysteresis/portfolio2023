<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/1891b42c16.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--  -->
	<link rel="stylesheet" href="./css/style.css">
	<title>CV Stracraft</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark  me-auto  my-4  fs-5 text-uppercase ">
		<div class="container-fluid">
			<button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNav">
				<ul class="navbar-nav me-auto ms-auto">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#navbarNav">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#formation">Formation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#experiencesProfessionnelles">Expériences professionelles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#competences">Compétences</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<video id="background-video" class="Hero-video" poster="" playsinline="true" autoplay="true" muted="true" loop="true">
		<source src="https://static.starcraft2.com/dist/images/global/home/header-video.webm" type="video/webm">
	</video>
	<div class="container-fluid ">
		<div class="row  video_height">
			<div class="col-10  d-flex flex-column  justify-content-center align-item-center  mx-auto titreVideo">
				<h2 class="text-center" id="titre1">Développeur Web</h2>
				<h2 class="text-center mt-4" id="titre2">Concepteur d'applications</h2>
				<!-- <div class="d-flex flex-wrap justify-content-center align-item-center my-5">
					<a class="btn  mx-2 my-2 px-4 py-3" id="btn_generator" href="#" role="button">Border Generator</a>
					<a class="btn mx-2 my-2 px-4 py-3" id="btn_convertisseur" href="#" role="button">Color Converter</a>
				</div> -->
			</div>
		</div>
	</div>
	<!--! Formation -->
	<div class="container formation" id="formation">
		<div class="row my-5  pt-5 pt-md-5 pt-lg-5 ">
			<div class="col-12 pt-5">
				<h2 class="text-center titleForamtion">-= &emsp13; Formation &emsp13; =-</h2>
			</div>
			<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center ">
				<a class="btn my-4 mx-auto px-4 py-3" id="btn_initiale" href="#btn_initiale" role="button">Initiale</a>
				<div class="card_container" id="card1">
					<div class="card card_initial " style="width: 18rem;">
						<div class="front1">
						</div>
						<div class="back1">
							<!-- <div class="card_initial_content d-flex justify-content-center align-items-center">
								<iframe src="https://giphy.com/embed/kaSmOXonvq8z2DLGxg" width="200" height="auto" frameBorder="0" class="maarine" allowFullScreen></iframe>
							</div> -->
							<div class="card-body card_initial_content">
								<h5 class="card-title">Licence EEA</h5>
								<p class="card-text">Electrotechnique et Electronique en 1998</p>
							</div>
							<div class="card-body card_initial_content">
								<h5 class="card-title">Professeur Electrotechnique</h5>
								<p class="card-text">de 1999 à 2010</p>
							</div>
							<div class="card-body card_initial_content">
								<h5 class="card-title">Professeur Technologie</h5>
								<p class="card-text">de 2010 à 2021</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
				<a class="btn my-4 mx-auto px-4 py-3" id="btn_continue" href="#btn_continue" role="button">Continue</a>
				<div class="card_container" id="card2">
					<div class="card card_initial " style="width: 18rem;">
						<div class="front2">
						</div>
						<div class="back2">
							<div class="card-body card_initial_content">
								<h5 class="card-title">CDA</h5>
								<p class="card-text">Concepteur Développeur d'applications en 2023</p>
							</div>
							<div class="card-body card_initial_content">
								<h5 class="card-title">Développeur Web</h5>
								<p class="card-text">en 2022</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--! exp professionelles -->
	<div id="experiencesProfessionnelles">
		<div class="container py-5" >
			<div class="row py-5 " >
				<div class="col-12 py-5">
					<h2 class="text-center titleFormation">-= &emsp13; Expériences professionelles &emsp13; =-</h2>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-3 g-4 py-5">
				<div class="col experiencesProfessionnelles">
					<div class="card">
						<div class="card card-blur">
							<img src="https://static.starcraft2.com/dist/images/content/intro-panels/img-mode-tile--campaign.jpg" class="card-img-top" alt="...">
							<div class="card-img-overlay d-flex flex-column justify-content-evenly align-items-center">
								<img class="rounded-circle inconXp" src="/mon_cv/img/icon-marine.png" alt="">
								<h2 class="card-title ">Enseignement</h2>
								<h3 class="card-title ">Electrotechnique</h3>
								<h5>2000-2011</h5>
								<p class="card-text py-5">Saint-Ouen(93), puis à Sainte-Florine(43)</p>
							
							</div>
						</div>
					</div>
				</div>
				<div class="col experiencesProfessionnelles">
					<div class="card">
						<div class="card card-blur">
							<img src="https://static.starcraft2.com/dist/images/content/intro-panels/img-mode-tile--multiplayer.jpg" class="card-img-top" alt="...">
							<div class="card-img-overlay d-flex flex-column justify-content-evenly align-items-center">
								<img class="rounded-circle inconXp" src="/mon_cv/img/icon-marine-red.png" alt="">						
								<h2 class="card-title ">Enseignement</h2>
								<h3 class="card-title ">Technologie</h3>
								<h5>2011-2021</h5>
								<p class="card-text py-5">Sainte-Florine(43), Massiac(15), Saint-Flour(15), Blesle(43)</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col experiencesProfessionnelles">
					<div class="card">
						<div class="card card-blur">
							<img src="https://static.starcraft2.com/dist/images/content/intro-panels/img-mode-tile--coop.jpg" class="card-img-top" alt="...">
							<div class="card-img-overlay d-flex flex-column justify-content-evenly align-items-center">
								<img class="rounded-circle inconXp"src="/mon_cv/img/icon-marine-yellow.png" alt="">
								<h2 class="card-title ">Reconversion</h2>
								<h3 class="card-title ">Développeur</h3>
								<h5>2021-2023</h5>
								<p class="card-text py-5">Développeur Web Full-stack puis Concepteur Développeur d'applications</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- smartphone et tablet -->
	<div class="container d-sm-block d-md-block d-lg-none">
		<div class="row my-5">
			<div class="col-12">
				<h2 class="text-center titleFormation">-= &emsp13; Front end &emsp13; =-</h2>
			</div>
			<div class="col-12 py-5 imgFront d-flex justify-content-evenly">
				<img class="m-2" id="figma" src="/mon_cv/img/figma.png" alt="">
				<img class="m-2" id="html" src="/mon_cv/img/html.png" alt="">
				<img class="m-2" id="css" src="/mon_cv/img/css.png" alt="">
			</div>
			<div class="col-12 py-5 imgFront d-flex justify-content-evenly">
				<img class="m-2" id="sass" src="/mon_cv/img/sass.png" alt="">
				<img class="m-2" id="bs" src="/mon_cv/img/bs.png" alt="">
				<img class="m-2" id="js" src="/mon_cv/img/js.png" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h2 class="text-center titleFormation">-= &emsp13; Back end &emsp13; =-</h2>
			</div>
			<div class="col-12 py-5 imgFront d-flex justify-content-evenly">
				<img class="m-2" id="php" src="/mon_cv/img/php.png" alt="">
				<img class="m-2" id="sf" src="/mon_cv/img/sf.png" alt="">
			</div>
			<div class="col-12 py-5 imgFront d-flex justify-content-evenly">
				<img class="m-2" id="mysql" src="/mon_cv/img/mysql.png" alt="">
				<img class="m-2" id="phpmyadmin" src="/mon_cv/img/phpmyadmin.png" alt="">
			</div>
			<div class="col-12 py-5 imgFront d-flex justify-content-evenly">
				<img class="m-2" id="kotlin" src="/mon_cv/img/kotlin.png" alt="">
			</div>
		</div>
	</div>
	<!-- PC -->
	<div class="container d-none d-lg-block"  id="competences">
		<div class="row my-5">
			<div class="col-12">
				<h2 class="text-center titleFormation">-= &emsp13; Front end &emsp13; =-</h2>
			</div>
			<div class="col-12 py-5 imgFront d-flex justify-content-evenly">
				<img class="m-2" id="figma" src="/mon_cv/img/figma.png" alt="">
				<img class="m-2" id="html" src="/mon_cv/img/html.png" alt="">
				<img class="m-2" id="css" src="/mon_cv/img/css.png" alt="">
				<img class="m-2" id="sass" src="/mon_cv/img/sass.png" alt="">
				<img class="m-2" id="bs" src="/mon_cv/img/bs.png" alt="">
				<img class="m-2" id="js" src="/mon_cv/img/js.png" alt="">
			</div>
		</div>
		<div class="row my-5">
			<div class="col-12">
				<h2 class="text-center titleFormation">-= &emsp13; Back end &emsp13; =-</h2>
			</div>
			<div class="col-12 py-5 imgFront d-flex justify-content-evenly">
				<img class="m-2" id="php" src="/mon_cv/img/php.png" alt="">
				<img class="m-2" id="sf" src="/mon_cv/img/sf.png" alt="">
				<img class="m-2" id="mysql" src="/mon_cv/img/mysql.png" alt="">
				<img class="m-2" id="phpmyadmin" src="/mon_cv/img/phpmyadmin.png" alt="">
				<img class="m-2" id="kotlin" src="/mon_cv/img/kotlin.png" alt="">
			</div>
		</div>
	</div>
	<div class="container">

	</div>

	<div class="container  my-5">

		<footer class="py-3 my-4">
			<ul class="nav justify-content-center border-top pt-3 mt-3">
				<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
				<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Back to Top</a></li>
			</ul>
			<p class="text-center text-muted pt-3 mt-3">2023 - Gameauver Prod</p>
		</footer>
	</div>



	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="js/titre-letter.js"></script>
	<script src="js/display-card.js"></script>
	<script src="js/front.js"></script>
</body>

</html>