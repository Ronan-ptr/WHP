<html>
<!-- DEF PHP -->
    <?php
                
        // Tentative de régler le pbm avec xampp
        
        $soket ="/opt/lampp/var/mysql/mysql.sock";
        
        // Création de constantes
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "WHP";
        $tbname = "ISO";

        // Nom des colonnes
        $col1 = "nom";
        $col2 = "iso";
        $col3 = "web";
        $col4 = "flg";

        // Connnexion BD
        $conection = mysqli_connect($servername, $username, $password, $dbname);
    
            // Requete SQL
            $sql = "SELECT * FROM $tbname";
            $result = mysqli_query($conection, $sql);

            // En-tête Tableau
                echo "<thead>";
                    echo "<tr>";
                    echo "<th> $col1 </th>";
                    echo "<th> $col2 </th>";
                    echo "<th> $col3 </th>";
                    echo "<th> $col4 </th>";
                    echo "</tr>";
                echo "/<thead>";

                // Affiher donnés
                while($row = mysqli_fetch_assoc($result)) {       
                
                    echo "<tr>";
                    
                        // REcuperer l'image
                        echo "<td>";
                        // Convertir le BLOB en base64
                        $image = base64_encode($row["$col1"]);
                        // Créer une balise image avec l'encodage base64
                        echo "<img src='data:image/jpeg;base64,$image' id='ID_img_ico'/>";
                        echo "</td>";

                        echo "<td>" . $row["$col2"]. "</td>";
                        echo "<td>" . $row["$col3"] . "</td>";
                        echo "<td>" . $row["$col4"] . "</td>";
                    echo "</tr>";
                    }
        mysqli_close($conection);
        
    ?>
