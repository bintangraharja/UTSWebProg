<?php
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
				<h1>CONTACT US</h1>
				<br><br><br>
					<h2>Opening Hours</h2>
					<br>
					<h2>Monday - Friday   :    11.00 - 20.00</h2>
					<h2>Saturday - Sunday :  11.00 - 22.00</h2>
					<br>
					<h2>Call Us : +(123)8-443-5555</h2>
			</div>
	</div>
</body>

<style>
.ctcUs{
	margin-top:50px; 
	background-image: url(../Asset/Gallery/z_bg.jpg);
	background-position: center; 
	background-repeat: no-repeat;
  	background-size: cover;
  	position: relative; 
	height:70%
}
.img{
	width:30%; 
	margin:50px;
}
h1{
	color: white;
	margin-right: 50px;
	font-size: 62px;
}
h2{
	color: white;
	margin-right: 50px;
	font-size: 36px;
}
</style>