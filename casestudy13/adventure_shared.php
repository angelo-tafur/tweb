<?php


function perform_query($query) {

	$dsn = 'mysql:dbname=world;host=localhost;port=3306';
	try {
		$db = new PDO($dsn, "root", "root");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$rows = $db->query($query);
		return $rows;
	} catch (PDOException $ex) {
		?>
		<p>Sorry, a database error occurred.</p>
		<p>(Error details: <?= $ex->getMessage() ?>)</p>
		<?php
		return NULL;
	}
}
?>
