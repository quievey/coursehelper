<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("sidebar.php"); ?> 
      <div id="content">
<?php
	session_start();
	
	session_destroy();
	
	header('location: index.php ');
	
?>
	</div>       
       
      </div>
		</div>
<?php include("footer.php"); ?> 