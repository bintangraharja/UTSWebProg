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
			<a href="#">
				<button type="submit" class="btn"><span class="glyphicon glyphicon-plus-sign"></span> Add Menu</button>
			</a>
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
	<script>
		
	</script>
</body>