<?php
$title = 'My Adds';
include_once('util/header.php');
include_once('util/search-bar.php');

$userId = 0;
if ($sessionAvailable){
   $userId = $_SESSION['heladeUserId'];
}else{
    header("Location: https://example.com/myOtherPage.php");
    die();
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
                            <h4 style="padding: 10px;"><?php echo $title;?></h4>
                        </div>
                    </div>
                    <input type="text" id="userId" name="userId" class="form-control"
                        <?php
                        echo 'value="' . $userId . '"';
                        ?>
                           hidden readonly="readonly"/>
                    <div class="inner-ads" id="myOrderCardList">

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
<script src="../js/my-adds.js" type="module"></script>
