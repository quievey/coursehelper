      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item" style="text-align: center;">
            <!-- insert your sidebar items here -->
            <h3><?php echo $studentname; ?></h3>
			<p>
            <?php 
				$check = mysql_query("SELECT photo, gender FROM student WHERE id = $studentid");
				$photo = mysql_fetch_array($check);
				$photopath = $photo['photo'];
				$gender = $photo['gender'];
				
				
				if(strlen($photopath) >= 1){
					echo "<img src='uploaded/$photopath' title='$studentname' height='140' width='140'>";
				}else{
					
					if($gender == "Male"){
							echo "<a href='upload_photo.php'><img src='imagess/more/uploadm.jpg' alt='Click to upload profile photo' title='Click to upload profile photo'></a>";
					}else{
							echo "<a href='upload_photo.php'><img src='imagess/more/uploadf.jpg' alt='Click to upload profile photo' title='Click to upload profile photo'></a>";
					}
				
				}
			?>
			</p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        
        <div class="sidebar">
           <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>My aggregates</h3>
            <?php 
			$cluster = mysql_query("SELECT SUM(grade) AS sum FROM student_grades WHERE student_id = $studentid");
			
			$cluster = mysql_fetch_array($cluster);
			$cluster = $cluster['sum'];
			
			$minn = mysql_query("SELECT MIN(grade) AS minn FROM student_grades WHERE student_id = $studentid");
			
			$minn = mysql_fetch_array($minn);
			$minn = $minn['minn'];
			
			$aggregate = $cluster - $minn;
			
			echo "<center><h1>$aggregate</h1> Points</center>";
			
			?>

          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>