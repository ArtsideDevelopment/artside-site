<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel = "stylesheet" href = "../../skins/css/blog/app.css">
</head>
<body>
<div class = "reg-wrap">
    <div class = "reg-container">
        <div class = "reg-header">
            <div class = "reg-header__logo">
                <img src = "../../skins/img/backgrounds/logo.png" alt = "logo">
            </div>
            <span>Mercury</span>
            <div class = "wrap-ul">
                <ul>
                    <li><a href = "/artside-site/auth/view/">Auth</a></li>
                </ul>
            </div>
        </div>
        <div class = "reg-body">
            <form method="post" action="/artside-site/registration/register/" class = "reg-form form">
                <span>Welcome, dear friend!</span>
                <label class = "name">
                    <input name = "name" type = "text" placeholder = "Your name">
                </label>
                <label class = "email">
                    <input name = "email" type = "text" placeholder = "Your email">
                </label>
                <label class = "password">
                    <input name = "password" type = "password" placeholder = "Password">
                </label>
                <label class = "repeat_password">
                    <input name = "repeat_password" type = "password" placeholder = "Repeat password">
                </label>
                <div class = "reg-footer">
                    <button id = "register" type = "submit">Enter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src = "../../skins/js/blog/reg.js"></script>
</body>
</html>