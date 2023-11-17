<?php 
    include 'index.php';
    if (isset($_GET['supprimerID'])){
        $id=$_GET['supprimerID'];

        $sql = "DELETE FROM equipes WHERE equipeID = '$id'";
        $result = mysqli_query($index,$sql);
        if ($result) {
            echo "Deleted Successfully";
        }else{
            echo "Error";
            // die(mysql_error($index));
        }
    }