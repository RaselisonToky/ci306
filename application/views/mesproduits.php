<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Eflyer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/bootstrap.min.css') ?>">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/style.css') ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?=base_url('css/responsive.css') ?>">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="<?=base_url('image/gif') ?>" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?=base_url('css/jquery.mCustomScrollbar.min.css')?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('css/owl.carousel.min.css')?>">
    <link rel="stylesoeet" href="<?=base_url('css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
<!-- banner bg main start -->
<div class="banner_bg_main">
    <!-- header top section start -->
    <div class="container">
        <div class="header_section_top">
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom_menu">
                        <ul>
                            <li><a href="<?=base_url('welcome/listeProduit')?>">Liste Produits</a></li>
                            <li><a href="<?=base_url('myproduct/listeMyproduct')?>">Mes produits</a></li>
                            <li><a href="<?=base_url('myproduct/invitation2')?>">Mes invitation</a></li>
                            <li><a href="<?=base_url('notification/notificationPage')?>">Notification</a></li>
                            <li><a href="<?=base_url('myproduct/listeAllCategorie')?>">Ajouter Produit</a></li>
                            <li><a href="<?=base_url('welcome/deco')?>">Deconnection</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- banner bg main end -->
<!-- fashion section start -->
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">

                    <div class="fashion_section_2">
                        <div class="row">
                        <?php
                        for ($i=0;$i<count($produit);$i++){ ?>
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text"><?=$produit[$i]['nomproduit'] ?></h4>
                                    <p class="price_text">Price  <span style="color: #262626;">$ <?=$produit[$i]['estimation']?></span></p>
                                    <div class="tshirt_img"><img src="<?=base_url('image/'.$produit[$i]['photo'])?>"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="<?=base_url('myproduct/modify?idp='.$produit[$i]['idproduit'] )?>">Modifier</a></div>
                                        <div class="seemore_bt"><a href="<?=base_url('myproduct/remove?idproduct='.$produit[$i]['idproduit']) ?>">Supprimer</a></div>
                                    </div>
                                </div>
                            </div>
                       <?php } ?>


                            <!--                           <div class="col-lg-4 col-sm-4">-->
                            <!--                              <div class="box_main">-->
                            <!--                                 <h4 class="shirt_text">Man -shirt</h4>-->
                            <!--                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>-->
                            <!--                                 <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>-->
                            <!--                                 <div class="btn_main">-->
                            <!--                                    <div class="buy_bt"><a href="#">Buy Now</a></div>-->
                            <!--                                    <div class="seemore_bt"><a href="#">See More</a></div>-->
                            <!--                                 </div>-->
                            <!--                              </div>-->
                            <!--                           </div>-->
                            <!--                           <div class="col-lg-4 col-sm-4">-->
                            <!--                              <div class="box_main">-->
                            <!--                                 <h4 class="shirt_text">Woman Scart</h4>-->
                            <!--                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>-->
                            <!--                                 <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>-->
                            <!--                                 <div class="btn_main">-->
                            <!--                                    <div class="buy_bt"><a href="#">Buy Now</a></div>-->
                            <!--                                    <div class="seemore_bt"><a href="#">See More</a></div>-->
                            <!--                                 </div>-->
                            <!--                              </div>-->
                            <!--                           </div>-->
                        </div>
                    </div>
                </div>
            </div>

        <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
<!-- electronic section end -->
<!-- jewellery  section start -->

        <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>

    </div>
</div>
<!-- jewellery  section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
        <div class="input_bt">
            <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
            <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
        </div>
        <div class="footer_menu">
            <ul>
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">Gift Ideas</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Today's Deals</a></li>
                <li><a href="#">Customer Service</a></li>
            </ul>
        </div>
        <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>
