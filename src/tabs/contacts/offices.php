<?php
const title = 'Отделы';
include ("../../include/head.php");
?>
<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">
        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forContacts.php'); ?>

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