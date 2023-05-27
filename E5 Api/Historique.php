<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="CSS/style.css">
<link rel="shortcut icon" type="image/png" href="PICTURES/gils.png">
<link rel="script" href="JS/script.js">

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
    <title>E4 Api | Historique</title>
</head>
<body>

    <h1>Objets mis à jours récement | Chaos</h1>
<?php 
$request = "https://universalis.app/api/v2/extra/stats/most-recently-updated?dcName=Chaos&entries=6";
$itemArray = (Array)json_decode(file_get_contents($request));

$request = "https://raw.githubusercontent.com/ffxiv-teamcraft/ffxiv-teamcraft/master/libs/data/src/lib/json/items.json";
$refIds = (Array)json_decode(file_get_contents($request));

$i = 0;

foreach ($itemArray['items'] as $item) {
    if($i === 0) {
        echo "<div class='content'>";

    }

    if($i <=3){
        echo "<div class='box'>";
        echo "<p id='vendeur'>$item->itemID</p>";
        echo "<p>Nom : ".$refIds[$item->itemID]->{"fr"}."</p>";
        echo "<p>Monde : $item->worldName</p>";
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
    <h1>Objets mis à jours récement | Light</h1>
    <?php 
$request = "https://universalis.app/api/v2/extra/stats/most-recently-updated?dcName=Light&entries=6";
$itemArray = (Array)json_decode(file_get_contents($request));

$request = "https://raw.githubusercontent.com/ffxiv-teamcraft/ffxiv-teamcraft/master/libs/data/src/lib/json/items.json";
$refIds = (Array)json_decode(file_get_contents($request));


$i = 0;

foreach ($itemArray['items'] as $item) {
    if($i === 0) {
        echo "<div class='content'>";

    }

    if($i <=3){
        echo "<div class='box'>";
        echo "<p id='vendeur'>$item->itemID</p>";
        echo "<p>Nom : ".$refIds[$item->itemID]->{"fr"}."</p>";
        echo "<p>Monde : $item->worldName</p>";
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