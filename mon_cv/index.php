<!DOCTYPE html>
<html lang="en">

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
						<a class="nav-link" aria-current="page" href="#">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Formation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Expériences professionelles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Compétences</a>
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
				<h2 class="text-center" id="titre1" >Développeur Web</h2>
				<h2 class="text-center mt-4"  id="titre2" >Concepteur d'applications</h2>
				<div class="d-flex flex-wrap justify-content-center align-item-center my-5">
					<a class="btn  mx-2 my-2 px-4 py-3" id="btn_generator" href="#" role="button">Border Generator</a>
					<a class="btn mx-2 my-2 px-4 py-3"" id="btn_convertisseur" href="#" role="button">Color Converter</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container formation" id="formation">
		<div class="row  pt-5 pt-md-5 pt-lg-5 ">
			<div class="col-12 pt-5">
				<h2 class="text-center titleForamtion">-= &emsp13; Formation &emsp13; =-</h2>
			</div>

			<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center " >
				<a class="btn my-4 mx-auto px-4 py-3" id="btn_initiale" href="#formation" role="button">Initiale</a>
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

			<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center" >
				<a class="btn my-4 mx-auto px-4 py-3" id="btn_continue" href="#formation" role="button">Continue</a>
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

	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center">Section suivante</h2>					
			</div>
		</div>
	</div>

	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="js/titre-letter.js"></script>
	<script src="js/display-card.js"></script>
</body>

</html>