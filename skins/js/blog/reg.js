document.addEventListener("DOMContentLoaded", function () {
    register();

});

/**
 * Функция собирает данные из формы и подготавливает их формат для далнейшей отправки на сервер.
 * @param form
 * @returns {string}
 */
function serializeForm(form) {
    let formData = [];
    for (let i = 0; i < form.elements.length; i++) {
        let element = form.elements[i];
        if (!element.name) {
            continue;
        } else if (!element.value || element.value == null) {
            element.value = "";
        }
        switch (element.type) {
            case 'text':
            case 'textarea':
            case 'password':
            case 'hidden':
                formData.push((element.name) + "=" + (element.value));
                break;
            case 'radio':
            case 'checkbox':
                if (element.checked) {
                    formData.push((element.name) + "=" + (element.value));
                }
                break;
            case 'select-one':
                let select = document.querySelector("[name = 'status']");
                // let value = select.options[select.selectedIndex].text;
                formData.push((element.name) + "=" + element.value);
                break;
        }
    }
    return formData.join("&");
}

/**
 * Функция собирает данные с регистрационной формы и отправляет их на сервер для добавления в базу данных.
 */
function register() {
    document.querySelector("#register").addEventListener("click", function (event) {
        event.preventDefault();
        let pass = document.querySelector("[name = 'password']").value;
        let repPass = document.querySelector("[name = 'repeat_password']").value;
        if (pass === repPass && pass !== "") {
            let form = document.querySelector(".reg-form");
            let data = serializeForm(form);
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "/artside-site/registration/register/", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {

            };
            xhr.send(data);
        }
    })
}

