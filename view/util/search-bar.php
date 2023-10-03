<!-- header start here-->
<header>
    <div class="container">

        <input type="text" id="districtForSelect" name="districtForSelect" class="form-control"
            <?php
            if (isset($_GET['district'])) {
                if ($_GET['district'] == 'null') {
                    echo 'value=" "';
                } else {
                    echo 'value="' . $_GET['district'] . '"';
                }
            } else {
                echo 'value=" "';
            }
            ?>
              hidden readonly="readonly"/>
        <input type="text" id="categoryForSelect" name="categoryForSelect" class="form-control"
            <?php
            if (isset($_GET['category'])) {
                if ($_GET['category'] == 'null') {
                    echo 'value=" "';
                } else {
                    echo 'value="' . $_GET['category'] . '"';
                }
            } else {
                echo 'value=" "';
            }
            ?>
             hidden  readonly="readonly"/>

        <div class="d-flex row align-items-center">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div id="logo">
                    <a href="./../../index.php"><img class="img-fluid logochange" src="./../../images/logo.png"
                                                     alt="logo" title="logo"/></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <form class="form-horizontal category" method="post">
                    <div class="row">
                        <div class="col-sm-3 paddright">
                            <div class="form-group">
                                <select class="selectpicker form-control bs-select-hidden" id="searchDistrict"
                                        name="searchDistrict">
                                    <option value="" selected disabled>Select District</option>
                                    <option value="">All</option>
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
                        <div class="col-sm-3 paddright">
                            <div class="form-group">
                                <select class="selectpicker form-control bs-select-hidden" id="searchCategory"
                                        name="searchCategory">
                                    <option value="" selected disabled>Select Category</option>
                                    <option value="">All</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Home & Garden</option>
                                    <option value="3">Animals</option>
                                    <option value="4"> Business & Industry</option>
                                    <option value="5">Hobby & Sport</option>
                                    <option value="6">Kinds</option>
                                    <option value="7">Fashion & Beauty</option>
                                    <option value="8">Education</option>
                                    <option value="9">Agriculture</option>
                                    <option value="10">Hotel Decor</option>
                                    <option value="11">Religious</option>
                                    <option value="12">Gifts</option>
                                    <option value="13">Art & Crafts</option>
                                    <option value="14">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 search">
                            <div class="form-group">
                                <input type="text" name="searchKeyword" placeholder="Enter Keyword" id="searchKeyword"
                                       class="form-control"
                                    <?php
                                    if (isset($_GET['keyword'])) {
                                        if ($_GET['keyword'] == 'null') {
                                            echo 'value=" "';
                                        } else {
                                            echo 'value="' . $_GET['keyword'] . '"';
                                        }

                                    } else {
                                        echo 'value=" "';
                                    }
                                    ?>
                                />
                                <button type="button" id="searchBtn" value="submit" class="btn"><i class="icon_search"
                                                                                                   aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 center">
                <button class="btn-primary btn-block" type="button" onclick="location.href='add-item.php'"><i
                            class="la la-edit"></i>Add Item
                </button>
            </div>
        </div>
    </div>
</header>
<!-- header end here -->