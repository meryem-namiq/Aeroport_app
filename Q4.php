<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Natural Multipurpose Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

	<link href="css/font-awesome.min.css" rel="stylesheet">

	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
</head>

<body>
	<div id="home">
		<div class="banner_w3lspvt">
			<div class="nav_w3ls pt-4 pb-3 text-center">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu">
					<li><a href="index.html">Accueil</a></li>
						<li><a href="Q1.php">Liste des avions par type</a></li>
						<li><a href="Q2.php">Liste des avions par proprietaire</a></li>
						<li><a href="Q3.php">Liste du duree total des interventions par mecanicien</a></li>
						<li><a href="Q4.php">Liste les avions par places</a></li>
						<li><a href="Q5.php">Liste des interventions par avion</a></li>
					</ul>
				</nav>
			</div>
			<div id="homepage-slider" class="st-slider">
				<div class="banner-w3ls-1">

				</div>
				<div class="banner-textt">
					<form method="post" class="form-inline">
						<div class="form-group mb-2">
							<label for="staticEmail2">Nombre de places</label>
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input type="number" class="form-control" name="nb_places" placeholder="Nombre de places">
						</div>
						<button type="submit" class="btn btn-primary mb-2">Valider</button>
					</form>
					<fieldset style="background-color: rgba(0, 0, 0 ,0.50)">
						<legend>
							<a href="index.html" class="logo" >Liste les avions par places</a>
						</legend>
						<?php
						try {
							if(isset($_POST['nb_places'])){
								$nb_places=$_POST['nb_places'];
								$conn = new PDO("mysql:host=localhost;dbname=web", "root", "");

								$req = "SELECT * from avion where Nom_Type IN(SELECT nom from type where nb_places>$nb_places)";
								$rep = $conn->query($req);
								if ($rep) {
									echo "<table class='table'>";
									echo "<th style='color:#586EFB;'>Immatricule</th>
									<th style='color:#586EFB;'>Nom_Proprietaire</th>
									<th style='color:#586EFB;'>Nom_Type</th>
									<th style='color:#586EFB;'>Date_achat</th>";
									foreach ($rep as $tab) {
										echo "<tr><td style='color:white;'>$tab[Immatricule]</td>
										<td style='color:white;'>$tab[Nom_Proprietaire]</td>
										<td style='color:white;'>$tab[Nom_Type]</td>
										<td style='color:white;'>$tab[Date_achat]</td></tr>";
									}

									echo "</table>";
							}}
						} catch (Exception $e) {
							echo $e->getMessage();
						}
						?>
					</fieldset>
				</div>
			</div>
		</div>
	</div>



</body>

</html>