/*TABLE `notification` (`noti_id` `noti_type` `noti_loc` `noti_date` `noti_name` `noti_phone``recive_by` `proced` `proced_date`*/ 


<?php
session_start();
 
							if(ISSET($_POST['notification'])){
								 
									INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
									 $noti_type = $_POST['noti_type'];
									 $noti_loc = $_POST['noti_loc'];
									 $noti_date = $_POST['noti_date'];
									 $noti_name = $_POST['noti_name'];
									 $noti_phone = $_POST['noti_phone'];
									 $recive_by = $_POST['recive_by'];
									 $proced = $_POST['proced'];
									 $proced_date = $_POST['proced_date'];
							  
									    @$sql="insert into  notification (`noti_type`, `noti_loc`, `noti_date`,`noti_name`,`noti_phone`,`recive_by`,`proced`,`proced_date`)
									 values('$noti_type','$noti_loc','$noti_date','$noti_name','$noti_phone','$recive_by',' $proced','$proced_date')";
								 
									$result = mysqli_query($conn,$sql);

									if($result == true){
										echo"شكرا لك يا 'noti_name'رقم بلاغك هو `noti_id`";
										
										 
									}


							}
				
				?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> </title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
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
      <!--NAVBAR SECTION END-->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h3>هيئة مياه ولاية الخرطوم- موقع الخدمات الالكترونية والبلاغات  </h3>
                           <h1>التقديم الالكتروني للخدمات </h1>
                            <a  href="#features-sec" class="btn btn-info btn-lg" >
                               التقديم الالكتروني
                            </a>
                             <a  href="notification.php" class="btn btn-success btn-lg" > البلاغات</a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h3>هيئة مياه ولاية الخرطوم- موقع الخدمات الالكترونية والبلاغات  </h3>
                           <h1>الابلاغ عن الاعطال في الشبكة الرئيسية </h1>
                             <a  href="#features-sec" class="btn btn-primary btn-lg" >
                             التقديم الالكتروني
                            </a>
                             <a  href="#features-sec" class="btn btn-danger btn-lg" >
                                البلاغات 
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h3> هيئة مياه ولاية الخرطوم- موقع الخدمات الالكترونية والبلاغات </h3>
                           <h1>الاستعلام عن الفاتورة والمتاخرات  </h1>
                             <a  href="#features-sec" class="btn btn-default btn-lg" >
                                التقديم الالكتروني
                            </a>
                             <a  href="#features-sec" class="btn btn-info btn-lg" >
                              البلاغات 
                            </a>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> مرحبا بكم زبائننا الكرام   <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
	
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">من نحن  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
مرحبا بكم في موقع هيئة مياه ولاية الخرطوم                          </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >
           
               
                 <div style='direction:rtl;'class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                     <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>
                   <h3 >التقديم الالكتروني </h3>
                 <hr />
                       <hr />
                   <p >
نحن حريصين علي ان نقدم افضل الخدمات لزبائننا الكرام                       
                   </p>
               <a href="#contact-sec" class="btn btn-info btn-set"  >التقديم الالكتروني </a>
                </div>
                   </div>
                   <div style='direction:rtl;'class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                     <i class="fa fa-bolt fa-4x icon-round-border" ></i>
                   <h3 > البلاغات</h3>
                 <hr />
                       <hr />
                   <p >
نحن حريصين علي ان نقدم افضل الخدمات لزبائننا الكرام                       
                   </p>
               <a href="#contact-sec" class="btn btn-info btn-set"  >البلاغات </a>
                </div>
                   </div>
                 <div style='direction:rtl;' class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                     <i class="fa fa-magic fa-4x icon-round-border" ></i>
                   <h3 >الخدمات الالكترونية</h3>
                 <hr />
                       <hr />
                   <p >
نحن حريصين علي ان نقدم افضل الخدمات لزبائننا الكرام                       
                   </p>
               <a href="#contact-sec" class="btn btn-info btn-set"  >الخدمات الالكترونية  </a>
                </div>
                   </div>
                 
                 
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">مركز البلاغات وخدمات المواطنين</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
الترشيد في المياه والمحافظة عبيها من وصايا نبينا الكريم  صلي الله عليه وسلم
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" style='direction:rtl;' >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <img src="assets/img/faculty/1.png"  class="img-rounded" />
                   <h4>هيئة مياه ولاية الخرطوم</h4>
                 <hr />
                         <h4>اهدافنا  <br /> افضل الخدمات</h4>
                   <p >
                       نحن حريصين علي ان نقدم افضل الخدمات لزبائنناالكرام ,,,,
                       
                   </p>
            </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <img src="assets/img/faculty/1.png"  class="img-rounded" />
                    <h4>هيئة مياه ولاية الخرطوم</h4>
                 <hr />
                         <h4>الابلاغ عن الاعطال <br />الشبكة الرئيسية</h4>
                   <p >
                    الرجاء التبليغ عن الاعطال في الشبكة الرئيسية لتتم الصيانة في اسع وقت 
                       
                   </p>
                </div>
                   </div>
               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                     <img src="assets/img/faculty/1.png" class="img-rounded" />
                   <h4>هيئة مياه ولاية الخرطوم</h4>
                 <hr />
                         <h4>مياه الشرب <br /> المحافظة علي المياه نظيفة في الاماكن العامة </h4>
                   <p >
الرجاء المحافظة علي مياه الشرب نقية لسلامتك وسلامة غيرك                       
                   </p>
                </div>
                   </div>
                 
               </div>
             </div>
        </div>

    <!-- register SECTION END-->
      <div id="register-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">البلاغات  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">مرحبا بك في مركز البلاغات  </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
 <!--//TABLE `notification` (`noti_id` `noti_type` `noti_loc` `noti_date` `noti_name` `noti_phone``recive_by` `proced` `proced_date`-->


           <div class="row set-row-pad" >
           <div style='text-align:right; direction:rtl;'class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
				
			   <form action='index.php#register-sec' method='post'>
 
                        	<div class="form-group ">
                         <select name='noti_type' class="form-control ">
						 <option value='1'>-اختار نوع البلاغ-  </option>
						 <option value='1'>كسر خط رئيسي  </option>
						 <option value='1'>  كسر خط فرعي  </option>
						 <option value='1'>  عطش </option>
						 <option value='1'>  تلوث مياه  </option>
						 <option value='1'>  الابلاغ عن اهمال في استهلاك المياه </option>
						  </select>
                        </div>
                        <div class="form-group">
                            <select name='noti_loc' class="form-control ">
						<option value='1'>- اختار منطقة البلاغ-  </option>
						 <option value='1'>الخرطوم  </option>
						 <option value='1'>  ام درمان  </option>
						 <option value='1'>  بحري  </option>
						 <option value='1'>  شرق النيل   </option>
						 <option value='1'>  جبل اولياء  </option>
						  </select>
                        </div>
						
						 <div class="form-group">
                            <input type="text" class="form-control " name='noti_name' required="required"  placeholder=" اسم المبلغ " />
                        </div>
						 <div class="form-group">
                            <input type="text" class="form-control " name='noti_phone' required="required"  placeholder="الهاتف  " />
                        </div>
						
						 
						 
                      
						
                        <div class="form-group">
                            <button type="SUBMIT" NAME='notification' class="btn btn-info btn-block btn-lg">إبلاغ </button>
                        </div>

                    </form>
           </div>
		   

                  <!-- <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s" >
                       <span style="font-size:40px;">
                          <strong> 2500 + </strong> 
                           <hr />
                           Centers
                       </span>
                   </div>-->
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->
	   <!-- register SECTION END-->
	
                        
	
				 </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

          <!-- <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s" >
                       <span style="font-size:40px;">
                          <strong> 2500 + </strong> 
                           <hr />
                           Centers
                       </span>
                   </div>-->
           </div>
             
                 
                 
               </div>
             </div>
			
      <!-- COURSES SECTION END-->
    <div id="contact-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >تواصل معنا   </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
هل لديك اي ملاحظة عن الموقع شاركنا بها
					 <?php
						if(ISSET($_POST['massge'])){
							 // `ContNo`, `ContName`, `ContContEmail`, `ContMassge`, `ContContDate`SELECT * FROM `contact` WHERE 1
								INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
								 $ContName = $_POST['ContName'];
								 $ContEmail = $_POST['ContEmail'];
								 $ContMassge = $_POST['ContMassge'];
								 
								  
								     @$sql="insert into  contact (`ContName`, `ContEmail`, `ContMassge`)
								 values('$ContName','$ContEmail','$ContMassge' )";
								$result = mysqli_query($conn,$sql) or mysql_error();

								if($result == true){
									echo "<b style='color:#green;'> >نشكرك ".$ContName." على الرسالة </b>";
									 
								}


						}
			
					?>
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
          
               
                 <div style='direction:rtl;' class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action='index.php#contact-sec' method='post'>
                        <div class="form-group">
                            <input type="text" class="form-control " name ='ContName' required="required" placeholder="الاسم " />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " name='ContEmail' required="required"  placeholder="البريد الالكترونى " />
                        </div>
                        <div class="form-group">
                            <textarea name="ContMassge" required="required"   class="form-control" style="min-height: 150px;" placeholder="نص الرسالة "></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name ='massge'  class="btn btn-info btn-block btn-lg">ارسال </button>
                        </div>

                    </form>
                </div>

                   
     
              
              
                
               </div>
                </div>
          </div> 
       </div>
     <div class="container">
             <div class="row set-row-pad"  >
    <div style='text-align:right;' class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>اسماء المجموعة  </strong></h2>
        <hr />
                    <div >
                        <h4>رامي سليمان محمد الامين </h4>
                        <h4>علي محمد احمد طه  </h4>
                    </div>


                </div>
                 <div style='text-align:right;' class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

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
