<?php
include_once('../util/session.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>හෙළදේ -<?php echo $title; ?></title>
    <!-- Bootstrap stylesheet -->
    <link href="./../../template/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!-- stylesheet -->
    <link href="./../../template/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="./../../template/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="./../../template/css/ele-style.css" rel="stylesheet" type="text/css"/>
    <!-- font-awesome -->
    <link href="./../../template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- line-awesome -->
    <link href="./../../template/line-awesome/css/line-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- crousel css -->
    <link href="./../../template/js/owl-carousel/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <!--bootstrap select-->
    <link href="./../../template/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<!--top start here -->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-xs-12">
                <ul class="list-inline icon">
                    <?php
                    if (!$sessionAvailable) {
                        echo '<li ><a href = "./login.php" ><i class="la la-plus-square" ></i > <span > Login</span ></a ></li >
                    <li ><a href = "./register.php" ><i class="la la-key" ></i > <span > Register</span ></a ></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="topnav responsive" id="myTopnav">
                    <ul class="list-inline">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                        <li><a href="terms-and-conditions.php">Term & Conditions</a></li>
                        <?php
                        if ($sessionAvailable) {
                            echo '<li><a href="my-adds.php">My Adds</a></li>';
                            echo '<li><a href="my-profile.php">My Profile</a></li>';
                            echo '<li><a href="logout.php">Log Out</a></li>';
                            }
                        ?>
                        <li><a href="javascript:void(0);" class="icons" onclick="myFunction()">&#9776;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--top end here -->