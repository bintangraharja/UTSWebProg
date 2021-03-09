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
	<div class="container">
		<div>
			<br><br><br>
			<h3 style="text-align: center;">Find Our Best Deals</h3>
		  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      	<li data-target="#myCarousel" data-slide-to="1"></li>
			      	<li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>
			    <div class="carousel-inner" role="listbox">
			      	<div class="item active">
				        <img src="../Asset/Gallery/voucher1.png" alt="Chania" width="460" height="345">
			      	</div>
			      	<div class="item">
				        <img src="./Gallery/voucher2.png" alt="Flower" width="460" height="345">
			      	</div>
			      	<div class="item">
				        <img src="./Gallery/voucher3.png" alt="Flower" width="460" height="345">
			      	</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			      	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      	<span class="sr-only">Previous</span>
		    	</a>
			    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
			    </a>
			</div>
		</div>

		<!-- Chef's Recommendation -->
		<div>
			<br><br><br>
			<h3 style="text-align: center;">Chef's Recommendation</h3>
			<div class="row">
				<div class="column-home">
			    	<img src="./Gallery/L0012.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Babi Panggang</div>
			    	</div>
			  	</div>
			  	<div class="column-home">
			    	<img src="./Gallery/N0002.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Bakmi Goreng Seafood</div>
			    	</div>
			  	</div>
			  	<div class="column-home">
			    	<img src="./Gallery/L0021.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Cumi Lada Garam</div>
			    	</div>
			  	</div>
			  	<div class="column-home">
			    	<img src="./Gallery/L0005.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Bebek Panggang</div>
			    	</div>
			  	</div>
			</div>
			<div class="row">
				<div class="column-home">
			    	<img src="./Gallery/R0009.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Bubur Pitan Babi</div>
			    	</div>
			  	</div>
			  	<div class="column-home">
			    	<img src="./Gallery/A0003.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Siomay Babi</div>
			    	</div>
			  	</div>
			  	<div class="column-home">
			    	<img src="./Gallery/V0001.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Cah Brokoli</div>
			    	</div>
			  	</div>
			  	<div class="column-home">
			    	<img src="./Gallery/A0004.jpg" class="image" style="width: 100%">
			    	<div class="middle-text">
			    		<div class="text-hover">Hakau Udang</div>
			    	</div>
			  	</div>
			</div>
			<div class="">
				<div class="mid">
					<a href="MainDish.php"><button type="button" class="btn btn-lg btnReglog">SEE MENU <span class="glyphicon glyphicon-arrow-right"></span></button></a>
				</div>
			</div>
		</div>
		<br><br><br>
	</div>
</body>
</html>