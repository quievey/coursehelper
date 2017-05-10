<?php include("header.php"); ?> 
<style>
#content{
	display:none;
}
.cluster{
	text-align: left;
	width: 620px;
	padding: 0px 0px 0px 5px;
	float: right;
	position: relative;
}
</style>
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      
	  <form class="cluster" method="post">
	          <select name='category' required>
			<option value="" selected>Select a Career Field</option>
					<?php
						$sel = mysql_query("SELECT * FROM categories");
						
						while($row=mysql_fetch_array($sel)){
							$name = $row['name'];
							$value = $row['id'];
							
							echo " <option value='$value'> $name </option>";
						}
					?>
					
				</select>
				
				<input type="submit" value="Next" name="cat">
		</form>
		<div id="content">
		
		<?php
			if(isset($_POST['cat'])){
				$catid = $_POST['category'];
				$studentid = $_SESSION['studentid'];
				
					$sel = mysql_query("SELECT * FROM categories WHERE id=$catid");
						
						$row=mysql_fetch_array($sel);
							$catname = $row['name'];
					echo "<h1><u>$catname</u></h1>";
						
				
				//CALCULATE AGGREGATE
					$cluster = mysql_query("SELECT SUM(grade) AS sum FROM student_grades WHERE student_id = $studentid");
			
					$cluster = mysql_fetch_array($cluster);
					$cluster = $cluster['sum'];
					
					$minn = mysql_query("SELECT MIN(grade) AS minn FROM student_grades WHERE student_id = $studentid");
					
					$minn = mysql_fetch_array($minn);
					$minn = $minn['minn'];
					
					$aggregate = $cluster - $minn;
				//END OF AGGREGATE
				
				//CLUSTER SUBJECTS FOR THIS CATEGORY
				
						//GET OPTION ONE
						
						$option = 1;
												
								$grade = mysql_query("SELECT subjects.name FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 1){
									$getsub = mysql_fetch_array($grade);
									//echo "Cluster Group 1 >>> ".$getsub['name']." <br /><br />";
									
								}else{
										$i = 1;
									//echo "Cluster Group 1 >>> ";
									while ($getsub = mysql_fetch_array($grade)){
										
										//echo " ".$getsub['name'];
										
										//echo $i == $count? "<br /><br /> " : " or ";
										
										$i++;
									}
									//echo "<br />";
								}
								
						//END OF OPTION ONE
						
						//GET OPTION TW0
						
						$option = 2;
												
								$grade = mysql_query("SELECT subjects.name, cat_subject.subject_id FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 0){
									//echo "Cluster Group 2 >>> ";
								}elseif($count == 1){
									$getsub = mysql_fetch_array($grade);
									//echo "Cluster Group 2 >>> ".$getsub['name']." ";
									
								}else{
										$i = 1;
									//echo "Cluster Group 2 >>> ";
									while ($getsub = mysql_fetch_array($grade)){
										
										//echo " ".$getsub['name'];
										
										$subid = $getsub['subject_id'];
										if($subid == 0){
											//echo "  ";
										}else{
											echo $i == $count? "<br /><br /> " : " or ";
										}
										
										
										$i++;
									}
									echo "<br />";
								}
								
								//GET GROUPS FOR OPTION TWO
								
								$grade = mysql_query("SELECT subject_cat.name FROM cat_subject, subject_cat WHERE cat_subject.cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.group_id = subject_cat.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 1){
									$getsub = mysql_fetch_array($grade);
									echo " or ".$getsub['name']." <br /><br />";
									
								}elseif($count > 1){
										$i = 1;
									echo " or ";
									while ($getsub = mysql_fetch_array($grade)){
										
										echo " ".$getsub['name'];
										
										echo $i == $count? "<br /><br /> " : " or ";
										
										$i++;
									}
									echo "<br />";
								}else{
									echo" <br />";
								}
								
						//END OF OPTION TWO
						
						//GET OPTION THREE
						
						$option = 3;
												
								$grade = mysql_query("SELECT subjects.name, cat_subject.subject_id FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 0){
									echo "Cluster Group 3 >>>";
								}elseif($count == 1){
									$getsub = mysql_fetch_array($grade);
									echo "Cluster Group 3 >>> ".$getsub['name']." ";
									
								}else{
										$i = 1;
									echo "Cluster Group 3 >>> ";
									while ($getsub = mysql_fetch_array($grade)){
										
										echo " ".$getsub['name'];
										
										$subid = $getsub['subject_id'];
										if($subid == 0){
											echo "  ";
										}else{
											echo $i == $count? "<br /><br /> " : " or ";
										}
										
										
										$i++;
									}
									echo "<br />";
								}
								
								//GET GROUPS FOR OPTION THREE
								
								$grade = mysql_query("SELECT subject_cat.name FROM cat_subject, subject_cat WHERE cat_subject.cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.group_id = subject_cat.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 1){
									$getsub = mysql_fetch_array($grade);
									echo " or ".$getsub['name']." <br /><br />";
									
								}elseif($count > 1){
										$i = 1;
									echo " or ";
									while ($getsub = mysql_fetch_array($grade)){
										
										echo " ".$getsub['name'];
										
										echo $i == $count? "<br /><br /> " : " or ";
										
										$i++;
									}
									echo "<br />";
								}else{
									echo" <br />";
								}
								
						//END OF OPTION THREE
						
						//GET OPTION FOUR
						
						$option = 4;
												
								$grade = mysql_query("SELECT subjects.name, cat_subject.subject_id FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 0){
									echo "Cluster Group 4 >>> ";
								}elseif($count == 1){
									$getsub = mysql_fetch_array($grade);
									echo "Cluster Group 4 >>> ".$getsub['name']." ";
									
								}else{
										$i = 1;
									echo "Cluster Group 4 >>> ";
									while ($getsub = mysql_fetch_array($grade)){
										
										echo " ".$getsub['name'];
										
										$subid = $getsub['subject_id'];
										if($subid == 0){
											echo "  ";
										}else{
											echo $i == $count? "<br /><br /> " : " or ";
										}
										
										
										$i++;
									}
									echo "<br />";
								}
								
								//GET GROUPS FOR OPTION TWO
								
								$grade = mysql_query("SELECT subject_cat.name FROM cat_subject, subject_cat WHERE cat_subject.cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.group_id = subject_cat.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 1){
									$getsub = mysql_fetch_array($grade);
									echo " or ".$getsub['name']." <br /><br />";
									
								}elseif($count > 1){
										$i = 1;
									echo " or ";
									while ($getsub = mysql_fetch_array($grade)){
										
										echo " ".$getsub['name'];
										
										echo $i == $count? "<br /><br /> " : " or ";
										
										$i++;
									}
									echo "<br />";
								}else{
									echo" <br />";
								}
								
						//END OF OPTION FOUR
						
					
				//END OF CLUSTER SUBJECTS
				
					
						//GET OPTION ONE GRADE
						
						$option = 1;
												
								$grade = mysql_query("SELECT subjects.name, subjects.id FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count == 1){
									$getsub = mysql_fetch_array($grade);
									
									$subid = $getsub['id'];
									$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid AND student_grades.grade = grades.value");
									
									$row = mysql_fetch_array($sel);
									
									$gradeone = $row['grade'];
									$gradename= $row['name'];
									$option1 = $row['id'];
									
									echo "Selected Cluster Group 1 Subject >>> ".$getsub['name']." ".$gradename." (".$gradeone." points) <br /><br />";
									
								}else{
										$i = 0;
							
									$gradee = array();
									$gradenamee = array();
									$subjectid = array();
									$gradeid = array();
									
									while ($getsub = mysql_fetch_array($grade)){
										
										$subid = $getsub['id'];
										$subjectid[$i] = $subid;
									$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid AND student_grades.grade = grades.value");
									
									$row = mysql_fetch_array($sel);
									
									$gradee[$i] = $row['grade'];
									$gradenamee[$i]= $row['name'];
									$gradeid[$i] = $row['id'];
									
										
										$i++;
									}
									
									$gradeone= max($gradee);
									
									foreach($gradee as $x => $x_value) {
										 if($gradeone == $x_value){
											$key = $x;
										 }
									}
									
									$gradename = $gradenamee[$key];
									$subject1 = $subjectid[$key];
									$option1 = $gradeid[$key];
									
										$getsubname = MYSQL_QUERY("SELECT name FROM subjects WHERE id = $subject1");
										$getsubname = MYSQL_FETCH_ARRAY($getsubname);
									
									echo "Selected Cluster Group 1 Subject >>> ".$getsubname['name']." ".$gradename." (".$gradeone." points) <br /><br />";
									echo "<br />";
								}
								
						//END OF OPTION ONE GRADE
						
						
						//GET OPTION TWO GRADE
						
						$option = 2;
												
								$grade = mysql_query("SELECT subjects.name, cat_subject.subject_id FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								$i = 0;
							
									$gradee = array();
									$gradenamee = array();
									$subjectid = array();
									$gradeid = array();
									
								if($count >= 1){
								
									
									while ($getsub = mysql_fetch_array($grade)){
										
									
										
										$subid = $getsub['subject_id'];
										
										$subjectid[$i] = $subid;
									
									$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid AND student_grades.id != $option1 AND student_grades.grade = grades.value");
									
									$row = mysql_fetch_array($sel);
									
									$gradee[$i] = $row['grade'];
									$gradenamee[$i]= $row['name'];
									$gradeid[$i] = $row['id'];
									
										
										$i++;
										
									}
									
									
									
								}
								
								//GET GROUPS FOR OPTION TWO
								
								$grade = mysql_query("SELECT subject_cat.* FROM cat_subject, subject_cat WHERE cat_subject.cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.group_id = subject_cat.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count >= 1){
									
									while ($getsub = mysql_fetch_array($grade)){
										$subject_cat_id = $getsub['id'];
										
										$subjects = mysql_query("SELECT * FROM 	subjects WHERE category = $subject_cat_id");
										
										if(mysql_num_rows($subjects) >= 1){
											while($getsubid = mysql_fetch_array($subjects)){
													$subid = $getsubid['id'];
													
														$subjectid[$i] = $subid;
													
													$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid AND student_grades.id != $option1 AND student_grades.grade = grades.value");
													
													$row = mysql_fetch_array($sel);
													
													$gradee[$i] = $row['grade'];
													$gradenamee[$i]= $row['name'];
													$gradeid[$i] = $row['id'];
													
														
														$i++;
													
											}
										}
									}					
										
																		
								}
								
									$gradetwo= max($gradee);
									
									foreach($gradee as $x => $x_value) {
										 if($gradetwo == $x_value){
											$key = $x;
										 }
									}
									
									$gradename = $gradenamee[$key];
									$subject2 = $subjectid[$key];
									$option2 = $gradeid[$key];
									
										$getsubname = MYSQL_QUERY("SELECT name FROM subjects WHERE id = $subject2");
										$getsubname = MYSQL_FETCH_ARRAY($getsubname);
									
									echo "Selected Cluster Group 2 Subject >>> ".$getsubname['name']." ".$gradename." (".$gradetwo." points) <br /><br />";
									echo "<br />";
							
						
						//END OF OPTION TWO GRADE
						
							
						//GET OPTION THREE GRADE
						
						$option = 3;
												
								$grade = mysql_query("SELECT subjects.name, cat_subject.subject_id FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								$i = 0;
							
									$gradee = array();
									$gradenamee = array();
									$subjectid = array();
									$gradeid = array();
									
								if($count >= 1){
								
									
									while ($getsub = mysql_fetch_array($grade)){
										
									
										
										$subid = $getsub['subject_id'];
										
										$subjectid[$i] = $subid;
									
									$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid  AND student_grades.id != $option1 AND student_grades.id != $option2 AND student_grades.grade = grades.value");
									
									$row = mysql_fetch_array($sel);
									
									$gradee[$i] = $row['grade'];
									$gradenamee[$i]= $row['name'];
									$gradeid[$i] = $row['id'];
									
										
										$i++;
										
									}
									
									
									
								}
								
								//GET GROUPS FOR OPTION TWO
								
								$grade = mysql_query("SELECT subject_cat.* FROM cat_subject, subject_cat WHERE cat_subject.cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.group_id = subject_cat.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count >= 1){
									
									while ($getsub = mysql_fetch_array($grade)){
										$subject_cat_id = $getsub['id'];
										
										$subjects = mysql_query("SELECT * FROM 	subjects WHERE category = $subject_cat_id");
										
										if(mysql_num_rows($subjects) >= 1){
											while($getsubid = mysql_fetch_array($subjects)){
													$subid = $getsubid['id'];
													
														$subjectid[$i] = $subid;
													
													$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid AND student_grades.id != $option1 AND student_grades.id != $option2 AND student_grades.grade = grades.value");
													
													$row = mysql_fetch_array($sel);
													
													$gradee[$i] = $row['grade'];
													$gradenamee[$i]= $row['name'];
													$gradeid[$i] = $row['id'];
													
														
														$i++;
													
											}
										}
									}					
										
																		
								}
								
									$gradethree= max($gradee);
									
									foreach($gradee as $x => $x_value) {
										 if($gradethree == $x_value){
											$key = $x;
										 }
									}
									
									$gradename = $gradenamee[$key];
									$subject3 = $subjectid[$key];
									$option3 = $gradeid[$key];
									
										$getsubname = MYSQL_QUERY("SELECT name FROM subjects WHERE id = $subject3");
										$getsubname = MYSQL_FETCH_ARRAY($getsubname);
									
									echo "Selected Cluster Group 3 Subject >>> ".$getsubname['name']." ".$gradename." (".$gradethree." points) <br /><br />";
									echo "<br />";
							
						
						//END OF OPTION THREE 
						
							
						//GET OPTION FOUR GRADE
						
						$option = 4;
												
								$grade = mysql_query("SELECT subjects.name, cat_subject.subject_id FROM cat_subject, subjects WHERE cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.subject_id = subjects.id ");
								
								$count = mysql_num_rows($grade);
								
								$i = 0;
							
									$gradee = array();
									$gradenamee = array();
									$subjectid = array();
									$gradeid = array();
									
								if($count >= 1){
								
									
									while ($getsub = mysql_fetch_array($grade)){
										
									
										
										$subid = $getsub['subject_id'];
										
										$subjectid[$i] = $subid;
									
									$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid AND student_grades.id != $option1 AND student_grades.id != $option2 AND student_grades.id != $option3 AND student_grades.grade = grades.value");
									
									$row = mysql_fetch_array($sel);
									
									$gradee[$i] = $row['grade'];
									$gradenamee[$i]= $row['name'];
									$gradeid[$i] = $row['id'];
									
										
										$i++;
										
									}
									
									
									
								}
								
								//GET GROUPS FOR OPTION TWO
								
								$grade = mysql_query("SELECT subject_cat.* FROM cat_subject, subject_cat WHERE cat_subject.cat_id = $catid AND cat_subject.option_id = $option AND cat_subject.group_id = subject_cat.id ");
								
								$count = mysql_num_rows($grade);
								
								if($count >= 1){
									
									while ($getsub = mysql_fetch_array($grade)){
										$subject_cat_id = $getsub['id'];
										
										$subjects = mysql_query("SELECT * FROM 	subjects WHERE category = $subject_cat_id");
										
										if(mysql_num_rows($subjects) >= 1){
											while($getsubid = mysql_fetch_array($subjects)){
													$subid = $getsubid['id'];
													
														$subjectid[$i] = $subid;
													
													$sel = mysql_query("SELECT student_grades.*, grades.name FROM student_grades, grades WHERE student_grades.student_id = $studentid AND student_grades.subject_id = $subid AND student_grades.id != $option1 AND student_grades.id != $option2  AND student_grades.id != $option3 AND student_grades.grade = grades.value");
													
													$row = mysql_fetch_array($sel);
													
													$gradee[$i] = $row['grade'];
													$gradenamee[$i]= $row['name'];
													$gradeid[$i] = $row['id'];
													
														
														$i++;
													
											}
										}
									}					
										
																		
								}
								
									$gradefour= max($gradee);
									
									foreach($gradee as $x => $x_value) {
										 if($gradefour == $x_value){
											$key = $x;
										 }
									}
									
									$gradename = $gradenamee[$key];
									$subject4 = $subjectid[$key];
									$option4 = $gradeid[$key];
									
										$getsubname = MYSQL_QUERY("SELECT name FROM subjects WHERE id = $subject4");
										$getsubname = MYSQL_FETCH_ARRAY($getsubname);
									
									echo "Selected Cluster Group 4 Subject >>> ".$getsubname['name']." ".$gradename." (".$gradefour." points) <br /><br />";
									echo "<br />";
							
						
						//END OF OPTION THREE GRADE
						
						//CALCULATE CLUSTER POINTS
						
						$cluster = $gradeone + $gradetwo + $gradethree + $gradefour;
						
						echo "Total Cluster Suject Points = ".$cluster;
						
						$weight = sqrt(($cluster/48) * ($aggregate/84) ) * 48;
						
						$weight = round($weight, 1);
						
						echo "<br /><br />Total Cluster Weight = ".$weight;
						
						$weight = mysql_query("SELECT * FROM clusterpts WHERE clusterpts.cat_id = $catid AND clusterpts.cluster <= $weight");
						
							
							
						if(mysql_num_rows($weight)>= 1){
						echo "</div>";
						echo "<div class='cluster' id='printcanvas'>";
							echo "<br /><h1>Courses You have qualified for</h1><ol>";
							
							while($getunicode = mysql_fetch_array($weight)){
								$degreecode = $getunicode['degreecode'];
								$year = $getunicode['year'];
								$cluster = $getunicode['cluster'];
								
								$course = mysql_query("SELECT course.name AS coursename, university.name AS uniname, university.location AS uniloc, university.Website AS uniweb FROM course_code, course, university WHERE course_code.degreecode = $degreecode AND course_code.uni_id = university.id AND course_code.course_id = course.id");
								
								$getcourse = mysql_fetch_array($course);
								
								$coursename = $getcourse['coursename'];
								$uniname = $getcourse['uniname'];
								$uniloc = $getcourse['uniloc'];
								$uniweb = $getcourse['uniweb'];
								
								
								
								echo "<li>$uniname | $coursename | $year | $cluster </li>";
								
							}
							echo "</ol>";
							echo "<button class='print'>Print</button>";
							echo "</div>";
							
						}else{
							echo "<h1>Sorry, you have not qualified for any course under this category.</h1>";
						}
						
						
			}
		?>
		
		
		<br />
          </div>       
       
      </div>
    </div>
	<script src="assets/js/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$(document).find(".print").on("click",function(){
			
			var btn='<button onClick="window.print()">Pdf print</button>';
			var content = $(document).find("#printcanvas").html()+btn;
			//console.log(content);
			var win=window.open("","Report");
			var canvas= win.document.body;
			
			$(canvas).html(content);
			//var printBtn = $(canvas).find(".print");
			console.log(printBtn);
			
			
			
		});
		
	});
		
	</script>
<?php include("footer.php"); ?> 