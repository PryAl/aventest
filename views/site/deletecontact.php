<?php
include ROOT.'/components/Db.php';
$pdo = connect();
// deleting a member using PDO with try/catch to escape the exceptions
try {
	$sql = "DELETE FROM phone WHERE id = :id";
	$query = $pdo->prepare($sql);
	$query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
	$query->execute();
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
}


