<?php 
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
	      		<li><button type="button" id="cartModal" class="btn btnCart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button></li>
	    	</ul>
	    	<ul class="nav navbar-nav navbar-right">
	    		<li><a>Welcome, <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?></a></li>
		      	<li><a href="../Controller/LogoutController.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
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
					<h3 class="h2-home">My Cart</h3>
				</div>
				<div class="modal-body cart-body">
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
						<tbody>
							<?php
								include('../Include/db_config.php');
								$idUser = $_SESSION['iduser'];
								$query = "SELECT * FROM pesanan WHERE IDUser = $idUser";
								$result = $db->query($query);
								$i = 1;
								$total = 0;
								$HargaMinuman = 0;
								$QtyBebek = 0;
								$HargaBebek = 0;
								while($row = $result->fetch_assoc()){
									$totalHarga = $row['Qty']*$row['Harga'];
									$id = $row['IDMenu'];
									
									if($row['NamaMenu'] == 'Bebek Panggang'){
										$QtyBebek = $row['Qty'];
										$HargaBebek = $row['Harga'];
									}
									if($id[0] == 'S'){
										if($row['Harga'] > $HargaMinuman){
											$HargaMinuman = $row['Harga'];
										}
									}
									echo "<tr>";
										echo "<td>$i</td>";
										echo "<td><img src='../Controller/ImageView.php?id=".$row['IDMenu']."' width='100px' height='100px'/></td>";
										echo "<td>" . $row['NamaMenu'] . "</td>";
										echo "<td>" . $row['Qty'] . "</td>";
										echo "<td>" . $totalHarga . "</td>";
									echo "</tr>";
									$total += $totalHarga;
								}
								mysqli_free_result($result);
							?>
						</tbody>
					</table>
				</div>
				<div class="modal-body">
					<div class="form-inline" style="text-align: right;">
						<label for="vcode">Voucher : </label>
						<select class="form-control" name="voucher" id="vcode">
								<option value="">No Voucher</option>
                                <option value="MK001">MK001</option>
                                <option value="MK002">MK002</option>
                                <option value="MK003">MK003</option>
                            </select>
					</div>
				</div>
				<div class="modal-footer" >
					<div style="float:right;text-align:left;">
						<p>Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Rp. <?php echo $total;?></p>
						<p>Discount &nbsp; :&nbsp;&nbsp;- Rp. <span id="Diskon">0</span></p>
						<p>Tax &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Rp. <span id="Tax"><?php echo $total*0.1 ?></span></p>
						<p>Subtotal &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; Rp. <span id="Total"> <?php echo $total+($total*0.1)?></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(document).on('change','#vcode',function(){
			$('#Diskon').text('0');
			$('#Tax').text(<?php echo $total*0.1;?>);
			$('#Total').text(<?php echo $total+($total*0.1);?>);
            voucher_id = $( "#vcode option:selected" ).text();
			if(voucher_id == 'MK001'){
				if(<?php echo $QtyBebek;?> != 0){
					diskon = <?php echo ($HargaBebek*0.2);?>;
					total = (<?php echo $total;?> - diskon)
					tax = ((<?php echo $total;?> - diskon)*0.1)
					harga = ((<?php echo $total;?> - diskon)*0.1 + total);
					$('#Tax').text(tax);
					$('#Diskon').text(diskon);
					$('#Total').text(harga);
				}
			}
			if(voucher_id == 'MK002'){
				if(<?php echo $total;?> >= 300000){
					diskon = <?php echo $total*0.1;?>;
					total = <?php echo $total;?>-diskon;
					tax = total*0.1;
					harga = total + tax;
					$('#Tax').text(tax);
					$('#Diskon').text(diskon);
					$('#Total').text(harga);
				}
			}
			if(voucher_id == 'MK003'){
				if(<?php echo $HargaMinuman;?> != 0 && <?php echo $total;?> >= 250000){
					diskon = <?php echo $HargaMinuman*0.3;?>;
					total = <?php echo $total;?>-diskon;
					tax = total*0.1;
					harga = total + tax;
					$('#Tax').text(tax);
					$('#Diskon').text(diskon);
					$('#Total').text(harga);
				}
			}
			console.log(voucher_id);
        });
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
