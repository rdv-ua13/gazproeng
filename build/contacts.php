<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/header.php'); ?>

<div class="contacts-header-wrapper">
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/breadcrumbs.php'); ?>

    <div class="contacts-header">
        <div class="contacts-header__item">
            <h1 class="section-area__title">Контакты</h1>

              <div class="contacts-header__info">
                <div class="contacts-header__info-item">
                    <div class="contact-element__label">Телефон</div>
                    <a href="tel:+74732263445" class="contact-element__content">+7 (473) 226-34-45</a>
                </div>

                <div class="contacts-header__info-item">
                    <div class="contact-element__label">Электронная почта</div>
                    <a href="mailto:ruk@gasp.ru" class="contact-element__content">ruk@gasp.ru</a>
                </div>

                <div class="contacts-header__info-item">
                    <div class="contact-element__label">адрес</div>
                    <span class="contact-element__content">394007, Россия, г. Воронеж, Ленинский проспект, дом 119</span>
                </div>
              </div>
        </div>

        <div class="contacts-header__item pattern-pseudo">
          <img src="/build/img/about-img.jpg" class="img-fluid over" alt="">
        </div>

        <div class="contacts-header__item">
            <a href="javascript:;" class="button-element" role="button">Обратная связь</a>
        </div>
    </div>

    <div class="row contacts-header-cards">
      <div class="col col-12 col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="info-card info-card-contact">
          <div class="info-card-contact__heading">Для направления корреспонденции на регистрацию:</div>
          <div class="info-card_contacts_bottom">
              <div class="contact-element">
                <div class="contact-element__label">факс</div>
                <a href="tel:+74732263445" class="contact-element__content">+7 (473) 226-34-45</a>
              </div>

              <div class="contact-element">
                <div class="contact-element__label">электронная почта</div>
                <a href="mailto:kancelarya@gasp.ru" class="contact-element__content">kancelarya@gasp.ru</a>
              </div>
            </div>
        </div>
      </div>

      <div class="col col-12 col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="info-card info-card-contact">
          <div class="info-card-contact__heading">Информация о полученной корреспонденции:</div>
          <div class="info-card_contacts_bottom">
              <div class="contact-element">
                <div class="contact-element__label">Телефон</div>
                <a href="tel:+74732263445" class="contact-element__content">+7 (473) 226-34-45</a>
              </div>
          </div>
        </div>
      </div>

      <div class="col col-12 col-lg-4">
        <div class="info-card info-card-contact">
            <div>
              <div class="info-card-contact__heading">Линия доверия</div>
              <div class="info-card-notf">по которой любой может сообщить о кражах, нарушениях инструкций и режима, прочих инцидентах, связанных с экономической и информационной безопасностью предприятия</div>
            </div>
            <div class="info-card_contacts_bottom">
                  <div class="contact-element">
                    <a href="tel:+74732376785" class="contact-element__content">+7 (473) 237-67-85</a>
                  </div>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="block-mb d-none d-lg-block">
    <div class="contact-map">
        <div id="mapId"></div>
    </div>
</div>

<div class="section-area">
    <div class="container-fluid container-lg contacts">
        <div class="cta-box">
          <div class="cta-box-inner">
            <div class="cta-box__title">Удалённые подразделения</div>
            <div class="cta-box__caption">
              Выберите город и мы отобразим всю информацию о подразделении в этом городе
            </div>

            <div class="row unit-btns site-tabs-el">
              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white site-tab-shown button-element-active" role="button" data-map-id="1" data-rel="tab-1">
                Москва</a>
              </div>
              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white" role="button" data-map-id="2" data-rel="tab-2">
                Санкт-Петербург</a>
              </div>
              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white" role="button" data-map-id="3" data-rel="tab-3">
                Нижний Новгород</a>
              </div>
              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white" role="button" data-map-id="4" data-rel="tab-4">
                Тобольск</a>
              </div>

              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white" role="button" data-map-id="5" data-rel="tab-5">
                Томск</a>
              </div>
              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white" role="button" data-map-id="6" data-rel="tab-6">
                Ростов-на-Дону</a>
              </div>
              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white" role="button" data-map-id="7" data-rel="tab-7">
                Минск</a>
              </div>
              <div class="col col-12 col-sm-6 col-md-4 d-flex">
                <a href="javascript:;" class="button-element site-tabs-el__btn button-element-white" role="button" data-map-id="8" data-rel="tab-8">
                Ставрополь</a>
              </div>
            </div>

            <div class="unit-contact-area" id="tabsArea">
              <div class="site-tab site-tab-shown" id="tab-1">
                  <div class="unit-contact-address">Филиал в г. Москва</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+78122443131" class="contact-element__content">+7 (495) 334-46-41</a>

                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">117342, Улица Обручева, дом 34/63, строение 3</span>
                    </div>
                 </div>
              </div>

              <div class="site-tab" id="tab-2">
                  <div class="unit-contact-address">Филиал в г. Санкт-Петербург</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+78122443131" class="contact-element__content">+7 (812) 244-31-31</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">Пулковское шоссе, дом 28, литера А, помещение 805</span>
                    </div>
                 </div>
              </div>

              <div class="site-tab" id="tab-3">
                  <div class="unit-contact-address">Филиал в г. Нижний Новгород</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+78314378511" class="contact-element__content">+7 (831) 437-85-11</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">603000, Улица Новая, дом 10, помещение П 10</span>
                    </div>
                 </div>
              </div>

              <div class="site-tab" id="tab-4">
                  <div class="unit-contact-address">Филлиал в г. Тобольск</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+79129227725" class="contact-element__content">+7 (912) 922-77-25</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">7 мкр., 30, офис 714А</span>
                    </div>
                 </div>
              </div>

              <div class="site-tab" id="tab-5">
                  <div class="unit-contact-address">Филлиал в г. Томск</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+73822601920" class="contact-element__content">+7 (3822) 60-19-20</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">634061, Улица Дзержинского, дом 8</span>
                    </div>
                 </div>
              </div>

              <div class="site-tab" id="tab-6">
                  <div class="unit-contact-address">Филлиал в г. Ростов-на-Дону</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+78632017106" class="contact-element__content">+7 (863) 201-71-06</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">344037, Улица 18-я линия, дом 96/84, офис 1</span>
                    </div>
                 </div>
              </div>

              <div class="site-tab" id="tab-7">
                  <div class="unit-contact-address">Филлиал в г. Минск</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+8103750172371490" class="contact-element__content">810 (375 017) 237-14-90</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+375291797088" class="contact-element__content">+375 (29) 179-70-88</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">тр. Логойский, дом 15, корпус 4, кабинет 205</span>
                    </div>
                 </div>
              </div>

              <div class="site-tab" id="tab-8">
                  <div class="unit-contact-address">Филлиал в г. Ставрополь</div>
                  <div class="unit-contact-area-items">
                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Телефон</div>
                       <a href="tel:+78652298665" class="contact-element__content">+7 (8652) 29-86-65</a>
                    </div>

                    <div class="contact-element contact-element-white mb-0">
                       <div class="contact-element__label">Адрес</div>
                       <span class="contact-element__content">355008, Улица Гражданская 2Б.</span>
                    </div>
                 </div>
              </div>

                <div id="unitMap"></div>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="section-area Unitsearch-section-area">
  <div class="container-fluid container-lg">
      <div class="block-mb">
          <div class="h2 section-area__title">Заместители<br>генерального директора</div>
      </div>

        <div class="exec-row mt-5">
          <div class="info-box-col d-flex">
            <div class="info-card info-card_exec">
              <div class="info-card_fio"><span>Ганбаров</span> Алим Байрамович</div>
              <div class="info-card_position">Первый заместитель генерального директора — главный инженер</div>
              <div class="info-card_contacts">
                  <a href="mailto:ganbarov@gasp.ru" class="info-card_email">ganbarov@gasp.ru</a>
              </div>
            </div>
          </div>

          <div class="info-box-col d-flex">
            <div class="info-card info-card_exec">
              <div class="info-card_fio">Бондарев Владимир Николаевич</div>
              <div class="info-card_position">Заместитель генерального директора по проектированию технологических объектов</div>
              <div class="info-card_contacts">
                  <a href="mailto:bond@gasp.ru" class="info-card_email">bond@gasp.ru</a>
              </div>
            </div>
          </div>

          <div class="info-box-col d-flex">
            <div class="info-card info-card_exec">
              <div class="info-card_fio"><span>Ганин</span> Дмитрий Геннадьевич</div>
              <div class="info-card_position">Заместитель генерального директора по управлению проектами</div>
              <div class="info-card_contacts">
                  <a href="mailto:d.ganin@gasp.ru" class="info-card_email">d.ganin@gasp.ru</a>
              </div>
            </div>
          </div>

          <div class="info-box-col d-flex">
            <div class="info-card info-card_exec">
              <div class="info-card_fio"><span>Моченова</span> Любовь Николаевна</div>
              <div class="info-card_position">Заместитель генерального директора по экономике и финансам</div>
              <div class="info-card_contacts">
                  <a href="mailto:l.mochenova@gasp.ru" class="info-card_email">l.mochenova@gasp.ru</a>
              </div>
            </div>
          </div>

          <div class="info-box-col d-flex">
            <div class="info-card info-card_exec">
              <div class="info-card_fio"><span>Саркисов</span> Александр Сергеевич</div>
              <div class="info-card_position">Заместитель генерального директора по корпоративным отношениям</div>
              <div class="info-card_contacts">
                  <a href="mailto:a.sarkisov@gasp.ru" class="info-card_email">a.sarkisov@gasp.ru</a>
              </div>
            </div>
          </div>

          <div class="info-box-col d-flex">
            <div class="info-card info-card_exec">
              <div class="info-card_fio"><span>Филипова</span> Инна Анатольевна</div>
              <div class="info-card_position">Заместитель генерального директора по информационным технологиям и цифровизации</div>
              <div class="info-card_contacts">
                  <a href="mailto:i.filipova@gasp.ru" class="info-card_email">i.filipova@gasp.ru</a>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/components/footer.php'); ?>

