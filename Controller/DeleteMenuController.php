<?php
    session_start();
    if(isset($_SESSION['user-login'])){
    if($_SESSION['user-login'] == 'admin'){
        include('../Include/db_config.php');
        if(isset($_POST['id'])){
            $idMenu = $_POST['id'];
            $query = "DELETE FROM pesanan WHERE IDMenu ='$idMenu'";
            $sql = "DELETE FROM menu WHERE IDMenu ='$idMenu'";
            if(!mysqli_query($db,$query)){
                header('location: ../View/HomeAdmin.php?pesan=pesanan');
            }
            if(mysqli_query($db,$sql)){
                header('location: ../View/HomeAdmin.php?pesan=berhasil');
            }else{
                header('location: ../View/HomeAdmin.php?pesan=gagal');
            }
        }
    }
    else{
        header("Location: ../View/Home.php");
    }
    }else{
        header("Location: ../View/Home.php");
    }
?>