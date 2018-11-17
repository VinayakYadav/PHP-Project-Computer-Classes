<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath."/inc/header.php");
Session::checkSession();
$userid = Session::get("userId");


	
if(isset($_SESSION['score']))
{	
	$finalScore = $exm->finalScore($userid, $_SESSION['score']);
	unset($_SESSION['score']);
}

$showScore = $exm->showFinalScore($userid);
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
                    	<strong style="color: green;">Congratulations! You have completed you test.</strong>
                    </div><!--/.q-timer-bar-->
                   <div class="results" style="margin-left: 300px; margin-top: 20px;">
                     <table style="" width="300" border="1">
					  <tbody>
					  <tr style="background-color: #ffbf00">
					  	<td colspan="2"><strong>Attempt 1</strong></td>
					  </tr>
						<tr>
						  <td><strong>Total Questions:</strong></td>
						  <td><strong><?php echo $total;?></strong></td>
						</tr>
						<tr>
						  <td><strong>CorrectAnswers:</strong></td>
						  <td><strong><?php echo $showScore['score']; ?></strong></td>
						</tr>
						
						<tr>
						  <td><strong>Your Percentage:</strong></td>
						  <td><strong><?php 
							  $per = $showScore['score'] / $total * 100;
							  echo $per;?>%</strong></td>
						</tr>
						<tr>
						  <td><strong>Exam Attempt:</strong></td>
						  <td><strong><?php echo $showScore['attempt'];?></strong></td>
						</tr>
						<tr>
						  <td><strong>Status:</strong></td>
						  <td><strong>
						  
						  <?php 
							  if($per<60)
							  {
							  	echo "You are Fail";
							  }else{
								echo "You are Pass";
							  }
							  ?>
						  </strong></td>
						</tr>
					  </tbody>
					</table>
					
				</div><!--/. results-->
                   <p><h4>Note:-</h4> Please note that this was your <strong>"<?php echo $showScore['attempt']; ?>"</strong> attempt. you have <strong>"<?php echo 3-$showScore['attempt']; ?>"</strong> more attempts, after that you will no more be able to appear in this exam till register yourself again. Please contact your administrator in case you have consumed all your attempts.</p>
                    
					<a href="viewans.php" class="btn btn-orange">View Answers</a>
                   <a href="exam.php" class="btn btn-orange">Start Again</a>
                    


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
  
    
  </body>
</html>