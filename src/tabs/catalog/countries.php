<?php

const title = 'Страны';

include "../../include/head.php";

?>

<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">
        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forProducts.php');?>

        <div class="main-table manufacturers-table">
            <table class=" ui table blue celled">
                <thead>
                    <tr>
                        <th width="10">id</th>
                        <th width="20">Код</th>
                        <th width="40">Title</th>
                        <th width="40">Название</th>
                        <th width="20">Alpha</th>
                        <th width="20">ISO</th>
                        <th width="10">Status</th>
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
                                       name="code">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="title">
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
                                       name="alpha">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="iso">
                            </div>
                        </td>
                        <td>
                            <div class="ui input">
                                <input type="text"
                                       name="status">
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
                            <p>UA</p>
                        </td>
                        <td>
                            <img src="/img/flags/UA.ico" class="table-icon">
                            <span class="item">Украина</span>
                        </td>
                        <td>
                            <p>Ukrane</p>
                        </td>
                        <td>
                            <div class="grey-style">
                                <p>BGD</p>
                            </div>
                        </td>
                        <td>
                            <div class="grey-style">
                                <p>50</p>
                            </div>
                        </td>
                        <td class="text-align-center">
                            <div class="ui toggle checkbox">
                                <input type="checkbox"
                                       name="status">
                                <label for="status"></label>
                            </div>
                        </td>
                    </tr>
                    <tr class="grey-bg">
                        <td class="disabled">
                            <p>1</p>
                        </td>
                        <td class="disabled">
                            <p>UA</p>
                        </td>
                        <td class="disabled">
                            <img src="/img/flags/UA.ico" class="table-icon">
                            <span class="item">Украина</span>
                        </td>
                        <td class="disabled">
                            <p>Ukrane</p>
                        </td>
                        <td class="disabled">
                            <div class="grey-style">
                                <p>BGD</p>
                            </div>
                        </td>
                        <td class="disabled">
                            <div class="grey-style">
                                <p>50</p>
                            </div>
                        </td>
                        <td class="text-align-center">
                            <div class="ui toggle checkbox">
                                <input type="checkbox"
                                       name="status">
                                <label for="status"></label>
                            </div>
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