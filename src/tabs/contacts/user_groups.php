<?php
const title = 'Группы пользователей';
include ("../../include/head.php");
?>

<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">

        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forContacts.php'); ?>

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

        <? include('../../include/pagination.php'); ?>

        <? include('../../include/footer.php'); ?>

    </section>
</main>


<? include('../../include/modals.php') ?>

<? include('../../include/scripts.php') ?>
</body>
</html>