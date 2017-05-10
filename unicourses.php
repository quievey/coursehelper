
<?php
			$sel = mysql_query("SELECT * FROM university LIMIT 5");
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
