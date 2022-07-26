<?php
    echo "Home";
	include ('settings.php');
	$stmt = $pdo->query('SELECT * FORM user_acccounts');
	$rows = $stmt->fetchAll();
	print_r($rows);
?>

<a href="logout.php">Logout</a>