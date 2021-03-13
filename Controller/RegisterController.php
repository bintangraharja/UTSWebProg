<?php
    session_start();
    if(isset($_SESSION['user-login'])){
        header("Location: ../View/Home.php");
    }
    include('../Include/db_config.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bday = $_POST['bday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashpass = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO akun(FirstName,LastName,Email,BirthDate,Gender,Pass,Ket) 
    VALUES (?,?,?,?,?,?,'user')";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssssss",$fname,$lname,$email,$bday,$gender,$hashpass);
    $stmt->execute();

    header("location: ../View/LogIn.php");
?>