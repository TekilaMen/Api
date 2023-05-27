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
    <title>E4 Api | Accueil</title>
</head>
<body>
<?php
echo "<h1>".$_POST['datacenter']." / ".$_POST['monde']." / ".$_POST['number']."</h1>";

$request = "https://universalis.app/api/v2/".$_POST['monde']."/".$_POST['number']."?listings=9&entries=0";
$itemArray = (Array)json_decode(file_get_contents($request));

$i = 0;


foreach ($itemArray['listings'] as $item) {
    if($i === 0) {
        echo "<div class='content'>";

    }

    if($i <=3){
        echo "<div class='box'>";
        echo "<p id='vendeur'>$item->retainerName</p>";
        echo "<p>Quantité : $item->quantity</p>";
        echo "<p>Prix u/ : $item->pricePerUnit Gil(s)</p>";
        echo "<p>Prix total : $item->total Gil(s)</p>";
        echo "</div>";
        $i++;
    }

    if($i > 2) {
        echo "</div class='content'>";
        $i = 0;
        continue;
    }
}

?>



</body>
</html>
