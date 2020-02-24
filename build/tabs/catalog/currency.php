<?php

const title = 'Валюта';

include "../../include/head.php";

?>
<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">
        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forProducts.php');?>

        <div class="main-table currency-table" data-modal="currency">
            <table class=" ui table blue celled">
                <thead>
                <tr>
                    <th width="10">id</th>
                    <th width="90">Название</th>
                    <th width="30">Символ</th>
                    <th width="10">Sort</th>
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
                        <div class="table_sort table_sort_js text-align-center cursor-pointer">
                            <div class="column sort_down">
                                <i class="angle down icon"></i>
                            </div>
                            <div class="column sort_up d-none">
                                <i class="angle up icon"></i>
                            </div>
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
                        <p>Украинская гривна</p>
                    </td>
                    <td>
                        <div class="grey-style">
                            <p>символ</p>
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
                        <p>Американский доллар</p>
                    </td>
                    <td>
                        <div class="grey-style">
                            <p>символ</p>
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