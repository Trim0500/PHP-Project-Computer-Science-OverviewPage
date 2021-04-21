<?php
	if(!isset($_SESSION)) {
		session_start();
	}

	$value = $_POST['courseName'];

	switch($value) {
		case "Mathematics for Computer Science":
			echo '<img src="../Imgs/CS_Math.jpg" alt="CS Math" width="300" height="281"/>';
			break;
		case "Computer/IT Fundamentals":
			echo '<img src="../Imgs/IT_Fund.jpg" alt="IT Fund" width="300" height="281"/>';
			break;
		case "Object Oriented Programming Level 1":
		case "Object Oriented Programming Level 2":
			echo '<img src="../Imgs/Java.jpg" alt="Java" width="300" height="281"/>';
			break;
		case "User Experience/Web Interface Design":
			echo '<img src="../Imgs/HTML.jpg" alt="HTML" width="300" height="281"/>';
			break;
		case "Configuring, Managing and Maintaining Computers":
			echo '<img src="../Imgs/Testout.jpg" alt="Testout" width="300" height="281"/>';
			break;
		case "Operating Systems using Linux":
			echo '<img src="../Imgs/Linux.jpg" alt="Tux" width="300" height="281"/>';
			break;
		case "Web Programming and JS Libraries":
			echo '<img src="../Imgs/JS.jpg" alt="JS" width="300" height="281"/>';
			break;
		case "Project Management with Quantitative Methods":
			echo '<img src="../Imgs/MS_Project.jpg" alt="Project" width="300" height="281"/>';
			break;
		case "Database Design with an Introduction to SQL":
			echo '<img src="../Imgs/SQL.jpg" alt="SQL" width="300" height="281"/>';
			break;
		case "Networking and Security":
			echo '<img src="../Imgs/Networking.jpg" alt="Networking" width="300" height="281"/>';
			break;
		case ".NET Development":
			echo '<img src="../Imgs/.Net.jpg" alt=".Net" width="300" height="281"/>';
			break;
		case "Java Web Programming":
			echo '<img src="../Imgs/Java_Web.jpg" alt="JavaWeb" width="300" height="281"/>';
			break;
		case "Introduction to IoT (Internet of Things) and Embedded Systems":
			echo '<img src="../Imgs/IoT.jpg" alt="IoT" width="300" height="281"/>';
			break;
		case "Web Development with PHP":
			echo '<img src="../Imgs/PHP.jpg" alt="PHP" width="300" height="281"/>';
			break;
		case "Systems Analysis and Design":
			echo '<img src="../Imgs/Systems.jpg" alt="Systems" width="300" height="281"/>';
			break;
		case "Mobile Applications Development 1: Android":
			echo '<img src="../Imgs/Android.jpg" alt="Android" width="300" height="281"/>';
			break;
		case "Game Development with Unity":
			echo '<img src="../Imgs/Unity.jpg" alt="Unity" width="300" height="281"/>';
			break;
		case "Web Services and Distributed Computing":
			echo '<img src="../Imgs/Microservices.jpg" alt="Microservices" width="300" height="281"/>';
			break;
	}
?>