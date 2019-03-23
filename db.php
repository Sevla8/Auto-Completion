<?php
	global $db;

	try {
		$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch(Exception $exception) {
		die('Erreur : '.$exception->getMessage());
	}

		function getMembersLike($like) {
		global $db;
		$query = $db->prepare('SELECT name FROM member WHERE name LIKE ?');
		$query->execute(array($like.'%'));
		$fetch = $query->fetchAll();
		return $fetch;
	}
?>