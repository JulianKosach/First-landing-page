<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=480">
        <title>ТрансЕнергоГлавСтрой</title>
        <link type="image/x-icon" href="favicon.png" rel="shortcut icon">
        <link type="image/x-icon" href="favicon.png" rel="icon">
        <style>
            <?php include('css/head.css');?>
        </style>
        <!--<?php include('../track/head.php'); ?>-->
    </head>
    <body>
        <!-- <div class="maket"></div> -->
        <section id="sec1">
            <div>
                <a class="menu" href="#"></a>
                <div class="logo"></div>
                <a class="phone" href="#sec13"></a>
                <h3>Подключение объекта к сети <br> электроснабжения</h3>
                <h1>От заявки на подключение <br> мощности до договора <br> с Мосэнергосбыт</h1>
                <div class="arrow">
                    <span>256</span>
                    <p>подключенных объектов за 16 лет</p>
                </div>
            </div>
        </section>
        <form id="form1" action="ajax/mail.php" method="post">
            <div class="form1-label">
                <h4>Получите консультацию</h4>
                <p>от инженера с опытом 16 лет</p>
            </div>
            <input name="phone" type="text" placeholder="Телефон">
            <input name="frmid" type="hidden" value="form1">
            <button class="btn-blue" form="form1" type="submit">Получить консультацию</button>
        </form>
        <section class="lazy" id="sec2" data-original="img/bg-2-mob.jpg">
            <div>
                <h2>Истории наших заказчиков</h2>
                <div class="ul-wrap">
                    <ul>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-3.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/emblem.png"></div>
                            <h4>Виктор Алексеевич</h4>
                            <p>Главный энергетик</p>
                        </li>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-1.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/sony-white.png"></div>
                            <h4>Имя Фамилия 2</h4>
                            <p>Должность 2</p>
                        </li>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-2.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/bmw.png"></div>
                            <h4>Имя Фамилия 3</h4>
                            <p>Должность 3</p>
                        </li>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-4.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/mega-sm.png"></div>
                            <h4>Имя Фамилия 4</h4>
                            <p>Должность 4</p>
                        </li>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-5.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/hyndai-sm.png"></div>
                            <h4>Имя Фамилия 5</h4>
                            <p>Должность 5</p>
                        </li>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-6.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/com-sm.png"></div>
                            <h4>Имя Фамилия 6</h4>
                            <p>Должность 6</p>
                        </li>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-7.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/microsoft-sm.png"></div>
                            <h4>Имя Фамилия 7</h4>
                            <p>Должность 7</p>
                        </li>
                        <li>
                            <div class="sld-video lazy" data-original="img/vid-8.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                                <a class="btn-play" href="#"></a>
                            </div>
                            <div class="sld-logo lazy" data-original="img/beline-sm.png"></div>
                            <h4>Имя Фамилия 8</h4>
                            <p>Должность 8</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="lazy" id="sec3" data-original="img/bg-3-mob.jpg">
            <div>
                <h2>Получите коммерческое предложение</h2>
                <h3>Заполните форму и мы вышлем вам <br> КП в течение 24 часов</h3>
                <form id="form2" action="ajax/mail.php" method="post">
                    <h4>Объект уже построен?</h4>
                    <label class="form-label">
                        <input name="object-done" type="radio" value="Да">Да</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="object-done" type="radio" value="Нет">Нет</label>
                    <h4>Какие услуги вас интересуют?</h4>
                    <label class="form-label">
                        <input name="services" type="checkbox" value="Оформление документов">Оформление документов</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="services" type="checkbox" value="Проектирование">Проектирование</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="services" type="checkbox" value="Электромонтажные работы">Электромонтажные работы</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="services" type="checkbox" value="Измерения и испытания">Измерения и испытания</label>
                    <h4>Выберите тип вашего объекта</h4>
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Квартира">Квартира</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Офисное помещение">Офисное помещение</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Административное здание">Административное здание</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Торговый центр">Торговый центр</label>
                    <h4>Введите ваши контактные данные</h4>
                    <input name="name" type="text" placeholder="Ваше имя">
                    <!--
                 -->
                    <input name="phone" type="text" placeholder="Телефон">
                    <!--
                 -->
                    <input name="frmid" type="hidden" value="form2">
                    <!--
                 -->
                    <button class="btn-blue" form="form2" type="submit">Получить КП</button>
                </form>
            </div>
        </section>
        <section id="sec4">
            <h2>Посмотрите наши видео</h2>
            <h3>и не допустите ошибок на этапах подключения объекта к электроснабжению</h3>
            <div class="content">
                <span>01</span>
                <h4>Документы (ТУ, акты и т.д.)</h4>
                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая... и еще 10 нюансов в видео</p>
                <div class="video-content lazy" data-original="img/vid-3.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                    <a class="btn-play" href="#"></a>
                </div>
                <div class="text-content">
                    <p>На выходе вы должны получить:</p>
                    <p>Технические условия</p>
                </div>
            </div>
        </section>
        <section id="sec5">
            <div class="content">
                <span>02</span>
                <h4>Проект электроснабжения</h4>
                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая... и еще 10 нюансов в видео</p>
                <div class="video-content lazy" data-original="img/vid-5.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                    <a class="btn-play" href="#"></a>
                </div>
                <div class="text-content">
                    <p>На выходе вы должны получить:</p>
                    <p>Технические условия</p>
                </div>
            </div>
        </section>
        <section id="sec6">
            <div class="content">
                <span>03</span>
                <h4>Монтажные работы</h4>
                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая... и еще 10 нюансов в видео</p>
                <div class="video-content lazy" data-original="img/vid-6.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                    <a class="btn-play" href="#"></a>
                </div>
                <div class="text-content">
                    <p>На выходе вы должны получить:</p>
                    <p>Технические условия</p>
                </div>
            </div>
        </section>
        <section id="sec7">
            <div class="content">
                <span>04</span>
                <h4>Лаборатория</h4>
                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая... и еще 10 нюансов в видео</p>
                <div class="video-content lazy" data-original="img/vid-8.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                    <a class="btn-play" href="#"></a>
                </div>
                <div class="text-content">
                    <p>На выходе вы должны получить:</p>
                    <p>Технические условия</p>
                </div>
            </div>
        </section>
        <section id="sec8">
            <div class="content">
                <span>05</span>
                <h4>Акт допуска</h4>
                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая... и еще 10 нюансов в видео</p>
                <div class="video-content lazy" data-original="img/vid-7.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                    <a class="btn-play" href="#"></a>
                </div>
                <div class="text-content">
                    <p>На выходе вы должны получить:</p>
                    <p>Технические условия</p>
                </div>
            </div>
        </section>
        <section id="sec9">
            <div class="content">
                <span>06</span>
                <h4>Договор электроснабжения</h4>
                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая... и еще 10 нюансов в видео</p>
                <div class="video-content lazy" data-original="img/vid-9.jpg" data-vidsrc="https://www.youtube.com/embed/IYeaRPeEXp8">
                    <a class="btn-play" href="#"></a>
                </div>
                <div class="text-content">
                    <p>На выходе вы должны получить:</p>
                    <p>Технические условия</p>
                </div>
            </div>
        </section>
        <section class="lazy" id="sec10" data-original="img/bg-10-mob.jpg">
            <div>
                <h2>Заполните форму</h2>
                <h3>и наш менеджер сориентирует вас <br> по цене в течение 25 минут</h3>
                <form id="form3" action="ajax/mail.php" method="post">
                    <h4>Какие изделия будут входить в комплекс?</h4>
                    <label class="form-label" data-info="w245">
                        <input name="products" type="checkbox" value="Подключение под ключ">Подключение под ключ</label>
                    <!--
                -->
                    <label class="form-label" data-info="w240">
                        <input name="products" type="checkbox" value="Разработка проекта">Разработка проекта</label>
                    <!--
                -->
                    <label class="form-label" data-info="w245">
                        <input name="products" type="checkbox" value="Акт разграничение">Акт разграничение</label>
                    <!--
                    -->
                    <label class="form-label" data-info="w245">
                        <input name="products" type="checkbox" value="Технические условия">Технические условия</label>
                    <!--
                -->
                    <label class="form-label" data-info="w240">
                        <input name="products" type="checkbox" value="Монтажные работы">Монтажные работы</label>
                    <!--
                -->
                    <label class="form-label" data-info="w245">
                        <input name="products" type="checkbox" value="Акт допуска">Акт допуска</label>
                    <!--
                -->
                    <label class="form-label" data-info="w245">
                        <input name="products" type="checkbox" value="Разрешение на мощность">Разрешение на мощность</label>
                    <!--
                -->
                    <label class="form-label" data-info="w240">
                        <input name="products" type="checkbox" value="Технический отчет">Технический отчет</label>
                    <!--
                -->
                    <label class="form-label" data-info="w245">
                        <input name="products" type="checkbox" value="Договор с Энергосбытом">Договор с Энергосбытом</label>
                    <h4>Выберите тип вашего объекта</h4>
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Квартира">Квартира</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Офисное помещение">Офисное помещение</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Административное здание">Административное здание</label>
                    <!--
                -->
                    <label class="form-label">
                        <input name="object-type" type="radio" value="Торговый центр">Торговый центр</label>
                    <h4>Введите ваши контактные данные</h4>
                    <input name="name" type="text" placeholder="Ваше имя">
                    <!--
                -->
                    <input name="phone" type="text" placeholder="Телефон">
                    <!--
                -->
                    <input name="frmid" type="hidden" value="form3">
                    <!--
                 -->
                    <button class="btn-blue" form="form3" type="submit">Отправить</button>
                </form>
            </div>
        </section>
        <section id="sec11">
            <div>
                <h2>Компании и объекты, которые заказывали услуги у нас</h2>
                <a id="comp-btn-left" href="#"></a>
                <div class="ul-wrap">
                    <ul>
                        <li>
                            <img class="lazy" src="img/beline.png" alt="logo" height="54" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/hyndai.png" alt="logo" height="60" width="116">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/com.png" alt="logo" height="46" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/microsoft.png" alt="logo" height="36" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/sony.png" alt="logo" height="30" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/bmw.png" alt="logo" height="80" width="80">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/mega.png" alt="logo" height="47" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/emblem.png" alt="logo" height="80" width="90">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/euroset.png" alt="logo" height="23" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/nissan.png" alt="logo" height="80" width="92">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/samsung.png" alt="logo" height="57" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/grunt.png" alt="logo" height="80" width="60">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/blender.png" alt="logo" height="48" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/vw.png"  alt="logo" height="80" width="80">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/microformats.png" alt="logo" height="47" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/nintendo.png" alt="logo" height="42" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/vimeo.png" alt="logo" height="48" width="170">
                            <p>ОАО «Вымпелком»</p>
                        </li>
                    </ul>
                </div>
                <a id="comp-btn-right" href="#"></a>
            </div>
        </section>
        <section class="lazy" id="sec12" data-original="img/bg-12-mob.jpg">
            <div>
                <h2>Руководство компании</h2>
                <a id="lead-btn-left" href="#"></a>
                <div class="ul-wrap">
                    <ul>
                        <li>
                            <img class="lazy" src="img/leader-2.jpg" alt="leader" height="390" width="290">
                            <div>
                                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая, и еще 10 нюансов в видео</p>
                            </div>
                            <h4>Пупкин Виктор Алексеевич</h4>
                            <p>Генеральный директор</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/leader-1.jpg" alt="leader" height="390" width="290">
                            <div>
                                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая, и еще 10 нюансов в видео</p>
                            </div>
                            <h4>Фамилия Имя Отчество 2</h4>
                            <p>Должность 2</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/leader-3.jpg" alt="leader" height="390" width="290">
                            <div>
                                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая, и еще 10 нюансов в видео</p>
                            </div>
                            <h4>Фамилия Имя Отчество 3</h4>
                            <p>Должность 3</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/leader-4.jpg" alt="leader" height="390" width="290">
                            <div>
                                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая, и еще 10 нюансов в видео</p>
                            </div>
                            <h4>Фамилия Имя Отчество 4</h4>
                            <p>Должность 4</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/leader-5.jpg" alt="leader" height="390" width="290">
                            <div>
                                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая, и еще 10 нюансов в видео</p>
                            </div>
                            <h4>Фамилия Имя Отчество 5</h4>
                            <p>Должность 5</p>
                        </li>
                        <li>
                            <img class="lazy" src="img/leader-6.jpg" alt="leader" height="390" width="290">
                            <div>
                                <p>Повторная заявка на ТУ не принимается, пока не выполнена действующая, и еще 10 нюансов в видео</p>
                            </div>
                            <h4>Фамилия Имя Отчество 6</h4>
                            <p>Должность 6</p>
                        </li>
                    </ul>
                </div>
                <a id="lead-btn-right" href="#"></a>
            </div>
        </section>
        <section id="sec13">
            <div>
                <a href="http://info@tegs-electric.ru">info@tegs-electric.ru</a>
                <h3>8 (499) 184-36-04</h3>
                <p>Москва, 129346, Янтарный проезд, д.21, пом. III <br> (вход со двора рядом с подъездом №2)</p>
                <a class="map-btn" href="#">Показать на карте</a>
                <form id="form4" action="ajax/mail.php" method="post">
                    <h4>Остались вопросы? Пишите:</h4>
                    <textarea name="question" form="form4" maxlength="200" minlength="5" placeholder="Вопрос"></textarea>
                    <input id="name" name="name" type="text" placeholder="Ваше имя">
                    <input id="phone" name="phone" type="text" placeholder="Телефон">
                    <!--
             -->
                    <input name="frmid" type="hidden" value="form4">
                    <!--
             -->
                    <button class="btn-blue" form="form4" type="submit">Отправить</button>
                </form>
            </div>
        </section>
        <footer>
            <div>
                <img class="lazy" src="img/logo.png" alt="logo" height="60" width="170">
                <p>&copy; 2016 ООО «ТрансЭнергоГлавСтрой»</p>
                <a href="#">Политика конфиденциальности</a>
                <img class="lazy" src="img/gulf-logo.png" alt="gulfstream" height="45" width="210">
            </div>
        </footer>
        <div id="menu">
            <ul>
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="#sec1">Главная</a>
                </li>
                <li>
                    <a href="#sec2">Истории наших заказчиков</a>
                </li>
                <li>
                    <a href="#sec3">Коммерческое предложение</a>
                </li>
                <li>
                    <a href="#sec4">Этапы работы</a>
                </li>
                <li>
                    <a href="#sec10">Заявка на расчет стоимости</a>
                </li>
                <li>
                    <a href="#sec11">Наши клиенты</a>
                </li>
                <li>
                    <a href="#sec12">Руководство компании</a>
                </li>
                <li>
                    <a href="#sec13">Контактная информация</a>
                </li>
            </ul>
        </div>
        <!--    <?php include('../track/body.php'); ?>-->
    </body>
</html>