<?php
	session_start();
	if(!isset($_SESSION["user-login"])){
		include_once('./Header.php');
	}
	else{
		header("location: ./Home.php");
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
		<h2 class="h2-home">REGISTER</h2>
		<form action="../Controller/RegisterController.php" method="POST">
			<div class="form-group">
				<div class="form-inline">
					<div class="form-group">
						<input type="text" name="fname" id="Fname" class="form-control" placeholder="First Name" required>
					</div>
					<div class="form-group">
						<input type="text" name="lname" id="Lname" class="form-control" placeholder="Last Name" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="date" name="bday" id="Bday" class="form-control" placeholder="Birthday (dd/mm/yyyy)" required>
			</div>
			<div class="form-group">
				<label for="gender">Gender</label><br>
				<label class="radio-inline"><input type="radio" name="gender" id="Male" value="Male">Male</label>
				<label class="radio-inline"><input type="radio" name="gender" id="Female" value="Female"> Female</label>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="Email" class="form-control" placeholder="Email" required>
			</div>
			<div class="form-group">
				<input type="password" name="password" id="Password" class="form-control" placeholder="Password" required>
			</div>
			<button type="submit" class="btn btn-block btnReglog">REGISTER NOW</button><br>
			<div style="text-align: center">
				<a  href="LogIn.php">Already have an account? <button type="button" class="btn btnAcc">Login</button></a>
			</div>
		</form>
	</div>
</body>
</html>