<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Natural Multipurpose Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- home -->
    <div id="home">
        <!-- banner -->
        <div class="banner_w3lspvt">
            <!-- nav -->
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
            <!-- //nav -->
            <!-- banner slider -->
            <div id="homepage-slider" class="st-slider">
                <div class="banner-w3ls-1">

                </div>
                <!-- banner-text -->
                <div class="banner-textt">
                    <fieldset style="background-color: rgba(0, 0, 0 ,0.50)">
                        <legend style="max-width: 700px;">
                            <a href="index.html" class="logo" >Liste des avions par proprietaire</a>
                        </legend>
                        <?php
                        try {
                            $conn = new PDO("mysql:host=localhost;dbname=web", "root", "");
                            $req = "SELECT * from avion where Nom_Proprietaire in (SELECT nom FROM proprietaire WHERE categorie='particulier')";
                            $rep = $conn->query($req);
                            if ($rep) {
                                echo "<table class='table'>";
                                echo "<th style='color:#586EFB;'>Immatricule</th><th style='color:#586EFB;'>Nom_Type</th><th style='color:#586EFB;'>Date_achat</th>";
                                foreach ($rep as $tab) {
                                    echo "<tr><td style='color:white;'>$tab[Immatricule]</td><td style='color:white;'>$tab[Nom_Type]</td><td style='color:white;'>$tab[Date_achat]</td></tr>";
                                }

                                echo "</table>";
                            }
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        }



                        ?>
                    </fieldset>
                </div>
                <!-- //banner-text -->
            </div>
            <!-- //banner slider -->
        </div>
        <!-- //banner -->
    </div>
    <!-- //home -->



</body>

</html>