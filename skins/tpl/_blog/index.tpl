<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel = "stylesheet" href = "../skins/css/blog/app.css">
</head>
<body>
<div class = "wrap">
    <aside>
        <div class = "aside__header">
            <div class = "header__logo">
                <img src = "../skins/img/backgrounds/logo.png" alt = "logo">
            </div>
            <span>Mercury</span>
        </div>
        <ul>
            <li><img src="../skins/img/backgrounds/home_logo.png" alt="logo">Home</li>
        </ul>
    </aside>
    <main>
        <div class="main__header">
            <div class="main__header__btn-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="main__header__nav">
                <button class="main__header__nav__button" type="submit">+ Add project</button>
                <div class="profile">Alexey</div>
                <div class="modal">
                    <h3>Добавить новость</h3>
                    <form>
                        <input  type="text" placeholder=" Введите">
                        <button type="submit" value="Отправить">Отправить</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
</div>
<script src = "../skins/js/blog/btn_burger.js"></script>
<script src = "../skins/js/blog/app.js"></script>
<script src = "../skins/js/blog/modal_window.js"></script>

</body>
</html>