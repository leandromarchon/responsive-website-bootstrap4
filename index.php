<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Responsive Bootstrap Website</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="assets/img/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Team</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Slides -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/background.png">
				<div class="carousel-caption">
					<h1 class="display-2">Bootstrap</h1>
					<h3>Complete Website Layout</h3>
					<button class="btn btn-outline-light btn-lg" type="button">View Demo</button>
					<button class="btn btn-primary btn-lg" type="button">Get Started</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/img/background2.png">
			</div>
			<div class="carousel-item">
				<img src="assets/img/background3.png">
			</div>
		</div>
	</div>

	<!-- Jumbotron -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">
					A web hosting service allows individuals and organizations to make their webiste accessible 
					via the World Wide Web.
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
			</div>
		</div>
	</div>

	<!-- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-5">Built with ease</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">
					Welcome to my Bootstrap 4 website tutorial! Bootstrap is a free and open-source front-end 
					library with HTML and CSS based designs.
				</p>
			</div>
		</div>
	</div>

	<!-- Three Column Section -->
	<div class="container-fluid padding">
		<div class="row padding text-center">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-code"></i>
				<h3>HTML5</h3>
				<p>Built with the latest version of HTML, HTML5.</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-bold"></i>
				<h3>BOOTSTRAP</h3>
				<p>Built with the latest version of Bootstrap, Bootstrap 4.</p>
			</div>
			<div class="col-sm-12 col-md-4">
				<i class="fab fa-css3-alt"></i>
				<h3>CSS3</h3>
				<p>Built with the latest version of CSS, CSS3.</p>
			</div>
		</div>
	</div>

	<!-- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>If you build it...</h2>
				<p>
					The columns will automatically stack on top of each other when the screen is less than 
					576px wide.
				</p>
				<p>
					Resize the browser window to see the effect. Responsive web design has become more important 
					as the amount of mobile traffic now accounts for more than half of total internet traffic.
				</p>
				<p>
					It can also display the web page differently depending on the screen size or viewing device.
				</p>
				<br>
				<a href="#" class="btn btn-primary">Learn More</a>
			</div>
			<div class="col-lg-6">
				<img src="assets/img/desk.png" class="img-fluid">
			</div>
		</div>
	</div>

	<!-- Fixed Background Section -->
	<figure>
		<div class="fixed-wrap">
			<div id="fixed"></div>
		</div>
	</figure>


	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>