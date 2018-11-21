<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Other CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" href="css/signin.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon2.ico" />

	<title>Databae</title>
</head>

<body>
	<!-- Navbar -->
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">DataBae Recipes</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Recipes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">User Recipes</a>
					</li>
				</ul>
				<form class="form-inline ml-auto mr-auto">
					<div class="btn-group">
						<input class="form-control" type="text" placeholder="Search Recipes..." aria-label="Search" style="width: 500px">
						<button class="btn btn-default" type="submit">
					<img src="img/search_icon.png" alt="Smiley face" height="20" width="20">
				</button>
					</div>
				</form>
			</div>
			<a href="uploadrecipes.html" class="btn btn-secondary navbar-btn login-btn" style="margin-right: 50px">Upload a Recipe</a>
			<!-- Sign in Button -->
			<div class="btn-group">
				<a href="/login" class="btn btn-dark navbar-btn login-btn">Sign In</a>
				<a href="/register" class="btn btn-danger navbar-btn login-btn">Register</a>
			</div>
		</nav>
	</div>
	<!-------------------- Image Slideshow -------------------->
	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/burg.jpg" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>Spicy Bacon Burger</h1>
						<p>Something with a little heat!</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/cookies.jpeg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>10 Holiday Treats</h1>
						<p>Sweeten up the holidays with these holiday treats.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/chorizo.jpg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h1>Chorizo Pasta</h1>
						<p>This is actual shit tbh. Don't make it.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
		</div>
	</div>
	<!-- Bottom Content	-->
	<div class="container" style="margin-top: 50px">
		<div class="card-group">
			<div class="card">
				<img class="card-img-top" src="img/mac.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Mac 'n Cheese</h5>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="img/soup.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Chicken Soup</h5>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="img/superfood.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Generic Salad</h5>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<p class="card-text">Upload an image of your recipe here.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>
		<!-- End of Card Group -->
		<div class="card-group">
			<div class="card">
				<img class="card-img-top" src="img/mac.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Mac 'n Cheese</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="img/soup.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Chicken Soup</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="img/superfood.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Generic Salad</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Footer -->
	<footer class="page-footer font-small blue pt-4" style="text-align: center">
		<p>Copyright &#169 2018 by DataBae Solutions, LLC</p>
	</footer>
</body>

</html>