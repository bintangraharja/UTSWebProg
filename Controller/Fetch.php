<?php
    if(isset($_POST['imgId'])){
        include("../Include/db_config.php");
        $idMenu = $_POST['imgId'];
        $output = '';
        $query = "SELECT * FROM menu WHERE IDMenu = '$idMenu'";
        $result = mysqli_query($db,$query);
        $url = $_GET['url'];
        
        while($row = mysqli_fetch_array($result)){
            
            $output .= '
                <img src="../Controller/ImageView.php?id='.$row['IDMenu'].'" style="width:100%">
                <h3 style="text-align: center;">'.$row['NamaMenu'].'</h3>
                <p class="descBorder">'.$row['Deskripsi'].'</p>
                
                <form class="col-12" action="../Controller/OrderController.php?url='.$url.'" method="POST">
                    <input type="text" name="menuID" class="hide" value="'.$row['IDMenu'].'">
                    <input type="text" name="namaMenu" class="hide" value="'.$row['NamaMenu'].'">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label>Harga: </label>
                            <input name="total" class="hide" id="total" type="text" value="'.$row['Harga'].'">
                            <input disabled name="harga" id="harga" type="text" value="Rp. '.$row['Harga'].'">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Quantity: </label>
                            <input id="Qty" class="Quantity" type="number" name="qty" min="1" max="100" value="1">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btnAdd"><span class="glyphicon glyphicon-plus-sign"></span> Add to Cart</button>
                </form>
            ';
            echo "
            <script>
                $(document).ready(function() {
                    $('#Qty').on('input', function() {
                        Total = $('#Qty').val() * ".$row['Harga']."
                        $('#harga').val('Rp. '+Total);
                    });
                });
            </script>";
        }
        echo $output;
    }
<<<<<<< HEAD
=======
    else{
        header("Location: ../View/Home.php");
    }
>>>>>>> b619307 (Session)
?>