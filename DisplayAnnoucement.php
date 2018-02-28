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
                  <li><a href="#treant-sec"> متبعة البلاغات </a></li>
                    <!--  <li><a href="#features-sec">اتصل بنا</a></li> -->
                   
					  <li><a href="#notification-sec" class="dropdown-toggle" data-toggle="dropdown">البلاغات<b class="caret"></b></a>
						<ul class="dropdown-menu" style='text-align: right; padding-right:0px;'>
							<li><a href="#notification-sec"  >كسر خط </a></li>
							<li><a href="#notification-sec">عطش  </a></li>
							<li><a href="#notification-sec">تلوث مياه</a></li>
							 
						</ul>
					 </li>
                     <li><a href="#course- " class="dropdown-toggle" data-toggle="dropdown">الخدمات الالكترونية  <b class="caret"></b></a>
						<ul class="dropdown-menu" style='text-align: right; padding-right:0px;'>
							<li><a href="#register-sec"  >توصيل جديد</a></li>
							<li><a href="#features-sec">تعديل بيانات </a></li>
							<li><a href="DisplayEvaluation.php">استعلام عن فاتورة</a></li>
							 
						</ul>
					 </li>
                     <li><a href="index.php">الرئسية </a></li>
                </ul>
            </div>
           
        </div>
    </div>
    
    <!-- register SECTION END-->
      <div id="register-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">الاعلانات  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                اخر الاخبار
                        
						 <?php
							 
				
				?>
				 </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row set-row-pad" >
		   <?PHP
		   include_once ('config.php');
				//`AnnNo`, `AnnAdress`, `AnnContent`, `AnnImage`, `Anndate`SELECT * FROM `annoucement` WHERE 1
			 
			$sql = "select * from annoucement order by AnnNo desc";
			$result = mysqli_query($conn,$sql);
					if(@mysqli_num_rows($result)< 0){
				ECHO 'لايوجد اعلان ';
			 }
		   ?>
			  <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
				 <div class="panel-group" id="annoucement" style='text-align:right; direction:rtl; margin-left:0;'>
				 <?PHP
				  while($row = mysqli_fetch_assoc($result)){?>
				      
				   <div class="panel panel-info "  >
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#annoucement" href="#<?PHP ECHO $row['AnnNo'];?>" class="collapsed">
                                        <strong>  <?PHP ECHO $row['AnnAdress'];?> </strong> 
                                    </a>
                                </h4>
                            </div>
                            <div id="<?PHP ECHO $row['AnnNo'];?>" class="panel-collapse collapse "  style="height: 0px;">
                                <div class="panel-body">
									<IMG style='float:right;  padding-left:10px;'src='<?PHP ECHO $row['AnnImage'];?>' width='100' height='100' >
                                    <p style='font-size:11px; float:right; line-height: 20px;' >
									
                                     <?PHP ECHO $row['AnnContent'];?>
									 <br><b><?PHP ECHO $row['Anndate'];?></b>
                                    </p>
                                </div>
                            </div>
                        </div>
				 
				<?PHP }
				 ?>
				</div>
			  
                         
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
    
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >تواصل معنا   </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
              
					 
					 <?php
						if(ISSET($_POST['massge'])){
							 // `ContNo`, `ContName`, `ContContEmail`, `ContMassge`, `ContContDate`SELECT * FROM `contact` WHERE 1
								INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
								 $ContName = $_POST['ContName'];
								 $ContEmail = $_POST['ContEmail'];
								 $ContMassge = $_POST['ContMassge'];
								 
								  
								     @$sql="insert into  contact (`ContName`, `ContEmail`, `ContMassge`)
								 values('$ContName','$ContEmail','$ContMassge' )";
								$result = mysqli_query($conn,$sql) or mysql_error();;

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

                    <h2 ><strong>تصميم  </strong></h2>
        <hr />
                    <div >
                        <h4>رامي سليمان محمد الامين</h4>
                        <h4>علي محمد احمد طه </h4>
                       
                                              
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
          جميع الحقوق  محفوظة للمصممين 
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
