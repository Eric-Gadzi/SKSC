<?php
	require_once("./settings/core.php");

	$_SESSION['user_ip'] = get_client_ip();

	echo "ip is ".$_SESSION['user_ip'];

	header("location: view/index.php");
?>

	