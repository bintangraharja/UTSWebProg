<?php 
    session_start();
    include('../include/db_config.php');
    if($_POST['captcha_challenge'] == $_SESSION['CAPTCHA_CODE']){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    
        $login = mysqli_query($db,"Select * From Akun Where email ='$email'");
        $cek = mysqli_num_rows($login);
    
        if($cek > 0){
            $data = mysqli_fetch_assoc($login);
            if(password_verify($password,$data['Pass'])){
                $_SESSION['user-login'] = $data['Ket'];
                $_SESSION['firstname'] = $data['FirstName'];
                $_SESSION['lastname'] = $data['LastName'];
                $_SESSION['iduser'] = $data["ID"];
                header("location:../View/Home.php");
            }else{
                header("location:../View/LogIn.php?pesan=failpass");
            }
        }else{
            header("location:../View/LogIn.php?pesan=failemail");
        }
    }
    else{
        header("location: ../View/LogIn.php?pesan=failcaptcha");
    }
?>