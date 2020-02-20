<?php

const title = 'Список для курьера';

include "../../include/head.php";

?>

<main>
    <? include('../../include/sidebar.php'); ?>

    <section class="main-content">
        <? include('../../include/header.php'); ?>

        <div class="content-section">
            <div class="content-controls">
                <div class="content-control-buttons">
                    <button class="ui labeled icon button tiny">
                        <i class="icon print"></i>
                        Печать таблицы
                    </button>
                    <button class="ui labeled icon button custom-button tiny">
                        <span class="icon">
                            <img src="../../img/icons/ico-new-post.ico">
                        </span>
                        ТТН новая почта
                    </button>
                    <button class="ui labeled icon button tiny custom-button">
                        <span class="icon">
                            <img src="../../img/icons/ico-post-ru.ico">
                        </span>
                        ТТН почта России
                    </button>
                </div>
            </div>
            <div class="content-controls">
                <button class="medium ui button mobile-visibility">
                    <i class="fa fa-filter"></i> Фильтры
                </button>
            </div>
            <div class="content-controls">
                <div class="ui grid w100">
                    <div class="four wide column">
                        <select class="ui search dropdown">
                            <option value="">State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                        </select>
                    </div>
                    <div class="four wide column">1</div>
                    <div class="four wide column">1</div>
                    <div class="four wide column">1</div>
                    <div class="four wide column">1</div>
                </div>
            </div>
        </div>

    </section>
</main>

<? include('../../include/scripts.php') ?>
</body>
</html>