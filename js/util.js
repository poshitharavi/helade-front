import {fetchPost} from './request.js';

export function searchBarFunc() {

    const districtForSelect = document.getElementById("districtForSelect").value;
    const categoryForSelect = document.getElementById("categoryForSelect").value;

    if (districtForSelect !== " ") {
        $('#searchDistrict').val(districtForSelect).change();
    }

    if (categoryForSelect !== " ") {
        $('#searchCategory').val(categoryForSelect).change();
    }


    $("#searchBtn").click(function () {
        const searchDistrict = document.getElementById("searchDistrict").value;
        const searchCategory = document.getElementById("searchCategory").value;
        const searchKeyword = document.getElementById("searchKeyword").value;

        const district = searchDistrict ? searchDistrict : null;
        const category = searchCategory ? searchCategory : null;
        const keyword = searchKeyword ? searchKeyword : null;

        window.location.href = `search-results.php?district=${district}&category=${category}&keyword=${keyword}`;
    });
}



export function notification(type, heading, message) {

    $('#toast-container').remove();
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-full-width",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr[type](message, heading);
}

export function loading(container) {
    return $(container).waitMe({
        effect: 'ios',
        text: 'Loading...',
        bg: 'rgba(255,255,255,0.90)',
    });
}

export function getBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
}

export function stopLoading(loading) {
    //Loading hide
    loading.waitMe('hide');
}

export function pageAlert(state, text) {
    let stateClass = '';
    switch (state) {
        case 1:
            stateClass = "alert-success"//completed
            break;
        case 2:
            stateClass = "alert-info"//in progress
            break;
        case 3:
            stateClass = "alert-warning"//canceled
            break;
        default:
            stateClass = "alert-danger"//unknown
            break;
    }
    $(".alert")
        .addClass(`${stateClass}`)
        .append(`State :  <strong>${text}</strong>`);

}

export function refreshSession() {
    const refreshTime = 600000; // every 10 minutes in milliseconds
    window.setInterval(async function () {
        const data = {};
        let result = fetchPost('../service/refresh-session.php', data);
    }, refreshTime);
}

export function showModal(modalName) {
    $(`#${modalName}`).modal({backdrop: 'static', keyboard: false}, 'show');
}

export function closeModal(modalName) {
    $(`#${modalName}`).modal('toggle');
}

export function getOneDateBeforeCurrentDate() {
    return moment().add(1, 'days');
}

export function getThirtyDaysBackFromCurrentDate() {
    return moment().subtract(30, 'days');
}

export function dateConvert(d) {
    const date = new Date(d);
    return ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '/' + ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '/' + date.getFullYear();
}

export function addZeroIfOneDigit(number) {
    return String(number).padStart(2, '0');
}

export function paginationCreating(pages, currentPage) {

    let paginationBar = '';
    // adding the previous button
    paginationBar = `<ul class="pagination">
                <li  ${currentPage == 1 ? 'hidden' : ''}  >
                  <a href="javascript:void(0)" class="pagination-ahref" data-id="${currentPage - 2}" aria-label="Previous">Previous</a>
                </li>`


    if (currentPage > 4) { //check current page is greater than 4

        const reminder = currentPage % 5
        const loopVal = (currentPage - reminder) - 1


        for (let i = 0; i < pages; i++) {

            if ((loopVal + i) < pages) {
                if (i < 5) {

                    if ((loopVal + i) == (currentPage - 1)) {
                        paginationBar = `${paginationBar}
                                             <li class="active">
                                                <a href="javascript:void(0)" class="pagination-ahref" data-id="${(loopVal + i)}">${addZeroIfOneDigit((loopVal + i) + 1)}</a>
                                             </li>`
                    } else {
                        paginationBar = `${paginationBar}
                                            <li>
                                             <a href="javascript:void(0)" class="pagination-ahref" data-id="${(loopVal + i)}">${addZeroIfOneDigit((loopVal + i) + 1)}</a>
                                            </li>`
                    }

                } else {
                    paginationBar = `${paginationBar}
                                        <li>
                                          <a href="javascript:void(0)" class="pagination-ahref" data-id="${addZeroIfOneDigit(loopVal + i)}">...</a>
                                        </li>`
                    i = pages
                }
            }
        }

    } else {
        for (let i = 0; i < pages; i++) {

            if (i < 4) {
                if (i == (currentPage - 1)) {
                    paginationBar = `${paginationBar}
                                             <li class="active">
                                                <a href="javascript:void(0)" class="pagination-ahref" data-id="${i}">${addZeroIfOneDigit(i + 1)}</a>
                                             </li>`
                } else {
                    paginationBar = `${paginationBar}
                                            <li>
                                             <a href="javascript:void(0)" class="pagination-ahref" data-id="${i}">${addZeroIfOneDigit(i + 1)}</a>
                                            </li>`
                }
            } else {
                paginationBar = `${paginationBar}
                                        <li>
                                          <a href="javascript:void(0)" class="pagination-ahref" data-id="${i}">...</a>
                                        </li>`
                i = pages
            }
        }
    }

    // Next page
    paginationBar = `${paginationBar}
                     <li ${currentPage == pages ? 'hidden' : ''} >
                        <a href="javascript:void(0)" class="pagination-ahref" data-id="${currentPage}"  aria-label="Next">Next</a>
                     </li>
                     </ul>`


    return paginationBar;

}

