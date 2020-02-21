<?php
const title = 'Производители';
include ("../../include/head.php");
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

        <div class="main-table user_groups-table" data-modal="user_groups">
            <table class=" ui table blue celled">
                <thead>
                <tr>
                    <th width="10">id</th>
                    <th width="30">Название</th>
                    <th width="90">Описание</th>
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
                    <td></td>
                </tr>
                </thead>

                <tbody>
                <tr class="disabled">
                    <td>
                        <p>1</p>
                    </td>
                    <td>
                        <i class="fa fa-users"></i>
                        <span class="item">Администратор</span>
                    </td>
                    <td>
                        <div class="grey-style">
                            <p>Супер пользователь системы (дирктор компании)</p>
                        </div>
                    </td>
                    <td>
                        <span class="item">
                            <i class="fa fa-lock"></i>
                        </span>
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
                        <div class="grey-style">
                            <p>Менеджер офиса</p>
                        </div>
                    </td>
                    <td>
                        <span class="item">2</span>
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