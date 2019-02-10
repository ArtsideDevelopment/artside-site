document.addEventListener("DOMContentLoaded", function () {

    addArticle();
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


function addArticle() {
    document.querySelector("#add-article").addEventListener("click", function (event) {
        event.preventDefault();

        let form = document.querySelector("#add-article-form");
        let data = serializeForm(form);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "/artside-site/article/add/", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {

        };
        xhr.send(data);
    })
}