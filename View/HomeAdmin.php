<?php
	session_start();
	if(!isset($_SESSION["user-login"])){
		include('Header.php');
	}
	else{
		include("HeaderIn.php");
		if($_SESSION["user-login"] == 'user'){
			header("location: ./Home.php");
		}
	}
?>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  	<div class="container-fluid bg-header">
		    <div class="navbar-header">
		      	<a class="navbar-brand">XXX FuLay</a>
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
						<h4>Add Menu</h4>
					</div>
					<div class="modal-body">
						<form action="">
							<div class="form-group">
								<label for="idMenu">ID Menu :</label>
								<input type="text" class="form-control" id="idMenu" required>
							</div>
							<div class="form-group">
								<label for="namaMenu">Menu Name :</label>
								<input type="text" class="form-control" id="namaMenu" required>
							</div>
							<div class="form-group">
								<label for="harga">Price :</label>
								<input type="text" class="form-control" id="harga" required>
							</div>
							<div class="form-group">
								<label for="kategori">Category :</label>
								<input type="text" class="form-control" id="kategori" required>
							</div>
							<div class="form-group">
								<label for="idMenu">Description :</label>
								<textarea class="form-control" id="idMenu"></textarea>
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
	<script>
		$(document).ready(function() {
		$('#addModal').modal({
			keyboard: false,
			show: false,
			backdrop: 'static'
		});

		$('#addMenu').click(function() {
			$('#addModal').modal('show');
		})
	});
	</script>
</body>