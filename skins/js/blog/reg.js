document.addEventListener("DOMContentLoaded", function () {
    register();

});


function register() {
    document.querySelector(".error").innerHTML = "";

    document.querySelector("#register").addEventListener("click", function (event) {

        let name = document.querySelector("[name = 'name']").value;
        let email = document.querySelector("[name = 'email']").value;
        let pass = document.querySelector("[name = 'password']").value;
        let repPass = document.querySelector("[name = 'repeat_password']").value;
        if (name === "" || email === "") {
            event.preventDefault();
            document.querySelector(".error").innerHTML = "Данные неверны"
        }
        if (pass !== repPass || pass === "") {
            event.preventDefault();
        }
    })

}