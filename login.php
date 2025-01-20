<?php
if (isset($_POST["email"]) && isset($_POST["password"])) {
    include("connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND passw='$password'";
    $result = mysqli_query($id_con, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) { 
            $user = mysqli_fetch_assoc($result);
            if ($user['role'] == 'admin') { 
                session_start();
                $_SESSION['looser'] = $user['email'];
                $_SESSION['user_id'] = $user['id']; 
                header("Location: indexlogat.php"); 
                exit;
            } else { 
                session_start();
                $_SESSION['looser'] = $user['email']; 
                $_SESSION['user_id'] = $user['id']; 
                header("Location: indexlogat.php"); 
                exit;
            }
        } else {
            ?>
                <script type="text/javascript">
                    alert("Email or password is wrong. Try again!");
                    window.history.back(); 
                </script>
            <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("Error executing query!");
            window.history.back(); 
        </script>
        <?php
    }
} else {
    header("Location: index.php");
    exit;
}
?>
