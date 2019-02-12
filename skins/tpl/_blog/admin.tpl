<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel = "stylesheet" href = "../../skins/css/blog/app.css">
</head>
<body>
<div class = "wrap">
    <aside>
        <div class = "aside__header">
            <div class = "header__logo">
                <img src = "../../skins/img/backgrounds/logo.png" alt = "logo">
            </div>
            <span>Mercury</span>
        </div>
        <ul>
            <a
                    href =
                    "/artside-site/blog/view/">
                <li><img
                            src = "../../skins/img/backgrounds/home_logo.png" alt =
                    "logo">Blog
                </li>
            </a>
        </ul>
    </aside>
    <main>
        <div class = "main__header">
            <div class = "main__header__btn-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class = "main__header__nav">
                <button class = "main__header__nav__button" type = "submit">+ Добавить статью</button>
                <div class = "profile">
                    <div id = "user"><?= $data["user"]?></div>
                </div>
                <div class = "modal">
                    <h3>Добавить новость</h3>
                    <form id = "add-article-form">
                        <input name = "title" type = "text" placeholder = "Заголовок">
                        <input name = "content" type = "text" placeholder = "Текст">
                        <button id = "add-article" type = "submit" value = "Отправить">Добавить статью</button>
                    </form>
                </div>
            </div>
        </div>
        <button class = "main__header__nav__button" type = "submit"><a
                    href =
                    "/auth/exit/">Выйти</a></button>
    </main>
</div>
<script src = "../../skins/js/blog/btn_burger.js"></script>
<script src = "../../skins/js/blog/admin.js"></script>
<script src = "../../skins/js/blog/app.js"></script>
<script src = "../../skins/js/blog/modal_window.js"></script>

</body>
</html>