import {fetchPost} from './request.js';

window.onload = function () {
    /**
     *  form submission
     */
    $("#passwordChangeForm").submit(async function () {
        // we stoped it
        event.preventDefault();

        document.getElementById("passwordSubmitBtn").disabled = true;

        const oldPassword = document.getElementById("oldPassword").value;
        const password = document.getElementById("password").value;
        const repeatPassword = document.getElementById("repeatPassword").value;

        const passwordCheck = password === repeatPassword ? true : false
        if (passwordCheck) {
            const data = {
                oldPassword: oldPassword,
                password: password
            }
            const result = await fetchPost('../services/change-password.php', data);
            if (result.status === 0) {
                if (result.data.status === 1) {
                    alert(result.data.message)
                    location.reload();
                } else if (result.data.status === 2) {
                    alert(result.data.message);
                    console.error(result.data.message);
                    document.getElementById("repeatPassword").disabled = false;
                }

            } else {
                console.error(result.data);
            }
        } else {
            document.getElementById("repeatPassword").disabled = false;
            alert('Password does not match')
        }

    });

    $("#changeMobileNoForm").submit(async function () {
        // we stoped it
        event.preventDefault();

        document.getElementById("mobileNoChangeBtn").disabled = true;

        const mobileNo = document.getElementById("mobileNo").value;

        const data = {
            mobileNo:mobileNo
        }
        const result = await fetchPost('../services/change-mobile-no.php', data);
        if (result.status === 0) {
            if (result.data.status === 1) {
                alert(result.data.message)
                location.reload();
            } else if (result.data.status === 2) {
                alert(result.data.message);
                console.error(result.data.message);
                document.getElementById("mobileNoChangeBtn").disabled = false;
            }

        } else {
            console.error(result.data);
        }

    });
}