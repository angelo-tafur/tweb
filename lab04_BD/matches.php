<?php include("top.html"); ?>

<?php
/**
 * Created by PhpStorm.
 * User: m_laurenz
 * Date: 16/11/16
 * Time: 17.59
 *
 * la pagina che riceve i dati inviati da
 * matches.php e che mostra chi sono le persone a lui/lei affini.
 */?>

<form action="matches-submit.php" method="GET">
    <fieldset class="match">
        <legend>Returning User:</legend>
        <div>
            <label class="left"><strong>Name:</strong></label>
            <input title="name" name="name" type="text" maxlength="16">
        </div>
        <input type="submit" value="View My Matches">
    </fieldset>
</form>

<?php include("bottom.html"); ?>
