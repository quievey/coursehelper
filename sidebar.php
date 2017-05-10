      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Login</h3>
            <?php include("login.php");?>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
           <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Help</h3> 
            Do you need help?<a href="#" class="help"> Click here<br> <img src="imagess/more/help.jpg"></a>
            <script src="assets/js/jquery.min.js"></script>
			  <script>
				$(document).ready(function(){
					$(document).find(".help").on("click",function(){
						window.open("Project1.pdf","");
					});
				});
			</script>
          </div>
          <div class="sidebar_base"></div>
        </div>
 
             </div>