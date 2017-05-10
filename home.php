<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      <div id="content">
        <div class="cols">
			<div id="uni">
				<a href="coursess.php"><img src="imagess/university.jpg" alt="Universities" style="width:275px;height:52px;"></a>
			</div>
			<?php include("unicourses.php"); 
			echo '<a href="uniss.php"> More... <a>' ;
			?>
		</div>
		
		 <div class="cols">
			<div id="uni">
			<a href="uniss.php"><img src="imagess/courses.jpg" alt="Courses" style="width:275px;height:52px;"></a>
			</div>
			<?php include("courses1.php"); 
			echo '<a href="coursess.php"> More... <a>' ;
			?>
		</div>
		
		 <div class="cols">
			<div id="uni">
			<a href="catt.php"><img src="imagess/careers.jpg" alt="Career Field" style="width:275px;height:52px;"></a>
			</div>
			<?php include("categories.php");
			echo '<a href="catt.php"> More... <a>' ;
			?>
		</div>
		
		<div class="cols">
			<div id="uni">
			<a href="location.php"><img src="imagess/location.jpg" alt="Location" style="width:275px;height:52px;"></a>
			</div>
			<?php include("loc1.php"); 
			echo '<a href="locc.php"> More... <a>' ;
			?>
		</div>
          </div>       
       
      </div>
    </div>
<?php include("footer.php"); ?> 