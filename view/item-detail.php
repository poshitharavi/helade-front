<?php
$title = 'Item Details';
include_once('util/header.php');
include_once('util/search-bar.php');
$itemId = null;
if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
}
?>
<!-- ad-single start here -->
<div class="commontop">
    <div class="container">
        <div class="row" id="itemLoadder">
            <div class="col-xs-12" style="display: block;margin-left: auto;margin-right: auto">
                <div class="text-center icon loader">
                    <i class="la la-spinner fa-spin"></i>
                </div>
            </div>
        </div>
        <input type="text" id="addId" name="addId" class="form-control"
            <?php
            echo 'value="' . $itemId . '"';
            ?>
               hidden readonly="readonly"/>
        <div class="row" id="itemDetails" hidden>

        </div>
    </div>
</div>
<!-- ad-single end here -->

<?php
include_once('util/footer.php')
?>
<!-- Custom js -->
<script src="../js/item-detail.js" type="module"></script>

