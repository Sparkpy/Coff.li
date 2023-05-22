<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coff.li</title>
	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/pricing.css">
	<script src="./javascript/jquery.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="./javascript/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-right">
		<a class="navbar-brand" href="./index.php"><img src="./images/logo.png" alt="Coff.li Logo" width="50" height="50"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link" href="./index.php">Home</a>
				<a class="nav-link" href="./recipes.php">Recipes</a>
				<a class="nav-link active" href="#">Pricing</a>
				<?php
				// Ако корисникот е логиран, да се појави ново копче во Navbar
				if(isset($_COOKIE["Email"])) {
					echo "<a class='nav-link' href='./account.php'>".$_COOKIE["Email"]."</a>";
				}
				?>
			</div>
		</div>
    </nav>
    <div class="jumbotron text-center">
        <h1 class="title">Pricing</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 18rem">
					<img class="card-img-top img-thumbnail" src="./images/pricing/decaf.png" alt="Decaf Free Plan">
					<div class="card-body">
						<h5 class="card-title"><b>Decaf </b><span class="badge badge-secondary">Free</span></h5>
						<p class="card-text">We deliver you tips and suggestions via email.</p>
						<?php
							// Проверка дали е корисникот логиран
							if(isset($_COOKIE["Email"])) {
								echo "<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#EmailModal' data='decaf'>Select Plan</button>";
							}
							else {
								echo "<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#Modal' data='decaf'>Select Plan</button>";
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem">
					<img class="card-img-top img-thumbnail" src="./images/pricing/latte.png" alt="Latte Semi-Premium Plan">
					<div class="card-body">
						<h5 class="card-title"><b>Latte </b><span class="badge badge-primary">19.99$<sub>/mo</sub></span></h5>
						<p class="card-text">We deliver you high quality ingredients and recipes.</p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" data="decaf">Select Plan</button>
					</div>
				</div>
			</div>
			<div class="col-sm">
				<div class="card" style="width: 18rem">
					<img class="card-img-top img-thumbnail" src="./images/pricing/mocha.png" alt="Mocha Premium Plan">
					<div class="card-body">
						<h5 class="card-title"><b>Mocha </b><span class="badge badge-danger">39.99$<sub>/mo</sub></span></h5>
						<p class="card-text">We deliver you premium ingredients and tools.</p>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal" data="decaf">Select Plan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="EmailModal" tabindex="-1" aria-labelledby="ModalLabel">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Modal Title">Success!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>You have been added to our email list!</h4>
				</div>
			</div>
		</div>
	</div>
	<?php
		// Ако е корисникот логиран да се прикажи еден Modal, ако не е, да се прикажи друг.
		if (!isset($_COOKIE["Email"])) {
			readfile("./loginmodal.html");
		}
		else {
			readfile("./buymodal.html");
		}
	?>

</body>
</html>