<?php
$title = 'Login';
include_once('util/header.php')
?>

<!-- breadcrumb end here -->
<div class="topimage">
    <img src="./../template/images/bck_bg.jpg" class="img-fluid" alt="image" title="image" />
</div>
<div class="bread-crumb">
    <div class="container">
        <div class="matter">
            <div class="pull-left">
                <ul class="list-inline">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <div class="pull-right">
                <h2>Login</h2>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end here -->


<!-- faq start here -->
<div class="commontop">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 login padd0">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 bor">
                    <img class="img-fluid logochange" src="./../images/logo.png" alt="logo" title="logo" />
                    <div class="donot">Don't have an account? <a href="register.php">Create your account</a>
                    </div>
                    <p>It takes less than a minute</p>
<!--                    <div class="or">-->
<!--                        <span>or</span>-->
<!--                        <hr/>-->
<!--                    </div>-->
<!--                    <h2>Login Via Social Accounts</h2>-->
<!--                    <ul class="list-unstyled">-->
<!--                        <li><a href="https://www.facebook.com/" target="_blank" class="fb"><i class="fa fa-facebook"></i> Login Via Facebook</a></li>-->
<!--                        <li><a href="https://twitter.com/" target="_blank" class="tw"><i class="fa fa-twitter"></i> Login Via Twitter</a></li>-->
<!--                        <li><a href="https://plus.google.com/" target="_blank" class="gp"><i class="fa fa-google-plus"></i> Login Via Google+</a></li>-->
<!--                    </ul>-->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h1>Login</h1>
                    <form id="loginForm" method="post">
                        <div class="form-group">
                            <i class="la la-envelope-o"></i><input type="email" name="email" value="" placeholder="Email" id="email" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <i class="la la-unlock"></i><input type="password" name="password" value="" placeholder="Password" id="password" class="form-control" required/>
                        </div>
<!--                        <div class="links">-->
<!--                            <i class="la la-check-circle"></i>Remember me-->
<!--                            <a href="" class="pull-right">Forgot Password?</a>-->
<!--                        </div>-->
                        <button type="submit" class="btn btn-primary btn-block" id="loginBtn" >Login Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq end here -->
<!-- jquery -->
<script src="./../../template/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="./../../template/js/popper.min.js" type="text/javascript"></script>
<script src="./../../template/bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="./../../template/js/dist/js/bootstrap-select.js"></script>
<!-- owlcarousel js -->
<script src="./../../template/js/holder.min.js" type="text/javascript"></script>
<script src="./../../template/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="./../../template/js/owlinternal.js"></script>
<script src="./../../template/js/internal.js"></script>

</body>
</html>
<!-- Custom js -->
<script src="../js/login.js" type="module"></script>
