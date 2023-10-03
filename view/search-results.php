<?php
$title = 'Search Resutls';
include_once('util/header.php');
include_once('util/search-bar.php');
?>

<!-- breadcrumb end here -->
<div class="bread-crumb">
    <div class="container">
        <div class="matter">
            <div class="pull-left">
                <ul class="list-inline">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#"><?php echo $title; ?></a></li>
                </ul>
            </div>
            <div class="pull-right">
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end here -->

<!-- content start here -->
<div class="maincategory">
    <div class="container">
        <div class="row">
            <?php
            include_once('util/category-list.php')
            ?>
            <div class="col-lg-10 col-sm-9 col-md-9 padd0 col-xs-12 catebox">
                <div class="row" id="itemsRow">
                </div>
                <div class="text-center icon loader" hidden>
                    <i class="la la-spinner fa-spin"></i>
                </div>
                <div id="paginationDiv">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- content end here -->
<?php
include_once('util/footer.php')
?>
<!-- Custom js -->
<script src="../js/search-results.js" type="module"></script>

