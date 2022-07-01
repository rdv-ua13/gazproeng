        </main>

        <div class="pre-footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 footer-logo-col">
                        <a href="#" class="footer-logo"><img src="/build/img/footer-logo.png" class="img-fluid" alt=""></a>
                    </div>

                    <div class="col-md-6 col-12 d-flex flex-md-row flex-column justify-content-end">

                        <div class="t-bar-box">
                            <div class="footer-search">
                                <input type="text" class="t-bar-element" placeholder="Поиск">
                            </div>
                        </div>

                        <div class="t-bar-box">
                            <div class="t-bar-element dropdown--menu">
                                <a href="#">RUS</a>
                                <ul>
                                    <li><a href="#">Русский</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 footer-col">
                        <div class="footer-nav-heading">КОМПАНИЯ</div>
                        <ul>
                            <li><a href="">О нас</a></li>
                            <li><a href="#">История</a></li>
                            <li><a href="">Документы</a></li>
                            <li><a href="">Заказчики</a></li>
                            <li><a href="">Новости</a></li>
                            <li><a href="">Журнал</a></li>
                            <li><a href="">Охрана природы</a></li>
                            <li><a href="">Вакансии</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 footer-col">
                        <div class="footer-nav-heading">Деятельность</div>
                        <ul>
                            <li><a href="">Инженерные изыскания</a></li>
                            <li><a href="">Проектирование</a></li>
                            <li><a href="">Инжиниринг</a></li>
                            <li><a href="">Разработка ПО</a></li>
                            <li><a href="">Сертификация</a></li>
                            <li><a href="">Испытательный центр</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 footer-col">
                        <div class="footer-nav-heading">проекты</div>
                        <ul>
                            <li><a href="">Проектирование</a></li>
                            <li><a href="">Инжиниринг</a></li>
                            <li><a href="">Информационное 3D моделирование</a></li>
                            <li><a href="">Разработка ПО</a></li>
                        </ul>

                        <div class="footer-nav-heading mt-4">Акционерам и инвесторам</div>
                        <ul>
                            <li><a href="">Устав</a></li>
                            <li><a href="">Аффилированные лица</a></li>
                            <li><a href="">Отчётность</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-4 col-6 footer-col">
                        <div class="footer-nav-heading">Социальная ответственность</div>
                        <ul>
                            <li><a href="">Медицинский центр</a></li>
                            <li><a href="">Учебный центр</a></li>
                            <li><a href="">База отдыха «Иволга»</a></li>
                            <li><a href="">Музей Газпроектинжиниринг</a></li>
                            <li><a href="">Совет молодёжи</a></li>
                            <li><a href="">Корпоративный журнал</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-2 col-md-4 col-12 footer-col">
                        <div class="footer-nav-heading">Контакты</div>
                        <ul>
                            <li><a href="">Контакты</a></li>
                            <li><a href="">Удалённые подразделения</a></li>
                            <li><a href="">Начальник управлений</a></li>
                            <li><a href="">Обратная связь</a></li>
                            <li><a href="">Анкетирование</a></li>
                        </ul>

                        <a href="#" class="link-el mt-4">Юбилей — 50 лет <i class="link-icon"></i></a>
                    </div>


                </div>

            </div>

            <div class="footer-bottom">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <span class="copyright">© АО «Газпроектинжиниринг» 2011 - 2022</span>
                        </div>
                        <div class="col-md-6 col-12 d-flex justify-content-center justify-content-md-end">
                            <a href="#" class="policy-link">Политика конфиденциальности</a>
                        </div>
                    </div>

                </div>
            </div>

        </footer>
    </div>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="/build/js/libs.min.js"></script>
    <script src="/build/js/common.js"></script>
    <script src="/build/js/main.js"></script>

    <script type="text/javascript">
        ymaps.ready(function () {
            // map 1
            var myMap = new ymaps.Map('mapId', {
                    center: [51.673902, 39.253225],
                    zoom: 16,
                    controls: []
                }),

                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    balloonContent: '394007, Россия, г. Воронеж, Ленинский проспект, дом 119'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: '/build/img/placemark-map.png',
                    iconImageSize: [27, 40],
                    iconImageOffset: [-5, -38]
                });

            myMap.controls.add('zoomControl');
            myMap.behaviors.disable('multiTouch');

            myMap.geoObjects.add(myPlacemark);
            // map 1.end

            // map 2
            var map = new ymaps.Map('unitMap', {
                center: [55.653822, 37.540057],
                zoom: 14,
                controls: ['zoomControl']
            });

            map.behaviors.disable('scrollZoom');
            map.behaviors.disable('multiTouch');
            // map.behaviors.disable('drag');

            var myPlacemark1 = new ymaps.Placemark([55.653822, 37.540057]);
            var myPlacemark2 = new ymaps.Placemark([56.311172, 43.996797]);
            var myPlacemark3 = new ymaps.Placemark([58.229197, 68.274827]);
            var myPlacemark4 = new ymaps.Placemark([45.051959, 41.995916]);
            var myPlacemark5 = new ymaps.Placemark([56.473043, 84.968553]);
            var myPlacemark6 = new ymaps.Placemark([53.944368, 27.609747]);
            var myPlacemark7 = new ymaps.Placemark([47.230456, 39.760917]);
            var myPlacemark8 = new ymaps.Placemark([59.825656, 30.326163]);
            map.geoObjects.add(myPlacemark1);
            map.geoObjects.add(myPlacemark2);
            map.geoObjects.add(myPlacemark3);
            map.geoObjects.add(myPlacemark4);
            map.geoObjects.add(myPlacemark5);
            map.geoObjects.add(myPlacemark6);
            map.geoObjects.add(myPlacemark7);
            map.geoObjects.add(myPlacemark8);

            $(document).on("click", "[data-map-id='1']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark1.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='2']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark2.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='3']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark3.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='4']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark4.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='5']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark5.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='6']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark6.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='7']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark7.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });

            $(document).on("click", "[data-map-id='8']", function (e) {
                e.stopPropagation();
                map.panTo([myPlacemark8.geometry.getCoordinates()], {delay: 0, flying: true }).then(function() {map.setZoom(15); });
            });
            // map 2.end
        });
    </script>

</body>
</html>