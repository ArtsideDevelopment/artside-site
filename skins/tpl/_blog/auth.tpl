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
                    <li><a href = "/artside-site/registration/view/">Register</a></li>
                </ul>
            </div>
        </div>
        <div class = "reg-body">
            <form method="post" action="/artside-site/auth/auth/" class = "auth-form form">
                <span>Welcome!</span>
                <label class = "login">
                    <input name = "email" type = "text" placeholder = "email">
                </label>
                <label class = "password">
                    <input name = "password" type = "password" placeholder = "Password">
                </label>
                <div class = "reg-footer">
                    <button id="auth" type = "submit">Enter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src = "../../skins/js/blog/auth.js"></script>
</body>
</html>