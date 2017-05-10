<?php include("header.php"); ?> 
 <div id="content_header"></div>
    <div id="site_content">
	<?php include("logsidebar.php"); ?> 
      <div id="content">
 <?php   
	if($_FILES)
{

// $_FILES["file"]["error"] is HTTP File Upload variables $_FILES["file"] "file" is the name of input field you have in form tag.


// check if file already exit in "images" folder.
if (file_exists("uploaded/" . $_FILES["thefile"]["name"]))
{
echo $_FILES["thefile"]["name"] . " already exists. ";
}
else
{  //move_uploaded_file function will upload your image.  if you want to resize image before uploading see this link 
$picname = $studentid.$studentname.$_FILES["thefile"]["name"];
if(move_uploaded_file($_FILES["thefile"]["tmp_name"],"uploaded/" . $picname ))
{
// If file has uploaded successfully, store its name in data base
$query_image = "UPDATE student SET photo ='$picname' WHERE id = $studentid";
if(mysql_query($query_image))
{
	header("Location: home.php");
}
else
{
echo 'File name not stored in database';
}
}
}
}

?>
	
	<form action="" method="post" enctype="multipart/form-data" id="xid" style="text-align: center;">

	<input type="file" name="thefile" id="thebox">

	<div style="margin-top:30px; text-align: center;">
		<input type="submit" value="Submit" name="submit">
    </div>

	</form>

          </div>       
       
      </div>
    </div>
	
<script type="text/javascript" src="pic/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="pic/dist/js/picedit.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('#thebox').picEdit();
	});
</script>


<?php include("footer.php"); ?> 