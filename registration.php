
<?php

if(isset($_POST['sub'])){


$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$year = $_POST['year'];
$password = md5($_POST['password']);
$rpassword = $_POST['rpassword'];
$index = $_POST['index'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$sub = $_POST['sub'];

	if(empty($fname)){
		$errorfname = "Please enter your first name.";
	}else if(empty($sname)){
		$errorsname = "Please enter your second name.";
	}else if(empty($email)){
		$erroremail= "Please enter your email address";
	}else if (empty($year)){
		$erroryear= "Please enter the year you finished school";
	}else if (empty($password)) {
		$errorpassword = "Please enter your password";
	}else if (empty ($rpassword)){
		$errorrpassword = "Please Reenter your password";
	}else if (empty($index)){
		$errorindex = "Please enter your index number";
	}else if (empty($dob)){
		$errordob= "Please enter your date of birth";
	}else if (empty($gender)){
		$errorgender = "Please select your gender";
	}else{
				if($password = $rpassword){
		
			$name = $fname." ".$sname;
		$password=SHA1($password);
		$insert = mysql_query("INSERT INTO student(name, indexno, dob, email, gender, password) VALUES ('$name', '$index', '$dob', '$email', '$gender', '$password')");
		
			if($insert){
					echo "Your data has been saved. Welcome.";
			}else{
					echo "There was a problem that occured. Your data was not saved. Please try again.".mysql_error();
			}
		
		}else{
			echo "Passwords do not match. Please try again.";
		}
	}



}

?>
<div class="form_settings">
* Required Field
<form method="post" class="form">
<p><span>First name*</span><br><input type="text" size="25" class="req" name="fname"><?php if(isset($errorfname)) echo "<span style='color:red;'>".$errorfname."</span>"; ?> 
<p><span>Surname* </span> <br><input class="req" type="text" size="25" name="sname"><br><?php if(isset($errorsname)) echo "<span style='color:red;'>".$errorsname."</span>"; ?>
<p><span> Email Address* </span><br><input class="req" type="text" size="25" name="email"><br><?php if(isset($erroremail)) echo "<span style='color:red;'>".$erroremail."</span>"; ?>
<p> <span>Year of Completion </span><br> <input type="text" size="25" name="year"><br><?php if(isset($erroryear)) echo "<span style='color:red;'>".$erroryear."</span>"; ?>
<p> <span> Password* </span> <br> <input class="req passone"  type="password" name="password"><?php if(isset($errorpassword)) echo "<span style='color:red;'>".$errorpassword."</span>"; ?>
<p><span>Repeat Your Password* </span><br> <input type="password" class="req passtwo" name="rpassword"><?php if(isset($errorrpassword)) echo "<span style='color:red;'>".$errorrpassword."</span>"; ?>
<p><span>Index Number </span><br><input type="text" size="15" name="index"><?php if(isset($errorindex)) echo "<span style='color:red;'>".$errorindex."</span>"; ?>
<p> <span> Date of Birth</span> <br><input type="text" size="15" name="dob"><?php if(isset($errordob)) echo "<span style='color:red;'>".$errordob."</span>"; ?>
<p> <span> Sex </span> <br>
<select name="gender">
<option>Male
<option>Female
</select>
<p><?php if(isset($errorgender)) echo "<span style='color:red;'>".$errorgender."</span>"; ?>
 <input type="submit" class="submit" value="Register" name="sub">
</form>
<script src="assets/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$(".submit").on("click",function(e){
		e.preventDefault();
		var pass1=$(document).find(".passone").val();
		var pass2=$(document).find(".passtwo").val();
		var passCheck=(pass1==pass2);
		
		
		var reqFields = $(document).find(".req");
		for(var i=0;i<reqFields.length;i++){
			var strlength=$(reqFields[i]).val();
			console.log(strlength);
			if(strlength.length<1){
				alert("Please fill all the required fields");
				return;
			}
			
			if(passCheck){
				$(document).find(".form").submit();
				
			}else{
				alert("Passwords dont match");
				return;
			}
		
		}
		
		
		
		
	});
});
</script>

</div>