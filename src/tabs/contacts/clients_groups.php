<?php
const title = 'Группы клиентов';
include ("../../include/head.php");
?>

<main>

    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">

        <? include('../../include/header.php'); ?>

        <? include('../../include/content_controll/forContacts.php'); ?>

        <div class="main-table clients_groups-table" data-modal="clients_groups">
            <table class=" ui table blue celled">
                <thead>
                    <tr>
                        <th width="10">id</th>
                        <th width="30">Название</th>
                        <th width="50">Описание</th>
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
                            <i class="fa fa-user-o"></i>
                            <span class="item">Покупатель</span>
                        </td>
                        <td></td>
                        <td>
                            <p>
                                <span class="fa fa-lock"></span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>2</p>
                        </td>
                        <td>
                            <i class="fa fa-user-o"></i>
                            <span class="item">Партнёр</span>
                        </td>
                        <td></td>
                        <td>
                            <p>1</p>
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