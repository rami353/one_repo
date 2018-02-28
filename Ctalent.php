CREATE TABLE `water`.`offices` (
`office_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`office_name` VARCHAR( 100 ) NOT NULL ,
`office_phone` VARCHAR( 11 ) NOT NULL ,
`Office _desc` TEXT NOT NULL 
) ENGINE = MYISAM ;


<h4>المكاتب </h4>
</center>
<a href='?page=Ctalent&action=add'><img src='assets/img/user-add.png' width='20'> اضافة مكتب </a>
 
<?php
// تعديل ينات مستخدم
//`TalNo`, `TalName`, `TalDiscription`, `TalDate`SELECT * FROM `talent` WHERE 1
    if(@$_GET['action'] && $_GET['action']== 'edit'){
	include_once ('config.php');

	  $Id =  $_GET['Id'];
	  $sql = " select * from talent  where TalNo = ".$Id ;
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

		ECHO "
			<form action='".$_SERVER['PHP_SELF']."?page=Ctalent' method='post'>

                        <table>
                            <tr>
                                <td>الاسم </td>
                                <td>
									<div class='form-group'>
											<input class='form-control ' type='text' name='TalName' value ='".$row['TalName']."'/>
									</div>
								
								</td>
                            </tr>
                          
                            <tr>
                                <td>الهاتف </td>
                                <td>
								<div class='form-group'>
										<input class='form-control ' type='text' name='TalDiscription' value ='".$row['TalDiscription']."'/>
									</div>
								
								</td>
                            </tr>
                             
                            ";
                                   /*
                            <tr>
                                <td>الصلاحية </td>
                                <td>
								<div class='form-group'>
										<select name='Privalige' width='20'>
                                   if($row['Privalige']== 0){
                                          echo"<option value='0'>متستخدم</option>
						            		<option value='1'>مدير</option>";
                                    }else{
                                      echo"
                                      <option value='1'>مدير</option>
                                      <option value='0'>متستخدم</option>  ";
                                    }
									echo "	</select>
										</div>
								
										</td>
									</tr>";
									*/
								echo "

							
                            <tr>

                                <td colspan='2'>
									<div class='form-group'>
										<input    class='btn btn-info  btn-l' type='submit' name='edit' value='تعديل'/>
									</div>
								
								</td>
                                <input type='hidden' name='TalNo' value='".$Id."'/>
                            </tr>
                        </table>


                        </form>";
}

//تعديل

if(ISSET($_POST['edit'])){
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $TalNo = $_POST['TalNo'];
		 $TalName = $_POST['TalName'];
		 $TalDiscription = $_POST['TalDiscription'];
		 
		 
		 
        //`TalNo`, `TalName`, `TalDiscription`, `TalDate`SELECT * FROM `talent` WHERE 1
		@$sql="update talent set TalName = '$TalName', TalDiscription = '$TalDiscription' where TalNo = ".$TalNo ;


		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=Ctalent");
		}


}


// اضافة مكتب 
CREATE TABLE `water`.`offices` (
`office_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`office_name` VARCHAR( 100 ) NOT NULL ,
`office_phone` VARCHAR( 11 ) NOT NULL ,
`Office _desc` TEXT NOT NULL 
) ENGINE = MYISAM ;
	
if(@$_GET['action'] && $_GET['action']== 'add'){
	echo "<form action='Ctalent.php' method='post'>
                        <table>
                            <tr>
                                <td>المكتب </td>
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='text' name='office_name'/>
									</div>
								
								
								</td>
                            </tr>
                            <tr>
                                <td>الوصف  </td>
								
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='text' name='Office _desc'/>
									</div>
								 
								</td>
                            </tr>
                             
                                 
                           ";
                           /* <tr>
                                <td>الصلاحية </td>
                                <td>
								<div class='form-group'>
										<select class='form-control ' name='Privalige' width='20'>

											<option value='0'>متستخدم</option>
											<option value='1'>مدير</option>

										</select>
									</div>
								
								</td>
                            </tr> */
							echo "
                            <tr>
								
                                <td colspan='2' align='center'>
								<div class='form-group'>
									 <input type='submit' name='save' value='حفظ' class='btn btn-info  btn-l'/>
									</div>
								
								
								</td>
                            </tr>
                        </table>


                        </form>";
}


//اضافة المستخدم حفظ بيانات المستخدم
if(ISSET($_POST['save'])){
	//`TalNo`, `TalName`, `TalDiscription`, `TalDate`SELECT * FROM `talent` WHERE 1	
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $TalName = $_POST['TalName'];
		 $TalDiscription = $_POST['TalDiscription'];
		 
		  
		 echo @$sql="insert into  talent (`TalName`, `TalDiscription` )
		 values('$TalName','$TalDiscription'  )";
		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم اضافة  طالب جديد';
			header("location:Cpanel.php?page=Ctalent");
		}


}








// حذف
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$Id =  $_GET['Id'];
	$sql = " delete from talent  where TalNo=".$Id ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$Id."تم حذف    رقم '</script>";
			header("location:Cpanel.php?page=Ctalent");
		}
}


// عرض المستخدمين 
include_once ('config.php');
///`TalNo`, `TalName`, `TalDiscription`, `TalDate`SELECT * FROM `talent` WHERE 1	
 
$sql = "select * from talent order by TalNo desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover' data-scroll-reveal='enter from the bottom after 0.1s'>";
		echo "<tr style='background-color:#ffe082;  '>
				<td><B>الرقم  </B></td>
				<td><B>اسم الموهبة</td>
				<td><B>الوصف</B></td>
			 
				<td><B> التاريخ</B></td>
				
				<td><B>العمليات	</B></td>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr >
				<td>".$row['TalNo']."</td>
				<td>".$row['TalName']."</td>
				<td>".$row['TalDiscription']."</td>  
				<td>".$row['TalDate']."</td>
			 
				 ";
				/*if($row['Privalige'] == 1){
										echo "مدير";								   
										}else{
										echo "مستخدم";
										}
							*/ 			
				echo " 
				 
				<td>
					<a href='?page=Ctalent&action=edit&Id=".$row['TalNo']."'><img src='assets/img/edit.png' width='20'></a> -
					<a href='?page=Ctalent&action=delete&Id=".$row['TalNo']."'><img src='assets/img/trash.png' width='20' > </a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لا توجد بيانات ";
 }

 mysqli_close($conn);


 