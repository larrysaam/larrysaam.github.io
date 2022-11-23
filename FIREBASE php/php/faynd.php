
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="navigation_bar.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="main_banner.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="sample e-commerce website">
        <meta name="author" content="Larrien">
        <script src="https://kit.fontawesome.com/f02face2fa.js" crossorigin="anonymous"></script>
        <title>E-COMMERCE</title>
    </head>
    <body>

        <!-- navigation bar -->
        
        <?php require 'navigation_bar.php'; 
            nav();
        ?>

        <!-- banner section -->

        <?php require 'banner.php'; 
            banner("banner.jpg");
        ?>

        <!-- product section -->
        <section id="product">
            <span class="product_section"><b>PRODUCTS</b></span>
            <aside class="category">
                <label id="category_label">Category</label>
            </aside>
            <div class="items">
                <?php require 'product.php'; 
                
                item("1","banner.jpg","iphone 12 pro","made in USA and assembled in china","200,000 CFA");
                item("1","banner.jpg","iphone 12 pro","made in USA and assembled in china","200,000 CFA");
                item("1","banner.jpg","iphone 12 pro","made in USA and assembled in china","200,000 CFA");
                item("1","banner.jpg","iphone 12 pro","made in USA and assembled in china","200,000 CFA");
                item("1","banner.jpg","iphone 12 pro","made in USA and assembled in china","200,000 CFA");
                item("1","banner.jpg","iphone 12 pro","made in USA and assembled in china","200,000 CFA");
                ?>
            </div>
        </section>

        <!-- footer section -->
        <section id="footer">
                <ul class="socials-list">
                    <h1 style="color: white;"><b>SOCIALS</b></h1>
                    <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                    <li><a href="#"><i class="fab fa-tweeter"></i>Tweeter</a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i>Facebook</a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                </ul>

                <ul class="category_footer">
                    <h1 style="color: white;"><b>CATEGORIES</b></h1>
                    <li><a href="#">Iphones</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Hawei</a></li>
                    <li><a href="#">Infinix</a></li>
                    <li><a href="#">Sony</a></li>
                </ul>

                <ul class="contacts">
                    <h1 style="color: white;"><b>CONTACTS</b></h1>
                    <li>Cameroon: +237 67777777</li>
                    <li>Nigeria: +234 0044444444</li>
                    <li>USA: +1 (235)222222</li>
                </ul>

        </section>
    </body>
</html>