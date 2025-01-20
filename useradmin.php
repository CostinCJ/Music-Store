<?php
include("connect.php");

session_start(); 
session_regenerate_id(true); 
if (!isset($_SESSION['looser'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['looser'];

$id_con = mysqli_connect("localhost", "root", "12mii2022", "muzica");
if (!$id_con) {
    die("Can't connect " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($id_con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["first_name"] . " " . $row["last_name"];
    $email = $row["email"];
    $address = $row["street"];
} else {
    echo "User not found.";
}

mysqli_close($id_con);
?>
<html>
    <head>
        <title>Musical Minds</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="user.css">
        <link rel="stylesheet" type="text/css" href="conectare.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/8523c1f144.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
	    <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
    </head>
    <body>
        <div id="corp">
                <div id="header">
                    <div id="ambalajheader">
                        <div id="ambalajhead">
                            <div id="centru">
                                <ul id="headerbuton">
                                    <li id="butonheader"><a href="#">Service</a></li>
                                    <li id="butonheader"><a href="actions.php">Actions</a></li>
                                    <li id="butonheader"><a href="contactus.php">Contact Us</a></li>
                                    <li id="butonheader"><a href="#">About Us</a></li>
                                </ul>
                            </div>
                            <div id="mijlocheader">
                                <div id="headerlogo">
                                    <a id="logolink" href="admin.php">
                                        <div id="continelogo">
                                            <img id="logo" src="Imagini/titlu.png">
                                        </div>
                                    </a>
                                </div>
                                <div id="searchbox">
                                    <form id="searchboxform" method="get" action="search.php">
                                        <div id="inputsearch">
                                            <svg id="lupa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                            <input id="inputsearche" placeholder="Search" type="search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="icoane">
                                <div id="iconite">
                                    <a href="useradmin.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a>
                                    <a href="#"><i style="margin-left:20px;" class="fa-solid fa-heart"></i></a>
                                    <a href="cart.php"><i style="margin-left:20px;" class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="categorii">
                    <div id="categoriiwrap">
                        <div id="spandex">
                            <ul id="lista">
                                <div id="obiecte">
                                    <li>
                                        <a id="categoriilink" href="chitari.php">Guitar/Bass</a>
                                    </li>
                                    <li>
                                        <a id="categoriilink" href="drums.php">Drums</a>
                                    </li>
                                    <li>
                                        <a id="categoriilink" href="">Keys</a>
                                    </li>
                                    <li>
                                        <a id="categoriilink" href="">Studio</a>
                                    </li>
                                    <li>
                                        <a id="categoriilink" href="">Software</a>
                                    </li>
                                    <li>
                                        <a id="categoriilink" href="">Video</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="user_data">
                    <h1 id="welcome">Welcome, <?php echo $name; ?>!</h1>
	                <div id="data_u">
                        <ul>
		                  <li><a href="accountoverview.php">Account Overview</a></li>
		                  <li><a href="editaccount.html">Edit Account</a></li>
		                  <li><a href="my_orders.php">My Orders</a></li>
	                   </ul>
                    </div>
                        <form action="logout.php" method="post">
                            <div id="loginsubmit">
                                <button type="submit" id="butonlogin" name="logout">Logout</button>
                            </div>
                        </form>
                </div>
            <div id="footer1">
                <div id="footer">
                    <div id="content">
                        <img src="Imagini/titlualb.png">
                        <div id="navigatie">
                            <div id="sectiune">
                                <ul id="linkfooter">
                                    <li id="footerlink">
                                        <a href="#">About Us</a>
                                    </li>
                                    <li id="footerlink">
                                        <a href="contactus.php">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>