import {fetchPost} from './request.js';
import {
    dateConvert, searchBarFunc,
} from "./util.js";

window.onload = function () {
    searchBarFunc()
    loadAddDetail()
};

const loadAddDetail = async () => {
    const addId = $('#addId').val();
    const data = {
        addId: addId
    }
    let result = await fetchPost('../services/get-add-details.php', data);
    if (result.status === 0) {
        if (result.data.status === 1) {
            const addDetails = result.data.data

            const orderView = `<div class="col-sm-9 col-xs-12">
                <h2 class="title-singleads"></h2>
                <div class="tabheading">
                    <div class="clearfix"></div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show margin-map" id="photos">
                        <div id="ad-singlephotos">
                            <img src="${addDetails.image1}" alt="image" title="image" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="details-single">
                    <div class="title-detail">Item Details - ${addDetails.productName}</div>
                    <ul class="clearfix">
                        <li>
                            <div class="listing-details"><span class="label">AD ID</span><span class="desc"
                                                                                               id="postId"> : #${addDetails.addId}</span>
                            </div>
                        </li>
                        <li>
                            <div class="listing-details"><span class="label">Posted On</span><span class="desc"
                                                                                                   id="postDate"><i
                                            class="la la-clock-o"></i></span> ${dateConvert(addDetails.postedOn)}</div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="title-detail">Description</div>
                    <p id="postDesc"><br>${addDetails.discription}</p>
                    <div class="clearfix"></div>
                    <div class="title-detail">Location</div>
                    <ul class="clearfix location-list">
                        <li>
                            <div class="listing-details"><span class="label">City</span><span class="desc"
                                                                                              id="postCity"> : ${addDetails.city}</span>
                            </div>
                        </li>
                        <li>
                            <div class="listing-details"><span class="label">District</span><span class="desc"
                                                                                                  id="postDistrict"> : ${addDetails.district}</span>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="rightside">
                    <p class="price">Rs ${addDetails.price}</p>
                    <div class="profile text-center">
                        <h4 id="postUserName"> ${addDetails.userName}</h4>
                    </div>
                    <div class="phone">
                        <i class="la la-phone"></i> ${addDetails.userContact}
                    </div>
                    <div class="safety">
                        <h3>Safety Tips for Buyers</h3>
                        <p>01. Lorem ipsum dolor sit amit</p>
                        <p>02. Lorem ipsum dolor sit amit</p>
                        <p>03. Lorem ipsum dolor sit amit</p>
                        <p>04. Lorem ipsum dolor sit amit</p>
                        <div class="text-center">
                            <a href="#">More Tips<i class="la la-angle-double-right"></i></a>
                        </div>
                    </div>
                    <!-- AddThis Button END -->
                </div>
            </div>`

            $('#itemDetails').removeAttr('hidden');
            $('#itemLoadder').attr('hidden', true);
            $('#itemDetails').append(orderView);


        } else if (result.data.status === 2) {
            console.error(result.data);
        }
    } else {
        console.error(result.data);
    }
}
