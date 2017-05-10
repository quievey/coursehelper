	$subject_id = $getsub['subject_id'];
									
										$grades = mysql_query("SELECT grade FROM student_grades WHERE 	student_id = $studentid AND subject_id = $subject_id");
										
										 $getgrades = mysql_fetch_array($grades);
										 
										 $grades[$i] = $getgrades['grade'];