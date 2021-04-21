<!DOCTYPE html>
<html lang="en">
<?php
	if(!isset($_SESSION)) {
		session_start();
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home Page</title>
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body id="wrapper">
		<?php include "../header.php" ?>
	</body>
</html>