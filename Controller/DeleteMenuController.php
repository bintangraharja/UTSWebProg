<?php
include('../Include/db_config.php');

if(isset($_POST['id'])){
    $idMenu = $_POST['id'];
    $query = "DELETE FROM menu WHERE IDMenu ='$idMenu'";
    if(mysqli_query($db,$query)){
        header('location: ../View/HomeAdmin.php');
    }else{
        header('location: ../View/HomeAdmin.php?pesan=gagal');
    }
}

?>