<?php
    session_start();
<<<<<<< HEAD
=======
    if(!isset($_SESSION['user-login'])){
        header("Location: ../View/LogIn.php");
    }
>>>>>>> b619307 (Session)
    if(isset($_POST['submit'])){
        include("../Include/db_config.php");
        $IDUser = $_SESSION['iduser'];
        $IDMenu = $_POST['menuID'];
        $NamaMenu = $_POST['namaMenu'];
        $Qty = $_POST['qty'];
        $harga = $_POST['total'];
        $url = $_GET['url'];

        $query = "INSERT INTO pesanan(IDUser,IDMenu,NamaMenu,Qty,Harga) 
        VALUES ('$IDUser', '$IDMenu','$NamaMenu','$Qty','$harga')";
        $stmt = $db->prepare($query);
        $stmt->execute();
        header("Location:../View/$url.php");
    }
?>