<?php
use Model\Db\DbFactory;
DbFactory::start();
$utilisateurs = \ORM::for_table('t_utilisateurs')->where('id_utilisateur','1')->find_one();

 ?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $utilisateurs->prenom.' '.$utilisateurs->nom ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->assetUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->

    <link href="<?= $this->assetUrl('css/grayscale.css'); ?>" rel="stylesheet" />
    <link href="<?= $this->assetUrl('css/grayscale.min.css'); ?>" rel="stylesheet" />
    <link href="<?= $this->assetUrl('css/style.css'); ?>" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<?= $this->section('main_content'); ?>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p></span><?= $utilisateurs->prenom.' '.$utilisateurs->nom ?> - 2017</p>
    </div>
</footer>

<!-- jQuery -->
<script src="<?= $this->assetUrl('js/jquery.js'); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js"></script>

<!-- Theme JavaScript -->
<script src="<?= $this->assetUrl('js/grayscale.min.js'); ?>"></script>
<script src="<?= $this->assetUrl('js/timeline.js'); ?>"></script>


</body>

</html>
