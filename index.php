<!DOCTYPE HTML>
<html>

<head>
  <title>Course Helper</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
   
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
  <link rel="stylesheet" href="nivo/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo/demo/style.css" type="text/css" media="screen" />
 
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Course<span class="logo_colour">Helper</span></a></h1>
          <h2>Simple Convenient Guide To Your Career.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
		  <li ><a href="career_guidance.php">Career Guidance</a></li>
          <li ><a href="contact_us.php">Contact Us</a></li>
          <li ><a href="logins.php">Student Login</a></li>
		  <li ><a href="reg2.php"> Sign Up</a></li>
        </ul>
      </div>
    </div>
	<div id="wrapper">
        

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                
				<img src="imagess/more/img7.jpg" data-thumb="imagess/more/img7.jpg" alt="" />
                <img src="imagess/more/img5.jpg" data-thumb="imagess/more/img5.jpg" alt="" title="" />
                <img src="imagess/more/img4.jpg" data-thumb="imagess/more/img4.jpg" alt="" data-transition="slideInLeft" />
                <img src="imagess/more/img3.jpg" data-thumb="imagess/more/img3.jpg" alt="" title="" />
            </div>
            
        </div>

    </div>
    <div id="site_content">
	

        <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Login</h3>
            <?php include("login.php");?>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="https://www.facebook.com/CourseHelper">Facebook</a></li>
              <li><a href="https://twitter.com/course_helper">Twitter</a></li>
              <li><a href="https://www.linkedin.com/profile/preview?vpa=pub&locale=en_US">LinkedIn</a></li>
              
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
		          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Help</h3> 
            Do you need help?<a href="#" class="help"> Click here<br> <img src="imagess/more/help.jpg"></a>
            <script src="assets/js/jquery.min.js"></script>
			  <script>
				$(document).ready(function(){
					$(document).find(".help").on("click",function(){
						window.open("Project1.pdf","");
					});
				});
			</script>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>Home</h1>
		<div class="cols">
			<div id="uni">
			<a href="coursess.php"><img src="imagess/university.jpg" alt="Universities" style="width:275px;height:52px;"></a>
			</div>
			<?php include("unicourses.php"); 
			echo '<a href="uniss.php"> More... <a>' ;
			?>
		</div>
		
		 <div class="cols">
			<div id="uni">
			<a href="uniss.php"><img src="imagess/courses.jpg" alt="Courses" style="width:275px;height:52px;"></a>
			</div>
			<?php include("courses1.php"); 
			echo '<a href="coursess.php"> More... <a>' ;
			?>
		</div>
		
		 <div class="cols">
			<div id="uni">
			<a href="catt.php"><img src="imagess/careers.jpg" alt="Career Field" style="width:275px;height:52px;"></a>
			</div>
			<?php include("categories.php");
			echo '<a href="catt.php"> More... <a>' ;
			?>
		</div>
		
		<div class="cols">
			<div id="uni">
			<a href="location.php"><img src="imagess/location.jpg" alt="Location" style="width:275px;height:52px;"></a>
			</div>
			<?php include("loc1.php"); 
			echo '<a href="locc.php"> More... <a>' ;
			?>
		</div>
       </div>       
       
      </div>
    </div>
        <p></p>
      </div>
    </div>
	 <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about_us.php">About Us</a> | <a href="career_guidance.php">Career Guidance</a>| <a href="contact_us.php">Contact Us</a> | <a href="logins.php">Student Login</a> | <a href="#" class="help">Help</a> | <a href="reg2.php"> Sign Up</a></p>
      <p>Copyright &copy CourseHelper 2015. Evelyne W. Wahome</p> 
    </div>
  </div>
  
   <script type="text/javascript" src="nivo/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="nivo/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <script>
	$(document).ready(function(){
		$(document).find(".help").on("click",function(){
			window.open("Project1.pdf","");
		});
	});
  </script>
  
  </body>
</html>
