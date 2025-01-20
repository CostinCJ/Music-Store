<?php
session_start();
include('connect.php');


?>
<html>
    <head>
        <title>Musical Minds</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="contactus.css">
        <link rel="stylesheet" type="text/css" href="cart.css">
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
                                    <?php
                                        if (isset($_SESSION['looser'])) {
                                            $homeURL = "indexlogat.php";
                                        } else {
                                            $homeURL = "index.php";
                                        }
                                    ?>
                                    <li id="butonheader"><a href="<?php echo $homeURL; ?>">Home</a></li>
                                    <li id="butonheader"><a href="contactus.php">Contact Us</a></li>
                                    <?php
                                        if (isset($_SESSION['looser'])) {
                                            include('connect.php');
                                            $user_email = $_SESSION['looser'];
                                            $selectQuery = "SELECT * FROM users WHERE email='$user_email'";
                                            $selectResult = mysqli_query($id_con, $selectQuery);

                                            if ($selectResult && mysqli_num_rows($selectResult) > 0) {
                                                $user = mysqli_fetch_assoc($selectResult);
                                                $user_id = $user['id_u'];
                                                if ($user['role'] === 'admin') {
                                                    include('butonactiune.php');
                                                } 
                                                }
                                            }
                                    ?>
                                    <li id="butonheader"><a href="aboutus.php">About Us</a></li>
                                </ul>
                            </div>
                            <div id="mijlocheader">
                                <div id="headerlogo">
                                    <?php
                                        if (isset($_SESSION['looser'])) {
                                            $logoURL = "indexlogat.php";
                                        } else {
                                            $logoURL = "index.php";
                                        }
                                        ?>
                                        <a id="logolink" href="<?php echo $logoURL; ?>">
                                            <div id="continelogo">
                                                <img id="logo" src="Imagini/titlu.png">
                                            </div>
                                        </a>
                                </div>
                                <div id="searchbox">
                                    <form id="searchboxform" method="get" action="search.php" >
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
                                    <?php
                                        if (isset($_SESSION['looser'])) {
                                            echo '<a href="user.php"><i class="fa-solid fa-user" style="color: #25ad2e;"></i></a>';
                                        } else {
                                            echo '<a href="conectare.php"><i class="fa-solid fa-circle-user"></i></a>';
                                        }
                                    ?>
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
                <?php
                    if (isset($_SESSION['looser'])) {
                        $user_email = $_SESSION['looser'];

                        $selectQuery = "SELECT * FROM users WHERE email='$user_email'";
                        $selectResult = mysqli_query($id_con, $selectQuery);

                        if ($selectResult && mysqli_num_rows($selectResult) > 0) {
                            $user = mysqli_fetch_assoc($selectResult);
                            $user_id = $user['id_u'];
                            $cartQuery = "SELECT cart.product_id, p_name, price, quantity FROM cart
                                          INNER JOIN products ON cart.product_id = products.id_p
                                          WHERE user_id = $user_id";
                            $cartResult = mysqli_query($id_con, $cartQuery);

                            if ($cartResult && mysqli_num_rows($cartResult) > 0) {
                                ?>

                                <h1 style="text-align:center;margin-top:50px;">Cart</h1>
                                <table>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                    <?php while ($row = mysqli_fetch_assoc($cartResult)) { ?>
                                        <tr>
                                            <td><?php echo $row['p_name']; ?></td>
                                            <td><?php echo $row['price']; ?> USD</td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td>
                                                <form method="post" action="remove_from_cart.php">
                                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                                    <button type="submit" name="remove_from_cart">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <?php
                            } else {
                                echo "<h1>Cart</h1>";
                                echo "<p>Your cart is empty.</p>";
                            }
                        }
                    }
                ?>







        </div>
            <div id="footer1">
                <div id="footer">
                    <div id="content">
                        <img src="Imagini/titlualb.png">
                        <div id="navigatie">
                            <div id="sectiune">
                                <ul id="linkfooter">
                                    <li id="footerlink">
                                        <a href="aboutus.php">About Us</a>
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
    </body>
</html>
