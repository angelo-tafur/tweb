<?php include("top.html"); ?>

<?php
/**
 * Created by PhpStorm.
 * User: m_laurenz
 * Date: 16/11/16
 * Time: 17.59
 *
 * la pagina che riceve i dati inviati da matches.php e che mostra chi sono le persone a lui/lei affini.
 */?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $newSingle = implode(",", $_REQUEST);
    $myFile = fopen("singles.txt", "a");
    fwrite($myFile, "\n".$newSingle);
    fclose($myFile);
    ?>
    <h1>Thank you!</h1>
    <p>Welcome to NerdLuv, <?=$_POST["name"]?>!</p>
    Now <a href="matches.php">log in to see your matches!</a>
    <?php
}
?>

<?php include("bottom.html"); ?>
