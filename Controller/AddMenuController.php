<?php
include('../Include/db_config.php');

if(is_uploaded_file($_FILES['imageMenu']['tmp_name'])){
$file_name = $_FILES['imageMenu']['name'];
$file_size = $_FILES['imageMenu']['size'];
$file_type = $_FILES['imageMenu']['type'];

$image = addslashes(file_get_contents($_FILES['imageMenu']['tmp_name']));
$id = $_POST['idMenu'];
$nama = $_POST['namaMenu'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$query = "INSERT INTO menu(Gambar,IDMenu,NamaMenu,Harga,Kategori,Deskripsi,extGambar) VALUES ('$image','$id','$nama',$harga,'$kategori','$deskripsi','$file_type')";
if(mysqli_query($db,$query)){
    header('location: ../View/HomeAdmin.php?pesan=berhasil');
}else{
    header('location: ../View/HomeAdmin.php?pesan=gagal');
}


}else{
    header('location: ../View/HomeAdmin.php?pesan=gagalfoto');
}

?>