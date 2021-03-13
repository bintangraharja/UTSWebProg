<?php 
	 if(!isset($_SESSION)) 
	 { 
		 session_start(); 
	 } 
	include("../Include/Style.php");
?>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  	<div class="container-fluid bg-header">
		    <div class="navbar-header">
		      	<img src="../Asset/Gallery/LogoLandscape.png" width="140" height="50">
		    </div>
	    	<ul class="nav navbar-nav">
		      	<li><a href="Home.php">Home</a></li>
		      	<li class="dropdown">
		        	<a class="dropdown-toggle" data-toggle="dropdown" href="Menu.php">Menu
	        		<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          	<li><a href="Appetizer.php">Appetizer</a></li>
			          	<li><a href="MainDish.php">Main Dish</a></li>
			          	<li><a href="Dessert.php">Dessert</a></li>
			          	<li><a href="Drink.php">Drink</a></li>
			        </ul>
	      		</li>
	      		<li><a href="./Promotions.php">Promotions</a></li>
	      		<li><a href="./ContactUs.php">Contact Us</a></li>
      			<li><a href="LogIn.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
	    	</ul>
	    	<ul class="nav navbar-nav navbar-right">
		      	<li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
		      	<li><a href="LogIn.php"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
		    </ul>
	  	</div>
	</nav>
</header>