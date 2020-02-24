<?php
const title = 'Отделы';
include ("../../include/head.php");
?>

<main>

    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">

        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forContacts.php'); ?>

        <div class="ui top attached tabular menu custom-tabs mh-0" id="tabs-panel-statusy">

            <button class="tabs-arrow ui icon button compact blue" id="button-arrow-left-tabs">
                <i class="ui icon arrow left"></i>
            </button>

            <div id="ul-statusy">
                <a class="item active" data-tab="first">
                    Покупатель
                    <div class="count ml-2">(0)</div>
                </a>
                <a class="item" data-tab="second">
                    Партнёр
                    <div class="count ml-2">(0)</div>
                </a>
                <a class="item" data-tab="third">
                    Дропшиппинг
                    <div class="count ml-2">(0)</div>
                </a>
                <a class="item" data-tab="four">
                    Оптавики
                    <div class="count ml-2">(0)</div>
                </a>
            </div>

            <button class="tabs-arrow button ui icon compact blue" id="button-arrow-right-tabs">
                <i class="icon arrow ui right"></i>
            </button>

        </div>
        <div class="ui bottom attached tab segment ml-0 p-0 border-none active" data-tab="first">
            <div class="main-table user_groups-table "
                 data-modal="offices">
                <table class="ui table blue celled">
                    <thead>
                        <tr>
                            <th width="65">id</th>
                            <th width="85">Клиент</th>
                            <th width="200">Локализация</th>
                            <th width="130">Телефон</th>
                            <th width="140">Группы</th>
                            <th width="200">E-mail</th>
                            <th width="110">Комментарий</th>
                            <th width="230">Добавлено</th>
                            <th width="200">Сайт</th>
                            <th width="100">IP-адрес</th>
                        </tr>

                        <tr>
                            <td>
                                <div class="ui input">
                                    <input type="text"
                                           name="id">
                                </div>
                            </td>
                            <td>
                                <div class="ui input">
                                    <input type="text"
                                           name="name">
                                </div>
                            </td>
                            <td>
                                <div class="ui dropdown mini main-table-dropdown">
                                    <input type="hidden" name="filters">
                                    <span class="text">Все</span> <i class="ui icon caret down"></i>
                                    <div class="menu">
                                        <div class="scrolling menu">
                                            <div class="item" data-value="all">Все</div>
                                            <div class="item" data-value="ukraine">Украина</div>
                                            <div class="item" data-value="russia">Россия</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui input">
                                    <input type="text"
                                           name="description">
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="ui input">
                                    <input type="text"
                                           name="description">
                                </div>
                            </td>
                            <td>
                                <div class="ui input">
                                    <input type="text"
                                           name="description">
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="ui input">
                                    <input type="text"
                                           name="description">
                                </div>
                            </td>
                            <td>
                                <div class="ui input">
                                    <input type="text"
                                           name="description">
                                </div>
                            </td>
                        </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <span class="item">Test</span>
                        </td>
                        <td>
                            <div class="flex-block">
                                <img class="UA"
                                     src="../../img/flags/UA.ico">
                                <p class="d-inline">Украина</p>
                            </div>
                        </td>
                        <td>
                            <i class="fa fa-phone-alt f-10"></i>
                            <p class="d-inline">
                                098 999 99 99
                            </p>
                        </td>
                        <td>
                            <p>Покупатель</p>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <p>2020-02-14 16:09:02</p>
                        </td>
                        <td>
                            <i class="globe icon"></i>
                            <p class="d-inline">2020-02-14 16:09:02</p>
                        </td>
                        <td>
                            <p>2001:67c:2660:4</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>2</p>
                        </td>
                        <td>
                            <i class="fa fa-users"></i>
                            <span class="item">Менеджер</span>
                        </td>
                        <td>
                            <p>г. Киев</p>
                        </td>
                        <td>
                            <p>
                                office1test@gmail.com
                            </p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="ui bottom attached tab segment ml-0 p-0 border-none" data-tab="second">
            <div class="main-table user_groups-table" data-modal="offices">
                <table class=" ui table blue celled">
                    <thead>
                    <tr>
                        <th width="10">id</th>
                        <th width="30">Название</th>
                        <th width="30">Адрес</th>
                        <th width="30">E-mail</th>
                        <th width="10">Sort</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="id">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="name">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="description">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="description">
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <i class="fa fa-users"></i>
                            <span class="item">Администратор</span>
                        </td>
                        <td>
                            <p>
                                г. Харьков
                            </p>
                        </td>
                        <td>
                            <p>
                                office1test@gmail.com
                            </p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>2</p>
                        </td>
                        <td>
                            <i class="fa fa-users"></i>
                            <span class="item">Менеджер</span>
                        </td>
                        <td>
                            <p>г. Киев</p>
                        </td>
                        <td>
                            <p>
                                office1test@gmail.com
                            </p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="ui bottom attached tab segment ml-0 p-0 border-none" data-tab="third">
            <div class="main-table user_groups-table" data-modal="offices">
                <table class=" ui table blue celled">
                    <thead>
                    <tr>
                        <th width="10">id</th>
                        <th width="30">Название</th>
                        <th width="30">Адрес</th>
                        <th width="30">E-mail</th>
                        <th width="10">Sort</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="id">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="name">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="description">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="description">
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <i class="fa fa-users"></i>
                            <span class="item">Администратор</span>
                        </td>
                        <td>
                            <p>
                                г. Харьков
                            </p>
                        </td>
                        <td>
                            <p>
                                office1test@gmail.com
                            </p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>2</p>
                        </td>
                        <td>
                            <i class="fa fa-users"></i>
                            <span class="item">Менеджер</span>
                        </td>
                        <td>
                            <p>г. Киев</p>
                        </td>
                        <td>
                            <p>
                                office1test@gmail.com
                            </p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="ui bottom attached tab segment ml-0 p-0 border-none" data-tab="four">
            <div class="main-table user_groups-table" data-modal="offices">
                <table class=" ui table blue celled">
                    <thead>
                    <tr>
                        <th width="10">id</th>
                        <th width="30">Название</th>
                        <th width="30">Адрес</th>
                        <th width="30">E-mail</th>
                        <th width="10">Sort</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="id">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="name">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="description">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="description">
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <i class="fa fa-users"></i>
                            <span class="item">Администратор</span>
                        </td>
                        <td>
                            <p>
                                г. Харьков
                            </p>
                        </td>
                        <td>
                            <p>
                                office1test@gmail.com
                            </p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>2</p>
                        </td>
                        <td>
                            <i class="fa fa-users"></i>
                            <span class="item">Менеджер</span>
                        </td>
                        <td>
                            <p>г. Киев</p>
                        </td>
                        <td>
                            <p>
                                office1test@gmail.com
                            </p>
                        </td>
                        <td>
                            <p>1</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <? include('../../include/pagination.php'); ?>

        <? include('../../include/footer.php'); ?>

    </section>

</main>


<? include('../../include/modals.php') ?>

<? include('../../include/scripts.php') ?>
</body>
</html>