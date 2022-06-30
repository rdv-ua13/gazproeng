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
        <div class="page-search-result">
            <div class="page-search-result__title h3">По запросу <span class="color-blue">«Бор»</span> найдено 14 материалов в 4 категориях:</div>
            <div class="page-search-result__filter page-search-result__filter--default">
                <div class="tabs">
                    <div class="tabs-heading">
                        <div class="tabs-heading__list">
                            <label class="tabs-heading__item" data-target="1">
                                <div class="tabs-heading__title">Люди</div>
                                <input class="visually-hidden" type="checkbox" name="tab-search-result">
                            </label>
                            <label class="tabs-heading__item" data-target="2">
                                <div class="tabs-heading__title">Новости</div>
                                <input class="visually-hidden" type="checkbox" name="tab-search-result">
                            </label>
                            <label class="tabs-heading__item" data-target="3">
                                <div class="tabs-heading__title">Проекты</div>
                                <input class="visually-hidden" type="checkbox" name="tab-search-result">
                            </label>
                            <label class="tabs-heading__item" data-target="4">
                                <div class="tabs-heading__title">Документы</div>
                                <input class="visually-hidden" type="checkbox" name="tab-search-result">
                            </label>
                        </div>
                    </div>
                    <div class="tab-content">
                        <section class="tab-content__section" data-id="1">
                            <div class="tab-content__title">Люди</div>
                            <div class="tab-content__body">
                                <ul class="infocard infocard-person">
                                    <li>
                                        <div class="infocard__title">
                                            <div class="infocard__title-name">
                                                Ганбаров
                                                <span class="color-gray">Алим Байрамович</span>
                                            </div>
                                            <div class="infocard__title-position">Первый заместитель генерального директора — главный инженер</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="infocard__title">
                                            <div class="infocard__title-name">
                                                Моченова
                                                <span class="color-gray">Любовь Николаевна</span>
                                            </div>
                                            <div class="infocard__title-position">Заместитель генерального директора по экономике и финансам</div>
                                        </div>
                                        <div class="infocard__value">
                                            <div class="infocard__value-item">l.mochenova@gasp.ru</div>
                                            <div class="infocard__value-item">+7 (999) 987-65-43</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="infocard__title">
                                            <div class="infocard__title-name">
                                                Филипова
                                                <span class="color-gray">Инна Анатольевна</span>
                                            </div>
                                            <div class="infocard__title-position">Заместитель генерального директора по информационным технологиям и цифровизации</div>
                                        </div>
                                        <div class="infocard__value">
                                            <div class="infocard__value-item">i.filipova@gasp.ru</div>
                                            <div class="infocard__value-item"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="tab-content__section" data-id="2">
                            <div class="tab-content__title">Новости</div>
                            <div class="tab-content__body">
                                <div class="row news-row">
                                    <div class="col-lg-4 col-md-6 d-flex">
                                        <a href="javascript:;" class="news-article-box news-article-box-sm" title="">
                                            <div class="news-article-box__image">
                                                <span class="news-article-box__date fixed-date-el">10.04.2021</span>
                                                <img src="/build/img/news-3.jpg" alt="">
                                            </div>
                                            <h3 class="news-article-box__title">Итоги конкурса "Инженер года 2021"</h3>
                                            <span class="news-article-box__caption">Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений</span>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 d-flex">
                                        <a href="javascript:;" class="news-article-box news-article-box-sm" title="">
                                            <div class="news-article-box__image">
                                                <span class="news-article-box__date fixed-date-el">10.04.2021</span>
                                                <img src="/build/img/news-4.jpg" alt="">
                                            </div>
                                            <h3 class="news-article-box__title">Итоги конкурса "Инженер года 2021"</h3>
                                            <span class="news-article-box__caption">Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений</span>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 d-flex">
                                        <a href="javascript:;" class="news-article-box news-article-box-sm" title="">
                                            <div class="news-article-box__image">
                                                <span class="news-article-box__date fixed-date-el">10.04.2021</span>
                                                <img src="/build/img/news-5.jpg" alt="">
                                            </div>
                                            <h3 class="news-article-box__title">Итоги конкурса "Инженер года 2021"</h3>
                                            <span class="news-article-box__caption">Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений</span>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 d-flex">
                                        <a href="javascript:;" class="news-article-box news-article-box-sm" title="">
                                            <div class="news-article-box__image">
                                                <span class="news-article-box__date fixed-date-el">10.04.2021</span>
                                                <img src="/build/img/news-6.jpg" alt="">
                                            </div>
                                            <h3 class="news-article-box__title">Итоги конкурса "Инженер года 2021"</h3>
                                            <span class="news-article-box__caption">Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений Предварительные выводы неутешительны: существующая теория, в своём классическом представлении, допускает внедрение направлений</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="tab-content__section" data-id="3">
                            <div class="tab-content__title">Проекты</div>
                            <div class="tab-content__body">
                                <div class="row news-row">
                                    <div class="col-md-4 d-flex">
                                        <a href="javascript:;" class="news-article-box news-article-box-sm" title="">
                                            <div class="news-article-box__image">
                                                <img src="/build/img/projects-img4.jpg" alt="">
                                            </div>
                                            <h3 class="news-article-box__title">Офисный комплекс ООО&nbsp;«Газпром добыча шельф Южно-Сахалинск»</h3>
                                            <span class="news-article-box__caption">В&nbsp;архитектурный комплекс для&nbsp;ООО&nbsp;«Газпром трансгаз Махачкала» входят: 15-этажное административно-офисное здание…</span>
                                        </a>
                                    </div>
                                    <div class="col-md-4 d-flex">
                                        <a href="javascript:;" class="news-article-box news-article-box-sm" title="">
                                            <div class="news-article-box__image">
                                                <img src="/build/img/projects-img5.jpg" alt="">
                                            </div>
                                            <h3 class="news-article-box__title">Реконструкция и&nbsp;расширение офисного административного здания в&nbsp;г.&nbsp;Южно-Сахалинск</h3>
                                            <span class="news-article-box__caption">Состоит из&nbsp;трёх 25-этажных монолитных жилых домов со&nbsp;встроенно-пристроенными нежилыми помещениями и&nbsp;двух открытых парковок…</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="tab-content__section" data-id="4">
                            <div class="tab-content__title">Документы</div>
                            <div class="tab-content__body">
                                <div class="row doc-card">
                                    <div class="col-sm-6 col-lg-4 col-12 doc-card__item">
                                        <a href="javascript:;">
                                            <div class="doc-card__title h5">Разрешенные виды работ</div>
                                            <div class="doc-card__file-data">
                                                <span>231 КБ</span>
                                                <span>PDF</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-12 doc-card__item">
                                        <a href="javascript:;">
                                            <div class="doc-card__title h5">Политика в области качества</div>
                                            <div class="doc-card__file-data">
                                                <span>231 КБ</span>
                                                <span>PDF</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-12 doc-card__item">
                                        <a href="javascript:;">
                                            <div class="doc-card__title h5">Политика запрета употребления алкоголя</div>
                                            <div class="doc-card__file-data">
                                                <span>231 КБ</span>
                                                <span>PDF</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-12 doc-card__item">
                                        <a href="javascript:;">
                                            <div class="doc-card__title h5">Политика обработки персональных данных</div>
                                            <div class="doc-card__file-data">
                                                <span>231 КБ</span>
                                                <span>PDF</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-12 doc-card__item">
                                        <a href="javascript:;">
                                            <div class="doc-card__title h5">ПОЛИТИКА обработки персональных данных в&nbsp;ООО&nbsp;«СпецГазПроект»</div>
                                            <div class="doc-card__file-data">
                                                <span>231 КБ</span>
                                                <span>PDF</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
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
