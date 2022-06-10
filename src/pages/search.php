<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<div class="container">
	<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

	<div class="block-mb">
		<h1 class="section-area__title">Поиск</h1>
	</div>

	<div class="section-area">
        <form id="" class="page-search" method="" action="">
            <div class="field-wrapper">
                <input id="" class="field-input" type="search" name="" placeholder="Введите поисковой запрос..">
                <button class="btn field-input__btn">
                    <svg class="icon">
                        <use href="/build/img/sprite.svg#search"></use>
                    </svg>
                </button>
            </div>
        </form>
	</div>

    <div class="section-area">
        <div class="title-mb-big">
            <div class="h4">Синтаксис поискового запроса:</div>
        </div>

        <div class="search-query-syntax">
            <div class="search-query-syntax__item framed-block--small">
                <div class="h5 title-mb color-blue">Обычно запрос представляет из себя просто одно или несколько слов, например:</div>
                <div class="block-mb-text search-query-syntax__example">контактная информация</div>
                <div class="text-block">
                    <p>По такому запросу будут найдены страницы, на которых встречаются оба слова запроса</p>
                </div>
            </div>
            <div class="search-query-syntax__item framed-block--small">
                <div class="h5 title-mb color-blue">Логические операторы позволяют строить более сложные запросы, например:</div>
                <div class="block-mb-text search-query-syntax__example">
                    <span>контактная информация <b class="color-blue">или</b> телефон</span>
                </div>
                <div class="text-block">
                    <p>По такому запросу будут найдены страницы, на которых встречаются либо слова «контактная» и «информация», либо слово «телефон»</p>
                </div>
            </div>
            <div class="search-query-syntax__item framed-block--small">
                <div class="h5 title-mb color-blue">Так же из поиска можно исключить запросы с необходимым вам словом, например:</div>
                <div class="block-mb-text search-query-syntax__example">
                    <span>контактная информация <b class="color-blue">не</b> телефон</span>
                </div>
                <div class="text-block">
                    <p>По такому запросу будут найдены страницы, на которых встречаются либо слова «контактная» и «информация», но не встречается слово «телефон»</p>
                </div>
            </div>
            <div class="search-query-syntax__item framed-block--small">
                <div class="h5 title-mb color-blue">Вы можете использовать скобки для построения более сложных запросов, например:</div>
                <div class="block-mb-text search-query-syntax__example">
                    <span>контактная информация <b class="color-blue">не (</b>телефон чёрный<b>)</b></span>
                </div>
                <div class="text-block">
                    <p>По такому запросу будут найдены страницы, на которых встречаются либо слова «контактная» и «информация», но не встречается словосочетание «телефон чёрный»</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>