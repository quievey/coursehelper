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
	
	
}.logons{
	margin:0px auto
}
#content {
    position:absolute;
	left:400px;
    width: 400px;
	margin:20px 20px 20px 20px;
    padding: 10px 10px 10px 10px;

    
}
</style>
 <div id="content_header"></div>
    <div id="site_content">
	
      <div id="content">
		<div class='logons'>
        <?php include("login.php"); ?> 
		</div>
          </div>       
       
      </div>
	  </div>
	  </div>
<?php include("footers.php"); ?> 