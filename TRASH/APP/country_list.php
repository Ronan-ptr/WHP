<html>
<!-- DEF PHP -->
    <?php
        // Création de constantes
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

        // Connnexion BD
        $conection = mysqli_connect($servername, $username, $password, $dbname);
    ?>

<head>
<!-- SOURCES -->
  <title>Mon tableau</title>
  <link rel="stylesheet" href="Styles.css">
</head>

<body>
<!-- DIV BARRES NAVIGATIONS -->
    <div class="DIV_NAV"> 

        <nav class="NAV_top">
        <a href="#" class="ACT_NAV_side">Menu</a> <!-- Class crée pour action js -->
        <a href="home.html">Accueil</a> <!-- a = liens (action) -->
        <a href="#">Recherche</a>
        <a href="http://www.ronanpotier.fr">Mon site</a>
        </nav>

    </div>
  
    <!-- DIV TABLEAU -->    
<table class="TAB_list">  <!-- Début du tableau --> 

    <?php

        $sql = "SELECT * FROM $tbname";
        $result = mysqli_query($conection, $sql);

            // Liste des En-tete
            echo "<thead>";
                echo "<tr>";
                    echo "<th> $col1 </th>";
                    echo "<th> $col2 </th>";
                    echo "<th> $col3 </th>";
                    echo "<th> $col4 </th>";
                echo "</tr>";
            echo "</thead>";

        while($row = mysqli_fetch_assoc($result)) {  

            $image = base64_encode($row["$col1"]);     
            
            echo "<tbody";
                echo "<tr>";
                    // Créer une balise image avec l'encodage base64               
                    echo "<td>" . "<img src='data:image/jpeg;base64,$image' id='ID_img_ico'/>" . "</td>"; 
                    echo "<td>" . $row["$col2"]. "</td>";
                    echo "<td>" . $row["$col3"] . "</td>";
                    echo "<td>" . $row["$col4"] . "</td>";
                echo "</tr>";
            echo "</tbody>";
            }

    ?>

</table> <!-- Fin du tableau --> 

    <?php
   
    ?>

</body>

<!-- END PHP -->
    <?php
    mysqli_close($conection);
    ?>
    
</html>

<!-- SAV CODE PHP 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["$col1"] . "</td>";
        echo "<td>" . $row["$col2"] . "</td>";
        echo "<td>" . $row["$col3"] . "</td>";
        echo "<td>" . $row["$col4"] . "</td>";
        echo "</tr>";
    }
    echo "</table>"; 



    // Vérifier la connexion
    // Si requête 
    if (!$conection) {
        die("ERREUR CONNEXTION : " . mysqli_connect_error());
    }

    // REQUÊTE MYSQL :



    echo "<table>";
    echo "<tr>
            <th>$col1</th>
            <th>$col2</th>
            <th>$col3</th>
            <th>$col4</th>
        </tr>";


    <thead class="TAB_head_1">

        <tr> Ligne 1 (en tete) 
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            </tr>

        </thead>

        <tbody>

            <tr> Ligne 2
            <td>Dupont</td>
            <td>Jean</td>
            <td>30</td>
            </tr>

            <tr> Ligne 3 
            <td>Martin</td>
            <td>Marie</td>
            <td>25</td>
            </tr>

        </tbody>  --> 

