<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .logo {
                display: inline-flex;
                margin-bottom: 10px;
                padding: 15px;
            }
            .logo .logo-icon {
                min-width: 48px;
                width: 48px;
                min-height: 48px;
                height: 48px;
                margin-right: 8px;
                fill: #06416A;
                stroke: #06416A;
            }
            .logo .logo-text {
                min-width: 300px;
                width: 300px;
                min-height: 48px;
                height: 48px;
            }
        </style>
    </head>

    <body>
    <div style="display: flex; flex-wrap: wrap; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <svg class="logo-icon">
                <use href="/build/img/sprite.svg#logo"></use>
            </svg>
            <svg class="logo-text">
                <use href="/build/img/sprite.svg#logo-text"></use>
            </svg>
        </div>
        <div style="display: flex; flex-basis: 100%; align-items:center; padding-left: 15px; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">16</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">26 (всего страниц в макете)</span>
        </div>
    </div>

    <div>
        <ul>
            <li><a href="/build/index.php" target="_blank">Главная (готов контент)</a></li>
            <li><a href="/build/about.php" target="_blank">О нас</a></li>
            <li><a href="/build/contacts.php" target="_blank">Контакты (готов контент)</a></li>
            <li><a href="/build/documents.php" target="_blank">Документы (готов контент)</a></li>
            <li><a href="/build/history.php" target="_blank">История (готов контент)</a></li>
            <li><a href="/build/news.php" target="_blank">Новости</a></li>

            <li><a href="/build/news-details.php" target="_blank">Новости - детальная (без адаптива)</a></li>
            <li><a href="/build/magazine.php" target="_blank">Корпоративный журнал (без адаптива)</a></li>
            <li><a href="/build/clients.php" target="_blank">Наши заказчики (без адаптива)</a></li>
            <li><a href="/build/nature-protection.php" target="_blank">Охрана природы (без адаптива)</a></li>
            <li><a href="/build/team-career.php" target="_blank">Команда и карьера (без адаптива)</a></li>

            <li><a href="/build/activity.php" target="_blank">Деятельность (адаптив)</a></li>
            <li><a href="/build/projects.php" target="_blank">Наши проекты (адаптив)</a></li>

            <li><a href="/build/search.php" target="_blank">Поиск (адаптив)</a></li>

            <li><a href="/build/company-values.php" target="_blank">Ценности компании (без адаптива)</a></li>

            <li><a href="/build/partners.php" target="_blank">Акционерам и инвесторам (адаптив)</a></li>
            <br>

        </ul>
    </div>
    </body>
</html>