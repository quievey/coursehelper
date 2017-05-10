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
        <!-- insert the page content here -->
        <h1>Agricultural science</h1>
        <p>Agricultural science is a broad multidisciplinary field of biology that encompasses the parts of exact, natural, economic and social sciences that are used in the practice and understanding of agriculture. (Veterinary science, but not animal science, is often excluded from the definition.) Agricultural scientists study commercial plants, animals and cultivation techniques to improve the productivity and sustainability of farms and agricultural industries.
		<br /><a href="agricsci.php">Read more</a>
		</p>
        <h1> Computer / Computing / IT and Information Sciences </h1>
	<p> Information and Computer Science (ICS) or Computer and Information Science (CIS) (plural forms, i.e. Sciences, may also be used) is a field that emphasizes both computing and informatics, upholding the strong association between the fields of information sciences and computer sciences and treating computers as a tool rather than a field.
	<br /><a href="compu.php">Read more</a></p>
	<h1>Business & Commerce / Accounting </h1> 
	<p>Management and Commerce is the study of the theory and practice of planning, directing, organizing, motivating and coordinating the human and material resources of private and public organizations and institutions. It includes the merchandising and provision of goods and services and personal development.
		<br /><a href="busi.php">Read more</a></p>
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
