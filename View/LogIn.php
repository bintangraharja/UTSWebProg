<?php
<<<<<<< HEAD
=======
	session_start();
>>>>>>> b619307 (Session)
	if(!isset($_SESSION["user-login"])){
		include_once('Header.php');
	}
	else{
		include_once("HeaderIn.php");
	}
<<<<<<< HEAD
=======
	if(isset($_SESSION['user-login'])){
		header("Location: ../View/Home.php");
	}
>>>>>>> b619307 (Session)

?>

<!DOCTYPE html>
<html>
<head>
	<title>Restoran UTS IF430 - Lay Restaurant</title>
</head>
<body class="bg-body">
	<br><br><br><br>
	<div class="container bg-form">
		<h2 class="h2-home">LOG IN</h2>
		<form action="../Controller/LoginController.php" method="POST">
			<div class="input-container">
				<i class="fa fa-envelope icon"></i>
				<input type="email" name="email" id="Email" class="input-field" placeholder="Email" required>
			</div>
			<div class="input-container">
			<?php 
	            if(isset($_GET['pesan'])){
		        	if($_GET['pesan']=="failemail"){
					echo "<p class='alert alert-danger' role='alert' style='margin-top:10px; text-align:center;'>
  							Email anda salah atau tidak terdaftar!
						 </p>";
                	}
				}
			?>
			</div>
			<div class="input-container">
				<i class="fa fa-key icon"></i>
				<input type="password" name="password" id="Password" class="input-field" placeholder="Password" required>
			</div>
			<?php 
	            if(isset($_GET['pesan'])){
		    		if($_GET['pesan']=="failpass"){
						echo "<div class='alert alert-danger' role='alert' style='margin-top:10px; text-align:center;'>
  								password anda salah!
					 		 </div>";
                    }
				}
			?>
			<div class="input-container">
				<label for="captcha">Please Enter the Captcha Text</label>
				<img src="Captcha.php" alt="CAPTCHA" class=""><i class="fas fa-redo refresh-captcha"></i>
				<br>
				<input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
			</div>
			<button type="submit" class="btn btn-block btnReglog">LOG IN</button><br>
			<div style="text-align: center">
				<a href="Register.php">Don't have an account? <button type="button" class="btn btnAcc">REGISTER HERE</button></a>
			</div>
		</form>
	</div>
</body>
</html>