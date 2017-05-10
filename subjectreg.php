<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      <div id="content">

<?php

$name =$_SESSION['name'];
//var_dump($_SESSION);

$cur_student_id=$_SESSION['studentid'];
//$subquery="SELECT subjects.name AS subname,grades.name AS grade FROM `student_grades` WHERE `student_id`='$cur_student_id' //JOIN grades on student_grades.grade=grades.id JOIN subjects ON subjects.id =student_grades.subject_id";
$subquery =" SELECT * FROM `student_grades` WHERE `student_id`='$cur_student_id'";
//echo $subquery;
$reg_status = mysql_query($subquery);
$row=mysql_fetch_array($reg_status);




if((sizeOf($row)<2) OR isset($_GET['edit'])){
	
		
//echo "Hi, $name || <a href='logout.php' >Logout</a>";

if(isset($_POST['sub'])){


$eng = $_POST['eng'];
$kis = $_POST['kis'];
$math = $_POST['mat'];
$chem = $_POST['che'];
$bio = $_POST['bio'];
$phyc= $_POST['phy'];
$subone = $_POST['subone'];
$humone = $_POST['humone'];
$subtwo = $_POST['subtwo'];
$humtwo = $_POST['humtwo'];
$subthree = $_POST['subthree'];
$humthree= $_POST['humthree'];
$subjone = $_POST['subjone'];
$appone = $_POST['appone'];
$subjtwo = $_POST['subjtwo'];
$apptwo = $_POST['apptwo'];
$subjthree = $_POST['subthree'];
$appthree= $_POST['appthree'];
$groupone = $_POST['groupone'];
$grone = $_POST['grone'];
$grouptwo = $_POST['grouptwo'];
$grtwo = $_POST['grtwo'];
$groupthree = $_POST['groupthree'];
$grthree= $_POST['grthree'];
	if(empty($eng)){
		$erroreng = "Please select Grade for English.";
	}elseif(empty($kis)){
		$errorkis = "Please select Grade for Kiswahili.";
	}elseif(empty($math)){
		$errormat = "Please select Grade for Mathematics.";
	}elseif((empty($chem) && empty($bio)) || (empty($chem) && empty($phyc)) || (empty($phyc) && empty($bio))){
		$errorsciences = "Please select Grade for at least two sciences.";
	}elseif (empty($humone) && empty($humtwo) && empty($humthree)){
		$errorhumanities = "Please select Grade for at least one Humanity.";
	}else{
			
			$studentid = $_SESSION['studentid'];
			
			function store_grades($subid, $gradee){
				$studentidd = $_SESSION['studentid'];
				$insert = mysql_query("INSERT INTO student_grades(student_id, subject_id, grade) VALUES ($studentidd, $subid, $gradee)");
				
				if(!$insert){
					echo "An unexpected problem occured. Data not saved.";
					
					$error = 1;
				}else{
					$error = 0;
				}
			
			}
			
			
			
			if(isset($eng)){
				store_grades(1, $eng);
			}
			
			if(isset($kis)){
				store_grades(2, $kis);
			}
			
			if(isset($math)){
				store_grades(3, $math);
			}
			
			if(isset($chem)){
				store_grades(5, $chem);
			}
			
			if(isset($bio)){
				store_grades(4, $bio);
			}
			
			if(isset($phyc)){
				store_grades(6, $phyc);
			}
			
			if(isset($subone) && isset($humone)){
				store_grades($subone, $humone);
			}
			
			if(isset($subtwo) && isset($humtwo)){
				store_grades($subtwo, $humtwo);
			}
			
			if(isset($subthree) && isset($humthree)){
				store_grades($subthree, $humthree);
			}
			
			if(isset($subjone) && isset($appone)){
				store_grades($subjone, $appone);
			}
			
			if(isset($subjtwo) && isset($apptwo)){
				store_grades($subjtwo, $apptwo);
			}
			
			if(isset($subjthree) && isset($appthree)){
				store_grades($subjthree, $appthree);
			}
			
			if(isset($groupone) && isset($grone)){
				store_grades($groupone, $grone);
			}
			
			if(isset($grouptwo) && isset($grtwo)){
				store_grades($grouptwo, $grtwo);
			}
			
			if(isset($groupthree) && isset($grthree)){
				store_grades($groupthree, $grthree);
			}
			
			if($error != 1){
				echo "<p>Data Saved Successfully.</p>";
			}
		
	}



}

?>

<form method="post">
<fieldset><legend> Group I: Compulsory Subjects</legend>
	<p>English : 
		<select name='eng'>
		<option value="" selected>Select a grade</option>
		
		<?php
			$sel = mysql_query("SELECT * FROM grades");
			
			while($row=mysql_fetch_array($sel)){
				$name = $row['name'];
				$value = $row['value'];
				
				echo " <option value='$value'> $name </option>";
			}
		?>
			
		</select>
		<?php if(isset($erroreng)) echo "<span style='color:red;'>".$erroreng."</span>"; ?> 
		
	<p>Kiswahili : 
		<select name='kis'>
		<option value="" selected>Select a grade</option>
			<?php
				$sel = mysql_query("SELECT * FROM grades");
				
				while($row=mysql_fetch_array($sel)){
					$name = $row['name'];
					$value = $row['value'];
					
					echo " <option value='$value'> $name </option>";
				}
			?>
			
		</select>
	<br><?php if(isset($errorkis)) echo "<span style='color:red;'>".$errorkis."</span>"; ?>

	<p>Mathematics :
		<select name='mat'>
		<option value="" selected>Select a grade</option>
			<?php
				$sel = mysql_query("SELECT * FROM grades");
				
				while($row=mysql_fetch_array($sel)){
					$name = $row['name'];
					$value = $row['value'];
					
					echo " <option value='$value'> $name </option>";
				}
			?>
			
		</select>
		<br><?php if(isset($errormat)) echo "<span style='color:red;'>".$errormat."</span>"; ?>
</fieldset>
<fieldset><legend> Group II: Sciences (Select at least Two)</legend>
<p>	<?php if(isset($errorsciences)) echo "<span style='color:red;'>".$errorsciences."</span>"; ?></p>
	<p>Chemistry :
		<select name='che'>
		<option value="" selected>Select a grade</option>
				<?php
					$sel = mysql_query("SELECT * FROM grades");
					
					while($row=mysql_fetch_array($sel)){
						$name = $row['name'];
						$value = $row['value'];
						
						echo " <option value='$value'> $name </option>";
					}
				?>
				
			</select>
			<br><?php if(isset($errorche)) echo "<span style='color:red;'>".$errorche."</span>"; ?>

			<p>Biology : 
		<select name='bio'>
		<option  value="" selected>Select a grade</option>
				<?php
					$sel = mysql_query("SELECT * FROM grades");
					
					while($row=mysql_fetch_array($sel)){
						$name = $row['name'];
						$value = $row['value'];
						
						echo " <option value='$value'> $name </option>";
					}
				?>
				
			</select>
			<br> <?php if(isset($errormat)) echo "<span style='color:red;'>".$errormat."</span>"; ?>

	<p>Physics :
		<select name='phy'>
		<option value="" selected>Select a grade</option>
				<?php
					$sel = mysql_query("SELECT * FROM grades");
					
					while($row=mysql_fetch_array($sel)){
						$name = $row['name'];
						$value = $row['value'];
						
						echo " <option value='$value'> $name </option>";
					}
				?>
				
			</select>
	<br> <?php if(isset($errorrphy)) echo "<span style='color:red;'>".$errorrphy."</span>"; ?>
</fieldset>

<fieldset><legend> Group III: Humanities (Select at least One)</legend>
<p>	<?php if(isset($errorhumanities)) echo "<span style='color:red;'>".$errorhumanities."</span>"; ?></p>

<p><select name='subone'>
	<option value="" selected>Select From Group III</option>
		<?php
			$selsub = mysql_query("SELECT * FROM subjects WHERE category=5");
			
			while($row=mysql_fetch_array($selsub)){
				$name = $row['name'];
				$value = $row['id'];
				
				echo " <option value='$value'> $name </option> : ";
			}
		?>
				
	</select>
		<select name='humone'>
		<option value="" selected>Select a grade</option>
				<?php
					$sel = mysql_query("SELECT * FROM grades");
					
					while($row=mysql_fetch_array($sel)){
						$name = $row['name'];
						$value = $row['value'];
						
						echo " <option value='$value'> $name </option>";
					}
				?>
				
			</select>
	<br />

<p><select name='subtwo'>
	<option value="" selected>Select From Group III</option>
		<?php
			$selsub = mysql_query("SELECT * FROM subjects WHERE category=5");
			
			while($row=mysql_fetch_array($selsub)){
				$name = $row['name'];
				$value = $row['id'];
				
				echo " <option value='$value'> $name </option> : ";
			}
		?>
				
	</select>
		<select name='humtwo'>
		<option value="" selected>Select a grade</option>
				<?php
					$sel = mysql_query("SELECT * FROM grades");
					
					while($row=mysql_fetch_array($sel)){
						$name = $row['name'];
						$value = $row['value'];
						
						echo " <option value='$value'> $name </option>";
					}
				?>
				
			</select>
	<br />
<p><select name='subthree'>
	<option value="" selected>Select From Group III</option>
		<?php
			$selsub = mysql_query("SELECT * FROM subjects WHERE category=5");
			
			while($row=mysql_fetch_array($selsub)){
				$name = $row['name'];
				$value = $row['id'];
				
				echo " <option value='$value'> $name </option> : ";
			}
		?>
				
	</select>
		<select name='humthree'>
		<option value="" selected>Select a grade</option>
				<?php
					$sel = mysql_query("SELECT * FROM grades");
					
					while($row=mysql_fetch_array($sel)){
						$name = $row['name'];
						$value = $row['value'];
						
						echo " <option value='$value'> $name </option>";
					}
				?>
				
			</select>
	<br />

</fieldset>
<fieldset><legend>Group IV: Applied </legend>
	<p><select name='subjone'>
	<option value="" selected>Select From Group IV</option>
			<?php
				$selsub = mysql_query("SELECT * FROM subjects WHERE category=6");
				
				while($row=mysql_fetch_array($selsub)){
					$name = $row['name'];
					$value = $row['id'];
					
					echo " <option value='$value'> $name </option> : ";
				}
			?>
					
		</select>
			<select name='appone'>
			<option value="" selected>Select a grade</option>
					<?php
						$sel = mysql_query("SELECT * FROM grades");
						
						while($row=mysql_fetch_array($sel)){
							$name = $row['name'];
							$value = $row['value'];
							
							echo " <option value='$value'> $name </option>";
						}
					?>
					
				</select>
		<br />

	<p><select name='subjtwo'>
	<option value="" selected>Select From Group IV </option>
			<?php
				$selsub = mysql_query("SELECT * FROM subjects WHERE category=6");
				
				while($row=mysql_fetch_array($selsub)){
					$name = $row['name'];
					$value = $row['id'];
					
					echo " <option value='$value'> $name </option> : ";
				}
			?>
					
		</select>
			<select name='apptwo'>
			<option value="" selected>Select a grade</option>
					<?php
						$sel = mysql_query("SELECT * FROM grades");
						
						while($row=mysql_fetch_array($sel)){
							$name = $row['name'];
							$value = $row['value'];
							
							echo " <option value='$value'> $name </option>";
						}
					?>
					
				</select>
		<br />
	<p><select name='subjthree'>
	<option value="" selected>Select From Group IV </option>
			<?php
				$selsub = mysql_query("SELECT * FROM subjects WHERE category=6");
				
				while($row=mysql_fetch_array($selsub)){
					$name = $row['name'];
					$value = $row['id'];
					
					echo " <option value='$value'> $name </option> : ";
				}
			?>
					
		</select>
			<select name='appthree'>
			<option value="" selected>Select a grade</option>
					<?php
						$sel = mysql_query("SELECT * FROM grades");
						
						while($row=mysql_fetch_array($sel)){
							$name = $row['name'];
							$value = $row['value'];
							
							echo " <option value='$value'> $name </option>";
						}
					?>
					
				</select>
		<br />

</fieldset>
<fieldset><legend>Group V </legend>
	<p><select name='groupone'>
	<option value="" selected>Select From Group V</option>
			<?php
				$selsub = mysql_query("SELECT * FROM subjects WHERE category=9");
				
				while($row=mysql_fetch_array($selsub)){
					$name = $row['name'];
					$value = $row['id'];
					
					echo " <option value='$value'> $name </option> : ";
				}
			?>
					
		</select>
			<select name='grone'>
			<option value="" selected>Select a grade</option>
					<?php
						$sel = mysql_query("SELECT * FROM grades");
						
						while($row=mysql_fetch_array($sel)){
							$name = $row['name'];
							$value = $row['value'];
							
							echo " <option value='$value'> $name </option>";
						}
					?>
					
				</select>
		<br />

	<p><select name='grouptwo'>
	<option value="" selected>Select From Group V </option>
			<?php
				$selsub = mysql_query("SELECT * FROM subjects WHERE category=9");
				
				while($row=mysql_fetch_array($selsub)){
					$name = $row['name'];
					$value = $row['id'];
					
					echo " <option value='$value'> $name </option> : ";
				}
			?>
					
		</select>
			<select name='grtwo'>
			<option value="" selected>Select a grade</option>
					<?php
						$sel = mysql_query("SELECT * FROM grades");
						
						while($row=mysql_fetch_array($sel)){
							$name = $row['name'];
							$value = $row['value'];
							
							echo " <option value='$value'> $name </option>";
						}
					?>
					
				</select>
		<br />
	<p><select name='groupthree'>
	<option value="" selected>Select From Group V </option>
			<?php
				$selsub = mysql_query("SELECT * FROM subjects WHERE category=9");
				
				while($row=mysql_fetch_array($selsub)){
					$name = $row['name'];
					$value = $row['id'];
					
					echo " <option value='$value'> $name </option> : ";
				}
			?>
					
		</select>
			<select name='grthree'>
			<option value="" selected>Select a grade</option>
					<?php
						$sel = mysql_query("SELECT * FROM grades");
						
						while($row=mysql_fetch_array($sel)){
							$name = $row['name'];
							$value = $row['value'];
							
							echo " <option value='$value'> $name </option>";
						}
					?>
					
				</select>
		<br />

</fieldset>

<input type="reset" value="Clear">
<input type="submit" value="Save" name="sub">
</form>

</div>       
      
      </div>
    </div>
<?php include("footer.php"); ?> 
<?php
}
else{
		echo "<h4>Your subjects:</h4>";
		echo "<table class='substyle'>";
		echo"<tr>
				<th>Grade</th>
				<th>Subject</th>
			</tr>";
	
while($row=mysql_fetch_array($reg_status)){
	echo "<tr>";
	$sub_id=$row['subject_id'];
	$grade_id=$row['grade'];
	
	$grade_query = "SELECT name from grades WHERE  value='$grade_id'";
	$grade_state=mysql_query($grade_query);
	
	while($row=mysql_fetch_array($grade_state)){
		 $name = $row['name'];
		 echo "<td>".$name."</td>";
		// array_push($grades_data,$name);
		 //array_push($section_data,"name"=>"$name");
		 
	}
	
	$sub_query = "SELECT name from subjects WHERE  id='$sub_id'";
	$sub_state=mysql_query($sub_query);
	
	while($row=mysql_fetch_array($sub_state)){
		 $subject= $row['name'];
		 echo "<td>".$subject."</td>";
		
	}
 echo "<tr>";
 }
 echo "<table>";
 echo "<a href='http://localhost/Course%20Finder/subjectreg.php?edit=true'>Edit</a>";
}?>