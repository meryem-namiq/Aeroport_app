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
							<label>Mécanicien</label>
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input type="text" class="form-control" name="mecanicien" placeholder="Mécanicien">
						</div>
						<div class="form-group mb-2">
							<label>Mois</label>
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<select name="mois" class="form-control">
								<option value="1">Janvier</option>
								<option value="2">Février</option>
								<option value="3">Mars</option>
								<option value="4">Avril</option>
								<option value="5">Mai</option>
								<option value="6">Juin</option>
								<option value="7">Juillet</option>
								<option value="8">Août</option>
								<option value="9">Septembre</option>
								<option value="10">Octobre</option>
								<option value="11">Novembre</option>
								<option value="12">Décembre</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary mb-2">Valider</button>
					</form>
					<fieldset style="background-color: rgba(0, 0, 0 ,0.50)">
						<legend>
							<a href="index.html" class="logo"  style="font-size: 1.7em;">Liste du duree total des interventions par mecanicien</a>
						</legend>
						<?php
						try {
							if (isset($_POST['mecanicien']) && isset($_POST["mois"])) {
								$nom = $_POST["mecanicien"];
								$mois = $_POST["mois"];
								$conn = new PDO("mysql:host=localhost;dbname=web", "root", "");

								$req = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(duree))) as duree from interviention where nom_mec='$nom' and MONTH(date)=$mois ";
								$rep = $conn->query($req);
								if ($rep) {
									echo "<table class='table'>";
									echo "<th style='color:#586EFB;'>Duree</th>";
									foreach ($rep as $tab) {
										echo "<tr><td style='color:white;'>$tab[duree]</tr>";
									}

									echo "</table>";
								}
							}
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