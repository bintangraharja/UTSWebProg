<?php
    if(isset($_POST['id'])){
        include("../Include/db_config.php");
        $idMenu = $_POST['id'];
        $output = '';
        $query = "SELECT * FROM menu WHERE IDMenu = '$idMenu'";
        $result = mysqli_query($db,$query);
        
        while($row = mysqli_fetch_array($result)){
            
            $output .= '
               <h2 class="h2-home">Edit Menu </h2>
               <form action="../Controller/EditMenuController.php?id='.$row['IDMenu'].'" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="idMenu">ID Menu :</label>
				<input type="text" name="idMenu"value="'.$row['IDMenu'].'" class="form-control" id="idMenu" disabled>
			</div>
			<div class="form-group">
				<label for="namaMenu">Menu Name :</label>
				<input type="text" name="namaMenu" value="'.$row['NamaMenu'].'"class="form-control" id="namaMenu" required>
			</div>
			<div class="form-group">
				<label for="harga">Price :</label>
				<input type="text" name="harga" value="'.$row['Harga'].'"class="form-control" id="harga" required>
			</div>
			<div class="form-group">
				<label for="kategori">Category :</label>
				<select class="form-control" name="kategori" id="kategori" disabled>
					<option value="'.$row['Kategori'].'">'.$row['Kategori'].'</option>
				</select>
			</div>
			<div class="form-group">
				<label for="deskripsi">Description :</label>
				<textarea  name="deskripsi" class="form-control" id="idMenu" required>'.$row['Deskripsi'].'</textarea>
			</div>
			<div class="form-group">
				<label for="imageMenu">Upload Image</label>
				<input type="file" name="imageMenu" id="imageMenu">
			</div>
			<div>
				<button type="submit" name="submit" class="btn btnInsert">Submit</button>
				<button type="cancel" data-dismiss="modal" class="btn btnClose">Cancel</button>
			</div>
		</form>
            ';
        }
        echo $output;
    }
	else{
		header("Location: ../View/Home.php");
	}
?>