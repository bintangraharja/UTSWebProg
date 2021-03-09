<?php
	if(!isset($_SESSION["user-login"])){
		include_once('Header.php');
	}
	else{
		include_once("HeaderIn.php");
	}
?>

<body class="bg-body">
	<br><br><br>
	<div class="row">
		<div class="column-home">
	    	<img src="./Gallery/L0012.jpg" class="image" style="width: 100%">
	  	</div>
	  	<div class="column-home">
	    	<img src="./Gallery/N0002.jpg" class="image" style="width: 100%">
	  	</div>
	  	<div class="column-home">
	    	<img src="./Gallery/L0021.jpg" class="image" style="width: 100%">
	  	</div>
	  	<div class="column-home">
	    	<img src="./Gallery/L0005.jpg" class="image" style="width: 100%">
	  	</div>
	</div>
	<div class="row">
		<div class="column-home">
	    	<img src="./Gallery/R0009.jpg" class="image" style="width: 100%">
	  	</div>
	  	<div class="column-home">
	    	<img src="./Gallery/A0003.jpg" class="image" style="width: 100%">
	  	</div>
	  	<div class="column-home">
	    	<img src="./Gallery/V0001.jpg" class="image" style="width: 100%">
	  	</div>
	  	<div class="column-home">
	    	<img src="./Gallery/A0004.jpg" class="image" style="width: 100%">
	  	</div>
	</div>
</body>