<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12mii2022";
$dbname = "muzica";
$user_email = $_SESSION['looser'];
$id_con = new mysqli($servername, $username, $password, $dbname);
if ($id_con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['remove_from_cart'])) {
    $product_id = $_POST['product_id'];

    if (isset($_SESSION['cart'])) {
        $index = array_search($product_id, $_SESSION['cart']);
        if ($index !== false) {
            unset($_SESSION['cart'][$index]);
        }

        $_SESSION['cart'] = array_values($_SESSION['cart']);

        $selectQuery = "SELECT id_u FROM users WHERE email='$user_email'";
        $selectResult = $id_con->query($selectQuery);
        if ($selectResult && $selectResult->num_rows > 0) {
            $user = $selectResult->fetch_assoc();
            $user_id = $user['id_u'];

            $delete_query = "DELETE FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
            if ($id_con->query($delete_query) === TRUE) {
                header("Location:cart.php");
            } else {
                ?>
                    <script type="text/javascript">
                        alert("Error deleting record: <?php  $id_con->error; ?>");
                        window.history.back(); 
                    </script>
                <?php
            }
        } else {
            ?>
                <script type="text/javascript">
                    alert("User not found!");
                    window.history.back(); 
                </script>
            <?php
        }
    } else {
        ?>
            <script type="text/javascript">
                alert("Cart is empty!");
                window.history.back(); 
            </script>
        <?php
    }
} else {
        ?>
            <script type="text/javascript">
                alert("Invalid request!");
                window.history.back(); 
            </script>
        <?php
}