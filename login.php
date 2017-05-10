
<?php
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db("project");

if(isset($_POST['sub']))
{
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$pass= SHA1($pass);
	if(empty($email)){
		$erroremail = "Enter your email address. *Please ensure that you use a valid email address*";
	}elseif(empty($pass)){
		$errorpassword = "Enter your password";
	}else{
		
		$query = mysql_query ("SELECT * FROM student WHERE email = '$email' AND password = '$pass' ");	
		
		$check = mysql_num_rows($query);
		
		if($check >= 1){
			$row=mysql_fetch_array($query);
			
			$studentid = $row['id'];
			$name = $row['name'];
			
			$_SESSION['studentid'] = $studentid;
			$_SESSION['name'] = $name;
			
			header("location: subjectreg.php");
				
			
		}else{
			echo "Login Failed.";
		}
	}
	
}
 ?>
<div class="logcontainer">
	<form method="post">
		<p>Email Address <br><input type="text" class="contact" size="25" name="email"><br><?php if(isset($erroremail)) echo "<span style='color:red;'>".$erroremail."</span>"; ?>
		<p>Password<br> <input type="password" class="contact" name="password"><br><?php if(isset($errorpassword)) echo "<span style='color:red;'>".$errorpassword."</span>"; ?>
		<p><input type="submit" class="submit" value="Login" name="sub">
		<a href="reg2.php"> Create an Account </a>
		<a href="forgot.php"> <center> Forgot Password </center></a>
	</form>
</div>

