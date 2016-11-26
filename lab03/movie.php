<!DOCTYPE html>

<html lang="en">

<head>
    <title>Rancid Tomatoes</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="movie.css" type="text/css" rel="stylesheet" />
    <link href="http://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/rotten.gif" rel="shortcut icon">
    <!--Angelo Tafur Rodriguez Corso B -->
</head>
<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset ($_GET["film"])){
        $movie=$_GET["film"];
        list($title, $year, $rating) = file("$movie/info.txt", FILE_IGNORE_NEW_LINES);
        ?>
<body>
        <div class="banner">
            <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/banner.png"
                 alt="Rancid Tomatoes" />
        </div>

        <h1 id="intestazione"><?=$title." ("."$year".")"?></h1>

        <div class="container">
            <div class="box">
                <div class="overview">
                    <div>
                        <img src="<?=$movie?>/overview.png"
                             alt="general overview" />
                    </div>
                    <div class="dettagli">
                        <?php
                        $overview = file("$movie/overview.txt", FILE_IGNORE_NEW_LINES);
                        foreach ($overview as $lines){
                        list($term, $description) = explode(":", $lines);?>
                        <dl>
                            <dt><?=$term?></dt>
                            <dd><?=$description?></dd>
                        </dl>
                        <?php }
                        ?>
                    </div>
                </div>

                <div class="reviews">

                    <div id="rotten">
                        <?php
                        $tomato ="";
                        if($rating > 60){
                            $tomato ="freshbig.png";
                        }else{
                            $tomato ="rottenbig.png";
                        }
                        ?>
                        <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/<?=$tomato?>"
                             alt="Rotten" />
                        <span id="percentuale"><?= $rating?>%</span>

                    </div>

                    <?php
                    $reviews = glob("$movie/review*.txt");
                    $numReviews = count($reviews);
                    ?>
                    <div class="column">
                        <?php
                        for($i = 0; $i<$numReviews/2; $i++){
                            list($review, $reviewRating, $reviewer, $magazine) = file("$reviews[$i]", FILE_IGNORE_NEW_LINES);
                            ?>
                            <div class="citazione">
                                <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/<?=strtolower("$reviewRating")?>.gif"
                                     alt="<?=$reviewRating?>" />
                                <q>
                                    <?="$review"?>
                                </q>
                            </div>
                            <div class="recensore">
                                <p>
                                    <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/critic.gif"
                                         alt="Critic" />
                                    <?=$reviewer?><br/>
                                    <span><?=$magazine?></span>
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="column">
                        <?php
                        for($i = round($numReviews/2); $i<$numReviews; $i++){
                            list($review, $reviewRating, $reviewer, $magazine) = file("$reviews[$i]", FILE_IGNORE_NEW_LINES);
                            ?>
                            <div class="citazione">
                                <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/<?=strtolower("$reviewRating")?>.gif"
                                     alt="<?=$reviewRating?>" />
                                <q>
                                    <?=$review?>
                                </q>
                            </div>
                            <div class="recensore">
                                <p>
                                    <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/critic.gif"
                                         alt="Critic" />
                                    <?=$reviewer?><br/>
                                    <span><?=$magazine?></span>
                                </p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="numPagina">
                <p>(1-<?=$numReviews?>) of <?=$numReviews?></p>
            </div>

        </div>

        <div class="validators">
            <a href="ttp://validator.w3.org/check/referer">
                <img src="http://www.davidschaich.net/images/valid-html5.gif" alt="Validate HTML" />
            </a> <br />
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
            </a>
        </div>

</body>
    <?php
    }
}
?>
</html>