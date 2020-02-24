<?php
const title = 'Производители';
include ("../../include/head.php");
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
                    <th width="90">Название</th>
                    <th width="40">Тип</th>
                    <th width="30">Описание</th>
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
                        <div class="ui dropdown mini main-table-dropdown">
                            <input type="hidden" name="filters">
                            <span class="text">Все</span> <i class="ui icon caret down"></i>
                            <div class="menu">
                                <div class="scrolling menu">
                                    <div class="item" data-value="important">Страна производитель</div>
                                    <div class="item" data-value="announcement">Бренд</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="ui input">
                            <input type="text">
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
                        <img src="/img/flags/CN.ico" class="table-icon">
                        <span class="item">Китай</span>
                    </td>
                    <td>
                        <p>Бренд</p>
                    </td>
                    <td>
                        <div class="grey-style">
                            <p>бывшая фирма Goldstar</p>
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
                        <span class="item no-icon-margin">LG</span>
                    </td>
                    <td>
                        <p>Бренд</p>
                    </td>
                    <td>
                        <div class="grey-style">
                            <p>КНР</p>
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