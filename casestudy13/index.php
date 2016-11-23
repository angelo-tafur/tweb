<?php
include("top.html");
include_once("adventure_shared.php");
?>

<p>Choose characteristics a developing nation you'd like to visit.</p>

<form action="adventure_recommendations.php" method="get">
    <div>
        <h2>Which continent and language(s) do you prefer?</h2>

        <select title="continent" name="continent" size="5">
            <?php
            $query = "SELECT DISTINCT continent FROM countries ORDER BY continent";
            get_and_print_options($query, "continent");
            ?>
        </select>

        <select title="languages" name="languages[]" size="5" multiple="multiple">
            <?php
            $query = "SELECT DISTINCT language
                  FROM languages
                  WHERE official = 'T'
                  ORDER BY language";
            get_and_print_options($query, "language");
            ?>
        </select>
    </div>

    <div>
        <input type="submit" value="Submit" />
    </div>
</form>
</body>
</html>

<?php
function get_and_print_options($query, $column) {

    foreach (perform_query($query) as $row) {
        $choice = $row[$column];
        ?>
        <option value="<?= $choice ?>"><?= $choice ?></option>
        <?php
    }
}
?>
