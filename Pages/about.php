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

		function displayPictureRight() {
			$pictures = array("Anime_Club.jpg", "Book_Store.jpg", "Cavaliers.jpg", "CS_Class.jpg", "CS_Class_2.jpg", "CSA.jpg", "Game_Club.jpg", "Library.jpg", "Music_Club.jpg", "Tabletop_Club.jpg");

			$index = rand(0, 9);

			$picture = $pictures[$index];

			#echo $picture;

			echo '<img style="float:right;" src="../Imgs/' . $picture . ' alt="Activities"/>';
		}

		function displayPictureLeft() {
			$pictures = array("Anime_Club.jpg", "Book_Store.jpg", "Cavaliers.jpg", "CS_Class.jpg", "CS_Class_2.jpg", "CSA.jpg", "Game_Club.jpg", "Library.jpg", "Music_Club.jpg", "Tabletop_Club.jpg");

			$index = rand(0, 9);

			$picture = $pictures[$index];

			#echo $picture;

			echo '<img style="float:left;" src="../Imgs/' . $picture . ' alt="Activities"/>';
		}
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>About the Program</title>
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body id="wrapper">
		<?php include "../header.php" ?>
	</body>

	<h3>Overview</h3>

	<p>This program is a 3-year technical program. It comprises of 6 semesters, covering a total of 44 courses.
	   The program is divided by the mandatory English, Second Language, Humanities &amp; Phys Ed courses, complementary courses
	   &amp; the concentration courses.</p>
	<p>In order to graduate from the progam, a student must complete all English, Second Language, Humanities &amp; Phys Ed courses.
	   As well as acheive a set amount of credits to successfully finish your studies. The courses will cover a variety of topics,
	   all in service of providing students with the tools they need to be software developers, systems specialists, computer repair &amp; more!</p>
	<p>Courses will cover subjects like Object Oriented Design, Game Development, Server-Side Processing, Systems Analysis, Distributed Computing,
	   IoT &amp; Database Management among others!</p>

	<h3>Classrooms</h3>

	<?php
		$schoolPic = new SchoolPictures();

		$schoolPic->displayPictureRight();
	?>

	<p>The classrooms students will be taught in range from many computer labs, traditional classrooms for lectures &amp; even some experimental
	   facilities for specific needs of some courses. The labs come equipped with numourous laptops, each with the programs needed to teach &amp;
	   learn the classes. Students are free to bring in there own hardware if they so choose! For courses like Configuring &amp; Maintaining Computers,
	   speciic hardware will be provided to the students for them to work manually on!</p>

	<h3>Clubrooms &amp; Extra Curricular Activities</h3>

	<p>In between class sessions &amp; assignments, students can enjoy a variety of activities to occupy their time &amp; stay active!</p>
	<?php
		$schoolPic = new SchoolPictures();

		$schoolPic->displayPictureLeft();
	?>
	<p>The school&#39;s student asscociation (the CSA) mandates many independent clubs, encompassing many subjects like gaming, tabletop, anime, robotics, filmmaking &amp; more!
	   Each club has a dedicated clubroom with it&#39;s own activities that occur throughout the semester. Students may sign up &amp; join in at anytime by speaking with the club president!</p>

	<p>Students may also choose to tryout for varsity sports teams, participate in CSA organized events, train in the weight room, study in the library &amp; receive tutoring!</p>
</html>