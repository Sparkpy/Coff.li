<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coff.li</title>
	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/account.css">
	<script src="./javascript/jquery.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="./javascript/bootstrap.js"></script>
</head>
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
				<a class="nav-link" href="./pricing.php">Pricing</a>
				<?php
				// Ако корисникот е логиран, да се појави ново копче во Navbar
				if(isset($_COOKIE["Email"])) {
					echo "<a class='nav-link active' href='./account.php'>".$_COOKIE["Email"]."</a>";
				}
				?>
			</div>
		</div>
    </nav>
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="container-fluid">
			<h1 class="display-4">
				<?php
				// Ако има зачувано корисничко име, да се изпечати.
				if(isset($_COOKIE["Username"])) {
					echo "Welcome, ".$_COOKIE["Username"]. "!";
				}
				?>
			</h1>
		</div>
	</div>
	<form action="update.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<div class="card border-dark mb-3" style="max-width: 18rem;">
						<div class="card-header">Username</div>
						<div class="card-body text-dark">
							<h5 class="card-title">Change Username:</h5>
							<div class="form-group">
								<input type="text" class="form-control" id="InputUsername" name="username">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="card border-dark mb-3" style="max-width: 18rem;">
						<div class="card-header">Email</div>
						<div class="card-body text-dark">
							<h5 class="card-title">Change Email:</h5>
							<div class="form-group">
								<input type="email" class="form-control" id="InputEmail" name="email">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm">
				<div class="card border-dark mb-3" style="max-width: 18rem;">
						<div class="card-header">Password</div>
						<div class="card-body text-dark">
							<h5 class="card-title">Change Password:</h5>
							<div class="form-group">
								<input type="password" class="form-control" id="InputPassword" name="password">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<button type="submit" class="btn btn-primary" style="width: 75%">Submit</button>
				</div>
				<div class="col-sm">
					<a href="./logout.php" class="btn btn-danger" style="width: 75%">Sign out</a>
				</div>
			</div>
		</div>
	</form>
</body>
</html>