<?php
	session_start();
	if($_SESSION['user-login'] != 'admin'){
		header("location: ./Home.php");
	}
	include("HeaderIn.php");
?>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  	<div class="container-fluid bg-header">
		    <div class="navbar-header">
			<img src="../Asset/Gallery/LogoLandscape.png" width="140" height="50">
		    </div>
	    	<ul class="nav navbar-nav navbar-right">
		      	<li><a href="../Controller/LogoutController.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
		    </ul>
	  	</div>
	</nav>
</header>
<body class="bg-body">
	<div class="container-fluid">
		<br><br><br>
		<div class="x">
			<button type="button" id="addMenu" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add Menu</button>
		</div>
		<table id="tables" class="table table-striped table-border dataTable" style="width: 100%">
			<thead>
				<tr>
					<th> Image </th>
					<th> ID Menu </th>
					<th> Name </th>
					<th> Price </th>
					<th> Category </th>
					<th> Description </th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include('../Include/db_config.php');
					$query = mysqli_query($db,"SELECT * FROM menu");
					while($row = mysqli_fetch_array($query)){
				?>
					<tr>
						<td><img src="../Controller/ImageView.php?id=<?php echo $row['IDMenu']; ?> " width="100px" height="100px"/></td>
						<td><?php echo $row['IDMenu']; ?></td>
						<td><?php echo $row['NamaMenu']; ?></td>
						<td><?php echo $row['Harga']; ?></td>
						<td><?php echo $row['Kategori']; ?></td>
						<td><?php echo $row['Deskripsi']; ?></td>
						<td><a class='editMenu' id='<?php echo $row['IDMenu']?>'>
								<span class="glyphicon glyphicon-wrench"></span>
							</a>
							<a class='deleteMenu' id='<?php echo $row['IDMenu']?>'>
								<span class="glyphicon glyphicon-trash"></span>
							</a>		
						</td>
								
							
					</tr>
				<?php
					}
				?>
			</tbody>
			<tfoot>
				<tr>
					<th> Image </th>
					<th> ID Menu </th>
					<th> Name </th>
					<th> Price </th>
					<th> Category </th>
					<th> Description </th>
					<th> Action </th>
				</tr>
			</tfoot>
		</table>
	</div>

	<div class="container">
		<div id="addModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
						<h3 class="h2-home">Add Menu</h3>
					</div>
					<div class="modal-body">
						<form action="../Controller/AddMenuController.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="idMenu">ID Menu :</label>
								<input type="text" name="idMenu" class="form-control" id="idMenu" required>
							</div>
							<div class="form-group">
								<label for="namaMenu">Menu Name :</label>
								<input type="text" name="namaMenu" class="form-control" id="namaMenu" required>
							</div>
							<div class="form-group">
								<label for="harga">Price :</label>
								<input type="text" name="harga" class="form-control" id="harga" required>
							</div>
							<div class="form-group">
								<label for="kategori">Category :</label>
	                                <select class="form-control" name="kategori" id="kategori">
	                                    <option>Appetizer</option>
	                                    <option>Dessert</option>
	                                    <option>Drinks</option>
	                                    <option>Main Dish</option>
	                                </select>
							</div>
							<div class="form-group">
								<label for="deskripsi">Description :</label>
								<textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
							</div>
							<div class="form-group">
								<label for="imageMenu">Upload Image</label>
								<input type="file" name="imageMenu" id="imageMenu" required>
							</div>
							<div>
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="editModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-chevron-right"></span></button>
					</div>
					<div class="modal-body isi-modal">

					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			function edit_data(id){
				console.log(id);
				$.ajax({
					url: "../Controller/FetchAdmin.php",
					method: "POST",
					data:{id:id},
					success:function(data){
						$('#editModal').modal('show');
						$('.isi-modal').html(data);
					}
				})
			}
			function delete_menu(id){
				console.log(id);
				$.ajax({
					url: "../Controller/DeleteMenuController.php",
					method: "POST",
					data:{id:id},
					success: function() {
            		location.reload();
            		alert('success');
       			 }
				})

			}
		$('#addModal').modal({
			keyboard: false,
			show: false,
			backdrop: 'static'
		});
		$('#editModal').modal({
			keyboard: false,
			show: false,
			backdrop: 'static'
		});
		$('#addMenu').click(function() {
			$('#addModal').modal('show');
		});
		$('.editMenu').click(function(){
			var id = $(this).attr("id");
			edit_data(id);
		});
		$('.deleteMenu').click(function(){
			var id = $(this).attr("id");
			delete_menu(id);
		});
	});
	</script>
</body>