<?php 
SESSION_START();
if(strlen($_SESSION['name']) >= 1)
	{
	include("header.php"); 
	}else
	{
	include("headers.php"); 
	}
?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php 
	
	if(strlen($_SESSION['name'])>= 1)
	{
	include("logsidebar.php"); 
	}else {
	include("sidebar.php"); 
	}
	
	?> 
      <div id="content">
<?php
		$uniid = $_GET['uniid'];
		$selec = mysql_query ("SELECT * FROM university WHERE id = $uniid"); 
				$dispp = mysql_fetch_array($selec);
				$uni_name = $dispp['name'];
				$website = $dispp['Website'];
				
				echo " <h1> $uni_name > $website </h1> <p />";
				
		$sel = mysql_query("SELECT * FROM course_code WHERE course_code.uni_id = $uniid");
			echo "<ol>";
			while($row=mysql_fetch_array($sel)){
				$course_id = $row['course_id'];
				$degreecode = $row['degreecode'];
				
				$sell = mysql_query("SELECT * FROM course WHERE id = $course_id");
				
				$disp = mysql_fetch_array($sell);
				
				$course_name = $disp['name'];
				$course_category = $disp['cat_id'];
				
				$sele= mysql_query(" SELECT * FROM categories WHERE id=$course_category");
			
				$dissp = mysql_fetch_array($sele);
				
				$cat_name = $dissp['name'];
				
				echo " <li> $course_name > $cat_name </li> <br />";
			}
			echo "</ol>";
	?>
</div>       
       
      </div>
    </div>
<?php include("footer.php"); ?> 