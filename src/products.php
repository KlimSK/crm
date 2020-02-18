<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../build/fonts/lato/lato.css">
    <link rel="stylesheet" href="../build/css/style.css">
    <title>Document</title>

</head>
<body>

<main>
    <? include('sidebar.php'); ?>

    <section class="main-content">
        <? include('header.php'); ?>


        <div class="content-section">
            <div class="content-controls">
                <div class="selected-blocks">
                    <div class="ui teal label"><i class="info icon"></i> Выделено
                        <div class="detail">1</div>
                    </div>
                </div>

                <div class="content-control-buttons">
                    <div class="refresh-button ui" data-content="Автоперезагрузка текущего статуса">
                        <i class="refresh icon"></i>
                    </div>

                    <div class="ui mini right labeled input refresh-time">
                        <input type="text" value="60">
                        <div class="ui basic label">сек</div>
                    </div>

                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="refresh">
                        <label for=""></label>
                    </div>

                    <button class="ui compact icon button blue basic">
                        <i class="search icon"></i>
                    </button>

                    <div class="ui compact icon button basic dropdown left " id="controls-settings-dropdown">
                        <i class="settings icon"></i>

                        <div class="menu">
                            <div class="item"><i class="print icon"></i>Печать таблицы</div>
                            <div class="divider"></div>
                            <div class="item"><i class="mobile alternate icon"></i>Отправить SMS</div>
                            <div class="item"><i class="copy alternate icon"></i>Копировать</div>
                            <div class="item"><i class="edit alternate icon"></i>Редактировать</div>
                            <div class="item disabled"><i class="random alternate icon"></i>Сменить статусы</div>
                            <div class="divider"></div>
                            <div class="item"><i class="phone square icon"></i> VoIPtime (обзвон)</div>
                            <div class="divider"></div>
                            <div class="item"><i class="file excel icon"></i> Экспорт Excel (Lite)</div>
                            <div class="item"><i class="file excel icon"></i> Экспорт Excel (Pro)</div>
                            <div class="divider"></div>
                            <div class="item"><i class="file excel icon"></i>Импорт ТТН по ID</div>
                            <div class="divider"></div>
                            <div class="item"><i class="trash icon"></i>Удалить</div>

                        </div>
                    </div>

                    <button class="ui labeled icon button tiny green"><i class="plus icon"></i> Добавить</button>
                </div>
            </div>


        </div>

        <div class="main-table products-table">
            <table class=" ui table blue celled">
                <thead>
                <tr>
                    <th width="65">id</th>
                    <th width="90">Фото</th>
                    <th width="340">Название</th>
                    <th width="90">Модель</th>
                    <th width="90">Артикул</th>
                    <th width="150">Категория</th>
                    <th width="150">Цена (база)</th>
                    <th width="75">Валюта</th>
                    <th width="80">Статус</th>
                    <th width="100">Цена (закуп.)</th>
                    <th width="100">Кол-во</th>
                    <th width="80">В заказах</th>
                    <th width="160">Производитель</th>
                    <th width="120">Сумма (закуп.)</th>
                </tr>


                <tr>
                    <td>
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td>
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td>
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Не указано</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="ui icon search input">
                                    <i class="search icon"></i>
                                    <input type="text" placeholder="Поиск...">
                                </div>
                                <div class="divider"></div>
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Не указано</div>
                                    <div class="item" data-value="announcement">ТВ шоп</div>
                                    <div class="item" data-value="cannotfix">Для дома</div>
                                    <div class="item" data-value="news">Для сада</div>
                                    <div class="item" data-value="enhancement">Для кухни</div>
                                    <div class="item" data-value="off-topic">Автотовар</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Все</div>
                                    <div class="item" data-value="important">Включен</div>
                                    <div class="item" data-value="announcement">Отключен</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Все</div>
                                    <div class="item" data-value="important">(+) Есть</div>
                                    <div class="item" data-value="announcement">(0) Нет</div>
                                    <div class="item" data-value="announcement">(-) Минус</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>

                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Все</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>

                    </td>

                </tr>


                </thead>

                <tbody>
                <tr>
                    <td><p>1220</p></td>
                    <td class="product-photo">
                        <img src="../build/img/no_foto-120x100.png" alt="">
                    </td>
                    <td><p>Высокоэффективные шипучие таблетки для похудения  MinuSize **</p></td>
                    <td>

                    </td>
                    <td></td>
                    <td>
                        Авто ТОВАР
                    </td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td>
                        <p>
                           грн.
                        </p>
                    </td>
                    <td class="product-status">
                        <div class="ui toggle checkbox green">
                            <input type="checkbox" name="public">
                            <label for=""></label>
                        </div>

                    </td>
                    <td class="order-sum">
                        <p>400.00</p>
                    </td>
                    <td class="order-sum">
                        <p class="red-text">0</p>
                    </td>
                    <td class="order-sum">
                        <p class="blue-text">3</p>
                    </td>
                    <td>

                    </td>

                    <td class="order-sum">
                        <p>
                            15000.00
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><p>1689</p></td>
                    <td class="product-photo">
                        <img src="../build/img/no_foto-120x100.png" alt="">
                    </td>
                    <td>
                        <p>Телефон IPHONE</p>
                        <p class="additional-info">
                            Вес: 0.50кг 13.0см х 0.5см х 7.0см
                        </p>
                    </td>
                    <td>

                    </td>
                    <td></td>
                    <td>
                        Авто ТОВАР
                    </td>
                    <td class="order-sum discount">
                        <p class="green-text"><span class="old-price red-text">8000.00</span> 6000.00</p>
                    </td>
                    <td>
                        <p>
                           грн.
                        </p>
                    </td>
                    <td class="product-status">
                        <div class="ui toggle checkbox green">
                            <input type="checkbox" name="public">
                            <label for=""></label>
                        </div>

                    </td>
                    <td class="order-sum">
                        <p>1000.00</p>
                    </td>
                    <td class="order-sum">
                        <p class="green-text">15</p>
                    </td>
                    <td class="order-sum">
                        <p class="blue-text">3</p>
                    </td>
                    <td>

                    </td>

                    <td class="order-sum">
                        <p>
                            15000.00
                        </p>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>

        <div class="main-table-pagination">
            <div class="search-results">
                Результат: с 1 по 50 / <b>382</b>
            </div>

            <div class="ui pagination menu">
                <a class="icon item">
                    <i class="left angle double icon"></i>
                </a>

                <a class="icon item">
                    <i class="left angle icon"></i>
                </a>
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="icon item">
                    <i class="right angle icon"></i>
                </a>

                <a class="icon item">
                    <i class="angle double right icon"></i>
                </a>
            </div>

            <div class="page-orders-number">
                Отображать по:
                <select class="ui dropdown">
                    <option value="">50</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                    <option value="200">200</option>
                    <option value="300">300</option>
                    <option value="500">500</option>
                </select>
            </div>
        </div>

        <footer>
            <div></div>

            <div class="copyright">
                <a href="">BA-WEB®Engine</a>
                2012 - 2019 © All Rights Reserved
            </div>

            <div class="footer-settings">


                <div class="language">
                    Язык интерфейса: <b><img src="../build/img/flags/RU.ico" alt=""> ru</b>
                </div>
                <div class="ws">
                    WS:
                    <a class="ui blue label mini">OK</a>
                </div>
            </div>
        </footer>
    </section>
</main>



<div class="ui modal modal-about-site tiny">
    <i class="close icon"></i>
    <h2 class="modal-title">
        Информация о программе
    </h2>
    <div class="modal-info">
        <div class="info-row">
            <p>Версия:
            </p>
            <p>LP-CRM v.3.0 Standart (beta)</p>
        </div>

        <div class="info-row">
            <p>Лицензия:</p>
            <p>Commercial</p>
        </div>

        <div class="info-row">
            <p>Регистрация:</p>
            <p><i class="small green checkmark icon"></i> Registered</p>
        </div>

        <div class="info-row">
            <p>Компания:</p>
            <p>ФЛП Луценко А. В.</p>
        </div>
    </div>

    <div class="ui horizontal divider">Разработчик CRM</div>


    <div class="modal-info">
        <div class="info-row">
            <p>Платформа:</p>
            <p>BA-WEB®Engine</p>
        </div>

        <div class="info-row">
            <p>E-mail:</p>
            <p><a href="mailto:web-master-alex@mail.ru">web-master-alex@mail.ru</a></p>
        </div>
    </div>

    <div class="ui horizontal divider">Хостер</div>

    <div class="modal-info modal-info-hosting">
        <div class="info-row">
            <p>
                <a href="https://www.ukraine.com.ua/?page=205918">
                    <img src="https://www.ukraine.com.ua/design/ukraine/img/ukraine_2.gif" alt="">
                </a>

            </p>
            <p>
                <a href="https://www.ukraine.com.ua/?page=205918">
                    <img src="https://www.ukraine.com.ua/design/ukraine/img/ukraine_3.gif" alt="">
                </a>

            </p>

            <a class="host-link" href="https://www.ukraine.com.ua/?page=205918">
                Хостинг Украина
            </a>
        </div>
    </div>


</div>

<div class="ui modal modal-tariffs tiny">
    <i class="close icon"></i>
    <h2 class="modal-title">
        Тарифы
    </h2>

    <table id="table-tariffs-list" class="ui celled table" cellspacing="0" cellpadding="0" border="0">
        <thead>
        <tr>
            <th><b>Тарифный план</b></th>
            <th><b>Тестовый</b></th>
            <th><b>Старт</b></th>
            <th><b>Бизнес</b></th>
            <th><b>*VIP*</b></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Заказов (в месяц)</td>
            <td><b style="color:green; font-size: 14px;">∞</b></td>
            <td><b>500</b></td>
            <td><b>1000</b></td>
            <td><b style="color:green; font-size: 14px;">∞</b></td>
        </tr>
        <tr>
            <td>Количество сотрудников</td>
            <td><b style="color:green; font-size: 14px;">∞</b></td>
            <td><b>2</b></td>
            <td><b>5</b></td>
            <td><b style="color:green; font-size: 14px;">∞</b></td>
        </tr>
        <tr>
            <td>Интеграция с лендингами</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Интеграция с SMS</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Интеграция с Новой Почтой</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Интеграция с Укрпочтой</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Интеграция с Почтой России</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Статистика</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Печать заказов с CRM</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Автосоздание деклараций Новой Почты</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <!--<tr><td>Бесплатное подключение сайтов</td><td><i class="fa fa-check" style="color:green;"></i></td><td><i class="fa fa-check" style="color:green;"></i></td><td><i class="fa fa-check" style="color:green;"></i></td><td><i class="fa fa-check" style="color:green;"></i></td></tr>-->
        <tr>
            <td>IP-телефония</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="negative"><i class="icon close"></i></td>
            <td class="negative"><i class="icon close"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Расширение функционала</td>
            <td class="negative"><i class="icon close"></i></td>
            <td class="negative"><i class="icon close"></i></td>
            <td class="negative"><i class="icon close"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr>
            <td>Техподдержка</td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
            <td class="positive"><i class="icon checkmark"></i></td>
        </tr>
        <tr class="price-row">
            <td><b>Cтоимость</b> (в месяц) <b>грн.</b></td>
            <td><b>бесплатно</b></td>
            <td><b>599</b></td>
            <td><b>999</b></td>
            <td><b>1399</b></td>
        </tr>
        <tr class="price-row">
            <td><b>Cтоимость</b> (в месяц) <b>руб.</b></td>
            <td><b>бесплатно</b></td>
            <td><b>1499</b></td>
            <td><b>2399</b></td>
            <td><b>3399</b></td>
        </tr>
        <tr class="price-row">
            <td><b>Cтоимость</b> (в месяц) <b>$</b></td>
            <td><b>бесплатно</b></td>
            <td><b>22</b></td>
            <td><b>36</b></td>
            <td><b>49</b></td>
        </tr>
        </tbody>
    </table>

    <p class="danger-text">
        Количество сотрудников не учитывает главную административную запись.
    </p>
</div>

<div class="ui modal modal-contacts small">
    <i class="close icon"></i>
    <h2 class="modal-title">
        Контакты
    </h2>

    <table id="table-contacts" class="ui blue table">
        <tbody>
        <tr>
            <td>Skype</td>
            <td><i class="fab fa-skype" style="color:#00A6E3;"></i><a href="skype:lp-crm.biz?add" target="_blank">lp-crm.biz</a>
            </td>
        </tr>
        <tr>
            <td>VK группа</td>
            <td><i class="fab fa-vk" style="color:#4A76A8;"></i><a href="https://vk.com/lp_crm" target="_blank">https://vk.com/lp_crm</a>
            </td>
        </tr>
        <tr>
            <td>FB группа</td>
            <td><i class="fab fa-facebook-square" style="color:#3B5998;"></i><a href="https://www.facebook.com/lpcrm/"
                                                                                target="_blank">https://www.facebook.com/lpcrm/</a>
            </td>
        </tr>
        <tr>
            <td>Instagram</td>
            <td><i class="fab  fa-instagram" style="color:#D42F8A;"></i><a href="https://www.instagram.com/lp_crm.biz/"
                                                                           target="_blank">https://www.instagram.com/lp_crm.biz/</a>
            </td>
        </tr>
        <tr>
            <td>Telegram (канал)</td>
            <td><i class="fas fa-paper-plane"
                   style="color:#FFF; background:#32AFED; padding: 6px 7px 6px 5px; border-radius: 30px;"></i>&nbsp;<a
                    href="https://t.me/Lp_crm_biz" target="_blank">https://t.me/Lp_crm_biz</a></td>
        </tr>
        <tr>
            <td>Telegram (техподдержка)</td>
            <td><i class="fas fa-paper-plane"
                   style="color:#FFF; background:#32AFED; padding: 6px 7px 6px 5px; border-radius: 30px;"></i>&nbsp;<a
                    href="https://t.me/TehLpCrm" target="_blank">https://t.me/TehLpCrm</a></td>
        </tr>
        <tr>
            <td>Блог CRM</td>
            <td>
                <img src="../build/img/CRM-logo_small.png" style="height:30px; float:left; ">
                <a href="http://blog.lp-crm.biz" class="crm-link" target="_blank">http://blog.lp-crm.biz</a></td>
        </tr>
        <tr>
            <td>YouTube</td>
            <td><i class="fab fa-youtube-square" style="color:#DC212F;"></i><a
                    href="https://www.youtube.com/watch?v=dDQaWkh4aSY&amp;index=18&amp;list=PLNVhsXSZ6ZThpfW-BJ_t6bDFGNrvFDs4j"
                    target="_blank">https://www.youtube.com/watch?v=dDQaWkh4aSY</a></td>
        </tr>
        <tr>
            <td>Киевстар</td>
            <td><i class="fas fa-mobile-alt"></i>
                <img src="../build/img/flags/UA.ico" style="margin-bottom: -3px;">
                +38 (067) 650-16-55
                <img src="../build/img/operators/kyivstar.ico" style="margin-bottom: -3px;">
            </td>
        </tr>
        <tr>
            <td>МТС</td>
            <td><i class="fas fa-mobile-alt"></i>
                <img src="../build/img/flags/UA.ico" style="margin-bottom: -3px;">
                +38 (050) 451-70-82
                <img src="../build/img/operators/mts.ico" style="margin-bottom: -3px;">
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class="ui modal modal-order  fullscreen">
    <i class="close icon"></i>

    <div class="modal-head">
        <h2 class="modal-title">
            Заказ № 262469 [15586024052] от 2019-05-23 12:06:45 (Изменено: 2019-06-10 20:19:07)
        </h2>

        <div class="order-passed">

            <div class="ui toggle checkbox">

                <input type="checkbox" name="order-passed" id="order-passed">
                <label for="order-passed"><i class="ui icon flag checkered"></i> Сдано в заказ</label>
            </div>
        </div>
    </div>

    <div class="modal-order-buttons">
        <button id="create-notification" class="ui labeled icon button orange mini"><i class="bell icon"></i> Напомнить</button>
        <button class="ui labeled icon button teal mini"><i class="envelope icon"></i> SMS</button>
        <div class="ui floating dropdown labeled icon button green mini">
            <i class="phone icon"></i>
            <span class="text">Позвонить</span>
            <div class="menu">
                <div class="item">SIP ТЕЛЕФОН</div>
                <div class="item">BINOTEL</div>
            </div>
        </div>
    </div>

    <div class="order-container">
        <div class="col">

            <div class="order-setting-block">
                <div class="ui horizontal divider">Контактная информация</div>

                <div class="order-setting-row">
                    <label for="">
                        Страна <i class="ui icon"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui fluid selection dropdown">
                            <input type="hidden" name="country">
                            <i class="dropdown icon"></i>
                            <div class="default text">Выберите страну</div>
                            <div class="menu">

                                <div class="item" data-value="af"><img src="../build/img/flags/no_icon.ico" alt="">Не
                                    указано
                                </div>
                                <div class="item" data-value="af"><i class="af flag"></i>Афганистан</div>
                                <div class="item" data-value="af"><i class="ui icon globe"></i>Все</div>
                                <div class="item" data-value="by"><i class="by flag"></i>Беларусь</div>
                                <div class="item" data-value="md"><i class="md flag"></i>Молдова</div>
                                <div class="item" data-value="ae"><i class="ae flag"></i>Арабские Эмираты</div>
                                <div class="item" data-value="hu"><i class="hu flag"></i>Венгрия</div>
                                <div class="item" data-value="kz"><i class="kz flag"></i>Казахстан</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Покупатель <i class="ui icon male"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Телефон <i class="ui icon phone"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Email <i class="ui icon mail outline"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Отдел <i class="ui icon building"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui fluid selection dropdown">
                            <input type="hidden" name="office">
                            <i class="dropdown icon"></i>
                            <div class="default text">Розничный магазин</div>
                            <div class="menu">

                                <div class="item" data-value="af">Розничный магазин</div>
                                <div class="item" data-value="af">Оптовый отдел</div>
                                <div class="item" data-value="af">Отдел ОАЭ</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Статус заказа <i class="ui icon star outline"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui fluid selection dropdown">
                            <input type="hidden" name="status">
                            <i class="dropdown icon"></i>
                            <div class="default text"><a class="ui green empty circular label"></a>Завершено</div>
                            <div class="menu">

                                <div class="item" data-value="af"><img src="../build/img/flags/no_icon.ico" alt="">Не
                                    указано
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui grey empty circular label"></a>
                                    Новый
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui green empty circular label"></a>
                                    Завершено
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui yellow empty circular label"></a>
                                    Отправлено
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui red empty circular label"></a>
                                    Возврат товара (склад)
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui pink empty circular label"></a>
                                    Отказ
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui teal empty circular label"></a>
                                    Успешно выполнено
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui brown empty circular label"></a>
                                    Не подтверждённо
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui purple empty circular label"></a>
                                    Успешно не выполнено
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui red empty circular label"></a>
                                    Возврат товара в пути
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui grey empty circular label"></a>
                                    Одесса
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui green empty circular label"></a>
                                    В пути деньги
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui violet empty circular label"></a>
                                    На контроле
                                </div>

                                <div class="item" data-value="af">
                                    <a class="ui brown empty circular label"></a>
                                    Утилизация
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="order-setting-row">
                    <label for="">
                        Причина отказа <i class="ui icon info"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui fluid selection dropdown disabled">
                            <input type="hidden" name="status">
                            <i class="dropdown icon"></i>
                            <div class="default text">Не указано</div>
                            <div class="menu">

                            </div>
                        </div>
                    </div>
                </div>


                <div class="order-setting-row">
                    <label for="">
                        Статус заказа <i class="ui icon star outline"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui fluid selection dropdown">
                            <input type="hidden" name="status">
                            <i class="dropdown icon"></i>
                            <div class="default text"> Не указано</div>
                            <div class="menu">

                                <div class="item" data-value="af"><img src="../build/img/flags/no_icon.ico" alt="">Не
                                    указано
                                </div>

                                <div class="item" data-value="af">
                                    <i class="ui icon money"></i>
                                    Оплачено
                                </div>

                                <div class="item" data-value="af">
                                    <i class="icon credit card outline"></i>
                                    Предоплата
                                </div>

                                <div class="item" data-value="af">
                                    <i class="ui icon times"></i>
                                    Отказ
                                </div>

                                <div class="item" data-value="af">
                                    <i class="ui icon envelope "></i>
                                    Налож. платеж
                                </div>

                                <div class="item" data-value="af">
                                    <i class="ui icon refresh"></i>
                                    Обмен
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Комментарий <i class="icon"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui input">
                            <textarea type="text" rows="3" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-setting-block">
                <div class="ui horizontal divider">UTM метки</div>

                <div class="order-setting-row">
                    <label for="">
                        utm_source <i class="icon crosshairs"></i>
                    </label>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        utm_medium <i class="icon crosshairs"></i>
                    </label>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        utm_term <i class="icon crosshairs"></i>
                    </label>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        utm_content <i class="icon crosshairs"></i>
                    </label>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        utm_campaign <i class="icon crosshairs"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="order-setting-block">
                <div class="ui horizontal divider">Доставка</div>

                <div class="order-setting-row">
                    <label for="">
                        Способ<i class="icon truck"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui fluid selection dropdown">
                            <input type="hidden" name="delivery_type">
                            <i class="dropdown icon"></i>
                            <div class="default text">
                                <img src="../build/img/delivery/ico-new-post.ico" alt="">
                                Новая Почта
                            </div>
                            <div class="menu">

                                <div class="item" data-value="af">
                                    <img src="../build/img/flags/no_icon.ico" alt="">
                                    Нет значения
                                </div>
                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-new-post.ico" alt="">
                                    Новая Почта
                                </div>
                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-self.ico" alt="">
                                    Самовывоз
                                </div>
                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-post-ua.ico" alt="">
                                    Укрпочта
                                </div>
                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/intime.ico" alt="">
                                    Интайм
                                </div>

                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-autolux.ico" alt="">
                                    Автолюкс
                                </div>

                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-delivery-auto.ico" alt="">
                                    Деливери
                                </div>

                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-post-ru.ico" alt="">
                                    Почта России
                                </div>

                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-kazpost.ico" alt="">
                                    Каз почта
                                </div>

                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/cdek.ico" alt="">
                                    СДЭК
                                </div>

                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/fetchr.ico" alt="">
                                    Fetchr
                                </div>

                                <div class="item" data-value="af">
                                    <img src="../build/img/delivery/ico-post-ru.ico" alt="">
                                    Почта России
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        ТТН <i class="icon file alternate outline"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Адрес <i class="icon map marker alternate"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Отправлено <i class="icon calendar check outline"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui calendar" id="order-modal-send">
                            <div class="ui input">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="order-setting-block">
                <div class="ui horizontal divider">Служебная информация</div>

                <div class="order-setting-row">
                    <label for="">
                        Способ<i class="icon truck"></i>
                    </label>

                    <div class="order-setting">
                        <div class="ui fluid search selection dropdown">
                            <input type="hidden" name="delivery_type">
                            <i class="dropdown icon"></i>
                            <div class="default text">
                                Админ
                            </div>
                            <div class="menu">

                                <div class="item" data-value="af">
                                    Админ
                                </div>
                                <div class="item" data-value="af">
                                    Менеджер
                                </div>
                                <div class="item" data-value="af">
                                    Гость
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        IP <i class="icon desktop"></i>
                    </label>
                    <div class="order-setting">
                        <p class="setting-info">
                            178.213.2.40
                            <i class="icon angle double right"></i>
                            <a href="#">блокировать</a>
                        </p>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        Сайт <i class="icon globe"></i>
                    </label>
                    <div class="order-setting">
                        <p class="setting-info grey">
                            stagery-test.ukraine-shop.top

                            <a href="#"><i class="icon linkify"></i></a>
                        </p>
                    </div>
                </div>

                <div class="order-setting-row">
                    <label for="">
                        order_id <i class="icon calendar check outline"></i>
                    </label>

                    <div class="order-setting">
                        <p class="setting-info">
                            15559154267
                            <a href="#"><i class="icon info circle"></i></a>
                            <span>от 2019-04-22 09:43:46</span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="order-setting-block">
                <div class="ui horizontal divider">Дополнительно</div>

                <div class="order-setting-row">
                    <label for="">
                        Доп. поле 1 <i class="icon plus"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui  input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="order-setting-row">
                    <label for="">
                        Доп. поле 2 <i class="icon plus"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui  input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="order-setting-row">
                    <label for="">
                        Доп. поле 3 <i class="icon plus"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui  input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="order-setting-row">
                    <label for="">
                        Доп. поле 4 <i class="icon plus"></i>
                    </label>
                    <div class="order-setting">
                        <div class="ui  input">
                            <input type="text" placeholder="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col wide">
            <div class="order-setting-block">
                <div class="ui horizontal divider">Товар</div>

                <table class="ui table modal-order-products">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>sub_id</th>
                        <th>sub_name</th>
                        <th width="150px">Товар</th>
                        <th>Цена</th>
                        <th>Кол-во</th>
                        <th>Итого</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1680</td>
                        <td>0</td>
                        <td></td>
                        <td><a href="#">Рубашка Espirit</a></td>
                        <td class="num-cell">599.00</td>
                        <td class="num-cell">1</td>
                        <td class="num-cell">599.00</td>
                        <td><a href="#" class="remove-item"><i class="icon times"></i></a></td>
                    </tr>

                    <tr>
                        <td>1678</td>
                        <td>0</td>
                        <td></td>
                        <td><a href="#">Кроссовки Nike</a></td>
                        <td class="num-cell">1399.00</td>
                        <td class="num-cell">1</td>
                        <td class="num-cell">1399.00</td>
                        <td><a href="#" class="remove-item"><i class="icon times"></i></a></td>
                    </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="5">
                            <a href="#">
                                <i class="icon plus circle"></i> Добавить товар
                            </a>

                            <span>Всего:</span>
                        </td>
                        <td>
                            <b>2</b>
                        </td>
                        <td>
                            <b class="sum">
                                1998.00
                            </b>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="order-setting-block">
                <div class="ui horizontal divider">
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="refresh">
                        <label for=""></label>
                    </div> Допродажа
                </div>

                <table class="ui table modal-order-products">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>sub_id</th>
                        <th>sub_name</th>
                        <th width="150px">Товар</th>
                        <th>Цена</th>
                        <th>Кол-во</th>
                        <th>Итого</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1678</td>
                        <td>0</td>
                        <td></td>
                        <td><a href="#">Кроссовки Nike</a></td>
                        <td class="num-cell">1399.00</td>
                        <td class="num-cell">1</td>
                        <td class="num-cell">1399.00</td>
                        <td><a href="#" class="remove-item"><i class="icon times"></i></a></td>
                    </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="5">
                            <a href="#">
                                <i class="icon plus circle"></i> Добавить товар
                            </a>

                            <span>Всего:</span>
                        </td>
                        <td>
                            <b>1</b>
                        </td>
                        <td>
                            <b class="sum">
                                1998.00
                            </b>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="modal-foot">
        <div class="total-sum">
            <p>Сумма заказа: <span>1038</span></p>
        </div>

        <div class="modal-save">
            <button class="ui labeled icon button blue"><i class="save icon"></i> Сохранить и закрыть</button>
        </div>
    </div>

</div>

<div class="ui modal tiny modal-order-notification">
    <i class="close icon"></i>

    <h2 class="modal-title">
        Создать напоминание
    </h2>

    <form action="">
        <div class="form-row">
            <label for="">Дата выполнения <i class="icon calendar alternate outline"></i></label>

            <div class="input-wrap">
                <div class="ui calendar" id="notification-date">
                    <div class="ui input">
                        <input type="text">
                    </div>
                </div>
            </div>

        </div>


        <div class="form-row">
            <label for="">Тип <i class="icon phone"></i></label>

            <div class="input-wrap">
                <select class="ui dropdown">
                    <option value="1">Перезвонить позже (заказ)</option>
                    <option value="0">Обычное напоминание</option>
                </select>
            </div>

        </div>

        <div class="form-row">
            <label for="">ID заказа <i class="icon "></i></label>

            <div class="input-wrap">
                <div class="ui disabled input">
                    <input type="text" value="42532512">
                </div>
            </div>

        </div>


        <div class="form-row">
            <label for="">Для кого <i class="icon"></i></label>

            <div class="input-wrap">
                <select class="ui dropdown">
                    <option value="1">Только для себя</option>
                    <option value="0">Для всех пользователей</option>
                </select>
            </div>

        </div>


        <div class="form-row">
            <label for="">Описание <i class="icon "></i></label>

            <div class="input-wrap">
                <div class="ui input">
                    <textarea rows="4" type="text"></textarea>
                </div>
            </div>

        </div>

        <div class="modal-save">
            <button class="ui labeled icon button blue"><i class="save icon"></i> Сохранить</button>
        </div>
    </form>

</div>

<div class="ui modal large modal-product">
    <i class="close icon"></i>

    <div class="modal-head">
        <h2 class="modal-title">
            Изменение товара [2403] : (RU) Косметический набор Lamiton *5073*
        </h2>
    </div>

    <div class="order-container">

        <div class="ui two column stackable grid container">

            <div class="column">

                <div class="ui stackable grid">

                    <div class="sixteen wide column">

                        <div class="order-setting-row">
                            <label for="">
                                Название <i class="ui icon tag"></i>
                            </label>

                            <div class="order-setting">
                                <div class="ui input">
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Полное название (title) <i class="ui icon tag"></i>
                            </label>

                            <div class="order-setting">
                                <div class="ui input">
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Категория <i class="ui icon sitemap"></i>
                            </label>
                            <div class="order-setting">
                                <select class="ui search dropdown">
                                    <option>Не указано</option>
                                    <option>ТВ шоп</option>
                                    <option>Для дома</option>
                                    <option>Для сада</option>
                                    <option>Для кухни</option>
                                    <option>Автотовар</option>
                                </select>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Локализация <i class="ui icon globe"></i>
                            </label>
                            <div class="order-setting">
                                <div class="ui fluid selection dropdown">
                                    <input type="hidden" name="country">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Выберите страну</div>
                                    <div class="menu">

                                        <div class="item" data-value="af"><img src="../build/img/flags/no_icon.ico" alt="">Не
                                            указано
                                        </div>
                                        <div class="item" data-value="af"><i class="af flag"></i>Афганистан</div>
                                        <div class="item" data-value="af"><i class="ui icon globe"></i>Все</div>
                                        <div class="item" data-value="by"><i class="by flag"></i>Беларусь</div>
                                        <div class="item" data-value="md"><i class="md flag"></i>Молдова</div>
                                        <div class="item" data-value="ae"><i class="ae flag"></i>Арабские Эмираты</div>
                                        <div class="item" data-value="hu"><i class="hu flag"></i>Венгрия</div>
                                        <div class="item" data-value="kz"><i class="kz flag"></i>Казахстан</div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Модель <i class="ui icon registered outline"></i>
                            </label>
                            <div class="order-setting">
                                <div class="ui input">
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Артикул <i class="ui icon sticky note outline"></i>
                            </label>

                            <div class="order-setting">
                                <div class="ui input">
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Валюта <i class="ui icon money bill alternate outline"></i>
                            </label>

                            <div class="order-setting">
                                <div class="ui fluid selection dropdown">
                                    <input type="hidden" name="status">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Украинская гривна (грн.)</div>
                                    <div class="menu">

                                        <div class="item" data-value="af">
                                            Украинская гривна (грн.)
                                        </div>

                                        <div class="item" data-value="af">
                                            Русский рубль (руб.)
                                        </div>

                                        <div class="item" data-value="af">
                                            Доллар ($)
                                        </div>

                                        <div class="item" data-value="af">
                                            Евро (€)
                                        </div>

                                        <div class="item" data-value="af">
                                            Венгерский форинт (HUF)
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Производитель <i class="icon trademark"></i>
                            </label>

                            <div class="order-setting">
                                <div class="ui fluid selection dropdown">
                                    <input type="hidden" name="status">
                                    <i class="dropdown icon"></i>
                                    <div class="default text"> Не указано</div>
                                    <div class="menu">

                                        <div class="item" data-value="af"><img src="../build/img/flags/no_icon.ico" alt="">Не
                                            указано
                                        </div>

                                        <div class="item" data-value="af">

                                            LG
                                        </div>

                                        <div class="item" data-value="af">

                                            Samsung
                                        </div>

                                        <div class="item" data-value="af">
                                            Falcon
                                        </div>

                                        <div class="item" data-value="af">
                                            Tenex
                                        </div>

                                        <div class="item" data-value="af">
                                            Gazer
                                        </div>

                                        <div class="item" data-value="af">
                                            Globex
                                        </div>

                                        <div class="item" data-value="af">
                                            Kenwood
                                        </div>

                                        <div class="item" data-value="af">
                                            Palmann
                                        </div>

                                        <div class="item" data-value="af">
                                            Pioneer
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Отдел <i class="icon building"></i>
                            </label>

                            <div class="order-setting">
                                <div class="ui fluid selection dropdown">
                                    <input type="hidden" name="office">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Розничный магазин</div>
                                    <div class="menu">

                                        <div class="item" data-value="af">Розничный магазин</div>
                                        <div class="item" data-value="af">Оптовый отдел</div>
                                        <div class="item" data-value="af">Отдел ОАЭ</div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Цвет <i class="icon eye dropper"></i>
                            </label>
                            <div class="order-setting">
                                <div class="ui fluid selection dropdown">
                                    <input type="hidden" name="office">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Не указано</div>
                                    <div class="menu">
                                        <div class="item" data-value="af">
                                            <img src="../build/img/flags/no_icon.ico" alt="">
                                            Не указано
                                        </div>

                                        <div class="item" data-value="af">Белый</div>
                                        <div class="item" data-value="af">Чёрный</div>
                                        <div class="item" data-value="af">Синий</div>
                                        <div class="item" data-value="af">Красный</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Сайт <i class="icon flag checkered"></i>
                            </label>
                            <div class="order-setting">
                                <div class="ui fluid selection dropdown">
                                    <input type="hidden" name="office">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Не указано</div>
                                    <div class="menu">
                                        <div class="item" data-value="af">
                                            <img src="../build/img/flags/no_icon.ico" alt="">
                                            Не указано
                                        </div>

                                        <div class="item" data-value="af">
                                            <i class="icon globe"></i>
                                            test.com
                                        </div>
                                        <div class="item" data-value="af">
                                            <i class="icon globe"></i>
                                            lorem.ru
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Цена продажи <i class="icon shopping basket"></i>
                            </label>
                            <div class="order-setting">
                                <div class="ui input">
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Цена закупки <i class="icon shopping basket"></i>
                            </label>
                            <div class="order-setting">
                                <div class="ui input">
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="order-setting-row">
                            <label for="">
                                Цена акционная <i class="icon percent"></i>
                            </label>
                            <div class="order-setting">
                                <div class="ui input">
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="column">

                <div class="column">

                    <div class="ui horizontal divider">Выбрать фото</div>

                </div>

                <div class="column">

                    <div class="ui horizontal divider">Нова почта</div>

                    <div class="order-setting-row">
                        <label for="">
                            Опис вантажу <i class="arrows alternate icon"></i>
                        </label>
                        <div class="order-setting">
                            <select class="ui search dropdown">
                                <option>Не указано</option>
                                <option>ТВ шоп</option>
                                <option>Для дома</option>
                                <option>Для сада</option>
                                <option>Для кухни</option>
                                <option>Автотовар</option>
                            </select>
                        </div>
                    </div>

                    <div class="order-setting-row">

                        <label for="">
                            Вес <i class="arrows alternate icon"></i>
                        </label>

                        <div class="order-setting">

                            <div class="input-container">
                                <div class="ui input">
                                    <input class="weight-input" type="text" value="1.00">
                                </div>
                            </div>

                            <span>кг.</span>

                        </div>

                    </div>

                    <div class="ui grid">

                        <div class="three column row">

                            <div class="column input-row">
                                <div class="order-setting-row">

                                    <label for="">
                                        Длина
                                    </label>

                                    <div class="order-setting">

                                        <div class="input-container">
                                            <div class="ui input">
                                                <input type="text" value="0.00">
                                            </div>
                                        </div>

                                        <span>см.</span>

                                    </div>

                                </div>
                            </div>

                            <div class="column input-row">

                                <div class="order-setting-row">

                                    <label for="">
                                        Высота
                                    </label>

                                    <div class="order-setting">

                                        <div class="input-container">
                                            <div class="ui input">
                                                <input type="text" value="0.00">
                                            </div>
                                        </div>

                                        <span>см.</span>

                                    </div>

                                </div>

                            </div>

                            <div class="column input-row">

                                <div class="order-setting-row">

                                    <label for="">
                                        Глубина
                                    </label>

                                    <div class="order-setting">

                                        <div class="input-container">
                                            <div class="ui input">
                                                <input type="text" value="0.00">
                                            </div>
                                        </div>

                                        <span>см.</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="column">

                    <div class="ui horizontal divider">Sub id</div>

                    <ol class="ui list sub-id-list">

                        <li>

                            <div class="list-item">

                                <div class="left-item">8Gb</div>

                                <div class="right-item">

                                    <span class="item__count">5</span>

                                    <span class="item__unit">шт.</span>

                                </div>

                            </div>

                        </li>

                        <li>
                            <div class="list-item">

                                <div class="left-item">8Gb</div>

                                <div class="right-item">

                                    <span class="item__count">5</span>

                                    <span class="item__unit">шт.</span>

                                </div>

                            </div>

                        </li>

                        <li>
                            <div class="list-item">

                                <div class="left-item">Всего</div>

                                <div class="right-item">

                                    <span class="item__count">10</span>

                                    <span class="item__unit">шт.</span>

                                </div>

                            </div>

                        </li>

                    </ol>

                </div>

                <div class="column">

                    <div class="ui horizontal divider">Количество на складе </div>

                </div>

                <div class="column">

                    <div class="ui horizontal divider">Описание</div>

                    <div class="order-setting-row">
                        <div class="ui input">
                            <textarea type="text" rows="3" placeholder=""></textarea>
                        </div>
                    </div>

                </div>

            </div>


        </div>

    </div>


</div>
<? include('modals.php') ?>

<? include('scripts.php') ?>
</body>
</html>