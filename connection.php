<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "gestion_donnees";

        // Connexion
        $sql = mysqli_connect($servername, $username, $password, $database);

        // Vérifier la connexion
        if (!$sql) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo "Connection successful";
    }
        
?>