<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'./inc/adminheader.php');
include_once($filepath.'/../../classes/Exam.php');
$exm = new Exam();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$exm->addQuestion($_POST);
}

$total = $exm->getTotalRows();
$next = $total + 1;
?>    
        <section class="top-banner">
        	<div class="container">
            	<h1>ATech Computer Classes - Add New Questions</h1>
            </div><!--/.container-->
        </section><!--/.top-banner-->
	    
        
        
        
        
        
        <section class="content-wrap">
        	<div class="container">
            	<div class="content-inner">
                	<div class="q-timer-bar">
                    	<div class="row">
                        	
                            
                            
                        </div><!--/.row-->
                    </div><!--/.q-timer-bar-->
                    <div class="form-elements" style="padding: 15px;">
						<form action="" method="post">
							<table style="margin: 0 auto;" width="60%" border="0">
							  <tbody>
								<tr>
								  <td width="20%">Question No.</td>
								  <td><input type="number" value="<?php if(isset($next)){echo $next;} ?>" name="quesNo"/></td>
								</tr>
								<tr>
								  <td>Question:</td>
								  <td><input type="text" name="ques" placeholder="Enter Question"/></td>
								</tr>
								<tr>
								  <td>Choice one:</td>
								  <td><input type="text" name="choiceOne" placeholder="Enter First choice"/></td>
								</tr>
								<tr>
								   <td>Choice Two:</td>
								  <td><input type="text" name="choiceTwo" placeholder="Enter Second choice"/></td>
								</tr>
								<tr>
								   <td>Choice Three:</td>
								  <td><input type="text" name="choiceThree" placeholder="Enter Third choice"/></td>
								</tr>
								<tr>
								   <td>Choice Four:</td>
								  <td><input type="text" name="choiceFour" placeholder="Enter Fourth choice"/></td>
								</tr>
								<tr>
								   <td>Correct No:</td>
								  <td><input type="number" name="correctNo" placeholder="Enter Correct choice"/></td>
								</tr>
								<tr>
								  <td>&nbsp;</td>
								  <td><input type="submit" name="btnSubmit" value="Add Question"/></td>
								</tr>
							  </tbody>
							</table>

						</form>
					</div><!--/.form-elements-->
                    


                </div><!--/.content-inner-->
            </div><!--/.container-->
        </section><!--/.content-wrap-->
    
    
    	
        
        
        
        
        <footer class="footer-wrap">
        	<div class="container">
            	<p class="copyrights-txt">&copy; 2018 &nbsp <i class="fa fa-area-chart"></i> Atech Computer Classes. All Rights Reserved | Design by <a href="http://shauryatech.in/" target="_blank">ShuaryA Tech</a></p> 
            </div><!--/.container-->
        </footer><!--/.footer-wrap-->
    
    
    

    </div><!--/.site-wrapper-->

    <script src="js/jquery.1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-wizard.js"></script>
    <script src="js/custom-main.js"></script>
    
  </body>
</html>