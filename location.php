<?php 
SESSION_START();
if(strlen($_SESSION['name']) >= 1)
	{
	include("header.php"); 
	}else
	{
	include("headers.php"); 
	}  ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php 
	if(strlen($_SESSION['name'])>= 1)
	{
	include("logsidebar.php"); 
	}else {
	include("sidebar.php"); 
	}  ?> 
      <div id="content">
        
<?php
		$locid = $_GET['locid'];
			
		$selec = mysql_query ("SELECT DISTINCT location FROM university WHERE location = '$locid' "); 
				$dispp = mysql_fetch_array($selec);
				$loc_name = $dispp['location'];
				
				echo "<h1>  $loc_name </h1> <p />";
				
		$sel = mysql_query("SELECT * FROM university WHERE location = '$locid'");
			echo "<ol>";
			while($row=mysql_fetch_array($sel)){
				$id = $row['id'];
				$name = $row['name'];
							
				
				echo "<li>  $name </li> <br />";
			}
			echo "</ol>";
	?>
  </div>       
       
      </div>
    </div>
<?php include("footer.php"); ?> 