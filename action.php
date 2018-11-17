
<?php
	session_start();
  include("includes/db.php");	
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
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

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

<body>  
<?php   
include("side_navigation/side_navigation.php");
?>

<!-- header-starts -->
<?php   
include("header/header.php");
?>
<!-- //header-ends -->
    <?php
  
          if(isset($_GET['index'])){
            include("index.php");
          }else if(isset($_GET['create_new_project'])){
            include("create_new_project.php");
          }else if(isset($_GET['insert_product'])){
            include("insert_product.php");
          }else if(isset($_GET['insert_new_notes'])){
            include("insert_new_notes.php");
          }else if(isset($_GET['update'])){
            include("update.php");
          }else if(isset($_GET['delete'])){
            include("delete_notes.php");
          }else if(isset($_GET['view_all_project'])){
            include("view_all_project.php");
          }else if(isset($_GET['view_all_courses'])){
            include("view_all_courses.php");
          }else if(isset($_GET['view_fee_details'])){
            include("view_fee_details.php");
          }else if(isset($_GET['view_all_notes'])){
            include("view_all_notes.php");
          }else if(isset($_GET['Student_modules'])){
            include("Student_modules.php");
          }else if(isset($_GET['enquiry_details'])){
            include("enquiry_details.php");
          }else if(isset($_GET['view_noties'])){
            include("view_noties.php");
          }else if(isset($_GET['my_account'])){
            include("my_account.php");
          }else if(isset($_GET['update_account'])){
            include("update_account.php");
          }else if(isset($_GET['change_password'])){
            include("change_password.php");
          }else if(isset($_GET['settings'])){
            include("settings.php");
          }else if(isset($_GET['profile'])){
            include("profile.php");
          }else if(isset($_GET['action'])){
            include("action.php");
          }else if(isset($_GET['examples'])){
            include("examples.php");
          }else if(isset($_GET['enquiry_form'])){
            include("enquiry_form.php");
          }else if(isset($_GET['feedback'])){
            include("feedback.php");
          }else if(isset($_GET['complaint_form'])){
            include("complaint_form.php");
          }else if(isset($_GET['profile_edit'])){
            include("profile_edit.php");
          }else if(isset($_GET['linked_account'])){
            include("linked_account.php");
          }else if(isset($_GET['payments'])){
            include("payments.php");
          }else if(isset($_GET['contact_info'])){
            include("contact_info.php");
          }else if(isset($_GET['photo_of_you'])){
            include("photo_of_you.php");
          }else if(isset($_GET['update_enquiry'])){
            include("update_enquiry.php");
          }else if(isset($_GET['admin_data_allotted'])){
            include("admin_data_allotted.php");
          }else if(isset($_GET['payment'])){
            include("payment.php");
          }
?>

<!-- for amcharts js -->
    <script src="js/amcharts.js"></script>
    <script src="js/serial.js"></script>
    <script src="js/export.min.js"></script>
    <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
    <script src="js/light.js"></script>
<!-- for amcharts js -->
  
<!--footer-->
<?php
  include("footer/footer_for_all.php");
?>    
<!--//footer-->
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