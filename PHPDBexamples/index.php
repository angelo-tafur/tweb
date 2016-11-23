<!DOCTYPE html>
    <html>
    <?php
        include_once("imdb_small.php");
    ?>
    <body>
        <h1>Esercizi slide 26 pdf 08_DB</h1>
        <h3>Quali sono i nomi di tutti i film distribuiti nel 1995?</h3>
        <ul>
            <?php
            $query ="SELECT name FROM movies WHERE year = 1995;";
            get_and_print($query, "name");
            ?>
        </ul>
        <hr>
        <h3>Quante persone hanno recitato nel film "Lost in Translation"?</h3>
        <ul><?php
            $query="select count(distinct r.actor_id) as actors 
                    from roles r join movies m on r.movie_id = m.id  
                    where m.name ='Lost in Translation';";
            get_and_print($query,"actors");
            ?>
        </ul>
        <hr>
        <h3>Quali sono i nomi delle persone che hanno avuto un ruolo nel film "Lost in Translation"?</h3>
        <ul><?php
            $query = "select a.first_name, a.last_name 
                      from roles r join movies m on r.movie_id = m.id join actors a on r.actor_id = a.id  
                      where m.name ='Lost in Translation';";
            get_and_print_two($query, "first_name", "last_name");
            ?>
        </ul>
        <hr>
        <h3>Chi ha diretto il film "Fight Club"?</h3>
        <ul>
            <?php
            $query = "select d.first_name, d.last_name 
                      from movies m1 join movies_directors m2 on m1.id = m2.movie_id join directors d on m2.director_id = d.id 
                      where name = 'Fight Club';";
            get_and_print_two($query,"first_name", "last_name");
            ?>
        </ul>
        <hr>
        <h3>Quanti film ha diretto in tutto Clint Eastwood?</h3>
        <ul>
            <?php
            $query="select count(*) as films from movies_directors m1 
                    join movies m2 on m1.movie_id = m2.id 
                    where m1.director_id IN 
                            (select id from directors 
                            where first_name = 'Clint' 
                            and last_name = 'Eastwood');";
            get_and_print($query, "films");
            ?>
        </ul>
        <hr>
        <h3>Quali sono i nomi di tutti i film diretti da Clint Eastwood?</h3>
        <ul>
            <?php
            $query="select m2.name from movies_directors m1 
                    join movies m2 on m1.movie_id = m2.id 
                    where m1.director_id IN 
                        (select id from directors 
                        where first_name = 'Clint'
                        and last_name = 'Eastwood');";
            get_and_print($query,"name");
            ?>
        </ul>
        <hr>
        <h3>Quali sono i nomi dei registi che hanno diretto almeno un film horror?</h3>
        <ul>
            <?php
            $query="select d.first_name, d.last_name 
                    from movies m join movies_genres mg on m.id = mg.movie_id 
                    join movies_directors md on m.id = md.movie_id 
                    join directors d on md.director_id = d.id 
                    where genre = 'Horror';";
            get_and_print_two($query, "first_name", "last_name");
            ?>
        </ul>
        <hr>
        <h3>Quali sono i nomi di tutti gli attori che hanno recitato in almeno un film
            diretto da Christopher Nolan?</h3>
        <ul>
            <?php
            $query="select a.first_name, a.last_name 
                    from movies_directors md join movies m on md.movie_id = m.id 
                    join roles r on m.id = r.movie_id 
                    join actors a on r.actor_id = a.id 
                    where md.director_id IN 
                        (select id from directors 
                        where first_name = 'Christopher' 
                        and last_name = 'Nolan');";
            get_and_print_two($query, "first_name", "last_name" );
            ?>
        </ul>

    </body>
    </html>