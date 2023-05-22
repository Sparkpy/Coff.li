<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coff.li</title>
	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/recipes.css">
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
				<a class="nav-link active" href="#">Recipes</a>
				<a class="nav-link" href="./pricing.php">Pricing</a>
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
        <h1 class="title">Recipes</h1>
    </div>
    <div class="container-fluid recipes">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Americano')">
                        <h3><b>Americano</b></h3>
                        <img src="./images/recipes/americano.webp" alt="Americano" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Americano"></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Cortado')">
                        <h3><b>Cortado</b></h3>
                        <img src="./images/recipes/cortado.webp" alt="Cortado" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Cortado"></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Mocha')">
                        <h3><b>Mocha</b></h3>
                        <img src="./images/recipes/mocha.webp" alt="Mocha" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Mocha"></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Macchiato')">
                        <h3><b>Macchiato</b></h3>
                        <img src="./images/recipes/macchiato.webp" alt="Macchiato" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Macchiato"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Flat')">
                        <h3><b>Flat White</b></h3>
                        <img src="./images/recipes/flatwhite.webp" alt="Flat White" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Flat"></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Decaf')">
                        <h3><b>Decaf</b></h3>
                        <img src="./images/recipes/decaf.webp" alt="Decaf" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Decaf"></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Irish')">
                        <h3><b>Irish Coffee</b></h3>
                        <img src="./images/recipes/irish coffee.webp" alt="Irish Coffee" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Irish"></div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="content" onclick="showRecipe(this, 'Iced')">
                        <h3><b>Iced Coffee</b></h3>
                        <img src="./images/recipes/iced coffee.webp" alt="Iced Coffee" class="img-fluid img-thumbnail">
                        <div class="recipe hidden" id="Iced"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/recipes.js"></script>
</body>
</html>