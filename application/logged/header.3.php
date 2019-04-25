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

    <!--Let browser know website is optimized for mobile-->
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
                style="margin-left: 10px;">FormSuvidha</a>
            <ul class="right hide-on-med-and-down">
                            <li>
                <a href="admin.php?admin=admin/home">
                <span class="fa fa-user-circle-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home
                </a>
                </li>
                <li>
                <a href="/">
                </a>
                </li>

                <li><a href="application/logged/logout.php"><span
                            class="fa fa-sign-out"></span>&nbsp;&nbsp;&nbsp;logout</a></li>
            </ul>
            <!-- mobile menu on-->
            <a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="assets/photos/by-admin/girldemo2.jpg">
      </div>
      <a href="#user"><img class="circle" src="assets/photos/by-admin/girldemo1.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a class="waves-effect" href="#!">EDIT</a></li>
    <li><a class="waves-effect" href="#!">UPDATE</a></li>
    <li><a class="waves-effect" href="#!">APPLY NEW FORM</a></li>
    <li><a class="waves-effect" href="#!">APPLIED FORM</a></li>
    <li><a class="waves-effect red" href="#!">Delete My All Data</a></li>
    <li><a class="waves-effect" href="#!">Logout</a></li>
  </ul>

            <!-- mobile menu off -->
        </div>
    </nav>
  