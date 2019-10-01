<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="fonts/yandex/stylesheet.css">
    <link rel="stylesheet" href="fonts/lato/lato.css">
    <link rel="stylesheet" href="css/style.css">
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

                    <div class="ui toggle checkbox refresh-toggle" title="Автоперезагрузка текущего статуса">
                        <input type="checkbox" name="refresh">
                        <label for=""></label>
                    </div>

                    <button class="ui compact tiny icon button blue basic">
                        <i class="search icon"></i>
                    </button>

                    <div class="ui compact tiny icon button basic dropdown left " id="controls-settings-dropdown">
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

                    <button class="ui labeled icon button tiny green add-order"><i class="plus icon"></i> Добавить</button>
                </div>
            </div>


        </div>

        <div id="tabs-panel-statusy">
            <button class="tabs-arrow ui icon button compact blue" id="button-arrow-left-tabs">
                <i class="ui icon arrow left"></i>
            </button>
            <ul id="ul-statusy">
                <li><a href="javascript:void(0);" id="tab-status-all"
                       onclick="TabStatus('all');"
                       class="tab-status-active button ui mini">ВСЕ (<b id="count_all_z">382</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-3"
                       onclick="TabStatus('3');"
                       class="button ui mini basic grey">Новый (<b>150</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-14"
                       onclick="TabStatus('14');" class="button ui mini yellow">Отправлено (<b>62</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-18" class="button ui mini green"
                       onclick="TabStatus('18');">Завершено (<b>34</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-31" class="button ui mini red"
                       onclick="TabStatus('31');">Возрат товара (склад) (<b>9</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-13" class="button ui mini pink"
                       onclick="TabStatus('13');">Отказ (<b>23</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-43" class="button ui mini teal"
                       onclick="TabStatus('43');">Успешно выполнено (<b>1</b>)</a></li>
                <li><a href="javascript:void(0);" class="button ui mini brown"
                       id="tab-status-45" onclick="TabStatus('45');">
                    Не подтвержденные (<b>1</b>)</a></li>
                <li><a href="javascript:void(0);" class="button ui mini purple"
                       id="tab-status-44" onclick="">
                    Успешно не выполнено (<b>0</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-36" class="button ui mini red"
                       data-src="" onclick="TabStatus('36');">Возврат товара в пути (<b>2</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-40" class="button ui mini"
                       onclick="TabStatus('40');">Одесса (<b>1</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-37" class="button ui mini green"
                       onclick="TabStatus('37');">В пути деньги (<b>4</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-39" class="button ui mini violet"
                       onclick="TabStatus('39');">На контроле (<b>2</b>)</a></li>
                <li><a href="javascript:void(0);" id="tab-status-41" class="button ui mini brown"
                       data-src="" onclick="TabStatus('41');">Утилизация (<b>1</b>)</a></li>
            </ul>
            <button class="tabs-arrow button ui icon compact blue" id="button-arrow-right-tabs">
                <i class="icon arrow ui right"></i>
            </button>
        </div>


        <div class="main-table orders-table">
            <table class=" ui table blue celled">
                <thead>
                <tr>
                    <th width="110">Статус</th>
                    <th width="65">id</th>
                    <th width="85">order_id</th>
                    <th width="200">Покупатель</th>
                    <th width="130">Локализация</th>
                    <th width="140">Телефон</th>
                    <th width="200">Комментарий</th>
                    <th width="110">Сумма</th>
                    <th width="230">Товар</th>
                    <th width="110">Оплата</th>
                    <th width="100">Тип доставки</th>
                    <th width="200">Адрес доставки</th>
                    <th width="130">ТТН</th>
                    <th width="230">Отправлено</th>
                    <th width="200">ТТН статус</th>
                    <th width="230">Добавлено</th>
                    <th width="150">Сотрудник</th>
                    <th width="170">Отдел</th>
                    <th width="220">Обновлено</th>
                    <th width="180">Сайт</th>
                    <th width="110">Статус</th>
                    <th width="220">Сдано</th>
                    <th width="100">utm_source</th>
                    <th width="200">utm_medium</th>
                    <th width="125">utm_term</th>
                    <th width="140">utm_content</th>
                    <th width="145">utm_campaign</th>
                    <th width="130">IP</th>
                    <th width="170">Доп. поле 1</th>
                    <th width="100">Доп. поле 2</th>
                    <th width="100">Доп. поле 3</th>
                    <th width="100">Доп. поле 4</th>
                </tr>


                <tr>
                    <td></td>
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
                        <div class="ui dropdown mini main-table-dropdown" id="table-localization">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="ui icon search input">
                                    <i class="search icon"></i>
                                    <input type="text" placeholder="Поиск...">
                                </div>
                                <div class="divider"></div>
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Арабские эмираты</div>
                                    <div class="item" data-value="announcement">Афганистан</div>
                                    <div class="item" data-value="cannotfix">Венгрия</div>
                                    <div class="item" data-value="news">Украина</div>
                                    <div class="item" data-value="enhancement">Казахстан</div>
                                    <div class="item" data-value="off-topic">Беларусь</div>
                                    <div class="item" data-value="interesting">Молдова</div>
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
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="ui icon search input">
                                    <i class="search icon"></i>
                                    <input type="text" placeholder="Поиск...">
                                </div>
                                <div class="divider"></div>
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">test product 1</div>
                                    <div class="item" data-value="announcement">test product 2</div>
                                    <div class="item" data-value="cannotfix">test product 3</div>
                                    <div class="item" data-value="news">test product 4</div>
                                    <div class="item" data-value="enhancement">test product 5</div>
                                    <div class="item" data-value="off-topic">test product 6</div>
                                    <div class="item" data-value="interesting">test product 7</div>
                                </div>
                            </div>
                        </div>


                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="ui icon search input">
                                    <i class="search icon"></i>
                                    <input type="text" placeholder="Поиск...">
                                </div>
                                <div class="divider"></div>
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Оплачено</div>
                                    <div class="item" data-value="announcement">Предоплата</div>
                                    <div class="item" data-value="cannotfix">Отказ</div>
                                    <div class="item" data-value="news">Налож. платеж</div>
                                    <div class="item" data-value="enhancement">Обмен</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="ui icon search input">
                                    <i class="search icon"></i>
                                    <input type="text" placeholder="Поиск...">
                                </div>
                                <div class="divider"></div>
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Новая Почта</div>
                                    <div class="item" data-value="announcement">Самовывоз</div>
                                    <div class="item" data-value="cannotfix">Укрпочта</div>
                                    <div class="item" data-value="news">Интайм</div>
                                    <div class="item" data-value="enhancement">Автолюкс</div>
                                    <div class="item" data-value="off-topic">Деливери</div>
                                    <div class="item" data-value="interesting">Почта России</div>
                                    <div class="item" data-value="interesting">Казпочта</div>
                                    <div class="item" data-value="interesting">СДЭК</div>
                                    <div class="item" data-value="interesting">Fetchr</div>
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
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td>
                        <div class="ui form calendar-cell">


                            с
                            <div class="ui calendar" id="added-from">
                                <div class="ui input">
                                    <input type="text">
                                </div>
                            </div>
                            по
                            <div class="ui calendar" id="added-to">
                                <div class="ui input">
                                    <input type="text">
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
                        <div class="ui form calendar-cell">
                            с
                            <div class="ui calendar" id="send-from">
                                <div class="ui input">
                                    <input type="text">
                                </div>
                            </div>
                            по
                            <div class="ui calendar" id="send-to">
                                <div class="ui input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="ui icon search input">
                                    <i class="search icon"></i>
                                    <input type="text" placeholder="Поиск...">
                                </div>
                                <div class="divider"></div>
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Админ</div>
                                    <div class="item" data-value="announcement">Менеджер</div>
                                    <div class="item" data-value="cannotfix">Гость</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="ui icon search input">
                                    <i class="search icon"></i>
                                    <input type="text" placeholder="Поиск...">
                                </div>
                                <div class="divider"></div>
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Оптовый</div>
                                    <div class="item" data-value="announcement">Розничный</div>
                                    <div class="item" data-value="cannotfix">Отдел ОАЭ</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui form calendar-cell">
                            с
                            <div class="ui calendar" id="updated-from">
                                <div class="ui input">
                                    <input type="text">
                                </div>
                            </div>
                            по
                            <div class="ui calendar" id="updated-to">
                                <div class="ui input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui input">
                            <input type="text">
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="ui form calendar-cell">
                            с
                            <div class="ui calendar" id="passed-from">
                                <div class="ui input">
                                    <input type="text">
                                </div>
                            </div>
                            по
                            <div class="ui calendar" id="passed-to">
                                <div class="ui input">
                                    <input type="text">
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
                </tr>


                </thead>

                <tbody>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny red status blink">
                            Новый
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id">
                        <p>15592194228</p>
                    </td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>

                <tr class="row-sent">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p class="flex-block align-items-center"><img src="img/operators/kyivstar.ico" alt=""> <a
                            href="#">+380981234567</a></p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-completed">
                    <td class="status-cell">
                        <div class="ui button tiny teal status" title="Успешно выполнен">
                            Успешно выполнен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/flags/AE.ico" alt=""> Арабские Эмираты
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-return">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-refuse">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-success">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-not-confirmed">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-success-not-completed">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-return-on-way">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-odessa">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-money-on-way">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-on-control">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr class="row-util">
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td class="status-cell">
                        <div class="ui button tiny green status">
                            Отправлен
                        </div>
                    </td>
                    <td><p>262474</p></td>
                    <td class="order-id"><p>15592194228</p></td>
                    <td><p>Админ</p></td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/UA.ico" alt=""> Украина
                        </p>
                    </td>
                    <td><p><i class="ui icon phone"></i> 35287523875</p></td>
                    <td><p><i class="ui icon info"></i> test</p></td>
                    <td class="order-sum"><p>500.00</p></td>
                    <td class="order-products">
                        <p>
                            <span class="products-counter ui">2</span>
                            мышь (1шт. x 10.00 = 10.00)~
                        </p>
                        <div class="ui popup">
                            <ul>
                                <li>мышь (1шт. x 10.00 = 10.00)~</li>
                                <li>блендер (1шт. x 10.00 = 10.00)~</li>
                            </ul>
                        </div>


                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/money.ico" alt="">
                            Оплачено
                        </p>

                    </td>
                    <td>
                        <p class="flex-block align-items-center">
                            <img src="img/delivery/ico-new-post.ico" alt="">
                            Нова Почта
                        </p>
                    </td>
                    <td><p>Єлизаветівка, Відділення №1: пров. 1-й Калиновий, 7б</p></td>
                    <td>
                        <p>20400132255366</p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>

                    <td>
                        <p>
                            <i class="ui icon clock outline"></i> Нова пошта очікує надходження від відправника
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            Админ
                        </p>
                    </td>
                    <td>
                        <p>
                            Розничный магазин
                        </p>
                    </td>
                    <td>
                        <p>
                            2019-05-08 <span style="font-size:11px; opacity: 0.7;"> &nbsp; 00:00:00</span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <i class="ui icon globe"></i>
                            project1515603.tilda.ws/
                        </p>
                    </td>
                    <td><p>Новый</p></td>
                    <td></td>
                    <td><p>instagram</p></td>
                    <td><p>lenta</p></td>
                    <td><p>video</p></td>
                    <td><p>insta|interes-gadget|all</p></td>
                    <td><p>Аэромышь видео</p></td>
                    <td><p><i class="ui icon desktop"></i> 92.63.110.179</p></td>
                    <td><p>stagery-test.ukraine-shop.top/yulia/samsung</p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                    <td><p></p></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="main-table-pagination">
            <div class="search-results">
                Результат: с 1 по 50 / <b>382</b>
            </div>

            <div class="ui pagination mini menu">
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
                    Язык интерфейса: <b><img src="img/flags/RU.ico" alt=""> ru</b>
                </div>
                <div class="ws">
                    WS:
                    <a class="ui blue label mini">OK</a>
                </div>
            </div>
        </footer>
    </section>
</main>


<? include('modals.php') ?>

<? include('scripts.php') ?>

</body>
</html>