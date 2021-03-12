<?php
    if(isset($_POST['submit'])){
        session_start();
        include("../Include/db_config.php");
        $IDUser = $_SESSION['iduser'];
        $IDMenu = $_POST['menuID'];
        $NamaMenu = $_POST['namaMenu'];
        $Qty = $_POST['qty'];
        $Total = $_POST['total'];

        $query = "INSERT INTO pesanan(IDUser,IDMenu,NamaMenu,Qty,TotalHarga) 
        VALUES ('$IDUser', '$IDMenu','$NamaMenu','$Qty','$Total')";
        

    }
?>