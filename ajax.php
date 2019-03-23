<?php
	include('db.php');

	header("Content-Type: text/plain");

	if (isset($_POST['like'])) {
		$_POST['like'] = htmlspecialchars($_POST['like']);
		$result = getMembersLike($_POST['like']);
		foreach ($result as $member) 
			echo $member['name'].'|';
	}
?>
