<?php
session_start();
	if(!isset($_SESSION["user-login"])){
		include_once('Header.php');
	}
	else{
		include_once("HeaderIn.php");
	}
?>

<body class="bg-body">
	<br><br><br>
	<div class="ctcUs">
			<img src="../Asset/Gallery/z_contactUs.png" class="img">
			<div class ="col-sm-6" style="text-align:justify; float:right;">
				<h1 class="h1-ctc">CONTACT US</h1>
				<br><br><br>
					<h2 class="h2-ctc">Opening Hours</h2>
					<br>
					<h2 class="h2-ctc">Monday - Friday   :    11.00 - 20.00</h2>
					<h2 class="h2-ctc">Saturday - Sunday :  11.00 - 22.00</h2>
					<br>
					<h3 style="color: white;">Call Us : +(62)878-555-224</h3>
			</div>
	</div>
</body>