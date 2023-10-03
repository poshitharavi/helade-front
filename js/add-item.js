import {fetchPost} from './request.js';
import {getBase64} from "./util.js";

window.onload = function () {

    $('input[type="file"]').change(async function (e) {
        const image = $(`#${e.target.id}`).prop('files')[0]

        document.getElementById("addSubmitBtn").disabled = true;

        document.getElementById("imageOne").disabled = true;
        document.getElementById("imageTwo").disabled = true;
        document.getElementById("imageThree").disabled = true;
        document.getElementById("imageFour").disabled = true;
        document.getElementById("imageFive").disabled = true;
        document.getElementById("imageSix").disabled = true;

        const convertedImage = await getBase64(image).then(data => {
            return data
        }).catch(error => {
            console.error('Error', error)
            return null
        })

        const data = {
            image: convertedImage
        }
        const result = await fetchPost('../services/upload-image.php', data);

        if (result.status === 0) {
            $('.loader').attr('hidden', true);
            if (result.data.status === 1) {
                console.log(result.data)


                const inputFiledIds = {
                    imageOne: 'imageOneUrl',
                    imageTwo: 'imageTwoUrl',
                    imageThree: 'imageThreeUrl',
                    imageFour: 'imageFourUrl',
                    imageFive: 'imageFiveUrl',
                    imageSix: 'imageSixUrl',
                }

                document.getElementById(inputFiledIds[e.target.id]).value = result.data.data.url;

            } else if (result.data.status === 2) {
                alert(result.data.message);
                console.error(result.data.message);
            }

        } else {
            console.error(result.data);
        }

        document.getElementById("addSubmitBtn").disabled = false;
        document.getElementById("imageOne").disabled = false;
        document.getElementById("imageTwo").disabled = false;
        document.getElementById("imageThree").disabled = false;
        document.getElementById("imageFour").disabled = false;
        document.getElementById("imageFive").disabled = false;
        document.getElementById("imageSix").disabled = false;

    });


    /**
     *  form submission
     */
    $("#addNewAddForm").submit(async function () {
        // we stoped it
        event.preventDefault();
        $('.loader').removeAttr('hidden');
        // document.getElementById("addSubmitBtn").disabled = true;

        const title = document.getElementById("title").value;
        const catRadio = $('input[type="radio"][name="cateRadio"]:checked').val();
        const price = document.getElementById("price").value;
        const description = document.getElementById("description").value;
        const district = document.getElementById("district").value;
        const city = document.getElementById("city").value;

        const imageOne = document.getElementById("imageOneUrl").value;
        const imageTwo = document.getElementById("imageTwoUrl").value;
        const imageThree = document.getElementById("imageThreeUrl").value;
        const imageFour = document.getElementById("imageFourUrl").value;
        const imageFive = document.getElementById("imageFiveUrl").value;
        const imageSix = document.getElementById("imageSixUrl").value;


        const data = {
            title: title,
            catRadio: catRadio,
            price: price,
            description: description,
            district: district,
            imageOne: imageOne,
            imageTwo: imageTwo,
            imageThree: imageThree,
            imageFour: imageFour,
            imageFive: imageFive,
            imageSix: imageSix,
            city: city
        }
        console.log(data)
        const result = await fetchPost('../services/add-new-add.php', data);

        if (result.status === 0) {
            $('.loader').attr('hidden', true);
            if (result.data.status === 1) {
                window.location.reload()
            } else if (result.data.status === 2) {
                alert(result.data.message);
                console.error(result.data.message);
                document.getElementById("addSubmitBtn").disabled = false;
            }

        } else {
            console.error(result.data);
        }
    })
}