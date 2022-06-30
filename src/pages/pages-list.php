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
            /*li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }*/
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
            <span style="color: forestgreen; font-weight: 600;">26</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">26 (всего страниц в макете)</span>
        </div>
    </div>

    <div>
        <ol>
            <li><a href="/build/index.php" target="_blank">Главная</a></li>
            <li><a href="/build/about.php" target="_blank">О нас</a></li>
            <li><a href="/build/contacts.php" target="_blank">Контакты</a></li>
            <li><a href="/build/documents.php" target="_blank">Документы</a></li>
            <li><a href="/build/history.php" target="_blank">История</a></li>
            <li><a href="/build/news.php" target="_blank">Новости</a></li>


            <li><a href="/build/news-details.php" target="_blank">Новости - детальная</a></li>
            <li><a href="/build/magazine.php" target="_blank">Корпоративный журнал</a></li>
            <li><a href="/build/clients.php" target="_blank">Наши заказчики</a></li>
            <li><a href="/build/nature-protection.php" target="_blank">Охрана природы</a></li>
            <li><a href="/build/team-career.php" target="_blank">Команда и карьера</a></li>
            <li><a href="/build/activity.php" target="_blank">Деятельность</a></li>
            <li><a href="/build/projects.php" target="_blank">Наши проекты</a></li>
            <li><a href="/build/unique-projects.php" target="_blank">Уникальные проекты</a></li>
            <li><a href="/build/search.php" target="_blank">Поиск</a></li>
            <li><a href="/build/search-query.php" target="_blank">Поиск - запрос</a></li>
            <li><a href="/build/med-center.php" target="_blank">Медицинский центр</a></li>
            <li><a href="/build/partners.php" target="_blank">Акционерам и инвесторам</a></li>
            <li><a href="/build/social-responsibility.php" target="_blank">Cоциальные ответственность</a></li>
            <li><a href="/build/company-values.php" target="_blank">Ценности компании</a></li>
            <li><a href="/build/development.php" target="_blank">Устойчивое развитие</a></li>

            <li><a href="/build/service-architecture.php" target="_blank">Услуга - Архитектурно-строительное направление</a></li>
            <li><a href="/build/service-gasification-facilities.php" target="_blank">Услуга - Проектирование объектов газификации</a></li>
            <li><a href="/build/service-security-systems.php" target="_blank">Услуга - Проектирование систем безопасности</a></li>
            <li><a href="/build/service-dev-tech-objects.php" target="_blank">Услуга - Разработка технологических объектов</a></li>
            <li><a href="/build/service-technical-support.php" target="_blank">Услуга - Техническое сопровождение объектов эксплуатации</a></li>
            <br>

        </ol>
    </div>
    </body>
</html>