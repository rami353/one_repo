
<?php
// تعديل ينات مستخدم
 
if(ISSET($_POST['edit'])){
	
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		$EvalNo =$_POST['EvalNo'];
		 $EvalStudentNo = $_POST['EvalStudentNo'];
		 $Evaluation = $_POST['Evaluation'];
		 $AdminNo = $_POST['AdminNo'];
		 
		 
		 
     
		  @$sql="update evaluation set EvalStudentNo = '$EvalStudentNo', Evaluation = '$Evaluation',AdminNo = '$AdminNo'  where EvalNo = ".$EvalNo ;


		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=evaluation");
		}


}
/// تعديل حالة البلاغ  
if(ISSET($_GET['actionProced1'])){
	if(isset($_SESSION['Userid'])) $AdminNo = $_SESSION['Userid'];
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
			$Id =  $_GET['Id'];
	 	// proced`, `proced_date`, `discription`SELECT * FROM `notification` WHERE 1
		  @$sql="update notification set proced=2 ,recive_by='$AdminNo' where noti_id=".$Id ;
		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=evaluation");
		}
 }
if(ISSET($_GET['actionProced2'])){
			if(isset($_SESSION['Userid'])) $AdminNo = $_SESSION['Userid'];
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
			$Id =  $_GET['Id'];
	 	// proced`, `proced_date`, `discription`SELECT * FROM `notification` WHERE 1
		  @$sql="update notification set proced=1 ,recive_by='$AdminNo'  where noti_id=".$Id ;
		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=evaluation");
		}
 }
 

//بلاغ 
if(ISSET($_POST['save'])){
		// `noti_id`, `noti_type`, `noti_loc`, `noti_date`, `noti_name`, `noti_phone`, `recive_by`, `proced`, `proced_date`, `discription`SELECT * FROM `notification` WHERE 1
		 
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $noti_type = $_POST['noti_type'];
		 $noti_loc = $_POST['noti_loc'];
		 $noti_date = $_POST['noti_date'];
		 $noti_name = $_POST['noti_name'];
		 $noti_phone = $_POST['noti_phone'];
		 $discription = $_POST['discription'];
		 $Cust_home_address = $_POST['Cust_home_address'];
		  $cust_phone = $_POST['cust_phone'];
		 $Cust_home_owner = $_POST['Cust_home_owner'];
  
			@$sql="insert into  notification (`noti_type`, `noti_loc`, `noti_date`, `noti_name`, `noti_phone`,`discription`)
		 values('$noti_type', '$noti_loc', '$noti_date', '$noti_name', '$noti_phone','$discription')";
	 
		$result = mysqli_query($conn,$sql);

		if($result == true){
				header("location:index.php#notification-sec");
		}


	}








// حذف
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$Id =  $_GET['Id'];
	  $sql = " delete from notification  where noti_id=".$Id ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$Id."تم حذف    رقم '</script>";
			header("location:Cpanel.php?page=evaluation");
		}
}


// عرض البلاغات
include_once ('config.php');
	// `noti_id`, `noti_type`, `noti_loc`, `noti_date`, `noti_name`, `noti_phone`, `recive_by`, `
	// proced`, `proced_date`, `discription`SELECT * FROM `notification` WHERE 1
 
$sql = "select * from notification order by noti_id desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover' data-scroll-reveal='enter from the bottom after 0.1s'>";
		echo "<tr style='background-color:#ffe082;  '>
				<td><B>الرقم  </B></td>
				<td><B>الاسم</B></td>
				<td><B>الهاتف</B></td>
				<td><B>نوع البلاغ </B></td>
				<td><B>الموقع</B></td>
				<td><B>الوصف</B></td>
				
			 
				<td><B>التاريخ</B></td>
				<td><B>متابعة</B></td>
				<td><B> مستلم البلاغ</B></td>
				<td><B> تاريخ المعالجة</B></td>
				
				<td><B>العمليات	</B></td>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr >
				<td>".$row['noti_id']."</td>  
				<td>".$row['noti_name']."</td> 
				<td>".$row['noti_phone']."</td> 
				<td>";
				
				IF($row['noti_type']==1){
						ECHO" كسر خط رئيسي   ";
				}ELSEIF($row['noti_type']==2){
						ECHO"كسر خط فرعي";
				}ELSEIF($row['noti_type']==3){
						ECHO"عطش";
				}ELSEIF($row['noti_type']==4){
						ECHO"    تلوث مياه ";
				}ELSEIF($row['noti_type']==4){
						ECHO"الابلاغ عن اهمال في استهلاك المياه";
				}
				ECHO "</td> 
				<td>";
				
				IF($row['noti_loc']==1){
						ECHO" الخرطوم   ";
				}ELSEIF($row['noti_loc']==2){
						ECHO"    ام درمان   ";
				}ELSEIF($row['noti_loc']==3){
						ECHO"   شرق النيل  ";
				}ELSEIF($row['noti_loc']==4){
						ECHO"   جبل اولياء  ";
				}
				ECHO "</td> 
				<td>".$row['discription']."</td> 
				<td>".$row['noti_date']."</td><td> 
				";
				  
				if($row['proced']==1){
					echo "	<a href='?page=evaluation&actionProced1=edit&Id=".$row['noti_id']."'>قيد الاجراء</a> 
					";
				}else{
				echo "	<a href='?page=evaluation&actionProced2=edit&Id=".$row['noti_id']."'>تم الاجراء   </a> ";
				}
				
				echo "</td>
				 
			   ";
		 
				 include_once ('config.php');
						  if(isset($_SESSION['Userid'])) $AdminNo = $_SESSION['Userid'];
							$sqltalent = "select Name FROM users  where id='".$row['recive_by']."'";
							$resulttalent = mysqli_query($conn,$sqltalent);
							 if(@mysqli_num_rows($resulttalent)> 0){
								 $rowtalent = mysqli_fetch_assoc($resulttalent);  
									echo " <td>".$rowtalent['Name']."</td>";
							  }else{
								  echo " <td>none</td>";
							  }
				  			
				echo " 
				<td>".$row['proced_date']."</td>
				<td>
					 
					<a href='?page=evaluation&action=delete&Id=".$row['noti_id']."'><img src='assets/img/trash.png' width='20' > </a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لا يوجد بلاغ الي الان  ";
 }

 mysqli_close($conn);


