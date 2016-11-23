"<?php


function perform_query($query) {

  $dsn = 'mysql:dbname=world;host=localhost;port=3306';
  try {
	  $db = new PDO($dsn, "root", "root");
	  $rows = $db->query($query);
	  return $rows;
  } catch (PDOException $ex) {
  	?>
  	<p>Sorry, a database error occurred.</p>
  	<?php
  	return NULL;
	}
}
?>
