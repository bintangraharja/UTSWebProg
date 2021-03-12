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
	<br><br><br><br>
	<div class="container">
		<div class="headMenu">
			<h2 class="h2-home">DRINK</h2>
		</div>
		<div class="">
			<?php
			include('../Include/db_config.php');
			$i = 0;
			$query = mysqli_query($db,"SELECT * FROM menu WHERE Kategori = 'Drinks'");
			
			?>
			<?php
				while($row = mysqli_fetch_array($query)){
				if($i == 3){
					echo "<div class='row'>";
				}
			?>
			<div class="column">
				<img id="<?php echo $row['IDMenu']; ?>" src="../Controller/ImageView.php?id=<?php echo $row['IDMenu']; ?> " class="image imgMenu" style="width:100%">
				<div class="middle-text">
					<div class="text-hover">
						<?php echo $row['NamaMenu']; ?>
					</div>
				</div>
			</div>
			<?php
				if($i == 3){
					echo "</div>";
					$i = -1;
				}
				$i++;
				}
			?>
		</div>
	</div>
	<br>
	
	<div class="container">
		<div id="thisModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-right"></span></button>
					</div>
					<div class="modal-body order-body">
					
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	$(document).ready(function() {
		function fetch_post_data(imgId){
			console.log(imgId);
			$.ajax({
				url: "../Controller/Fetch.php?url=Drink",
				method: "POST",
				data:{imgId:imgId},
				success:function(data){
					$('#thisModal').modal('show');
					$('.order-body').html(data);
				}

			})
		}
		$('#thisModal').modal({
			keyboard: false,
			show: false,
			backdrop: 'static'
		});
		$('.imgMenu').click(function(){
			var id = $(this).attr("id");
			fetch_post_data(id);
		})

		
	});
</script>