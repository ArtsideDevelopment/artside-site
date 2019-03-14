<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel = "stylesheet" href = "../../skins/css/blog/blog_news.css">

</head>
<body>
<div class = "wrap">
    <main>
        <div class = "main__header">
            <div class = "main__header__nav">
                <ul>
                    <li><a href = "/admin/admin/" id = "reg-btn" class = "button">На главную</a></li>
                    <li><a href = "/admin/admin/" id = "reg-btn" class = "button">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
        <div class = "main__body">
            <div class = "tittle-blog">
                <h1>Новости</h1>
            </div>
            <div class = "body-blog">
                <div class = "body-blog__head">Hello,Blog!</div>
                <div class = "container">
                    <div class = "body-blog__pic">
                        <img src = "../../skins/css/blog/photo.jpg">
                    </div>
                    <div class = "body-blog__news">
                        <p>Пора сделать наш hello world более выразительным. Так как это может занять некоторое время,
                            лучше
                            переместить эти изменения в отдельную ветку, чтобы изолировать их от изменений в ветке
                            master.</p>
                    </div>
                </div>
            </div>
            <?php foreach ($data as $key => $value) {?>
            <div class = "post">
            <div class = "chart">
            <div class="body-blog__head"><?php echo $value["title"]; ?></div>
            <div class = "container">
            <div class = "body-blog__pic">
            <img src = "../../skins/css/blog/photo.jpg">
            </div>
            <div class="body-blog__news"><?php echo $value["content"]; ?></p>
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