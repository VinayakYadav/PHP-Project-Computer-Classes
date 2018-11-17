<?php


	 include("includes/db.php");

	session_start();
	
	if(!isset($_SESSION['student_email'])){
		echo"<script>window.open('student_login.php?not_student=You are not a student','_self')</script>";
	}else{
		
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Atech Computer Classes Dashboard  | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
 		    <nav class="navbar navbar-inverse">
         	<div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span>ATECH<span class="dashboard_text">Computer Classes</span></a></h1>

          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">WELCOME TO STUDENT PANEL</li>
              <li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Your Stuff</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                 	 <li class="treeview">
               		 <a href="#">
               		 <i class="fa fa-folder-open-o"></i>
               		 <span>New Projects</span>
               		 <i class="fa fa-angle-left pull-right"></i>
              		 </a>
              		  <ul class="treeview-menu">
              		  	<li><a href="action.php?create_new_project"><i class="fa fa-desktop"></i>Creat New Project</a></li>
                  		<li><a href="action.php?insert_product"><i class="fa fa-edit"></i>Insert Product</a></li>
                  		<li><a href="action.php?insert_new_notes"><i class="fa fa-edit"></i>Insert New Notes</a></li>
                  		<!-- <li><a href="action.php?update"><i class="fa fa-edit"></i>Update notes</a></li> -->
                  		</ul>
                  	</li>
                  <li><a href="action.php?view_all_project"><i class="fa fa-list"></i>View All Projects</a></li>
                  <li><a href="action.php?view_all_courses"><i class="fa fa-bars"></i>View All Courses</a></li>
                  <li><a href="action.php?view_fee_details"><i class="fa fa-dollar"></i>View Fee Details</a></li>
                  <li><a href="action.php?view_all_notes"><i class="fa fa-book fa-fw"></i>View All Notes</a></li>
                  <li><a href="action.php?Student_modules"><i class="fa fa-book fa-fw"></i>Student Notes</a></li>
                  <li><a href="action.php?enquiry_details"><i class="fa fa-book fa-fw"></i>Enquiry Details</a></li>
<!-- 
                  <li class="treeview">
               		 <a href="#">
               		 <i class="fa fa-barsook"></i>
               		 <span>View All Notes</span>
               		 <i class="fa fa-angle-left pull-right"></i>
              		 </a>
              		  <ul class="treeview-menu"> -->

              		  	<!-- <?php
						$get_course="select * from view_all_notes_db";
						$run_get=mysqli_query($conn, $get_course);
		
						while($run_result=mysqli_fetch_array($run_get)){
						$course_id=$run_result['s_n'];
						$course_name=$run_result['subject_name'];
						?>

						
						<li><a href="action.php?view_all_notes=<?php echo $course_id; ?>"><i class="fa fa-angle-right"></i> <?php echo $course_name; ?> </a></li>

						<?php
						}	
						?> -->
              		  	<!--<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Computer Basics</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Tally & GST</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Website Development</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Basic Programming</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>oracle Specialist</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Microsoft</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>PHP Specialist</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Android Specialist</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Digital Marketing</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>python</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Hadoon and Big Data</a></li>
		          		<li><a href="action.php?view_all_notes"><i class="fa fa-angle-right"></i>Bigdata</a></li>-->
                  	<!-- 	</ul>
                  	</li> -->

                  <li><a href="action.php?view_noties"><i class="fa fa-calendar-o"></i>View Notices</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                <li><a href="action.php?enquiry_form"><i class="fa fa-angle-right"></i>Enquiry Form</a></li>
                <li><a href="activeion.php?feedback"><i class="fa fa-angle-right"></i>Feedback Form</a></li>
              	<li><a href="action.php?complaint_form"><i class="fa fa-angle-right"></i>Complain Form</a></li>
              	</ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox </span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="action.php?payment">
                <i class="fa fa-folder"></i> <span>Payment</span>
              
                	<!--  <ul class="treeview-menu">
      		  	<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Computer Basics</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Tally & GST</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Website Development</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Basic Programming</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>oracle Specialist</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Microsoft</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>PHP Specialist</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Android Specialist</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Digital Marketing</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>python</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Hadoon and Big Data</a></li>
          		<li><a href="action.php?examples"><i class="fa fa-angle-right"></i>Bigdata</a></li>
          		</ul> -->
                </a>
          	  </li>
          	  <li class="treeview">
                <a href="#">
                <i class="fa fa-graduation-cap"></i> <span>Exams </span>
                <i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                  <li><a href="exam_login.php"><i class="fa fa-graduation-cap"></i> Online Exam  </a></li>
                  <li><a href="compose.html"><i class="fa fa-graduation-cap"></i> Offline Exam</a></li>
                </ul>
              </li>
                </ul>
            </div>
          <!-- /.navbar-collapse -->
      		</nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/123.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Vinayak Yadav</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/345.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Vinu </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->

				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<!-- <div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div> <!--//end-search-box-->
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<?php
										$i=0;
											include("includes/db.php");
											$get_profile="select * from profile_edit where student_email='".$_SESSION['student_email']."'";
											$run_get=mysqli_query($conn, $get_profile);
											
											while($run_result=mysqli_fetch_array($run_get)){
													$profile_image=$run_result['profile_image'];
													$pe_name=$run_result['pe_name'];
													$pe_last_name=$run_result['pe_last_name'];
													$i++;
											
										?>
									<span class="prfil-img"><img src="images/<?php echo $profile_image ?>" width="50px" height="50px"/></span> 
									<div class="user-name">
										<p><?php echo $pe_name ?>&nbsp;<?php echo $pe_last_name ?></p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu"><!-- 
								<li> <a href="action.php?settings"><i class="fa fa-cog"></i> Settings</a> </li>  -->
								<li> <a href="action.php?profile"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <a href="action.php?profile">
                    <i class="pull-left fa fa-users icon-rounded"></i>
                    <div class="stats">
					  <h5><strong>
					   	<p><?php echo $pe_name ?>&nbsp;<?php echo $pe_last_name ?></p>
					   </strong></h5></a>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <a href="action.php?create_new_project">
                    <div class="stats">
                    <i class="pull-left fa fa-edit user1 icon-rounded"></i>
                      <h5><strong>Create Project</strong></h5></a>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <a href="action.php?view_all_project">
                    <div class="stats">
                    <i class="pull-left fa fa-list user2 icon-rounded"></i>
                    <h5>View Project</h5>
                      <span>Total Projects Uploaded:<strong>
                      	<?php

                      	$sql = "select * from students_project where student_email='".$_SESSION['student_email']."'";
						$run_get=mysqli_query($conn, $sql);

								$count= mysqli_num_rows($run_get);

								echo $count;
							
                      	?></strong></span>
                      </a>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <a href="action.php?view_fee_details">
                    <div class="stats">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                      <h5><strong>Pending Fee</strong></h5>
                      <span>Fee Details</span></a>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1450</strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	</div>
        	<div class="clearfix"> </div>
	<!-- for amcharts js -->
			<script src="js/amcharts.js"></script>
			<script src="js/serial.js"></script>
			<script src="js/export.min.js"></script>
			<link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
			<script src="js/light.js"></script>
	<!-- for amcharts js -->
			</div>
			<br>
			
			<div>
			<?php
			include("content_slider/content_slider.php");
			?>
			</div>
			<div>
			<?php
			include("information/information.php");
			?>
			</div>
			<br>
			<div>
			<?php
			include("content_slider/slider.php");
			?>
			</div>
			<div>
			<?php
			include("information/we_listen.php");
			?>
			</div><br>
			<div>
			<?php
			include("content_slider/slider1.php");
			?>
			</div><br>	
<!--footer-->
<?php
	include("footer/footer.php");
?>    
<!--//footer-->
</div>
</div>
</div>
		
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>

<?php } ?>