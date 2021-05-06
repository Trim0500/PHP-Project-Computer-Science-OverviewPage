<!DOCTYPE html>
<html lang="en">
<?php
	if(!isset($_SESSION)) {
		session_start();
	}
?>

<?php
	class SchoolPictures {
		private $pictures;
		
		function setPictures($pictures) {
			$this->pictures = $pictures;
		}

		function getPictures() {
			return $pictures;
		}

		function displayPicture() {
			$pictures = array("School.jpg", "School_2.jpg","School_3.jpg", "School_4.jpg", "School_5.jpg");

			$index = rand(0, 4);

			$picture = $pictures[$index];

			#echo $picture;

			echo '<img id="centerimage" src="../Imgs/' . $picture . ' alt="School Campus" width="512" height="288"/>';
		}
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

		<?php
			date_default_timezone_set("America/Toronto");

			if(date("H") < 12) {
				echo '<h2>' . 'Good Morning!' . '</h2>';
			}
			else if (date("H") > 12 && date("H") < 17) {
				echo '<h2>' . 'Good Afternoon!' . '</h2>';
			}
			else {
				echo '<h2>' . 'Good Evening!' . '</h2>';
			}
		?>

		<h2>Welcome to Champlain College&#39;s Computer Science Info Site!</h2>

		<?php
			$schoolPic = new SchoolPictures();

			$schoolPic->displayPicture();
		?>

		<p>In this website, you'll find various information on the school&#39;s program including
		   the courses offered, the classrooms they&#39;re taught in, campus location and activities!</p>

		<p>Fun fact: this site was constructed in HTML and PHP!</p>

		</br>
	</body>
</html>