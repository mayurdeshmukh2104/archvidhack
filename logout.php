<?php
	session_start();

	session_destroy();

	header("location: index.php?logout=You successfully Logged Out");
?>