<?php

function get_and_print($query, $column){
    foreach (perform_query($query) as $row){?>
        <li><?=$row[$column]?></li>
        <?php
    }
}
function get_and_print_two($query, $column1, $column2){
    foreach (perform_query($query) as $row){?>
        <li><?=$row[$column1]." ".$row[$column2]?></li>
        <?php
    }
}

function perform_query($query) {

    $dsn = 'mysql:dbname=imdb_small;host=localhost;port=3306';
    try {
        $db = new PDO($dsn, "root", "root");
        $rows = $db->query($query);
        return $rows;
    } catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred.</p>
        <?php
        return NULL;
    }
}