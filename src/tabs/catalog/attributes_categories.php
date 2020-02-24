<?php

const title = 'Категории атрибутов';

include "../../include/head.php";

?>
<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">

        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forProducts.php');?>

        <div class="main-table attrubutes_categories-table" data-modal="attrubutes_categories">
            <table class=" ui table blue celled">
                <thead>
                    <tr>
                    <th width="10">id</th>
                    <th width="90">Название</th>
                    <th width="10">Статус</th>
                    <th width="10">Sort</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <i class="fa fa-building"></i>
                            <span class="item">Размер флешки</span>
                        </td>
                        <td class="text-align-center">
                            <div class="ui toggle checkbox">
                                <input type="checkbox"
                                       data-id="1"
                                       name="order-passed">
                                <label for="order-passed"></label>
                            </div>
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
                            <i class="fa fa-building"></i>
                            <span class="item">Размер обуви</span>
                        </td>
                        <td class="text-align-center">
                            <div class="ui toggle checkbox">
                                <input type="checkbox"
                                       data-id="2"
                                       name="order-passed">
                                <label for="order-passed"></label>
                            </div>
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