<?php
include 'connection.php';
session_start();
if (isset($_GET["msg"]) && $_GET["msg"]=="Eseguire l'autenticazione prima di procedere")
	header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ottoshop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
	<div class="py-1 bg-black">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">+39 031 747525</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">otto@email.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">Consegna in 3-5 giorni lavorativi &amp; Resi gratuiti</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Ottoshop</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogo</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<?php
							$query2 = "SELECT * FROM categories";
							$categories = $conn->query($query2);
							if ($categories->num_rows > 0) {
								$content = '<a class="dropdown-item" value="1" href="shop.php">Visualizza tutto</a>';
								while ($categ = $categories->fetch_assoc()) {
									$content .= '<a class="dropdown-item" value="' . $categ["id"] . '" href="shop.php">' . $categ["categoryName"] . '</a>';
								}
								echo $content;
							}
							?>
						</div>
					</li>
					<li class="nav-item"><a href="about.php" class="nav-link">Chi siamo</a></li>
					<?php
						$account = '<li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>';
						$login = '<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';
						$logout = '<li class="nav-item"><a href="logout.php" class="nav-link">Esci</a></li>';

						if (isset($_SESSION["user"])){
							echo $account;
							echo $logout;
						}
						else
							echo $login;
					?>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="images/ps5.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Nuovi arrivi</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">Collezione 2023</h1>
									<p class="mb-4">Una bella bella collezione</p>

									<p><a href="#" class="btn-custom">Scoprila ora</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="images/bg_2.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Grandi novità</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">Nuova collezione</h1>
									<p class="mb-4">La collezione firmata 2023</p>

									<p><a href="#" class="btn-custom">Scoprila ora</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-bag"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Consegna gratuita</h3>
							<p>Garatinta su tutti gli ordini</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-customer-service"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Assistenza clienti</h3>
							<p>Attiva 24h, 7 giorni su 7</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-payment-security"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Pagamenti sicuri</h3>
							<p>Gestiti da Stripe®</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">

		<!--<div class="container"><div class="row justify-content-center mb-3 pb-3"><div class="col-md-12 heading-section text-center ftco-animate"><h2 class="mb-4">Nuovi arrivi</h2><p>Le novità più interessanti di tutte le categorie</p></div></div></div>-->

		<?php
		$query = "SELECT * FROM products join categories on products.idCategory = categories.id";
		$products = $conn->query($query);
		if ($products->num_rows > 0) {
			$content = '<div class="container"><div class="row justify-content-center mb-3 pb-3"><div class="col-md-12 heading-section text-center ftco-animate"><h2 class="mb-4">Nuovi arrivi</h2><p>Le novità più interessanti di tutte le categorie</p></div></div></div><div class="container"><div class="row">';
			while ($product = $products->fetch_assoc()) {
				$content .=
					'<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
						<div class="product d-flex flex-column">
							<a href="#" class="img-prod"><img class="img-fluid" src="' . $product["imagePath"] . '" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3">
								<div class="d-flex">
									<div class="cat">
										<span>' . $product["categoryName"] . '</span>
									</div>
									<div class="rating">
										<p class="text-right mb-0">
											<ion-icon name="star-outline"></ion-icon>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<h3><a href="#">' . $product["name"] . '</a></h3>
								<div class="pricing">
									<p class="price"><span>' . $product["price"] . ' $</span></p>
								</div>
								<p class="bottom-area d-flex px-3">
									<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
									<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>';
			}
			echo $content;
		}
		?>

		</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="services-flow">
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-bag"></span>
							</div>
							<div class="text">
								<h3>Spedizione gratuita</h3>
								<p class="mb-0">Collaboriamo con i migliori corrieri d'Italia</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-heart-box"></span>
							</div>
							<div class="text">
								<h3>Premi fedeltà</h3>
								<p class="mb-0">Con il nostro programma fedeltà potrai aggiudicarti stupendi premi</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-payment-security"></span>
							</div>
							<div class="text">
								<h3>Pagamenti sicuri</h3>
								<p class="mb-0">Controllo su tutti i tipi di pagamenti Mastercard, Visa e PayPal</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-customer-service"></span>
							</div>
							<div class="text">
								<h3>Supporto 24/7</h3>
								<p class="mb-0">Sempre pronti a darti una mano durante lo shopping sulla nostra piattaforma</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="heading-section ftco-animate mb-5">
						<h2 class="mb-4">Cosa pensano i nostri clienti:</h2>
						<p>Ecco alcune delle recensioni lasciate dai nostri clienti</p>
					</div>
					<div class="carousel-testimony owl-carousel">
						<?php
						$query3 = "SELECT * FROM reviews join users on users.id = reviews.idUser";
						$reviews = $conn->query($query3);
						if ($reviews->num_rows > 0) {
							$x=0;
							while ($review = $reviews->fetch_assoc()) {
								$contenuto .= '
								<div class="item">
									<div class="testimony-wrap">
										<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text">
											<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="name">Garreth Smith</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>';
								
								$x++;
							}
							echo $contenuto;
						}
						?>

						<!--Ci sono tre img di persone: 1-2-3-->
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
					<h2 class="mb-4">Seguici su Instagram</h2>
					<p>Aggiungiti alla nostra enorme community</p>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
					</a>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Minishop</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Menu</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Shop</a></li>
							<li><a href="#" class="py-2 d-block">About</a></li>
							<li><a href="#" class="py-2 d-block">Journal</a></li>
							<li><a href="#" class="py-2 d-block">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Help</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
								<li><a href="#" class="py-2 d-block">Shipping Information</a></li>
								<li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
								<li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
								<li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">FAQs</a></li>
								<li><a href="#" class="py-2 d-block">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>