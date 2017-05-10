<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      <div id="content">
	 <?php 
	  $sel = mysql_query("SELECT * FROM categories");
			echo (" Find out which Courses are available in your dream Career Field");
			echo "<ul>";
			while($row=mysql_fetch_array($sel)){
				$name = $row['name'];
				$id = $row['id'];
				
				echo "<li> <a href='cat.php?&catid=$id'>  $name </a></li> <br />";				
			}
			echo "</ul>";
			echo "<p>";
	  ?>
	</div>
	</div>
<?php include("footer.php"); ?> 