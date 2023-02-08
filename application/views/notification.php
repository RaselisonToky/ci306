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
                            <li><a href="<?=base_url('myproduct/listeAllCategorie')?>">Ajouter Produit</a></li>
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



<?php
for ($i=0;$i<count($invity);$i++){ ?>

        <div style="margin-top: 60px; border: 1px solid; width: 350px; height: 150px;margin-left: 100px">
                <p><?=$invity[$i]['nomproduit1'].' atao echange @ '.$invity[$i]['nomrpoduit2'].' hono';?></p>
                <div style="margin-left: 200px"><a href="<?=base_url('notification/accept?produit1='.$invity[$i]['idproduit1'].'&&produit2='.$invity[$i]['idproduit2'].'&&lery='.$invity[$i]['iduser1'].'&&za='.$invity[$i]['iduser2'].'&&idechange='.$invity[$i]['idechange'] )?>"><button style="padding: 10px">Confirmer</button></a></div>
        </div>

<?php } ?>








<!-- jewellery  section end -->
<!-- footer section start -->

<!-- footer section end -->
<!-- copyright section start -->

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






<?php
//foreach ($produitAna as $ana){
//    echo $ana['nomproduit'];
//}
//
//?>

