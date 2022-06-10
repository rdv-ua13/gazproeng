<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

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
        <div class="container">
            <div class="header-nav-area">
                <a href="javascript:;" class="logo-el">
                    <svg class="">
                        <use href="/build/img/logo.svg#logo"></use>
                    </svg>
                    <svg class="logo-text">
                        <use href="/build/img/logo.svg#logo-text"></use>
                    </svg>
                </a>

                <div class="responsive-nav d-md-flex justify-content-md-between">
                    <nav>
                        <ul>
                            <li class="has-submenu">
                                <a href="javascript:;">О компании</a>
                                <ul>
                                    <li><a href="javascript:;">О компании</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:;">Деятельность</a>
                                <ul>
                                    <li><a href="javascript:;">Факты о компании</a></li>
                                    <li><a href="javascript:;">Цели и ценности</a></li>
                                    <li><a href="javascript:;">Команда и карьера</a></li>
                                    <li><a href="javascript:;">Охрана природы</a></li>
                                    <li><a href="javascript:;">Социальная ответственность</a></li>
                                    <li><a href="javascript:;">Корпоративный журнал</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Контакты</a></li>
                            <li><a href="javascript:;">Новости</a></li>
                            <li><a href="javascript:;">Акционерам и инвесторам</a></li>
                        </ul>
                    </nav>

                    <div class="menu-btn open"> <span></span> <span></span> <span></span> </div>
                </div>

                <div class="lang-switcher dropdown--menu">
                    <a href="javascript:;">RUS</a>
                    <ul>
                        <li><a href="javascript:;">Русский</a></li>
                        <li><a href="javascript:;">English</a></li>
                    </ul>
                </div>

                <div class="menu-btn"> <span></span> <span></span> <span></span> </div>
            </div>
        </div>
    </header>

    <main class="main">