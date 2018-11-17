<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath."/inc/header.php");
Session::checkSession();
$question = $exm->getQuestion();
$total = $exm->getTotalRows();
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
                    	Start Test
                    </div><!--/.q-timer-bar-->
                    
					<ul>
						<li>The test contains 60 questions and there are 40 minutes Time.</li>
						<li>You will get 1 point for each correct answer. At the end of the Quiz, your total score will be displayed. Maximum score is 60 points.</li>
						<li>You can never go back once you clicked the next button, so be careful.</li>
						<li>Good Luck for your success.</li>
					</ul>
                   <p><h3>Number of Questions: <?php echo $total; ?></h3> </p>
                   <p><h3>Type of Questions: MCQs</h3> </p>
<!--<a href="test.php?q=<?php //echo $question['quesNo']; ?>" class="btn btn-orange">Start Test</a>-->															<?php 
						$userid = Session::get("userId");
						$chkResult = $exm->userStatus($userid);
						if($chkResult['userStatus'] == 0)
						{
						?>
						<button onClick="message();" class="btn btn-orange">Start Test</button>
						<?php
						}else{
						?>
						<a href="testinter.php" class="btn btn-orange">Start Test</a>
						<?php
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
			swal("We're Sorry!", "This user is disabled! Please contact Exam incharge", "error");
			return false;
			
		}
	</script>
    
  </body>
</html>