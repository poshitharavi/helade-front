<?php
$title = 'My Profile';
include_once('util/header.php');

$userId = 0;
if ($sessionAvailable){
    $userId = $_SESSION['heladeUserId'];
}else{
    header("Location:../view/sign-in.php");
}
?>
<!-- ad-single start here -->
<div class="commontop">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="dashboard">
                    <div class="profile">
                        <div class="col-sm-12 col-xs-12 padd2">
                            <h4 style="padding: 10px;"><?php echo $title; ?></h4>
                        </div>
                    </div>
                    <div class="inner-setting">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h4
                                                class="panel-title"> Phone Number <i class="fa fa-angle-right"
                                                                                     aria-hidden="true"></i></h4>
                                    </a>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4">
                                                <form class="form-horizontal" method="post" id="changeMobileNoForm">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input name="mobileNo" value="" id="mobileNo"
                                                                   class="form-control" placeholder="Enter Phone Number"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <input class="btn btn-primary" value="Save" id="mobileNoChangeBtn" type="submit">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h4
                                                class="panel-title">Change Password <i class="fa fa-angle-right"
                                                                                       aria-hidden="true"></i>
                                        </h4></a>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4">
                                                <form class="form-horizontal" method="post" id="passwordChangeForm">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input name="oldPassword" value="" id="oldPassword"
                                                                   class="form-control" placeholder="Enter old password"
                                                                   type="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input name="password" value="" id="password"
                                                                   class="form-control" placeholder="Enter new password"
                                                                   type="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input name="repeatPassword" value="" id="repeatPassword"
                                                                   class="form-control" placeholder="Repeat password"
                                                                   type="password">
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <input class="btn btn-primary" value="Save" id="passwordSubmitBtn" type="submit">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ad-single end here -->

<?php
include_once('util/footer.php')
?>
<!-- Custom js -->
<script src="../js/my-profile.js" type="module"></script>
