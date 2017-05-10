<?php
$sel = mysql_query("SELECT * FROM categories LIMIT 5");
			echo (" Find out which Courses are available in the Career Field of your choice");
			echo "<ul>";
			while($row=mysql_fetch_array($sel)){
				$name = $row['name'];
				$id = $row['id'];
				
				echo "<li><a href='cat.php?&catid=$id'>  $name </a></li><br />";		
			}
			echo "</ul>";
			
			echo "<p>";
?>