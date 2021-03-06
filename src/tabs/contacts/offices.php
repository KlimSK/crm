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

        <? include('../../include/pagination.php'); ?>

        <? include('../../include/footer.php'); ?>

    </section>

</main>


<? include('../../include/modals.php') ?>

<? include('../../include/scripts.php') ?>
</body>
</html>