<?php
/**
 * Created by PhpStorm.
 * User: m_laurenz
 * Date: 23/11/16
 * Time: 19.37
 */

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
/*INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max)
VALUES ('Ada Lovelace', 'F', '96', 'ISTJ', 'Linux', '24', '99');*/

function perform_query($query) {

    $dsn = 'mysql:dbname=nerdLuv;host=localhost;port=3306';
    try {
        $db = new PDO($dsn, "root", "root");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $rows = $db->query($query);
        return $rows;
    } catch (PDOException $ex) {
        ?>
        <p>Sorry, a database error occurred.</p>
        <p>(Error details: <?= $ex->getMessage() ?>)</p>
        <?php
        return NULL;
    }
}