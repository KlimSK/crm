<?php

const title = 'Категории';

include "../../include/head.php";

?>

<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">
        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forProducts.php');?>

        <div class="main-table category-table">
            <table class=" ui table blue celled">
                <thead>
                <tr>
                    <th width="65">id</th>
                    <th width="90">Название</th>
                    <th width="40">Статус</th>
                    <th width="30">Добавлено</th>
                    <th width="90">Sort</th>
                </tr>

                </thead>

                <tbody>
                <tr>
                    <td>
                        <p>1</p>
                    </td>
                    <td>
                        <i class="folder outline icon"></i>
                        <span class="item">Автотовары</span>
                    </td>
                    <td class="text-align-center">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="order-passed">
                            <label for="order-passed"></label>
                        </div>
                    </td>
                    <td>
                        <div class="item">2018-04-10</div>
                    </td>
                    <td>
                        <span class="item">1</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>2</p>
                    </td>
                    <td>
                        <i class="folder open outline icon"></i>
                        <span class="item">Электроника</span>
                    </td>
                    <td class="text-align-center">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="order-passed">
                            <label for="order-passed"></label>
                        </div>
                    </td>
                    <td>
                        <div class="item">2018-04-10</div>
                    </td>
                    <td>
                        <span class="item">2</span>
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