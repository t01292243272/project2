<?php
session_start();
ob_start();
define("security", TRUE);
include_once("config/connect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>


<body>
    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <?php
                include_once("module/logo/logo.php")
                ?>
                <!-- search_box -->
                <?php
                include_once("module/search/search_box.php")
                ?>
                <!-- cart_notify -->
                <?php
                include_once("module/cart/cart_notify.php")
                ?>
            </div>
        </div>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!-- end header -->


    <!-- body -->
    <div id=body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav>
                        <?php
                        include_once("module/category/menu.php")
                        ?>
                    </nav>
                </div>
            </div>
            <div class="row">
                <!-- slide -->
                <div id="main" class="col-lg-12 col-md-12 col-sm-12">
                    <?php
                    include_once("module/slider/slide.php")
                    ?>
                    <!-- end slide -->


                    <!-- Master Page Here -->
                    <?php
                    if (isset($_GET['page_layout'])) {
                        switch ($_GET['page_layout']) {
                            case 'cart':
                                include_once('module/cart/cart.php');
                                break;
                            case 'search':
                                include_once('module/search/search.php');
                                break;
                            case 'product':
                                include_once('module/product/product.php');
                                break;
                            case 'success':
                                include_once('module/cart/success.php');
                                break;
                            case 'category':
                                include_once('module/category/category.php');
                                break;
                            case 'success':
                                include_once('module/cart/success.php');
                                break;
                            case 'order':
                                include_once('module/confirm.php');
                                break;
                        }
                    } else {
                        include_once("module/product/product_featured.php");
                        include_once("module/product/product_new.php");
                    }
                    ?>



                </div>

            </div>
        </div>
    </div>
    <!-- end body -->
    <div id="footer-top">
        <div class="container">
            <div class="row">
                <?php
                include_once("module/logo/logo-footer.php");
                include_once("module/footer/address.php");
                include_once("module/footer/service.php");
                include_once("module/footer/hotline.php");
                ?>
            </div>
        </div>
    </div>

    <!--	Footer	-->
    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p style="text-align:center">
                    © 2021 - Bản quyền của Nhà Xinh
Từ năm 1999 - thương hiệu đăng ký số 284074 Cục sở hữu trí tuệ
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--	End Footer	-->
</body>

</html>