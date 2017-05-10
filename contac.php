<?
if(isset($_POST['sub'])){


$your_name = $_POST['your_name'];
$your_email = $_POST['your_email'];
$your_enquiry = $_POST['your_enquiry'];
if(empty($your_name)){
		$errorname = "Please enter your name.";
	}elseif(empty($your_email)){
		$erroremail = "Please enter your email.";
	}elseif(empty($your_enquiry)){
		$errorenq = "Please enter your enquiry.";
	}else{
		$insert = mysql_query("INSERT INTO contact_us(name, email, message) VALUES ('$your_name', '$$your_email', '$your_enquiry')");
			
		if($insert){
					echo "Your data has been saved. Welcome.";
			}else{
					echo "There was a problem that occured. Your data was not saved. Please try again.".mysql_error();
			}
		
		}
?>
