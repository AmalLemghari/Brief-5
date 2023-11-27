<?php 
    include 'connection.php';
    if (isset($_GET['supprimerID'])){
        $id=$_GET['supprimerID'];

        $table = "DELETE FROM equipes WHERE equipeID = '$id'";
        $result = mysqli_query($sql,$table);
        if ($result) {
            echo "Deleted Successfully";
        }else{
            echo "Error";
            // die(mysql_error($index));
        }
    }
    include 'index.php';
?>
