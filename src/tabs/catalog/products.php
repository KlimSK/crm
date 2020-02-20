<?php

const title = 'Продукты';

include "../../include/head.php";

?>

<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">
        <? include('../../include/header.php'); ?>


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
                        <img src="../../../build/img/no_foto-120x100.png" alt="">
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
                    <td class="product-status text-align-center" >
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
                        <img src="../../../build/img/no_foto-120x100.png" alt="">
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
                    <td class="product-status text-align-center">
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
                    Язык интерфейса: <b><img src="../../../build/img/flags/RU.ico" alt=""> ru</b>
                </div>
                <div class="ws">
                    WS:
                    <a class="ui blue label mini">OK</a>
                </div>
            </div>
        </footer>
    </section>
</main>

<? include('../../include/modals.php') ?>

<? include('../../include/scripts.php') ?>
</body>
</html>