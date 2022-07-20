<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/build/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/build/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/build/favicon-16x16.png">
    <link rel="manifest" href="/build/site.webmanifest">
    <link rel="mask-icon" href="/build/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/build/css/vendors.css">
    <link rel="stylesheet" href="/build/css/main.css">

    <title>TITLE</title>
</head>

<?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
    <body class="main-page">
<?else:?>
    <body>
<?endif;?>

<div class="main-wrapper">
    <?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
        <header class="header header--index">
    <?else:?>
        <header class="header">
    <?endif;?>
        <div class="container-fluid container-lg header__container">

            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="javascript:;">
                    <svg class="icon">
                        <use href="/build/img/sprite.svg#logo"></use>
                    </svg>
                    <svg class="icon-text">
                        <use href="/build/img/sprite.svg#logo-text"></use>
                    </svg>
                </a>
                <button class="navbar-toggler js-navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown"
                               class="nav-link dropdown-toggle"
                               href="javascript:;"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="true"
                            >
                                О компании
                            </a>
                            <div class="dropdown-menu"
                                 aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"
                                   href="javascript:;"
                                >О компании</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown"
                               class="nav-link dropdown-toggle"
                               href="javascript:;"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="true"
                            >Деятельность</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:;">Разработка технологических объектов</a>
                                <a class="dropdown-item" href="javascript:;">Проектирование систем безопасности</a>
                                <a class="dropdown-item" href="javascript:;">Архитектурно-строительное направление</a>
                                <a class="dropdown-item" href="javascript:;">Техническое сопровождение объектов эксплуатации</a>
                                <a class="dropdown-item" href="javascript:;">Объекты газификации</a>
                                <a class="dropdown-item" href="javascript:;">Цифровой инжиниринг и ИТ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Акционерам и инвесторам</a>
                        </li>
                    </ul>
                </div>

                <div class="lang-switcher js-lang-switcher">
                    <a class="lang-switcher-link" href="javascript:;">ENG</a>
                    <ul class="lang-switcher-dropdown-menu">
                        <li><a href="javascript:;" data-abbr="RU">Русский</a></li>
                        <li><a href="javascript:;" data-abbr="ENG">English</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="main">