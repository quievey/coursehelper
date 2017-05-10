<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      <div id="content">
<?php
$sel = mysql_query("SELECT * FROM course");
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
	</div>
	</div>
<?php include("footer.php"); ?> 