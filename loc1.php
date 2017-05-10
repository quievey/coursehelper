<?php
$sel = mysql_query("SELECT DISTINCT location FROM university LIMIT 5");
			echo (" Find out which Universities are available in your Location of choice");
			echo "<ul>";
			while($row=mysql_fetch_array($sel)){
				$name = $row['location'];
				//$id = $row['id'];
				
				echo "<li><a href='location.php?&locid=$name'> $name </a></li><br />";		
			}
			echo "</ul>";
			echo "<p />";
?>