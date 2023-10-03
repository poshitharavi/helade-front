import {fetchPost} from './request.js';
import {
    dateConvert, searchBarFunc,
} from "./util.js";

window.onload = function () {
    loadMyDetails()
};

const loadMyDetails = async () => {
    const userId = $('#userId').val();
    const data = {
        userId: userId
    }
    let result = await fetchPost('../services/get-user-adds.php', data);
    if (result.status === 0) {
        if (result.data.status === 1) {
            const adds = result.data.data
            adds.forEach(element => {
    const addCard = `<div class="product-layout product-list">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="item-detail.php?id=${element.addId}"><img src="${element.image1}" alt="image" title="image" class="img-fluid"></a>
                                </div>
                                <div class="caption">
                                    <h4><a href="item-detail.php?id=${element.addId}">${element.productName}</a></h4>
                                    <p class="des">Category : ${element.categoryName}</p>
                                    <ul class="list-unstyled">
                                        <li><i class="la la-map-marker"></i>${element.city}</li>
                                        <li><i class="la la-clock-o"></i>${dateConvert(element.postedOn)}</li>
                                    </ul>
                                    <hr>
                                    <p class="des">${element.discription}</p>
                                    <div class="button-group text-center">
                                        <button type="button"><i class="la la-eye"></i></button>
                                        <button type="button"><i class="la la-pencil"></i></button>
                                        <button type="button" style="border: 1px solid #313E47;"><i class="la la-trash-o"></i></button>
                                        <button type="button"></button>
                                    </div>
                                </div>
                            </div>
                        </div>`

                $('#myOrderCardList').append(addCard);
            })
        } else if (result.data.status === 2) {
            console.error(result.data);
        }
    } else {
        console.error(result.data);
    }

}

