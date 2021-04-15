<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset="UTF-8">
		<title>Course List</title>
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body id="wrapper">
		<?php include "../header.php" ?>

		<p>Use the drop down menu to select a course and see it's info!</p><br/>

		<select>
			<option name="CSMath" id="CSMath">Math for Computer Science</option>
			<option name="ITFundamentals" id="ITFundamentals">Computer/IT Fundamentals</option>
			<option name="Java1" id="Java1">Object Oriented Programming Level 1</option>
			<option name="HTML" id="HTML">User Experience/Web Interface Design</option>
			<option name="Maintenance" id="Maintenance">Configuring, Managing and Maintaining Computers</option>
			<option name="Java2" id="Java2">Object Oriented Programming Level 2</option>
			<option name="Linux" id="Linux">Operating Systems using Linux</option>
			<option name="JS" id="JS">Web Programming and JS Libraries</option>
			<option name="PM" id="PM">Project Management with Quantitative Methods</option>
			<option name="SQL" id="SQL">Database Design with an Introduction to SQL</option>
			<option name="Networking/Security" id="Networking/Security">Networking and Security</option>
			<option name=".Net" id=".Net">.NET Development</option>
			<option name="JavaWeb" id="JavaWeb">Java Web Programming</option>
			<option name="IoT" id="IoT">Introduction to IoT (Internet of Things) and Embedded Systems</option>
			<option name="PHP" id="PHP">Web Development with PHP</option>
			<option name="SystemsAnalysis" id="SystemsAnalysis">Systems Analysis and Design</option>
			<option name="Android" id="Android">Mobile Applications Development 1: Android</option>
			<option name="Unity" id="Unity">Game Development with Unity</option>
			<option name="WebServices" id="WebServices">Web Services and Distributed Computing</option>
		</select><br/><br/>

		<form method"GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>