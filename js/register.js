import {fetchPost} from './request.js';

window.onload = function () {


    /**
     *  form submission
     */
    $("#registerForm").submit(async function () {
        // we stoped it
        event.preventDefault();

        document.getElementById("registerBtn").disabled = true;

        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;
        const mobileNo = document.getElementById("mobileNo").value;
        const shortName = document.getElementById("shortName").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const repeatPassword = document.getElementById("repeatPassword").value;

        const passwordCheck = password === repeatPassword ? true : false
        if (passwordCheck){
            const data = {
                firstName:firstName,
                lastName:lastName,
                shortName:shortName,
                mobileNo: mobileNo,
                email:email,
                password:password
            }
            const result = await fetchPost('../services/create-new-user.php', data);
            if (result.status === 0) {
                if (result.data.status === 1) {
                    window.location.href = "login.php";
                } else if (result.data.status === 2) {
                    alert(result.data.message);
                    console.error(result.data.message);
                    document.getElementById("registerBtn").disabled = false;
                }

            } else {
                console.error(result.data);
            }
        }else {
            document.getElementById("registerBtn").disabled = false;
            alert('Password does not match')
        }

    });

}