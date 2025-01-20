<?php
session_start();
include('connect.php');

if (isset($_POST['add_to_cart']) && isset($_SESSION['looser'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $stockQuery = "SELECT stock FROM products WHERE id_p = '$product_id'";
    $stockResult = mysqli_query($id_con, $stockQuery);
    $productStock = mysqli_fetch_assoc($stockResult)['stock'];

    if ($quantity > $productStock) {
        ?>
        <script type="text/javascript">
            alert("Cannot add more products than available in stock.");
            window.history.back(); 
        </script>
        <?php
        exit();
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    for ($i = 0; $i < $quantity; $i++) {
        $_SESSION['cart'][] = $product_id;
    }

    $user_email = $_SESSION['looser'];
    $selectQuery = "SELECT * FROM users WHERE email='$user_email'";
    $selectResult = mysqli_query($id_con, $selectQuery);
    $user_id = mysqli_fetch_assoc($selectResult)['id_u'];

    $insertQuery = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";
    $insertResult = mysqli_query($id_con, $insertQuery);

    if (!$insertResult) {
        ?>
        <script type="text/javascript">
            alert("Error: <?php echo mysqli_error($id_con); ?>");
        </script>
        <?php
    }

    header("Location: cart.php");
    exit();
}
?>
