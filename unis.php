<?php
 SESSION_START();
if(strlen($_SESSION['name']) >= 1)
	{
	include("header.php"); 
	}else
	{
	include("headers.php"); 
	} ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php if(strlen($_SESSION['name'])>= 1)
	{
	include("logsidebar.php"); 
	}else {
	include("sidebar.php"); 
	}; ?> 
      <div id="content">
<?php
			$courseid = $_GET['courseid'];
			
			$selec = mysql_query ("SELECT * FROM course WHERE id = $courseid"); 
				$dispp = mysql_fetch_array($selec);
				$course_name = $dispp['name'];
				
				echo "<h1>  $course_name </h1> <p />";
				
		$sel = mysql_query("SELECT * FROM course_code WHERE course_code.course_id = $courseid");
			echo "<ol>";
			while($row=mysql_fetch_array($sel)){
				$uni_id = $row['uni_id'];
				$degreecode = $row['degreecode'];
				
				$sell = mysql_query("SELECT * FROM university WHERE id = $uni_id");
				
				$disp = mysql_fetch_array($sell);
				
				$uni_name = $disp['name'];
				$website = $disp['Website'];
			
				
				
				echo "  <li> $uni_name > $website> </li> <br />";
			}
			echo "</ol>";
	?>
	</div>       
       
      </div>
    </div>
<?php include("footer.php"); ?> 