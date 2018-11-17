<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <title>Online Exam | Member Area</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script>
	  	history.pushState(null, null, document.URL);
		window.addEventListener('popstate', function () {
    	history.pushState(null, null, document.URL);
		});
	 </script>
  </head>
  
   <body>
   
   <div class="site-wrapper">
   
	   		<div class="page-wrap member-page">
            
		   <div class="row m-0">
		   
			   <div class="col-sm-6 col-sm-push-6 p-0">
			   
				   <div class="member-col member-left">
				   		<div class="member-overlay">
					   <div class="member-col-inner">
						   <div class="member-form-wrap">
								
							   <h1>Welcome to <b>ATech Online Exam</b></h1>
							   <p style="color: red; display: none;" class="error">User Name or password not matched</p>
							   <p style="color: red; display: none;" class="disable">User is disabled</p>
							   <p style="color: red; display: none;" class="empty">User Name or password is empty</p>
								<input type="text" id="loginEmail" class="form-control" placeholder="Enter your email">
								<input type="password" id="loginPass" class="form-control" placeholder="Password">
							   
                               <div class="row">
                               		<div class="col-xs-6">
                                    	<label><input type="checkbox"> Keep me LogIn</label>
                                    </div><!--/.col-xs-6-->
                                    
                                    <div class="col-xs-6">
                                    	<input type="button" value="Login" id="loginSubmit" class="btn btn-blue btn-block"/>
                                    </div><!--/.col-xs-6-->
                               </div><!--/.row-->
                               
                               
							   
							   <span class="member-or">OR</span>
							   <!--<input type="text" id="regUserName" class="form-control" placeholder="Enter Username">-->
							   <input type="text" id="regEmail" class="form-control" placeholder="Enter email ">
							   <!--<input type="password" id="regPassword" class="form-control" placeholder="Enter Password">-->
							   <input type="button" name="regSubmit" id="regSubmit" value="Sign Up for ATech Exam" class="btn btn-blue btn-block"/>
								<span id="state"></span>
						   </div><!--/.member-form-wrap-->
					   </div><!--/.member-col-inner-->
					   </div><!--/.member-overlay-->
				   </div><!--/member-col-wrap-->
			   </div><!--/.col-md-6-->
			   
			   <div class="col-sm-6 col-sm-pull-6 p-0">
			   	<div class="member-col member-right">
				   	<div class="member-col-inner">
						
						
					   </div><!--/.member-col-inner-->
				   </div><!--/member-col-wrap-->
			   </div><!--/.col-md-6-->
			   
		   </div><!--/.row-->
	   		</div><!--/.member-page-->
	   </div><!--/.site-wrapper-->
    
    
    
    
    <script src="js/jquery.1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
        <script src="js/custom-development.js"></script>
  </body>
</html>