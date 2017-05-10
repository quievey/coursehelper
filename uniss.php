<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      <div id="content">
<?php
			$sel = mysql_query("SELECT * FROM university");
			echo (" Find out which Courses are available in your University of choice");
			echo "<ul>";
			while($row=mysql_fetch_array($sel)){
				$name = $row['name'];
				$id = $row['id'];
				
				echo "<li> <a href='courses.php?&uniid=$id'>  $name </a></li> <br />";				
			}
			echo "</ul>";
			echo "<p>";
			//echo "<a href="courses.php"> More </a> ";
	?>
	</div>
	</div>
<?php include("footer.php"); ?> 