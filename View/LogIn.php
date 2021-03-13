<?php
	session_start();
	include_once('Header.php');
	if(!isset($_SESSION["user-login"])){
	}
	else{
		header("Location: ./Home.php");
	}
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
			<div class="form-group">
				<label for="captcha">Please Enter the Captcha Text</label>
				<div class="input-container">
				<img src="../Controller/Captcha.php" alt="CAPTCHA" class="captcha-image"><a class="btn refresh-captcha"><span class="glyphicon glyphicon-refresh"></span></a>
				<br>
				
				</div>
				<input style="width: 30%" type="text" id="captcha" name="captcha_challenge">
			</div>
			<?php 
	            if(isset($_GET['pesan'])){
		    		if($_GET['pesan']=="failcaptcha"){
						echo "<div class='alert alert-danger' role='alert' style='margin-top:10px; text-align:center;'>
  								Captcha yang anda masukkan salah!
					 		 </div>";
                    }
				}
			?>
			<button type="submit" class="btn btn-block btnReglog">LOG IN</button><br>
			<div style="text-align: center">
				<a href="Register.php">Don't have an account? <button type="button" class="btn btnAcc">REGISTER HERE</button></a>
			</div>
		</form>
	</div>
</body>
</html>

<script>
	var refreshButton = document.querySelector(".refresh-captcha");
	refreshButton.onclick = function() {
		document.querySelector(".captcha-image").src = '../Controller/Captcha.php';
	}
</script>
