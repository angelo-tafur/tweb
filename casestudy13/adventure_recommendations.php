<?php
include("top.html");
include_once("adventure_shared.php");
?>

    <h2>Countries that fit your preferences for your next adventure are:</h2>

        <?php
        print_countries();
        ?>
  </body>
</html>

<?php
function print_countries() {
    $languages = "'" . implode("', '", $_GET["languages"]) . "'";

    $query = "SELECT DISTINCT c.name
              FROM countries c
              JOIN languages l ON c.code = l.country_code
              WHERE c.continent = '" . $_GET["continent"] . "'
                  AND l.language IN ($languages)
                  AND l.official = 'T'
                  AND (((c.gnp * 1000000) / c.population) < 10000
                       OR c.life_expectancy < 70)
            ORDER BY c.name";
    $rows = perform_query($query);

    if ($rows) {
        ?>
        <ul>

        <?php
        foreach ($rows as $row) {
            ?>
            <li><?= $row["name"] ?></li>
            <?php
        }
        ?>

        </ul>
    <?php
    } else {
        ?>

        <p>Sorry there were no countries matching your preferences.</p>
        <?php
    }
}
?>
