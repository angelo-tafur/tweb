<?php include("top.html"); ?>

<?php
/**
 * Created by PhpStorm.
 * User: m_laurenz
 * Date: 16/11/16
 * Time: 17.59
 * la pagina che riceve i dati inviati da matches.php e che mostra chi sono le persone a lui/lei affini.
 */?>

<?php
    $myFile = fopen("singles.txt", "r");
    $mySingles = array();
    while(!feof($myFile)){
        $a = explode( "," , fgets($myFile));
        $mySingles[$a[0]] = $a;
    }
    fclose($myFile);
//    var_dump($mySingles);

    list($name, $gender, $age, $personality, $os, $min, $max) = $mySingles[$_REQUEST["name"]];

    $matches = array();
    foreach ($mySingles as $key => $values){
        if($key != $name && $gender != $values[1] && $values[2]>=$min && $values[2]<= $max && compatibility($personality, $values[3]) && $os == $values[4]){
            $matches[$key] = $values;
        }
    }
//    var_dump($matches);
    
    function compatibility($p1, $p2){
        $result = false;
        for($i=0; $i < 4; $i++){
            $result = $result || $p1[$i] == $p2[$i];
        }
        return $result;
    }
?>
<h1>Matches for <?=$_REQUEST["name"]?></h1>

    <?php
        foreach ($matches as $x => $xs) {
            ?>
            <div class="match">
                <p>
                    <img src="http://www.cs.washington.edu/education/courses/cse190m/12sp/homework/4/user.jpg" alt="user">
                    <?=$x?>
                </p>
                <ul>
                    <li>gender: <?=$xs[1]?></li>
                    <li>age: <?=$xs[2]?></li>
                    <li>type: <?=$xs[3]?></li>
                    <li>OS: <?=$xs[4]?></li>
                </ul>
            </div>
            <?php
        }
    ?>

<?php include("bottom.html"); ?>
