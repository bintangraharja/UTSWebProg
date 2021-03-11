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
            <?php
            include('../Include/db_config.php');
            $i = 0;
            $query = mysqli_query($db,"SELECT * FROM menu Where Kategori = 'Main Dish' AND IDMenu LIKE 'R%'");

            ?>
            <?php
                while($row = mysqli_fetch_array($query)){
                if($i == 3){
                    echo "<div class='row'>";
                }
            ?>
            <div class="column">
                <img data-toggle="#myModal" data-target="#myModal" id="<?php echo $row['IDMenu']; ?>" src="../Controller/ImageView.php?id=<?php echo $row['IDMenu']; ?> " class="image" style="width:100%">
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
		<div class="headMenu">
			<h3>Noodle</h3>
		</div>
		<div class="row">
            <?php
            include('../Include/db_config.php');
            $i = 0;
            $query = mysqli_query($db,"SELECT * FROM menu Where Kategori = 'Main Dish' AND IDMenu LIKE 'N%'");

            ?>
            <?php
                while($row = mysqli_fetch_array($query)){
                if($i == 3){
                    echo "<div class='row'>";
                }
            ?>
            <div class="column">
                <img data-toggle="#myModal" data-target="#myModal" id="<?php echo $row['IDMenu']; ?>" src="../Controller/ImageView.php?id=<?php echo $row['IDMenu']; ?> " class="image" style="width:100%">
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
		<div class="headMenu">
			<h3>Dish</h3>
		</div>
		<div class="row">
            <?php
            include('../Include/db_config.php');
            $i = 0;
            $query = mysqli_query($db,"SELECT * FROM menu Where Kategori = 'Main Dish' AND IDMenu LIKE 'L%'");

            ?>
            <?php
                while($row = mysqli_fetch_array($query)){
                if($i == 3){
                    echo "<div class='row'>";
                }
            ?>
            <div class="column">
                <img data-toggle="#myModal" data-target="#myModal" id="<?php echo $row['IDMenu']; ?>" src="../Controller/ImageView.php?id=<?php echo $row['IDMenu']; ?> " class="image" style="width:100%">
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
		<div class="headMenu">
			<h3>Vegetables</h3>
		</div>
		<div class="row">
            <?php
            include('../Include/db_config.php');
            $i = 0;
            $query = mysqli_query($db,"SELECT * FROM menu Where Kategori = 'Main Dish' AND IDMenu LIKE 'V%'");

            ?>
            <?php
                while($row = mysqli_fetch_array($query)){
                if($i == 3){
                    echo "<div class='row'>";
                }
            ?>
            <div class="column">
                <img data-toggle="#myModal" data-target="#myModal" id="<?php echo $row['IDMenu']; ?>" src="../Controller/ImageView.php?id=<?php echo $row['IDMenu']; ?> " class="image" style="width:100%">
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