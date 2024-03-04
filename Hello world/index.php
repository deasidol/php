<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<style>
    .header__wrapper{
        margin: 0 auto 30px auto;
        padding: 0px 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 100px;
    }
    .header__title{
        font-size: 70px;
        font-weight: bolder;
    }
    .footer__wrapper{
        padding: 50px;
        margin: 400px auto 0 auto;
    }
    .footer__text{
        font-size: 40px;
        text-align: center;
    }
</style>
<body>
    <header class="header">
        <div class="header__wrapper">
            <img src="img/logopolytech.png" alt="Логотип Московского Политеха" class="header__logo" width='200px' height='175px'>
            <h1 class="header__title">Hello, World</h1>
        </div>
    </header>
    <main>
        <?php echo 'Hello, world!'?>
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <p class="footer__text">Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий.</p>
        </div>
    </footer>
</body>
</html>