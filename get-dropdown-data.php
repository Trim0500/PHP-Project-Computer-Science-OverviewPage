<?php
	if(!isset($_SESSION)) {
		session_start();
	}

	$address = "127.0.0.1:3309";
	$username = "root";
	$db = "test";
	$dns = "mysql:host=$address;dbname=$db;charset=utf8";

	$con = new PDO($dns, $username, "");

	if (!$con) {
		die('Could not connect to the database');
	}

	$name = $_POST['courseName'];
	$table = "courses_table";
	$sqlSelect = "Select * From " . $table . " Where course_name = ?";

	$result = $con->prepare($sqlSelect);
	$result->execute([$name]);

	$row = $result->fetch(PDO::FETCH_ASSOC);
	if($row) {
		echo "<h2>Course: " . $row['course_name'] . "</h2>";
		echo "<h2>Semester Given: " . $row['semester_given'] . "</h2>";
		echo "<h2>Instructor: " . $row['instructor_name'] . "</h2>";
		echo "<h2>Required Book: " . $row['book_name'] . "</h2>";
		echo "<h2>Credits Worth: " . $row['credits'] . "</h2>";
	}
	else {
		die('Could not find any rows.');
	}

	$result = null;
	$con = null;
?>