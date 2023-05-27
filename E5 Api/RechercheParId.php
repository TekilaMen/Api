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
    <title>E4 Api | Recherche par Id</title>
</head>
<body>

    <form id="form" method="post" action="ResultatParId.php">
        <!-- Input Id -->
        <div class="horizontalgroup">
        <label for="id-input">Id :</label>
            <input type="number" name="number" VALUE="2" min="2">
        </div>

        <!-- Combo DataCenter -->
        <div class="horizontalgroup">
        <label for="datacenter-select">Datacenter :</label>
            <select id="datacenter" onclick="getId()" name="datacenter" id="datacenter-select">
                <option value="null" disabled selected>Veuillez choisir un Datacenter.</option>
                <option value="Chaos">Chaos</option>
                <option value="Light">Light</option>
            </select>
        </div>

        <!-- Combo Monde -->
        <div class="horizontalgroup">
        <label for="monde-select">Monde :</label>
            <select id="world" name="monde" id="monde-select">
                <option value="null" disabled selected>Veuillez choisir un Monde.</option>
            </select>
        </div>

        <!-- Boutton de recherche -->
        <input type="submit" class="button" value="Rechercher" onclick="location.href='ResultatParId.php'">
    </form>

    <script src="JS/script.js"></script>

</body>
</html>
