<?php
if (isset($_POST['delp']) && isset($_POST['id'])) {
    $product_id = $_POST['id'];
    
    include('connect.php');
    $deleteQuery = "DELETE FROM products WHERE id_p = '$product_id'";
    $deleteResult = mysqli_query($id_con, $deleteQuery);
    if ($deleteResult) {
        ?>
        <script type="text/javascript">
            alert("Product deleted!");
            window.history.back(); 
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Error deleting product: <?php  mysqli_error($id_con); ?>");
            window.history.back(); 
        </script>
        <?php
    }

    mysqli_close($id_con);
}
?>
