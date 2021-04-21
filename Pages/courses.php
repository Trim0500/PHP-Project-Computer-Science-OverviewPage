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
		<title>Course List</title>
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body id="wrapper">
		<?php include "../header.php" ?>

		<p>Use the drop down menu to select a course and see it's info!</p><br/>

		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<select name="courseName">
				<option value="Mathematics for Computer Science">Mathematics for Computer Science</option>
				<option value="Computer/IT Fundamentals">Computer/IT Fundamentals</option>
				<option value="Object Oriented Programming Level 1">Object Oriented Programming Level 1</option>
				<option value="User Experience/Web Interface Design">User Experience/Web Interface Design</option>
				<option value="Configuring, Managing and Maintaining Computers">Configuring, Managing and Maintaining Computers</option>
				<option value="Object Oriented Programming Level 2">Object Oriented Programming Level 2</option>
				<option value="Operating Systems using Linux">Operating Systems using Linux</option>
				<option value="Web Programming and JS Libraries">Web Programming and JS Libraries</option>
				<option value="Project Management with Quantitative Methods">Project Management with Quantitative Methods</option>
				<option value="Database Design with an Introduction to SQL">Database Design with an Introduction to SQL</option>
				<option value="Networking and Security">Networking and Security</option>
				<option value=".NET Development">.NET Development</option>
				<option value="Java Web Programming">Java Web Programming</option>
				<option value="Introduction to IoT (Internet of Things) and Embedded Systems">Introduction to IoT (Internet of Things) and Embedded Systems</option>
				<option value="Web Development with PHP">Web Development with PHP</option>
				<option value="Systems Analysis and Design">Systems Analysis and Design</option>
				<option value="Mobile Applications Development 1: Android">Mobile Applications Development 1: Android</option>
				<option value="Game Development with Unity">Game Development with Unity</option>
				<option value="Web Services and Distributed Computing">Web Services and Distributed Computing</option>
			</select><br/><br/>
			<input type="submit" value="Submit">
		</form>

		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				include_once('../get-images.php');
				include_once('../get-dropdown-data.php');
			}
		?>
	</body>
</html>