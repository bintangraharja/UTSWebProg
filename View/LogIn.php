<?php
	if(!isset($_SESSION["user-login"])){
		include_once('Header.php');
	}
	else{
		include_once("HeaderIn.php");
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
		<h2 style="text-align: center;">LOG IN</h2>
		<form action="../Controller/LoginController.php" method="POST">
			<div class="input-container">
				<i class="fa fa-envelope icon"></i>
				<input type="email" name="email" id="Email" class="input-field" placeholder="Email" required>
			</div>
			<?php 
	            if(isset($_GET['pesan'])){
		        	if($_GET['pesan']=="failemail"){
					echo "<p class='alert alert-danger' role='alert' style='margin-top:10px; text-align:center;'>
  							Email anda salah atau tidak terdaftar!
						 </p>";
                	}
				}
					?>
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
			<!--
			 	INSERT CAPTCHA HERE 
									-->
			<button type="submit" class="btn btn-block btnReglog">LOG IN</button><br>
			<div style="text-align: center">
				<a href="Register.php">Don't have an account? <button type="button" class="btn btnAcc">REGISTER HERE</button></a>
			</div>
		</form>
	</div>
</body>
</html>