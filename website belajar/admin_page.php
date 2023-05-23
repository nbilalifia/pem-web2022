<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belber - Belajar bersama</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<a href="index.php" class="logo">
			<img src="img/logo.png">
		</a>

		<ul class="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="categories.php">Categories </a></li>
			<li><a href="courses.php">Courses </a></li>
			<li><a href="about.php">Discussion</a></li>
		</ul>

		<div class="header-icons">
			<a href="login.php"><i class='bx bx-user'></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>

	<section class="home" id="home">
		<div class="home-text">
			<h6>Selamat Datang Tutor <?php echo $_SESSION['admin_name'] ?><i class='bx bxs-check-circle'></i> </h6>
			<h1>Belajar Bersama Yuk</h1>
			<p>Pelajari apa yang kamu mau hanya dalam satu website</p>
			<a href="categories.html"><button class="button" style="vertical-align:middle"><span>Mulai Sekarang! </span></button></a>
		</div>

		<div class="home-img">
			<img src="img/home.png">
		</div>

	</section>

	<section class="categories" id="categories">
		<div class="center-text">
			<h5>CATEGORIES</h5>
			<h2>Top Categories</h2>
		</div>
	
		<div class="categories-content">
			<a href="#">
				<div class="box">
				<img src="img/language.png">
				<h3>Language</h3>
				<p>5 Courses</p>
				</div>
			</a>
	
			<a href="#">
				<div class="box">
					<img src="img/physics.png">
					<h3>Physics</h3>
					<p>5 Courses</p>
				</div>
			</a>
	
			<a href="#">
				<div class="box">
					<img src="img/sport.png">
					<h3>Sport</h3>
					<p>5 Courses</p>
				</div>
			</a>
			
			<div class="main-btn">
				<a href="categories.html" class="btn">All Categories</a>
			</div>
	
		</div>
	
	</section>

	<section class="homecourses" id="homecourses">
		<div class="center-text">
			<h5>COURSES</h5>
			<h2>Top Courses</h2>
		</div>
	
		<div class="home-courses-content">
			<div class="row">
				<img src="img/japan.png">
				<div class="courses-text">
					<h5>RP 229.000</h5>
					<h3>Mahir Bahasa Jepang N3</h3>
					<div class="rating">
						<div class="star">
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
						</div>
						<div class="review">
							<p>{5 Reviews}</p>
						</div>
					</div>
				</div>
			</div>
	
			<div class="row">
				<img src="img/ps.png">
				<div class="courses-text">
					<h5>RP 110.000</h5>
					<h3>Menguasai Public Speaking Hanya Dalam 1 Jam</h3>
					<div class="rating">
						<div class="star">
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
						</div>
						<div class="review">
							<p>{5 Reviews}</p>
						</div>
					</div>
				</div>
			</div>
	
			<div class="row">
				<img src="img/math.jpg">
				<div class="courses-text">
					<h5>RP 95.000</h5>
					<h3>Pandai Matematika untuk Kelas 3 SMP</h3>
					<div class="rating">
						<div class="star">
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
							<a href="#"><i class='bx bxs-star' ></i></a>
						</div>
						<div class="review">
							<p>{5 Reviews}</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="course-btn">
				<a href="courses.html" class="coursebtn">All Courses</a>
			</div>

	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>