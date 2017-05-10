<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Left Sidebar - Strongly Typed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="">Login</a></h1>
							<p>
								<?php

									session_start();
									mysql_connect("localhost", "root", "");
									mysql_select_db("project");

									if(isset($_POST['sub']))
									{
										$email = $_POST['email'];
										$pass = $_POST['password'];
										
										if(empty($email)){
											$erroremail = "Enter your email address.";
										}elseif(empty($pass)){
											$errorpassword = "Enter your password";
										}else{
											
												
											
											$check = mysql_num_rows($query);
											
											if($check >= 1){
												$row=mysql_fetch_array($query);
												
												$studentid = $row['id'];
												$name = $row['name'];
												
												$_SESSION['studentid'] = $studentid;
												$_SESSION['name'] = $name;
												
												header("location: subjectreg.php");
													
												
											}else{
												echo "Login Failed.";
											}
											
										}
										
									}
									 ?>
									<form method="post">
									<p>Email Address <br><input type="text" size="25" name="email"><br><?php if(isset($erroremail)) echo "<span style='color:red;'>".$erroremail."</span>"; ?>
									<p>Password<br> <input type="password" name="password"><br><?php if(isset($errorpassword)) echo "<span style='color:red;'>".$errorpassword."</span>"; ?>
									<p><input type="submit" value="Register" name="sub">
									</form>

							
							</p>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon fa-home" href="index.html"><span>Introduction</span></a></li>
									<li>
										<a href="#" class="icon fa-bar-chart-o"><span>Dropdown</span></a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a class="icon fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
									<li><a class="icon fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
									<li><a class="icon fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
								</ul>
							</nav>

					</div>
				</div>

		
			<!-- Footer -->
				<div id="footer-wrapper">
					
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>