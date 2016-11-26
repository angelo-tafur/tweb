<?php include("top.html"); ?>

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
