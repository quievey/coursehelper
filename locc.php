<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      <div id="content">
<?php
			$sel = mysql_query("SELECT DISTINCT location FROM university");
			echo (" Find out which Universities are available in your Location of choice");
			echo "<ul>";
			while($row=mysql_fetch_array($sel)){
				$name = $row['location'];
				
				echo "<li> <a href='location.php?&locid=$name'>  $name </a></li> <br />";				
			}
			echo "</ul>";
			echo "<p>";
			//echo "<a href="courses.php"> More </a> ";
	?>
	</div>
	</div>
<?php include("footer.php"); ?> 