<!--
@author: Dharmendra Shah
@email : dharmendra@touchlcd.in
@version: 1.0.0.0.0.0.0.1
contributers: 1. Dharmendra shah 
-->

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet"
        href="assets/liabrary/node_modules/materialize-css/dist/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="assets/liabrary/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/liabrary/Zebra_Pagination/public/css/zebra_pagination.css" type="text/css">
    <link rel="FormSuvidha-icon" sizes="57x57" href="assets/photos/by-admin/logo/swastika/apple-icon-57x57.png">
<link rel="FormSuvidha-icon" sizes="60x60" href="assets/photos/by-admin/logo/swastika/apple-icon-60x60.png">
<link rel="FormSuvidha-icon" sizes="72x72" href="assets/photos/by-admin/logo/swastika/apple-icon-72x72.png">
<link rel="FormSuvidha-icon" sizes="76x76" href="assets/photos/by-admin/logo/swastika/apple-icon-76x76.png">
<link rel="FormSuvidha-icon" sizes="114x114" href="assets/photos/by-admin/logo/swastika/apple-icon-114x114.png">
<link rel="FormSuvidha-icon" sizes="120x120" href="assets/photos/by-admin/logo/swastika/apple-icon-120x120.png">
<link rel="FormSuvidha-icon" sizes="144x144" href="assets/photos/by-admin/logo/swastika/apple-icon-144x144.png">
<link rel="FormSuvidha-icon" sizes="152x152" href="assets/photos/by-admin/logo/swastika/apple-icon-152x152.png">
<link rel="FormSuvidha-icon" sizes="180x180" href="assets/photos/by-admin/logo/swastika/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/photos/by-admin/logo/swastika/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/photos/by-admin/logo/swastika/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/photos/by-admin/logo/swastika/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/photos/by-admin/logo/swastika/favicon-16x16.png">
<link rel="manifest" href="assets/photos/by-admin/logo/swastika/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/photos/by-admin/logo/swastika/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!--Let browser know website is optimized for mobile-->
    <title>
    <?php
    if(isset($_GET['user'])){
        echo "FormSuvidha";
    }
    if(isset($_GET['search'])){
        $kl = $_GET['search'];
        echo "FormSuvidha : $kl";
    }
    if(isset($_GET['form'])){
        $th = $_GET['form'];
        echo "FormSuvidha :- Form-No. : $th";
    }
    ?>
    </title>
    <style>
    #srch input {
        width: 50%;
        margin-top: 20px;
        margin-left: 20%;
        margin-right: 20%;
    }

    #search {
        border: 1px solid black;
        border-radius: 6px;
    }

    #search_btn {
        height: 45px;
    }

    #form_link div ul li {
        border: 1px solid black;
        margin-top: 6px;
        height: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0;
    }

    #form_link div ul li:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #form_link div p {
        margin-top: 30px;
        height: 45px;
        border-radius: 10px;
    }

    #form_link div p a {
        color: black;
        margin: 0px auto;
    }
    </style>
</head>

<body>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper"><a id="logo-container" href="index.php" class="brand-logo"
                style="margin-left: 30px;">FormSuvidha</a>
            <ul class="right hide-on-med-and-down">
                           <?php
            if($_GET['form']==true){
                ?>
                <li>
                <a href="index.php">
                <span class="fa fa-backward"></span>&nbsp;&nbsp; Search again
                </a>
                </li>
                <?php

            }
?>
            </ul>

        </div>
    </nav>
  