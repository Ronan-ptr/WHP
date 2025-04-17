<?php

//RECOLTE DATA FORM

    // Variables associés au champs du formulaire
        $flg = $_POST['flg'];    
        $nom = $_POST['nom'];
        $iso = $_POST['iso'];
        $web = $_POST['web'];
        
// CONNEXTION BD

    // Variables associer aux identifiant de connextion à db
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "WHP";
        $tbname = "PAYS";

    // Nom des colonnes
        $col1 = "Flags";
        $col2 = "Nom";
        $col3 = "ISO";
        $col4 = "Web";

    // Créer la connexion = Association commande de connexion à constante $connexion
    $connexion = new mysqli($servername, $username, $password, $dbname);

  
        $stmt = $connexion->prepare("insert into $tbname($col1, $col2, $col3, $col4)
            values (?,?,?,?)");
        $stmt->bind_param("bsss",$flg,$iso,$web,$nom);
        $stmt->execute();
        echo "DATA DU PAYS AJT";
        $stmt->close();
        $connexion->close();
?>
