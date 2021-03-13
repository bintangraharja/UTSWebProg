<?php
<<<<<<< HEAD
include('../Include/db_config.php');
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $nama = $_POST['namaMenu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $sql = "UPDATE pesanan SET NamaMenu='$nama',Harga=$harga WHERE IDMenu='$id'";
    if(!mysqli_query($db,$sql)){
        header('location: ../View/HomeAdmin.php?pesan=gglpesanan');
    }
    if(is_uploaded_file($_FILES['imageMenu']['tmp_name'])){
        $file_name = $_FILES['imageMenu']['name'];
        $file_size = $_FILES['imageMenu']['size'];
        $file_type = $_FILES['imageMenu']['type'];

        $image = addslashes(file_get_contents($_FILES['imageMenu']['tmp_name']));
        $query= "UPDATE menu SET Gambar='$image',NamaMenu='$nama',Harga=$harga,Deskripsi='$deskripsi', extGambar='$file_type' WHERE IDMenu='$id'";
    }else{
        $query= "UPDATE menu SET NamaMenu='$nama',Harga=$harga,Deskripsi='$deskripsi' WHERE IDMenu='$id'";
    }

    if(mysqli_query($db,$query)){
        header('location: ../View/HomeAdmin.php?pesan=berhasil');
    }else{
        header('location: ../View/HomeAdmin.php?pesan=gagal');
    }

}else{
    header('location: ../View/HomeAdmin.php?pesan=tidaksubmit');
}
=======
    session_start();
    if($_SESSION['user-login'] == 'admin'){
        include('../Include/db_config.php');
        if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $nama = $_POST['namaMenu'];
            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];
            $sql = "UPDATE pesanan SET NamaMenu='$nama',Harga=$harga WHERE IDMenu='$id'";
            if(!mysqli_query($db,$sql)){
                header('location: ../View/HomeAdmin.php?pesan=gglpesanan');
            }
            if(is_uploaded_file($_FILES['imageMenu']['tmp_name'])){
                $file_name = $_FILES['imageMenu']['name'];
                $file_size = $_FILES['imageMenu']['size'];
                $file_type = $_FILES['imageMenu']['type'];
        
                $image = addslashes(file_get_contents($_FILES['imageMenu']['tmp_name']));
                $query= "UPDATE menu SET Gambar='$image',NamaMenu='$nama',Harga=$harga,Deskripsi='$deskripsi', extGambar='$file_type' WHERE IDMenu='$id'";
            }else{
                $query= "UPDATE menu SET NamaMenu='$nama',Harga=$harga,Deskripsi='$deskripsi' WHERE IDMenu='$id'";
            }
        
            if(mysqli_query($db,$query)){
                header('location: ../View/HomeAdmin.php?pesan=berhasil');
            }else{
                header('location: ../View/HomeAdmin.php?pesan=gagal');
            }
        
        }else{
            header('location: ../View/HomeAdmin.php?pesan=tidaksubmit');
        }
    }
    else{
        header("Location: ../View/LogIn.php");
    }
>>>>>>> b619307 (Session)
?>