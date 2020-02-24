<?php
const title = "Сайты (Лендинги)";
include ("../../include/head.php");

?>
<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">

        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forProducts.php');?>

        <div class="main-table landings-table" data-modal="landings">
            <table class=" ui table blue celled">
                <thead>
                <tr>
                    <th width="10">id</th>
                    <th width="30">Сайт</th>
                    <th width="50">Название</th>
                    <th width="70">Описание</th>
                </tr>

                <tr>
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
                    <td>
                        <p>1</p>
                    </td>
                    <td>
                        <img src="https://www.google.com/s2/favicons?domain=fishka1.com"
                             alt="tabs-icon">
                        <span class="item">fishka1.com</span>
                    </td>
                    <td>
                        <p>Интернет магазин Фишка</p>
                    </td>
                    <td>
                        <div class="grey-style">
                            <p>Интернет магазин хитовых товаров Фишка</p>
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