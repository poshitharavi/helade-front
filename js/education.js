import {fetchPost} from './request.js';
import {
    dateConvert,
    addZeroIfOneDigit, paginationCreating, searchBarFunc
} from "./util.js";

window.onload = function () {
    searchBarFunc()
    //load orders
    loadOrders(0)

};

const loadOrders = async (page) => {
    $('.loader').removeAttr('hidden');
    const data = {
        page: page,
        cat:8
    };
    let result = await fetchPost('../services/get-orders-list.php',data);
    $('.loader').attr('hidden', true);
    if (result.status === 0) {
        if (result.data.status === 1) {
            const orderData = result.data.data.content;
            const pages = result.data.data.totalPages;
            const currentPage = result.data.data.currentPage;
            orderData.forEach(element => {

                const orderCard = `<div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12 cols" id="${element.addId}">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="item-detail.php?id=${element.addId}"><img src="${element.image1}" alt="image" title="image" class="img-fluid"></a>
                                <div class="onhover"> Rs ${element.price}.00</div>
                            </div>
                            <div class="caption">
                                <h4><a href="item-detail.php?id=${element.addId}">${element.productName}</a></h4>
                                <p class="des">Category : ${element.categoryName}</p>
                                <ul class="list-unstyled">
                                    <li><i class="la la-map-marker"></i> ${element.city}, ${element.district}</li>
                                    <li><i class="la la-clock-o"></i> ${dateConvert(element.addedDate)}</li>
                                </ul>
                            </div>
                        </div>
                    </div>`

                $('#itemsRow').append(orderCard);

            })

            let paginationBar = '';

            if (orderData.length > 0) {

                if (pages > 1) {
                    paginationBar = paginationCreating(pages,currentPage)
                }
            }

            $('#paginationDiv').append(paginationBar); // add the pagination to front

            $('.pagination-ahref').on("click",function(){
                const pageNo = $(this).data("id");
                $("#itemsRow").empty();
                $("#paginationDiv").empty();
                loadOrders(pageNo)
            })

        } else if (result.data.status === 2) {
            console.error(result.data);
        }
    } else {
        console.error(result.data);
    }
}

