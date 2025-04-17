<?php

// CODE PHP interaction avec base de donnée.

// Création de constantes
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "WHP";
$tbname = "ISO";

// Créer la connexion 
// Association commande de connexion à constante $conn
$codb = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
// Si requête 
if (!$codb) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<html> <!-- Début lecture -->

<head> <!-- Infos hides -->

    <title>Formulaire</title> <!-- URL titre -->

       <!-- Script (fichier d'actions) liés -->
    

    <!-- LISTES DES FICHIERS LIEES -->

    <link rel="stylesheet" href="./Styles.css"> <!-- Stylessheet = feuille contenant les styles -->   
    
</head>

<body> <!-- PAGE VISIBLE -->

    <!-- BARRES NAVIGATIONS 🧭 -->
    <div class="DIV_NAV"> 

        <nav class="NAV_top">
            <a href="#" class="ACT_NAV_side">Menu</a> <!-- Class crée pour action js -->
            <a href="home.html">Accueil</a> <!-- a = liens (action) -->
        </nav>

    </div>

    <!-- DIV FORMULAIRE -->
    <div class="DIV_FRM">

        <h1>NOUVEAU PAYS</h1> <!-- Titre Formulaire -->
    
        <form action="test.php" method="post"> <!-- Début Formulaire -->

            <!-- NOM PAYS -->
            <label for="ID_Nom">Nom :</label> <!-- associe liblélé & champ de saisie -->
            <input type="text" id="ID_nom" name="nom"> <!-- Crée champ de saisie -->
            <br>

            <!-- CODE ISO-A3 -->
            <label for="ID_ISO">Code ISO-A3 :</label> <!--  -->
            <input type="text" id="ID_ISO" name="ISO"> <!-- "name" = clef associer à la valeur saisie -->
            <br>

            <!-- DNS Web -->
            <label for="ID_Web">DNS Web :</label> <!--  -->
            <input type="text" id="ID_Web" name="Web"> <!--  -->
            <br>

            <!-- BOUTON ENVOIE -->
            <input type="submit" value="ENVOYER" name="send">

        </form>
    </div>
</body>
</html>