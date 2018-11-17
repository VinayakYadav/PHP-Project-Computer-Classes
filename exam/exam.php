<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath."/inc/header.php");
//Session::checkSession();
$userid = Session::get("userId");
?>   
        
        
        <section class="top-banner">
        	<div class="container">
            	<h1>ATech Computer Classes</h1> <?php //echo Session::get("userEmail"); ?>
            </div><!--/.container-->
        </section><!--/.top-banner-->
	    
        
        
        
        
        
        <section class="content-wrap">
        	<div class="container">
            	<div class="content-inner">
                	<div class="q-timer-bar">
                    	<span style="font-size: 18px; font-weight: bold;">Instructions for taking online exam.</span>
                    </div><!--/.q-timer-bar-->
                    
					<p style="padding-left: 28px;">
						<ol>
							<li>Please answer each question once as you will not be able to go back at any stage, once you start your exam.</li>
							<li>You have only one attempt to pass this exam, however you can request to admin for permission of having second attempt.</li>
							<li>After third attempt you will permanently be blocked in this exam system, you will have to register yourself again after fulfilling the criteria.</li>
							<li>You will immediatly be be prompted for your result after exam is finished or time is over.</li>
							<li>Please keep noting down the timer as you will no longer be able to answer the question after the time is over.</li>
							<li>In case you find any problem, please contact the support person present on the spot.</li>
						</ol>
						 </p>
                    <?php  $attemptCheck = $exm->showFinalScore($userid); 
					if($attemptCheck['attempt'] >= 3)
					{?>
						<button style="margin-left: 28px;" onClick="message();"; class="btn btn-orange">Start Now...</button>
						<?php
					}else{
						echo '<a href="starttest.php" style="margin-left: 28px;" class="btn btn-orange">Start Now...</a>';
					}
					?>
					
                    


                </div><!--/.content-inner-->
            </div><!--/.container-->
        </section><!--/.content-wrap-->
    
    
    	
        
        
        
        
        <footer class="footer-wrap">
        	<div class="container">
            	<p class="copyrights-txt">&copy; 2018 &nbsp <i class="fa fa-area-chart"></i> Atech Computer Classes. All Rights Reserved | Design by <a href="http://shauryatech.in/" target="_blank">ShuaryA Tech</a></p> 
            </div><!--/.container-->
        </footer><!--/.footer-wrap-->
    
    
    

    </div><!--/.site-wrapper-->

    <script src="js/main//jquery-1.12.4.js"></script>
    <script src="js/main/bootstrap.min.js"></script>
    <script src="js/main/jquery-wizard.js"></script>
    <script src="js/main/custom.js"></script>
    <script src="js/sweetalert.min.js"></script>
      <script>
		function message()
		{
			//alert('asdkjh');
			swal("We're Sorry!", "You've availed all of your three attempts!", "error");
			return false;
			
		}
	</script>
    
  </body>
</html>