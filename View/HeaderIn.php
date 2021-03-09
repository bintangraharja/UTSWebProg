<?php 
	include("../Include/Style.php");
?>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  	<div class="container-fluid bg-header">
		    <div class="navbar-header">
		      	<img src="./Gallery/LogoLandscape.png" width="140" height="50">
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
	      		<li><a href="#">Promotions</a></li>
	      		<li><a href="ContactUs.php">Contact Us</a></li>
	      		<li><button type="button" data-toggle="#myModal" data-target="#myModal" id="cartModal" class="btn btnCart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button></li>
	    	</ul>
	    	<ul class="nav navbar-nav navbar-right">
	    		<li><a>#Fname #Lname</a></li>
		      	<li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
		    </ul>
	  	</div>
	</nav>
</header>

<div class="container">
	<div id="theModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-right"></span></button>
					<h4>My Cart</h4>
				</div>
				<div class="modal-body">
					<table id="tables" class="table table-striped table-border dataTable" style="width: 100%">
						<thead class="cartHead">
							<tr>
								<th> </th>
								<th> Image </th>
								<th> Name </th>
								<th> Quantity </th>
								<th> Price </th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="modal-body">
					<div class="form-inline" style="text-align: right;">
						<label for="vcode">Voucher : </label>
						<input type="text" name="voucher" id="vcode" class="form-control" placeholder="Enter Promotion Code">
					</div>
				</div>
				<div class="modal-footer">
					<p>Total    : </p>
					<p>Tax      : </p>
					<p>Discount : </p>
					<p>Subtotal : </p>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('#theModal').modal({
			keyboard: false,
			show: false,
			backdrop: 'static'
		});

		$('#cartModal').click(function() {
			$('#theModal').modal('show');
		})
	});
</script>
