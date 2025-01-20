<?php
session_start(); 
if (!isset($_SESSION['looser'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['looser']; 

include('connect.php');
if (!$id_con) {
    die("Can't connect " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($id_con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $email = $row["email"];
    $password = $_POST["password"];
    $street = $row["street"];
    $city = $row["city"];
    $country = $row["country"];
} else {
    ?>
        <script type="text/javascript">
            alert("User not found!");
            window.history.back(); 
        </script>
        <?php
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $street = $_POST["streetnnr"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', street='$street', city='$city', country='$country', passw='$password' WHERE email='$email'";
    $result = mysqli_query($id_con, $sql);

    if ($result) {
        ?>
        <script type="text/javascript">
            alert("Account updated succesfully!");
            window.history.back(); 
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Error updating account: <?php  mysqli_error($id_con); ?>");
            window.history.back(); 
        </script>
        <?php
    }

    $_SESSION['looser'] = $email;
}

mysqli_close($id_con);
?>