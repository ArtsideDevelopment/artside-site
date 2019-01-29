document.addEventListener("DOMContentLoaded", function () {
    auth();
});

function auth() {

    document.querySelector("#auth").addEventListener("click", function (event) {
        event.preventDefault();


        let email = document.querySelector("[name = 'email']").value;
        let password = document.querySelector("[name = 'password']").value;

        let dataArr = [];
        dataArr.push("email=" + email);
        dataArr.push("password=" + password);
        let data = dataArr.join("&");

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/artside-site/auth/auth/", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {

        };
        xhr.send(data);
    });
}