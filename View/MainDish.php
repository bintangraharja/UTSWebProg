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
			<h2>MAIN DISH</h2>
		</div>
		<div class="headMenu">
			<h3>Rice</h3>
		</div>
		<div>
			<div class="row">
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0001" src="./Gallery/R0001.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Nasi Tim Ayam</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0002" src="./Gallery/R0002.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Nasi Tim Babi Cincang</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0003" src="./Gallery/R0003.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Nasi Goreng Spesial</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0004" src="./Gallery/R0004.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Nasi Goreng Ikan Asin</div>
			    	</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0005" src="./Gallery/R0005.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Nasi Goreng Yang Chow</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0006" src="./Gallery/R0006.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Nasi Putih</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0007" src="./Gallery/R0007.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bubur Polos</div>
			    	</div>
				</div>
				<div class="column">
					<img data-toggle="#myModal" data-target="#myModal" id="R0008" src="./Gallery/R0008.jpg"class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bubur Ayam</div>
			    	</div>
				</div>
			</div>
		</div>
		<div class="headMenu">
			<h3>Noodle</h3>
		</div>
		<div>
			<div class="row">
				<div class="column">
					<img src="./Gallery/N0001.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bakmi Goreng Ayam</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/N0002.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bakmi Goreng Seafood</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/N0003.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bakmi Goreng Ulang Tahun</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/N0004.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bihun Goreng Seafood</div>
			    	</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img src="./Gallery/N0005.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bihun Goreng Spesial</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/N0006.jpg"class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">I Fu Mie</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/N0007.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Lo Mie</div>
			    	</div>
				</div>
			</div>
		</div>
		<div class="headMenu">
			<h3>Dish</h3>
		</div>
		<div>
			<div class="row">
				<div class="column">
					<img src="./Gallery/L0001.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Ayam Rebus</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/L0002.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Ayam Goreng Kering</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/L0003.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Ayam Goreng Mentega</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/L0004.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Ayam Kluyuk</div>
			    	</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img src="./Gallery/L0005.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Bebek Panggang</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/L0006.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Angsio Bakut</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/L0007.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Babi Goreng Kering</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/L0008.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Babi Sayur Asin</div>
			    	</div>
				</div>
			</div>
		</div>
		<div class="headMenu">
			<h3>Vegetables</h3>
		</div>
		<div>
			<div class="row">
				<div class="column">
					<img src="./Gallery/V0001.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Cah Brokoli</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/V0002.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Cah Kangkung</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/V0003.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Cah Kailan</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/V0004.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Cah Tauge Ikan Asin</div>
			    	</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img src="./Gallery/V0005.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Capcai Ayam</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/V0006.jpg"class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Capcai Kuah</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/V0007.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Capcai Seafood</div>
			    	</div>
				</div>
				<div class="column">
					<img src="./Gallery/V0008.jpg" class="image" style="width:100%">
					<div class="middle-text">
			    		<div class="text-hover">Kailan Saus Tiram</div>
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
						<img src="./Gallery/R0001.jpg" style="width: 100%;">
						<h3 style="text-align: center;">Nasi Tim Ayam</h3>
						<p class="descBorder">Description</p>
						<p>Rp. 25.000</p>
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

		$('#R0001').click(function() {
			$('#thisModal').modal('show');
		});
		$('#R0002').click(function() {
			$('#thisModal').modal('show');
		});
		$('#R0003').click(function() {
			$('#thisModal').modal('show');
		});
		$('#R0004').click(function() {
			$('#thisModal').modal('show');
		})
		$('#R0005').click(function() {
			$('#thisModal').modal('show');
		});
		$('#R0006').click(function() {
			$('#thisModal').modal('show');
		});
		$('#R0007').click(function() {
			$('#thisModal').modal('show');
		});
		$('#R0008').click(function() {
			$('#thisModal').modal('show');
		})
	});
</script>