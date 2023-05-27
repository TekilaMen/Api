<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="CSS/style.css">
<link rel="shortcut icon" type="image/png" href="PICTURES/gils.png">

<header>
    <nav>
        <!-- Accueil -->
        <a class="Home" href="Accueil.html">
            <img src="PICTURES/home.svg" width="25" height="25">
        </a>

        <!-- Liste de tous les objets -->
        <a href="ListeObjets.php">
            <img src="PICTURES/list-solid.svg" width="25" height="25">
            Liste objets
        </a>

        <a href="RechercheParId.php">
            <img src="PICTURES/search.svg" width="25" height="25">
            Recherche par Id
        </a>
        <a href="Historique.php">
            <img src="PICTURES/history.svg" width="25" height="25">
            Historique
        </a>
    </nav>
</header>

<head>
    <meta charset="UTF-8">
    <title>E4 Api | Liste objets</title>
</head>
<body>
<?php
//Base de données des ID
$request = "https://raw.githubusercontent.com/ffxiv-teamcraft/ffxiv-teamcraft/master/libs/data/src/lib/json/items.json";
$refIds = (Array)json_decode(file_get_contents($request));

echo "<table>";
    echo "<thead>";
        echo "<tr>";
                echo "<th colspan='1'>Id</th>";
                echo "<th colspan='1'>Nom</th>";
        echo "</tr>";
    echo "</thead>";

    $i = 1;
    echo "<tbody>";
        foreach ($refIds as $ligne) {
                if ($ligne->{"fr"} != null) {
                    echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $ligne->{"fr"} . "</td>";
                    echo "</tr>";
                }
        $i += 1;
        }
    echo "</tbody>";
echo "</table>";
?>


</body>
</html>


