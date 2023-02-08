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
                            <li><a href="<?=base_url('welcome/deco')?>">Deconnection</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
  <div>
      <form action="<?=base_url('myproduct/search')?>" method="post">
          <div style="margin-left: 500px;margin-top: 100px">
              <input type="text" name="search" placeholder="Search">
              <select name="categ" style="padding: 5px">
                  <?php
                  for ($o=0;$o<count($allcategorie);$o++){?>
                      <option value="<?=$allcategorie[$o]['idcategorie'] ?>"><?=$allcategorie[$o]['nomcategorie'] ?></option>
                  <?php } ?>
              </select>
              <input type="submit" value="Search" style="margin-left: 50px">
          </div>
      </form>
  </div>


<?php
for ($i=0;$i<count($allproduit);$i++){ ?>
<div class="fashion_section" style="margin-top: 100px">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

                <div class="container">
                    <h1 class="fashion_taital"><?=$allcategorie[$i]['nomcategorie'] ?></h1>


                        <div class="row">
                            <?php
                            for ($j=0;$j<count($allproduit[$i]);$j++){
                                if ($olona['nom']!=$allproduit[$i][$j]['iduser']){ ?>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="box_main">
                                            <h4 class="shirt_text"><?=$allproduit[$i][$j]['nomproduit'] ?></h4>
                                            <p class="price_text">Price  <span style="color: #262626;">$ <?=$allproduit[$i][$j]['estimation']?></span></p>
                                            <div class="tshirt_img"><img src="<?=base_url('image/'.$allproduit[$i][$j]['photo'])?>"></div>
                                            <div class="btn_main">
                                                <div class="buy_bt"><a href="<?=base_url('myproduct/allProduct?idproduit='.$allproduit[$i][$j]['idproduit'])?>">Echange</a></div>
                                                <div class="seemore_bt"><a href="#">See More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }

                            } ?>
                        </div>
                    </div>
                </div>


        </div>
    </div>
    <?php } ?>




    <div class="carousel-item">
        <div class="container">
            <h1 class="fashion_taital">Jewellery Accessories</h1>
            <div class="fashion_section_2">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                            <h4 class="shirt_text">Jumkas</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="images/jhumka-img.png"></div>
                            <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                            <h4 class="shirt_text">Necklaces</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="images/neklesh-img.png"></div>
                            <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                            <h4 class="shirt_text">Kangans</h4>
                            <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                            <div class="jewellery_img"><img src="images/kangan-img.png"></div>
                            <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <div class="seemore_bt"><a href="#">See More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jewellery  section end -->
    <!-- footer section start -->

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