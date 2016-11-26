<?php include("top.html"); ?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $dsn = 'mysql:dbname=nerdLuv;host=localhost;port=3306';
    try {
        $db = new PDO($dsn, "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $name =     $db->quote($_POST["name"]);
        $gender =   $db->quote($_POST["gender"]);
        $age =      $db->quote($_POST["age"]);
        $personality = $db->quote($_POST["personality"]);
        $os =       $db->quote($_POST["os"]);
        $min =      $db->quote($_POST["min"]);
        $max =      $db->quote($_POST["max"]);

//        list($name, $gender, $age, $personality, $os, $min, $max) = $_REQUEST;

        $db->exec("INSERT INTO singles(Name, Gender, Age, Personality, OS, Min, Max) 
                  VALUE ('$name','$gender','$age','$personality','$os','$min','$max')");
    }catch (PDOException $e){?>
        <p>Sorry, a database error occurred.</p>
        <p>(Error details: <?= $e->getMessage() ?>)</p>
        <?php
    }

    ?>
    <h1>Thank you!</h1>
    <p>Welcome to NerdLuv, <?=$_POST["name"]?>!</p>
    Now <a href="matches.php">log in to see your matches!</a>
    <?php
}
?>

<?php include("bottom.html"); ?>
