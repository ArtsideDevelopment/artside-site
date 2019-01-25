<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel = "stylesheet" href = "./css/blog/app.css">
</head>
<body>
<div class = "reg-wrap">
    <div class = "reg-container">
        <div class = "reg-header">
            <div class = "reg-header__logo">
                <img src = "../src/img/backgrounds/logo.png" alt = "logo">
            </div>
            <span>Mercury</span>
            <div class = "wrap-ul">
                <ul>
                    <li><a href = "reg.tpl">Register</a></li>
                    <li><a href = "auth.tpl ">Login</a></li>
                </ul>
            </div>
        </div>
        <div class = "reg-body">
            <div class = "form">
                <span>Welcome,dear friend!</span>
                <label class = "name"><input type = "text" placeholder = "Your name"></label>
                <label class = "last_name"><input type = "text" placeholder = "Your email"></label>
                <label class = "password"><input type = "password" placeholder = "Password"></label>
                <label class = "repeat password"><input type = "password" placeholder = "Repeat password"></label>
            </div>
        </div>
        <div class = "reg-footer">
            <button type="submit">Enter</button>
        </div>
    </div>
</div>

</body>
</html>