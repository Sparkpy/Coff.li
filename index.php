<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coff.li</title>
	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/index.css">
	<script src="./javascript/jquery.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="./javascript/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light text-right">
		<a class="navbar-brand" href="#"><img src="./images/logo.png" alt="Coff.li Logo" width="50" height="50"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
				<a class="nav-link" href="./recipes.php">Recipes</a>
				<a class="nav-link" href="./pricing.php">Pricing</a>
				<?php
				if(isset($_COOKIE["Email"])) {
					echo "<a class='nav-link' href='./account.php'>".$_COOKIE["Email"]."</a>";
				}
				?>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center">
		<h1 id="title">Coff.li</h1>
		<p id="subtext">All you need to make quality homebrew coffee.</p>
	</div>
	<div class="container text-center">
		<div class="row">
			<div class="col-sm">
				<div class="text">
					<h3>All Natural</h3>
					<p>We provide 100% natural coffee beans to your taste.</p>
				</div>
				<a href="https://en.wikipedia.org/wiki/Coffee_bean"><img src="./images/beans.webp" alt="Coffee Beans" class="rounded mx-auto d-block img-thumbnail"></a>
			</div>
			<div class="col-sm">
				<div class="text">
					<h3>Make it your own</h3>
					<p>Choose any style or flavor of coffee you like.</p>
				</div>
				<a href="./recipes.php"><img src="./images/mocha.jpg" alt="Mocha" class="rounded mx-auto d-block img-thumbnail"></a>
			</div>
			<div class="col-sm">
				<div class="text">
					<h3>Express Yourself</h3>
					<p>Treat your friends and family to your own personal coffee</p>
				</div>
				<a href="https://faqcats.com/do-cats-like-coffee/"><img src="./images/cat.jpg" alt="Cat" class="rounded mx-auto d-block img-thumbnail"></a>
			</div>
		</div>
	</div>
</body>
</html>