<?php
	if(!isset($_SESSION["user-login"])){
		include_once('Header.php');
	}
	else{
		include_once("HeaderIn.php");
	}
?>

<body class="bg-body">
	<br><br><br><br>
	<div class="container">
		<div class="headMenu">
			<h2>DRINK</h2>
		</div>
		<div>
			<div class="row">
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0009" src="./Gallery/D0009.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Chinese Tea</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0010" src="./Gallery/D0010.jpg"class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Tea</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0011" src="./Gallery/D0011.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Sweet Tea</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0012" src="./Gallery/D0012.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Teh Tarik</div>
			    	</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0013" src="./Gallery/D0013.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Kopi Tarik</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0014" src="./Gallery/D0014.jpg"class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Soda</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0015" src="./Gallery/D0015.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Ice Lemon Tea</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="D0016" src="./Gallery/D0016.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Ice Lychee Tea</div>
			    	</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div id="thisModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-right"></span></button>
					</div>
					<div class="modal-body">
						<img src="./Gallery/D0009.jpg" style="width: 100%;">
						<h3 style="text-align: center;">Chinesse Tea</h3>
						<p class="descBorder">Description</p>
						<p>Rp. 35.000</p>
						<!-- button add +/- quantity -->
						<button type="button" class="btn btnAdd"><span class="glyphicon glyphicon-plus-sign"></span> Add to Cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	$(document).ready(function() {
		$('#thisModal').modal({
			keyboard: false,
			show: false,
			backdrop: 'static'
		});

		$('#D0009').click(function() {
			$('#thisModal').modal('show');
		});
		$('#D0010').click(function() {
			$('#thisModal').modal('show');
		});
		$('#D0011').click(function() {
			$('#thisModal').modal('show');
		});
		$('#D0012').click(function() {
			$('#thisModal').modal('show');
		})
		$('#D0013').click(function() {
			$('#thisModal').modal('show');
		});
		$('#D0014').click(function() {
			$('#thisModal').modal('show');
		});
		$('#D0015').click(function() {
			$('#thisModal').modal('show');
		});
		$('#D0016').click(function() {
			$('#thisModal').modal('show');
		})
	});
</script>