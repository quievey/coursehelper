<?php include("headers.php"); ?> 
<style>
	#footer{
		position:absolute;
		bottom:2px;
	}
	#site_content {
    width: 880px;
    overflow: hidden;
    margin: 0 auto;
    padding: 0px 0px 10px;
	height:400px;
    background-color:#ebebeb;
}
.logcontainer{
	margin:0 auto;
	box-shadow:2px 2px 3px 3px #5B999B;
	padding:5px;
	border:2px solid grey;
	border-radius:7px;
	
}	

#content {
    position:absolute;
	left:400px;
    width: 500px;
	margin:20px 20px 20px 20px;
    padding: 10px 10px 10px 10px;   
}
.resmail{
	width:400px;
}
.submit{
	position:relative;
	left:30px;
	
}
#slidedown{
	width:400px;
	height:200px;
	border:2px solid #ebebeb;
	margin:0px auto;
	border-radius:4px;
	box-shadow:1px 1px #ebebeb;
	z-index:5px;
	display:none;
}
</style>
<div id="slidedown">
	<p>Sending link to your email.....<p>
</div>

 <div id="content_header"></div>
    <div id="site_content">
	
      <div id="content">
        
        <form class="txtnd" action="#" method="post">
          <div class="form_settings logcontainer">
            <p><span>Please Enter Your Email Address</span></br>
			<input type="text" class="resmail" name="name" value="" /></p>
			<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
		   </div>
	  </form>
          </div>       
       
      </div>
    </div>
	<script src="assets/js/jquery.min.js"></script>
	<script>
		$(document).find(".submit").on("click",function(e){
			e.preventDefault();
			$(document).find("#slidedown").slideDown();
			setTimeout(function(){
				$(document).find("#slidedown").slideUp();
				$(document).find(".txtnd").text("A reset link has been sent to your email");
			},4000);
			
		});
	</script>
<?php include("footers.php"); ?> 