import {fetchPost} from './request.js';
import {
    dateConvert,
} from "./util.js";

window.onload = function () {

    /**
     *  form submission
     */

    $("#loginForm").submit(async function () {
        // we stoped it
        event.preventDefault();

        document.getElementById("loginBtn").disabled = true;

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        const data = {
            email:email,
            password:password
        }
        const result = await fetchPost('../services/auth-user.php', data);
        if (result.status === 0) {
            if (result.data.status === 1) {
                window.location.href = "../index.php";
            } else if (result.data.status === 2) {
                alert(result.data.message);
                console.error(result.data.message);
            }

        } else {
            console.error(result.data);
        }
    });
};