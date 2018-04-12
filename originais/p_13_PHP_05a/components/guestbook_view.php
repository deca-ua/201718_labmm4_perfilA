<?php

require_once "data/comments_data.php";


?>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">GuestBook</h2>
    </div>
    <div class="col-lg-12 col-sm-12 text-center">
        <?php

        //+++++++++++++++++++++++++++++         PARTE 1         +++++++++++++++++++++++++++++
        echo "<h1>Parte 1</h1>";
        ?>
        <h3>{comentário}
            <small>({data} autor: {nome do autor})</small>
            <small><a href='scripts/guestbook_delete.php?id={id do comentário}'>x</a></small>
        </h3>
        <?php
        //+++++++++++++++++++++++++++++ PARTE 2 +++++++++++++++++++++++++++++
        echo "<h1>Parte 2</h1>";
        ?>
        <h3>{comentário}
            <small>({data} autor: {nome do autor})</small>
            <small><a href='scripts/guestbook_delete.php?id={id do comentário}'>x</a></small>
        </h3>

        <?php
        //+++++++++++++++++++++++++++++ PARTE 3 +++++++++++++++++++++++++++++
        echo "<h1>Parte 3</h1>";
        ?>
        <h3>{comentário}
            <small>({data} autor: {nome do autor})</small>
            <small><a href='scripts/guestbook_delete.php?id={id do comentário}'>x</a></small>
        </h3>

        <?php
        //+++++++++++++++++++++++++++++ EXTRA +++++++++++++++++++++++++++++
        echo "<h1>EXTRA</h1>";
        ?>
        <h3>{comentário}
            <small>({data} autor: {nome do autor})</small>
            <small><a href='scripts/guestbook_delete.php?id={id do comentário}'>x</a></small>
        </h3>

        ?>
    </div>

    <div style="text-align: center;">
        <a href="scripts/guestbook_delete_all.php">
            <button type="button" class="btn btn-primary">Apagar Lista</button>
        </a>
    </div>
</div>