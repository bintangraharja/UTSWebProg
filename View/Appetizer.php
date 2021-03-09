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
			<h2>APPETIZER</h2>
		</div>
		<div>
			<div class="row">
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0001" src="./Gallery/A0001.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Lumpia Kulit Tahu Goreng</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0002" src="./Gallery/A0002.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Pangsit Udang Mayonaise</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0003" src="./Gallery/A0003.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Siomay Babi</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0004" src="./Gallery/A0004.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Hakau Udang</div>
			    	</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0005" src="./Gallery/A0005.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Mantau Goreng</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0006" src="./Gallery/A0006.jpg"class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Xiong Long Bao</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0007" src="./Gallery/A0007.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Kuotie</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="A0008" src="./Gallery/A0008.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Ceker Ayam</div>
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
						<img src="./Gallery/A0001.jpg" style="width: 100%;">
						<h3 style="text-align: center;">Lumpia Kulit Tahu Goreng</h3>
						<p class="descBorder">Description</p>
						<p>Rp. 48.000</p>
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

		$('#A0001').click(function() {
			$('#thisModal').modal('show');
		});
		$('#A0002').click(function() {
			$('#thisModal').modal('show');
		});
		$('#A0003').click(function() {
			$('#thisModal').modal('show');
		});
		$('#A0004').click(function() {
			$('#thisModal').modal('show');
		})
		$('#A0005').click(function() {
			$('#thisModal').modal('show');
		});
		$('#A0006').click(function() {
			$('#thisModal').modal('show');
		});
		$('#A0007').click(function() {
			$('#thisModal').modal('show');
		});
		$('#A0008').click(function() {
			$('#thisModal').modal('show');
		})
	});
</script>