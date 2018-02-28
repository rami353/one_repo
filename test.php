<center>
<h4>نتائج الاختبار  </h4>
</center>
<a href='?page=test&action=add'><img src='assets/img/user-add.png' width='20'>اضافة تقيم لطالب</a>

<?php
// تعديل ينات مستخدم
//`ResultNo`, `ResultStudentNO`, `degree`, `Resultdate`, `adminId`SELECT * FROM `result` WHERE 1
    if(@$_GET['action'] && $_GET['action']== 'edit'){
	include_once ('config.php');
	 if(isset($_SESSION['Userid'])) $adminid = $_SESSION['Userid'];
	  $Id =  $_GET['Id'];
	  $sql = " select * from result  where ResultNo = ".$Id ;
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

		ECHO "
			<form action='".$_SERVER['PHP_SELF']."?page=test' method='post'>

                        <table>
						<tr>
                                <td>اسم الطالب </td>
                                <td>
								<div class='form-group'>
										<select name='ResultStudentNO' width='20' class='form-control ' >
							";
                                  
									include_once ('config.php');
								  
									$sql = "select * from register order by RegNO desc";
									$result = mysqli_query($conn,$sql);
									 if(@mysqli_num_rows($result)> 0){
											while($rowall = mysqli_fetch_assoc($result)){
												 if($rowall['RegNO']== $row['ResultStudentNO']){
													 echo " <option value='".$rowall['RegNO']."' selected>".$rowall['RegName']." </option>";
												 }else{
														 echo " <option value='".$rowall['RegNO']."'>".$rowall['RegName']." </option>";
												 }
											
												 
											 }
									 }
                                   
								 
								echo "

								</select>
									</div>
								
								</td>
                            </tr>
                             
                            <tr>
                                <td>التقيم </td>
                                <td>
								<div class='form-group'>
										 
											<select class='form-control ' name='degree' width='20'>
											";
											 
											if($row['degree']==4) echo "
											<option value='4' selected>ممتاز</option>
											<option value='3'>جيد جدا</option>
											<option value='2'>جيد  </option>
											<option value='1'>ضعيف</option>
											
											";
											else if($row['degree']==3) echo "
											<option value='4'>ممتاز</option>
											<option value='3' selected>جيد جدا</option>
											<option value='2'>جيد  </option>
											<option value='1'>ضعيف</option>";
											else if($row['degree']==2) echo "
											<option value='4'>ممتاز</option>
											<option value='3'>جيد  </option>
											<option value='2' selected>جيد جدا</option>
											<option value='1'>ضعيف</option>";
											else  echo "
											<option value='4'>ممتاز</option>
											<option value='3'>جيد جدا</option>
											<option value='2'>جيد  </option>
											<option value='1' selected>ضعيف</option>";
											echo "
											
											  
										</select>
									</div>
							
								</td>
                            </tr>
                             <tr>

                                <td colspan='2'>
									<div class='form-group'>
										<input    class='btn btn-info  btn-l' type='submit' name='edit' value='تعديل'/>
									</div>
								
								</td>
								 <input type='hidden' name='adminId' value='".$adminid."'  />
                                <input type='hidden' name='ResultNo' value='".$Id."'/>
                            </tr>
                        </table>


                        </form>";
}

//تعديل
if(ISSET($_POST['edit'])){
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		$ResultNo =$_POST['ResultNo'];
		 $ResultStudentNO = $_POST['ResultStudentNO'];
		 $degree = $_POST['degree'];
		 $adminId = $_POST['adminId'];
		 
		 
		 
     
		  @$sql="update result set ResultStudentNO = '$ResultStudentNO', degree = '$degree',adminId = '$adminId'  where ResultNo = ".$ResultNo ;


		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=test");
		}


}


// اضافة مستخدم فورم
 
  //`ResultNo`, `ResultStudentNO`, `degree`, `Resultdate`, `adminId`SELECT * FROM `result` WHERE 1
if(@$_GET['action'] && $_GET['action']== 'add'){
	echo "<form action='test.php' method='post'>
                        <table>
                            <tr>
                                <td>الاسم </td>
                                <td>
									<div class='form-group'>
										 
										<select name='ResultStudentNO' width='20' class='form-control '>";
									 include_once ('config.php');
								  
									$sql = "select * from register order by RegNO desc";
									$result = mysqli_query($conn,$sql);
									 if(@mysqli_num_rows($result)> 0){
											while($rowall = mysqli_fetch_assoc($result)){
												 
														 echo " <option value='".$rowall['RegNO']."'>".$rowall['RegName']." </option>";
												 }
											
												 
											 }
									 
									
										 
									echo "
									</select>
								 
									</div>
								
								
								</td>
                            </tr>
                            <tr>
                                <td>الدرجة</td>
								
                                <td>
									<div class='form-group'>
										<select name='degree' width='20' class='form-control '>
											<option value='4' >ممتاز</option>
											<option value='3' > جديد جدا </option>
											<option value='2' >جديد</option>
											<option value='1' >ضعيف</option>
										</select>
										 
									</div>
								 
								</td>
                            </tr>
                             
                            
                           ";
						    if(isset($_SESSION['Userid'])) $adminid = $_SESSION['Userid'];
                            
							echo "
                            <tr>
								
                                <td colspan='2' align='center'>
								<div class='form-group'>
									
									 <input type='hidden' name='adminId' value='".$adminid."'  />
									 <input type='submit' name='save' value='حفظ' class='btn btn-info  btn-l'/>
									</div>
								
								
								</td>
                            </tr>
                        </table>


                        </form>";
}


//اضافة المستخدم حفظ بيانات المستخدم
if(ISSET($_POST['save'])){
	 // `ResultNo`, `ResultStudentNO`, `degree`, `Resultdate`, `adminId`SELECT * FROM `result` WHERE 1
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $ResultStudentNO = $_POST['ResultStudentNO'];
		 $degree = $_POST['degree'];
		 $adminId = $_POST['adminId'];
		 
		  
		 echo @$sql="insert into  result (`ResultStudentNO`, `degree`, `adminId`)
		 values('$ResultStudentNO',$degree,$adminId  )";
		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم اضافة  طالب جديد';
			header("location:Cpanel.php?page=test");
		}


}








// حذف
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$Id =  $_GET['Id'];
	$sql = " delete from result  where ResultNo=".$Id ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$Id."تم حذف    رقم '</script>";
			header("location:Cpanel.php?page=test");
		}
}


// عرض المستخدمين 
include_once ('config.php');
//`ResultNo`, `ResultStudentNO`, `degree`, `Resultdate`, `adminId`SELECT * FROM `result` WHERE 1
 
$sql = "select * from result order by ResultNo desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover' data-scroll-reveal='enter from the bottom after 0.1s'>";
		echo "<tr style='background-color:#ffe082;  '>
				<td><B>الرقم  </B></td>
				<td><B>الاسم</td>
				<td><B>الدرجة </B></td>
			 
				<td><B>اسم المستخدم </B></td>
				<td><B> التاريخ</B></td>
				
				<td><B>العمليات	</B></td>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr >
				<td>".$row['ResultNo']."</td>
				";
				 include_once ('config.php');
						 
							$sqltalent = "select RegName FROM register  where RegNO='".$row['ResultStudentNO']."'";
							$resulttalent = mysqli_query($conn,$sqltalent);
							 if(@mysqli_num_rows($resulttalent)> 0){
								 $rowtalent = mysqli_fetch_assoc($resulttalent);  
									echo " <td>".$rowtalent['RegName']."</td>";
							  }else{
								  echo " <td>none</td>";
							  }
				  			
				echo "
				<td>".$row['degree']."</td>
				 
			   ";
		 
				 include_once ('config.php');
						  if(isset($_SESSION['Userid'])) $adminid = $_SESSION['Userid'];
							$sqltalent = "select Name FROM users  where id='".$row['adminId']."'";
							$resulttalent = mysqli_query($conn,$sqltalent);
							 if(@mysqli_num_rows($resulttalent)> 0){
								 $rowtalent = mysqli_fetch_assoc($resulttalent);  
									echo " <td>".$rowtalent['Name']."</td>";
							  }else{
								  echo " <td>none</td>";
							  }
				  			
				echo " 
				<td>".$row['Resultdate']."</td>
				<td>
					<a href='?page=test&action=edit&Id=".$row['ResultNo']."'><img src='assets/img/edit.png' width='20'></a> -
					<a href='?page=test&action=delete&Id=".$row['ResultNo']."'><img src='assets/img/trash.png' width='20' > </a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لايوجد طالب مسجل  الان ";
 }

 mysqli_close($conn);


