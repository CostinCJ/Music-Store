<?php

include("connect.php");

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contacts (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if ($id_con->query($sql) === TRUE) {
      ?>
        <script type="text/javascript">
            alert("Your message has been sent!");
            window.history.back(); 
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Error: <?php $id_con->error;  ?>");
            window.history.back(); 
        </script>
        <?php
    }

    $id_con->close();
}

?>
