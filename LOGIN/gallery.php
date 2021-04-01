<!--?php
session_start();
if (isset($_SESSTION['LOG']))
 {

 	?-->
 	<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<!-- Required meta tags -->
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 		<!-- Bootstrap CSS -->
 		<link href="css/styles.css" rel="stylesheet"/>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


 		<!--icons-->
 		<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>


 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
 		<link rel="stylesheet" href="gallerystyle.css">

 		<title>ARTOM Art gallery</title>
 	</head>
 	<body id="page-top" style="background-image:url(images/F1.jpg); background-repeat:no-repeat; background-size: cover;">
 		<nav class="navbar navbar-expand-lg bg-secondary fixed-top py-2" id="mainNav">
 			<div class="container">
 				<a class="navbar-brand js-scroll-trigger text-warning" href="../HOMEPAGE/index.html">The ArTom Gallery</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

 					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-distribute-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 						<path fill-rule="evenodd" d="M1 1.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5zm0 13a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5z"/>
 						<path d="M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/>
 					</svg>
 				</button>
 				<div class="collapse navbar-collapse" id="navbarResponsive">
 					<ul class="nav nav-tabs ml-auto my-2 my-lg-0" role="tablist">
 						<li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#Exhibitions">Exhibitions</a></li>

 						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle js-scroll-trigger text-warning" data-toggle="dropdown" href="">View art</a>
 							<div class="dropdown-menu">
 								<a class="dropdown-item" href="gallery.php">Flower art</a>
 								<a class="dropdown-item" href="gallery1.php">Abstract</a>
 								<a class="dropdown-item" href="gallery2.php">Painting</a>

 							</div>      
 						</li>
 						<li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="#contact">Contact</a></li>
 					</ul>
 				</div>
 			</div>
 		</nav>
 		<section class="gallery-block cards-gallery">
 			<div class="container">
 				<div class="heading">
 					<h1 class="display-3">GALLERY</h1>
 				</div>

 				<div class="row">

 					<?php 
 					$conn=odbc_connect("artom_art_gallery","", "");
 					$sql= "SELECT * FROM ART_TABLE;";
 					$sql2="SELECT art_id FROM ART_TABLE;";
 					$result= odbc_exec($conn, $sql);
 					$result2= odbc_exec($conn, $sql2);
 					
 					while ($row= odbc_fetch_array($result)) {
 						
 							echo '
 						<div class="col-sm-6 col-lg-4">
 						<div class="card border-0 transform-on-hover">
 							<a class="lightbox" href="'.$row["GalleryName"].';"><img src="'.$row["GalleryName"].'" class="card-img-top"></a>
 							<div class="card-body">
 								<h6>'.$row["ART_TITLE"].'</h6>
 								<p class="text-muted card-text">'.$row["Description"].'</p>
 							</div>
 							<button class="btn btn-secondary" type="button"> <a href="order_form.php?artvar='.$result2.'"> ORDER</a></button></p>
 						</div>
 					</div>';

 					};
 					?>
 				</div>
 			</div>
 		</section>

 		<section class="gallery-block cards-gallery">
 			<div class="container">
 				<div class="row">
 					
 						

 						

 
 						</div>
 					</div>
 				</div>
 			</section>
 			<section class="page-section bg-light" id="contact">
 				<div class="container bg-light mb-2 ">
 					<div class="row justify-content-center">
 						<div class="col-lg-8 text-center">
 							<h2 class="mt-3">Let's Get In Touch!</h2>
 							<hr class="divider my-4" />
 							<p class="text-muted mb-5">Want to speak to us or leave a message, give us a call or send us an email. We'll get back to you as soon as possible! </p>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
 							<i class="fas fa-phone fa-3x mb-3 text-muted"></i>
 							<div>+254 712 345 000</div>
 						</div>
 						<div class="col-lg-4 mr-auto text-center">
 							<i class="fas fa-envelope fa-3x mb-3 text-muted"></i><a class="d-block" href="@">artomgeneral@gmail.com</a>
 						</div>
 					</div>
 				</div>
 			</section>

 			<!-- Optional JavaScript -->
 			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
 			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
 			</script>

 			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
 			<script>
 				baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
 			</script>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
 			<!-- Third party plugin JS-->

 			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
 			<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
 			<!-- Core theme JS-->
 			<script src="../HOMEPAGE/js/scripts.js"></script>

 		</body>
 		</html>

<!--?php
}
else{
	echo "invalid request";
	header("refresh:2; url=../HOMEPAGE/index.html");
};
?-->