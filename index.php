<html>
    <head>
        <title>Welcome to Musical Minds</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/8523c1f144.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
	    <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
    </head>
    <script type="text/javascript">
        hs.graphicsDir = 'highslide/graphics/';
        hs.align = 'center';
        hs.transitions = ['expand', 'crossfade'];
        hs.outlineType = 'rounded-white';
        hs.fadeInOut = true;
        hs.addSlideshow({
        interval: 5000,
        repeat: false,
        useControls: true,
        fixedControls: 'fit',
        overlayOptions: {
        opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	   }
       });
    </script>
    <body>
        <div id="corp">
                <div id="header">
                    <div id="ambalajheader">
                        <div id="ambalajhead">
                            <div id="centru">
                                <ul id="headerbuton">
                                    <li id="butonheader"><a href="index.php">Home</a></li>
                                    <li id="butonheader"><a href="contactus.php">Contact Us</a></li>
                                    <li id="butonheader"><a href="aboutus.php">About Us</a></li>
                                </ul>
                            </div>
                            <div id="mijlocheader">
                                <div id="headerlogo">
                                    <a id="logolink" href="index.php">
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
                                            <input id="inputsearche" placeholder="Search" type="search" name="query">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="icoane">
                                <div id="iconite">
                                    <a href="conectare.php"><i class="fa-solid fa-circle-user"></i></a>
                                    <a href="index.php"><i style="margin-left:20px;" class="fa-solid fa-heart"></i></a>
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
                <div id="body">
                    <div class="highslide-gallery" align="center">  
                        <a href="images/stevavai.jpg" class="highslide" onClick="return hs.expand(this)">
                            <img src="images/bestseller.jpg" title="Click to enlarge" />
                        </a>
                        <div class="highslide-caption">
                            <a style="text-decoration:none; color:black;" href="productspage.php?id=6">Best-Seller!!!</a>
                        </div>
                        <a  style="margin-left:200px;" href="images/synystergates.jpg" class="highslide" onClick="return hs.expand(this)">
                            <img src="images/sale.png" title="Click to enlarge" />
                         </a>
                        <div class="highslide-caption">
                            <a style="text-decoration:none; color:black;" href="productspage.php?id=27">50%-OFF!!!</a>
                        </div>
                    </div>
                </div>
                <div id="meniu">
                    <div id="wrapobiectecategorii">
                        <div id="obiectecategorii" style="text-align:center; margin-top:20px; margin-bottom:40px;">
                            <a id="categoriiobiectlink" style="border:0;">
                                <div id="imaginecategorie">
                                    <picture>
                                        <img src="Imagini/30zile.jpg">
                                    </picture>
                                </div>
                                <div id="categoriinume">
                                    <span id="numecategorii">Days Money-Back</span>
                                </div>
                            </a>
                            <a id="categoriiobiectlink" style="border:0;">
                                <div id="imaginecategorie">
                                    <picture>
                                        <img style="margin-top:5px;" src="Imagini/garantie.jpg">
                                    </picture>
                                </div>
                                <div id="categoriinume">
                                    <span id="numecategorii">Years Warranty</span>
                                </div>
                            </a>
                            <a id="categoriiobiectlink" style="border:0;">
                                <div id="imaginecategorie">
                                    <picture>
                                        <img style="height:50px; margin-top:20px;" src="Imagini/transport.png">
                                    </picture>
                                </div>
                                <div id="categoriinume">
                                    <span id="numecategorii">Free Shipping</span>
                                </div>
                            </a>
                            <a id="categoriiobiectlink" style="border:0;">
                                <div id="imaginecategorie">
                                    <picture>
                                        <img src="Imagini/transportrapid.jpg">
                                    </picture>
                                </div>
                                <div id="categoriinume">
                                    <span id="numecategorii">Fast Shipping</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h2 id="titlucategorii">Our Categories</h2>
                    <div id="obiectecategorii">
                        <a id="categoriiobiectlink" href="chitari.php">
                            <div id="imaginecategorie">
                                <picture>
                                    <img src="Imagini/chitara.png">
                                </picture>
                            </div>
                            <div id="categoriinume">
                                <span id="numecategorii">Guitars and Basses</span>
                            </div>
                        </a>
                        <a id="categoriiobiectlink" href="drums.php">
                            <div id="imaginecategorie">
                                <picture>
                                    <img src="Imagini/tobe.png">
                                </picture>
                            </div>
                            <div id="categoriinume">
                                <span id="numecategorii">Drums and Percussion</span>
                            </div>
                        </a>
                        <a id="categoriiobiectlink" href="#">
                            <div id="imaginecategorie">
                                <picture>
                                    <img src="Imagini/pian.png">
                                </picture>
                            </div>
                            <div id="categoriinume">
                                <span id="numecategorii">Keys</span>
                            </div>
                        </a>
                        <a id="categoriiobiectlink" href="#" href="#">
                            <div id="imaginecategorie">
                                <picture>
                                    <img src="Imagini/studio.png">
                                </picture>
                            </div>
                            <div id="categoriinume">
                                <span id="numecategorii">Studio and Recording</span>
                            </div>
                        </a>
                        <a id="categoriiobiectlink" href="#" href="#">
                            <div id="imaginecategorie">
                                <picture>
                                    <img style="width:auto; height:70px;" src="Imagini/software.png">
                                </picture>
                            </div>
                            <div id="categoriinume">
                                <span id="numecategorii" >Software</span>
                            </div>
                        </a>
                        <a id="categoriiobiectlink" href="#" href="#">
                            <div id="imaginecategorie">
                                <picture>
                                    <img src="Imagini/video.jpg">
                                </picture>
                            </div>
                            <div id="categoriinume">
                                <span id="numecategorii">Video</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            <!--
            function toggleBox(szDivID, iState)
            {
                var obj = document.layers ? document.layers[szDivID] :
                document.getElementById ?  document.getElementById(szDivID).style :
                document.all[szDivID].style;
                obj.visibility = document.layers ? (iState ? "show" : "hide") :
                (iState ? "visible" : "hidden");
            }
            -->
            </script>
            <script type="text/javascript">
            <!--
            function toggleBox(szDivID, iState)
            {
                var obj = document.layers ? document.layers[szDivID] :
                document.getElementById ?  document.getElementById(szDivID).style :
                document.all[szDivID].style;
                obj.visibility = document.layers ? (iState ? "show" : "hide") :
                (iState ? "visible" : "hidden");
            }
            -->
            </script>
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