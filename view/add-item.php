<?php
$title = 'Add Listing';
include_once('util/header.php');
include_once('util/search-bar.php');
?>
<link href="./../style/add-item.css" rel="stylesheet" type="text/css"/>

<!-- ad-single start here -->
<div class="commontop">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="add">
                    <div class="addtop">
                        <h3>Submit an Advertisement</h3>
                    </div>
                    <form class="form-horizontal addform" method="post" id="addNewAddForm">
                        <div class="form-group">
                            <div class="text-center icon loader" hidden>
                                <i class="la la-spinner fa-spin"></i>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <label>Add Title*</label>
                                <span class="pull-right">70 char Left</span>
                                <input name="title" value="" id="title" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 col-xs-12">
                                <label>Select Category*</label>
                                <ul class="nav nav-tabs list-inline">
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="1" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label>
                                            <input type="radio" name="cateRadio" value="2">
                                            <img src="./../template/images/mobile/smartphone-tablet.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="3" checked>
                                            <img src="./../template/images/electronics/globe-bulb.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="4" checked>
                                            <img src="./../template/images/real-estate/building.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="5" checked>
                                            <img src="./../template/images/fashion/trainers.png" alt="icon" title="icon"
                                                 class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="6" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="7" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="8" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="9" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="10" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="11" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="12" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="13" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                    <li class="">
                                        <label class="category-select">
                                            <input type="radio" name="cateRadio" value="14" checked>
                                            <img src="./../template/images/vehicle/icons8-motorcycle.png" alt="icon"
                                                 title="icon" class="img-fluid">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-5 col-xs-12">
                                <label>Price*</label>
                                <input name="price" value="" id="price" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 col-xs-12">
                                <label>Description*</label>
                                <span class="pull-right">5000 char Left</span>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-7 col-xs-12">
                                <label>District*</label>
                                <select class="form-control" id="district"
                                        name="district">
                                    <option value="" selected disabled>Select District</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Moneragala">Moneragala</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Kegalle">Kegalle</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-7 col-xs-12">
                                <label>Enter City*</label>
                                <input name="city" value="" id="city" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 col-xs-12">
                                <label>Add Photos*</label>
                                <div class="mb-1">
                                    <input type="file" class="form-control-file" id="imageOne" name="imageOne"
                                           accept="image/*">
                                    <input name="imageOneUrl" value="" id="imageOneUrl" class="form-control" type="text"
                                           hidden>
                                </div>
                                <div class="mb-1">
                                    <input type="file" class="form-control-file" id="imageTwo" name="imageTwo"
                                           accept="image/*">
                                    <input name="imageTwoUrl" value="" id="imageTwoUrl" class="form-control" type="text"
                                           hidden>
                                </div>
                                <div class="mb-1">
                                    <input type="file" class="form-control-file" id="imageThree" name="imageThree"
                                           accept="image/*">
                                    <input name="imageThreeUrl" value="" id="imageThreeUrl" class="form-control"
                                           type="text" hidden>
                                </div>
                                <div class="mb-1">
                                    <input type="file" class="form-control-file" id="imageFour" name="imageFour"
                                           accept="image/*">
                                    <input name="imageFourUrl" value="" id="imageFourUrl" class="form-control"
                                           type="text" hidden>
                                </div>
                                <div class="mb-1">
                                    <input type="file" class="form-control-file" id="imageFive" name="imageFive"
                                           accept="image/*">
                                    <input name="imageFiveUrl" value="" id="imageFiveUrl" class="form-control"
                                           type="text" hidden>
                                </div>
                                <div class="mb-1">
                                    <input type="file" class="form-control-file" id="imageSix" name="imageSix"
                                           accept="image/*">
                                    <input name="imageSixUrl" value="" id="imageSixUrl" class="form-control" type="text"
                                           hidden>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 col-xs-12">
                                <div class="buttons">
                                    <input class="btn btn-primary" value="Submit" type="submit" id="addSubmitBtn">
                                </div>
                            </div>
                        </div>
                    </form>
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
<script src="../js/add-item.js " type="module"></script>
