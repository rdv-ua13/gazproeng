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
            .color-green {
                color: forestgreen!important;
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
        <?/*ВЕЗДЕ ПОМЕНЯТЬ КОНТЕЙНЕРЫ!!!

            ВЕЗДЕ ПОМЕНЯТЬ ТАБЫ В СЛАЙДЕР!!!
        */?>
        <ol>
            <li>
                <a href="/build/index.php" target="_blank">Главная [адаптив (кроме Карты)]</a> -
                <a class="color-green" href="http://1251.8up.ru/" target="_blank">[backend по ссылке]</a>
            </li>
            <li><a href="/build/about.php" target="_blank">О нас [адаптив]</a></li>
            <li>
                <a href="/build/contacts.php" target="_blank">Контакты [адаптив]</a> -
                <a class="color-green" href="http://1251.8up.ru/contacts/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/documents.php" target="_blank">Документы [адаптив]</a> -
                <a class="color-green" href="http://1251.8up.ru/company/documents/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/history.php" target="_blank">История [адаптив]</a> -
                <a class="color-green" href="http://1251.8up.ru/company/history/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/news.php" target="_blank">Новости [адаптив]</a> -
                <a class="color-green" href="http://1251.8up.ru/news/" target="_blank">[backend по ссылке]</a>
            </li>


            <li>
                <a href="/build/news-details.php" target="_blank">Новости - детальная [адаптив]</a> -
                <a class="color-green" href="http://1251.8up.ru/news/blagoustroystvo-skvera-rybka-levoberezhnogo-rayona-planiruetsya-pri-uchastii-ao-gazproektinzhiniring/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/magazine.php" target="_blank">Корпоративный журнал [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/company/magazine/" target="_blank">[backend по ссылке]</a>
            </li>
            <li><a href="/build/clients.php" target="_blank">Наши заказчики [адаптив (кроме Карты, Слайдер Награды)]</a></li>
            <li>
                <a href="/build/nature-protection.php" target="_blank">Охрана природы [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/company/nature/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/team-career.php" target="_blank">Команда и карьера [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/company/team/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/activity.php" target="_blank">Деятельность [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/activity/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/projects.php" target="_blank">Наши проекты [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/projects/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/unique-projects.php" target="_blank">Уникальные проекты [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/projects/avp-ostrogozhskogo-lpumg/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/search.php" target="_blank">Поиск [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/search/?q=%D1%83%D1%80%D0%BE%D0%B2%D0%B5%D0%BD%D1%8C+%D0%B8%D0%BB%D0%B8+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&how=r" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/search-query.php" target="_blank">Поиск - запрос [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/search/?q=%D1%83%D1%80%D0%BE%D0%B2%D0%B5%D0%BD%D1%8C+%D0%B8%D0%BB%D0%B8+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82&how=r" target="_blank">[backend по ссылке]</a>
            </li>
            <li><a href="/build/med-center.php" target="_blank">Медицинский центр [адаптив (layout fixes)]</a></li>
            <li>
                <a href="/build/partners.php" target="_blank">Акционерам и инвесторам [адаптив (layout fixes)] - (end sldrs btns)</a> -
                <a class="color-green" href="http://1251.8up.ru/investors/" target="_blank">[backend по ссылке]</a>
            </li>
            <li><a href="/build/social-responsibility.php" target="_blank">Cоциальные ответственность [адаптив (layout fixes)]</a></li>
            <li>
                <a href="/build/company-values.php" target="_blank">Ценности компании [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/company/worth/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/development.php" target="_blank">Устойчивое развитие [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/development/" target="_blank">[backend по ссылке]</a>
            </li>

            <li>
                <a href="/build/service-architecture.php" target="_blank">Услуга - Архитектурно-строительное направление [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/activity/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/service-gasification-facilities.php" target="_blank">Услуга - Проектирование объектов газификации [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/activity/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/service-security-systems.php" target="_blank">Услуга - Проектирование систем безопасности [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/activity/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/service-dev-tech-objects.php" target="_blank">Услуга - Разработка технологических объектов [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/activity/" target="_blank">[backend по ссылке]</a>
            </li>
            <li>
                <a href="/build/service-technical-support.php" target="_blank">Услуга - Техническое сопровождение объектов эксплуатации [адаптив (layout fixes)]</a> -
                <a class="color-green" href="http://1251.8up.ru/activity/" target="_blank">[backend по ссылке]</a>
            </li>
            <br>

        </ol>
    </div>
    </body>
</html>