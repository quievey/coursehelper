<?php
$sel = mysql_query("SELECT * FROM course LIMIT 5");
		echo (" Find out which Universities are offering your dream Course");
		echo "<ul>";
	while($row=mysql_fetch_array($sel)){
	$name = $row['name'];
	$id = $row['id'];
				
	echo "<li><a href='unis.php?&courseid=$id'>  $name </a> </li> <br />";		
	}
	echo "</ul>";
	echo "<p>";
?>