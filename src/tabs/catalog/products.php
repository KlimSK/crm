<?php

const title = 'Продукты';

include "../../include/head.php";

?>

<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">

        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forProducts.php');?>

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

        <? include('../../include/pagination.php'); ?>

        <? include('../../include/footer.php'); ?>
    </section>
</main>

<? include('../../include/modals.php') ?>

<? include('../../include/scripts.php') ?>
</body>
</html>