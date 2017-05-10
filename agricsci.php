<!DOCTYPE HTML>
<html>

<head>
  <title>CourseHelper - Career Guidance</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
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
          <li ><a href="index.php">Home</a></li>
          <li ><a href="about_us.php">About Us</a></li>
		  <li class="selected"><a href="career_guidance.php">Career Guidance</a></li>
          <li ><a href="contact_us.php">Contact Us</a></li>
		  <li ><a href="logins.php">Student Login</a></li>
		  <li ><a href="reg2.php"> Sign Up</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
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
             <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
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
        <!-- insert the page content here -->
        <h1>Agricultural science</h1>
		<img src="imagess/more/agri.jpg" >
        <p>Agricultural science is a broad multidisciplinary field of biology that encompasses the parts of exact, natural, economic and social sciences that are used in the practice and understanding of agriculture. (Veterinary science, but not animal science, is often excluded from the definition.) Agricultural scientists study commercial plants, animals and cultivation techniques to improve the productivity and sustainability of farms and agricultural industries.</p>
        <h5>Personal Requirements: </h5>
		<ul>
          <li>able to analyse and solve problems </li>
          <li>interested in science and the environment </li>
          <li>able to make accurate observations </li>
          <li>good oral and written communication skills </li>
		  <li>good organisational skills, with supervisory ability </li>
		  <li>able to work as part of a team </li>
        </ul>
		<h3> Courses Available</h3>
        <p>The courses available in this field include : Bachelor Of Arts(Spatial Planning),  Bachelor Of Science (Agribusiness Management),  Bachelor Of Science (Agriculture),  Bachelor Of Science (Animal Science) , Bachelor Of Science (Horticulture)  Bachelor Of Science (Botany)  etc. </p>
		<h3> Career Opportunities</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Home</a> | <a href="about_us.php">About Us</a> | <a href="career_guidance.php">Career Guidance</a>| <a href="contact_us.php">Contact Us</a> | <a href="logins.php">Student Login</a> | <a href="#" class="help">Help</a> | <a href="reg2.php"> Sign Up</a></p>
      <p>Copyright &copy CourseHelper 2015. Evelyne W. Wahome</p>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
  <script>
	$(document).ready(function(){
		$(document).find(".help").on("click",function(){
			window.open("Project1.pdf","");
		});
	});
  </script>
</body>
</html>
