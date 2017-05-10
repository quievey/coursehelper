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
	<?php if(strlen($_SESSION['name'])>= 1)
	{
	include("logsidebar.php"); 
	}else {
	include("sidebar.php"); 
	} ?> 
      <div id="content">
<?php
		$catid = $_GET['catid'];
		$selec = mysql_query ("SELECT * FROM categories WHERE id = $catid"); 
				$dispp = mysql_fetch_array($selec);
				$cat_name = $dispp['name'];
				
				echo "  <h1> $cat_name </h1> <p />";

		$sel = mysql_query("SELECT * FROM course WHERE course.cat_id = $catid");
			echo "<ol>";
			while($row=mysql_fetch_array($sel)){
				$id = $row['id'];
				$name = $row['name'];
				//$website = $disp['website'];
			
				echo " <li> $name  </li> <br />";
				
			}
			echo "</ol>";
	?>
 </div>       
       
      </div>
    </div>
<?php include("footer.php"); ?> 