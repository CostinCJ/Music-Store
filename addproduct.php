<?php
if (isset($_POST['addp'])) {
    include('connect.php'); 
    $caleapoza_posibila="imaginiproduse/".basename($_FILES["fis"]["name"]);
    if (file_exists($caleapoza_posibila)) {
        ?>
        <script type="text/javascript">
            alert("I'm sorry but there is already a file with this name. Please try again!");
            window.history.back(); 
        </script>
        <?php
    } 
    else
	if ($_FILES['fis']['size']<=1000000000){
	
	
		if(is_uploaded_file($_FILES['fis']['tmp_name'])){
		move_uploaded_file($_FILES['fis']['tmp_name'],"imaginiproduse/".$_FILES['fis']['name']);
		}
            $caleapoza="imaginiproduse/".$_FILES['fis']['name'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $stock = $_POST['stock'];
            $category = $_POST['category'];
            $brand = $_POST['brand'];
			$ok = 0;
            $interogare = "INSERT INTO products (p_name, price, description, picture, stock, category,brand) VALUES ('$name', '$price', '$description', '$caleapoza','$stock','$category','$brand')";
			if( $error = mysqli_query($id_con,$interogare))
			{
				?>
                    <script type="text/javascript">
                        alert("You added a product.");
                        window.history.back(); 
                    </script>
            <?php
			}
			else
			{
					?>	<script type="text/javascript">
								alert("Insertion error!");
 				</script>
             <?php 
			}
			mysqli_close($id_con);	
			
	}
	else{
        ?>
        <script type="text/javascript">
            alert("Select a smaller file!");
            window.history.back(); 
        </script>
        <?php
		
	}
	}
?>
