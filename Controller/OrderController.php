<?php
    session_start();
    if(isset($_POST['submit'])){
        session_start();
        include("../Include/db_config.php");
        $IDUser = $_SESSION['iduser'];
        $IDMenu = $_POST['menuID'];
        $NamaMenu = $_POST['namaMenu'];
        $Qty = $_POST['qty'];
        $Total = $_POST['total'];
        $url = $_GET['url'];

        $query = "INSERT INTO pesanan(IDUser,IDMenu,NamaMenu,Qty,TotalHarga) 
        VALUES ('$IDUser', '$IDMenu','$NamaMenu','$Qty','$Total')";
        $stmt = $db->prepare($query);
        $stmt->execute();
        header("Location:../View/$url.php");
    }
?>