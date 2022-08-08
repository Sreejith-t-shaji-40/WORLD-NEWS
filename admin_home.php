<!DOCTYPE HTML>
<html>
	<head>
		<title>ADMIN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php
        include 'world_connection.php';
        //echo $_SESSION['admin_id'];
        if(!empty($_SESSION)){

        
        if($_SESSION['admin_id']!=1 )
           {
              echo $_SESSION['admin_id'];
              ?>
          <!-- <script> window.location.href = "http://localhost/world_news/login.php";</script>   -->
           <?php   

           }
       else
       {

        
       ?>
		
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Header -->
								<header id="header">
									<a href="admin_home.php" class="logo"><strong>Editor by</strong>WROLD TODAY</a>
									
								</header>
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>THE WROLD TODAY<br /></h1>
											<p>North East West South</p>
										</header>
										<p>Sidhu Moose Wala was shot with seven bullets, two more singers have high threat perception, say probe agencies</p>
										<ul class="actions">
											<li><a href="#" class="button big">Learn More</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/crime.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>TODAY'S UPDATES</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>CRIME</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>SPORTS</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>DAILY FEEDS</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>EDUCATION</h3>
												<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											</div>
										</article>
									</div>
								</section>



						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="admin_home.php">HOMEPAGE</a></li>
										<li><a href="table.php">EDITOR'S TABLE</a></li>
										<li><a href="category.php">ADD CATEGORY</a></li>
										<li><a href="generic.html">JOURNALIST</a></li>
										<li><a href="elements.html">VIEWERS</a></li>
										<li><a href="discussion_list.php">DISCUSSION</a></li>
										<li><a href="feedback.html">FEEDBACK</a></li>
										<li><a href="logout.php">LOGOUT</a></li>
								
									</ul>
								</nav>

						

						

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<?php
       }
    }

       else
       {
           
       }
       ?>
		</body>
</html>