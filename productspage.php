<html>
    <head>
        <title>Musical Minds</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="productspage.css">
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
                                        session_start();
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
                
            </div>
            <?php
                  include('connect.php');
                  $product_id = $_GET['id'];

                  $query = "SELECT * FROM products WHERE id_p = $product_id";
                  $result = mysqli_query($id_con, $query);

                  if ($result) {
                    $product = mysqli_fetch_assoc($result);
                  } else {
                      ?>
                        <script type="text/javascript">
                            alert("Error: <?php  mysqli_error($id_con); ?>");
                            window.history.back(); 
                        </script>
                    <?php
                  }
                ?>
               <div class="product">
                    <div class="product-header">
                        <h1><?php echo $product['p_name']; ?></h1>
                        <p class="product-price"><?php echo $product['price']; ?> USD</p>
                    </div>
                    <img src="<?php echo $product['picture']; ?>" alt="<?php echo $product['p_name']; ?>" class="product-image">
                    <div class="product-description">
                        <ul>
                            <li><strong>Brand:</strong> <?php echo $product['brand']; ?></li>
                            <li><strong>Stock:</strong> <?php echo $product['stock']; ?></li>
                        </ul>
                        <p><?php echo $product['description']; ?></p>
                    </div>
                    <form method="post" action="add_to_cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $product['id_p']; ?>">
                        <div class="cart">
                            <i class="fa fa-shopping-cart"></i>
                            <input type="number" name="quantity" value="1" min="1">
                            <button type="submit" name="add_to_cart" id="button1" class="cart-text">Add to cart</button>
                        </div>
                    </form>

              </div>

         <?php mysqli_close($id_con); ?>
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