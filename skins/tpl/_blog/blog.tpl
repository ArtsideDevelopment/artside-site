<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel = "stylesheet" href = "../../skins/css/blog/app.css">
</head>
<body>
<div class = "wrap">
    <a href = "/artside-site/admin/admin/" id = "reg-btn" class = "button">Админ</a>
    <main>
        <div class = "main__header">
            <div class = "main__header__nav">
                <!--<img src = "../src/img/backgrounds/mess.png" alt = "mess">
                <img src = "../src/img/backgrounds/notice.png" alt = "not">-->
                <div class = "profile"></div>
            </div>
        </div>
        <div class = "main__body">
            <div class = "tittle__blog">
                <h2>Новости</h2>
            </div>


            <?php foreach ($data as $key => $value) {?>
            <div class = "post">
            <div class = "chart">
            <h2><?php echo $value[1]; ?></h2>
            <p><?php echo $value[2]; ?></p>
            </div>
            </div>
            <?php } ?>


        </div>
    </main>
</div>
<script src = "../../skins/js/blog/btn_burger.js"></script>
<script src = "../../skins/js/blog/app.js"></script>
<script src = "../../skins/js/blog/modal_window.js"></script>
</body>
</html>