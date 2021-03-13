<?php
<<<<<<< HEAD
session_start();
include('../Include/db_config.php');
if(isset($_GET['id']))
{
    $query = mysqli_query($db,"SELECT * FROM menu WHERE IDMenu = '".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: ".$row['extGambar']);
    echo $row['Gambar'];
}else{
    header('location: ../View/HomeAdmin.php?pesan=gagalload');
}
=======
    include('../Include/db_config.php');
    if(isset($_GET['id']))
    {
        $query = mysqli_query($db,"SELECT * FROM menu WHERE IDMenu = '".$_GET['id']."'");
        $row = mysqli_fetch_array($query);
        header("Content-type: ".$row['extGambar']);
        echo $row['Gambar'];
    }
>>>>>>> b619307 (Session)
?>
