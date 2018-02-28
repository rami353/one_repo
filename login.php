<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>هيئة مياه ولاية الخرطوم - موقع الخدمات وبلاغات المواطنين </title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"  />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
         
           
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				 
                <a class="navbar-brand" href="#">
					<img class="logo-custom" src="assets/img/logo180-50.png" alt=""  />
				</a>
				<span style='margin:20px; padding-top:20px;' class='mainNav'>
				<?php
				if(isset($_SESSION['Username'])){
					echo "<b > ".$_SESSION['Username']."  </b>";
				}
						
				?></span>
            </div>
			 
            <div class="navbar-collapse collapse move-me " >
                <ul class="nav navbar-nav pull-right mainNav">
                    <li ><a href="DisplayAnnoucement.php">الاعلانات </a></li>
                  <li><a href="#contact-sec">اتصل بنا</a></li>
                  <li><a href="#contact-sec"> متابعة الطلبات </a></li>
                    <!--  <li><a href="#features-sec">اتصل بنا</a></li> -->
                   
					  <li><a href="#course- " class="dropdown-toggle" data-toggle="dropdown">البلاغات<b class="caret"></b></a>
						<ul class="dropdown-menu" style='text-align: right; padding-right:0px;'>
							<li><a href="#register-sec"  >كسر خط </a></li>
							<li><a href="#features-sec">عطش  </a></li>
							<li><a href="#features-sec">تلوث مياه</a></li>
							 
						</ul>
					 </li>
                     <li><a href="#course- " class="dropdown-toggle" data-toggle="dropdown">الخمدمات الالكتروية  <b class="caret"></b></a>
						<ul class="dropdown-menu" style='text-align: right; padding-right:0px;'>
							<li><a href="#register-sec"  >توصيل جديد</a></li>
							<li><a href="#features-sec">تعديل بيانات </a></li>
							<li><a href="DisplayEvaluation.php">استعلام عن فاتورة</a></li>
							 
						</ul>
					 </li>
                     <li><a href="#home">الرئسية </a></li>
                </ul>
            </div>
           
        </div>
    </div>
      
      
    
      

    <!-- register SECTION END-->
      <div   class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1   class="header-line">لوحة التحكم   </h1>
                     <p  >
                مرحبا بك -------
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row  " >
           <div style='text-align:right; direction:rtl; border:1px solid #ddd;'class="col-lg-9 col-md-6 col-sm-6 "  >
              
				<?php
				
				 if(!Isset($_SESSION['ADMIN'])){
						include "logup.php" ;
					} 
				?>
				 
           </div>
               <div style='text-align:right; direction:rtl;     margin-left: 0px;' class="col-lg-3 col-md-4 col-sm-4  col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-primary"  >
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a     href="?page=Cusers" class="collapsed">
                                  <strong>ادارة المستخدمين </strong>  
                                    </a>
                                </h4>
                            </div>
                           
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a  href="?page=Cregister" class="collapsed">
                                      <strong> ادارة الطلبات والعملاء  </strong> 
                                    </a>
                                </h4>
                            </div>
                           
                        </div>
                        <div class="panel panel-primary"  >
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a   href="?page=CMassge" class="collapsed">
                                        <strong>  الرسائل </strong> 
                                    </a>
                                </h4>
                            </div>
                           
                        </div>
						 <div class="panel panel-primary"  >
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a  href="?page=annoucement" class="collapsed">
                                        <strong>ادارة الاعلانات  </strong> 
                                    </a>
                                </h4>
                            </div>
                           
                        </div>
					
						 <div class="panel panel-primary"> 
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a   href="?page=evaluation" class="collapsed">
                                        <strong>ادارة البلاغات</strong> 
                                    </a>
                                </h4>
                            </div>
                           
                        </div>
						
	
                    </div>
                  
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->
    
     <div class="container">
             <div class="row set-row-pad"  >
    <div style='text-align:right;' class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.9s">

                    <h2 ><strong>تصميم </strong></h2>
        <hr />
                    <div >
                        <h4>رامي سليمان محمد الامين  </h4>
                        <h4>علي محمد احمد طه  </h4>
                                              
                    </div>


                </div>
                 <div style='text-align:right;' class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.9s">

                    <h2 ><strong>تواصل معنا عبر </strong></h2>
						<hr>
                    <div >
                        <a href="#">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="#"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                    </div>


                </div>
                 </div>
     <!-- CONTACT SECTION END-->
    <div id="footer">
           جميع الحقوق محفوظة للمصممين
  <a href="#" style="color: #fff" target="_blank"> </a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
