<center>
<h4>الطلاب </h4>
</center>
<a href='?page=Ctalent&action=add'><img src='assets/img/user-add.png' width='20'> اضافة طالب</a>

<?php
// تعديل ينات مستخدم
//`TalNo`, `TalName`, `TalDiscription`, `TalDate`SELECT * FROM `talent` WHERE 1
    if(@$_GET['action'] && $_GET['action']== 'edit'){
	include_once ('config.php');

	  $Id =  $_GET['Id'];
	  $sql = " select * from talent  where RegNO = ".$Id ;
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

		ECHO "
			<form action='".$_SERVER['PHP_SELF']."?page=Ctalent' method='post'>

                        <table>
                            <tr>
                                <td>الاسم </td>
                                <td>
									<div class='form-group'>
											<input class='form-control ' type='text' name='RegName' value ='".$row['RegName']."'/>
									</div>
								
								</td>
                            </tr>
                            <tr>
                                <td>البريد الالكترونى </td>
                                <td>
								<div class='form-group'>
											<input class='form-control ' type='text' name='RegEmail' value ='".$row['RegEmail']."'/>
									</div>
							
								</td>
                            </tr>
                            <tr>
                                <td>الهاتف </td>
                                <td>
								<div class='form-group'>
										<input class='form-control ' type='text' name='RegPhone' value ='".$row['RegPhone']."'/>
									</div>
								
								</td>
                            </tr>
                            <tr>
                                <td>الموهبة</td>
                                <td>
								<div class='form-group'>
										<input class='form-control ' type='text' name='TalentNo' value ='".$row['TalentNo']."'/>
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
									*/
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
                                <input type='hidden' name='RegNO' value='".$Id."'/>
                            </tr>
                        </table>


                        </form>";
}

//تعديل
if(ISSET($_POST['edit'])){
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $RegNO = $_POST['RegNO'];
		 $RegName = $_POST['RegName'];
		 $RegEmail = $_POST['RegEmail'];
		 $RegPhone = $_POST['RegPhone'];
		 $TalentNo = $_POST['TalentNo'];
		 
		 
        //`RegNO`, `RegName`, `RegEmail`, `RegPhone`, `TalentNo`, `RegDate`SELECT * FROM `talent` WHERE 1
		@$sql="update talent set RegName = '$RegName', RegEmail = '$RegEmail',RegPhone = '$RegPhone',TalentNo = '$TalentNo' where RegNO = ".$RegNO ;


		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=Ctalent");
		}


}


// اضافة مستخدم فورم
  //`RegNO`, `RegName`, `RegEmail`, `RegPhone`, `TalentNo`, `RegDate`SELECT * FROM `talent` WHERE 1
if(@$_GET['action'] && $_GET['action']== 'add'){
	echo "<form action='Ctalent.php' method='post'>
                        <table>
                            <tr>
                                <td>الاسم </td>
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='text' name='RegName'/>
									</div>
								
								
								</td>
                            </tr>
                            <tr>
                                <td>البريد الالكترونى </td>
								
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='text' name='RegEmail'/>
									</div>
								 
								</td>
                            </tr>
                            <tr>
                                <td>الهاتف </td>
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='text' name='RegPhone'/>
									</div>
							 
								</td>
                            </tr>
                            <tr>
                                <td> الموهبة </td>
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='text' name='TalentNo'/>
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
	 //`RegNO`, `RegName`, `RegEmail`, `RegPhone`, `TalentNo`, `RegDate`SELECT * FROM `talent` WHERE 1
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $RegName = $_POST['RegName'];
		 $RegEmail = $_POST['RegEmail'];
		 $RegPhone = $_POST['RegPhone'];
		 $TalentNo = $_POST['TalentNo'];
		  
		 echo @$sql="insert into  talent (`RegName`, `RegEmail`, `RegPhone`, `TalentNo`)
		 values('$RegName','$RegEmail','$RegPhone','$TalentNo' )";
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
	$sql = " delete from talent  where RegNO=".$Id ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$Id."تم حذف الجوال  رقم '</script>";
			header("location:Cpanel.php?page=Ctalent");
		}
}


// عرض المستخدمين 
include_once ('config.php');
//`RegNO`, `RegName`, `RegEmail`, `RegPhone`, `TalentNo`, `RegDate`SELECT * FROM `talent` WHERE 1
 
$sql = "select * from talent order by RegNO desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover' data-scroll-reveal='enter from the bottom after 0.1s'>";
		echo "<tr style='background-color:#ffe082;  '>
				<td><B>الرقم  </B></td>
				<td><B>الاسم</td>
				<td><B>البريد الالكترونى</B></td>
				<td><B>الهاتف</B></td>
				<td><B>الموهبة</B></td>
				<td><B> التاريخ</B></td>
				
				<td><B>العمليات	</B></td>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr >
				<td>".$row['RegNO']."</td>
				<td>".$row['RegName']."</td>
				<td>".$row['RegEmail']."</td>  
				<td>".$row['RegPhone']."</td>
				<td>".$row['TalentNo']."</td>
				 ";
				/*if($row['Privalige'] == 1){
										echo "مدير";								   
										}else{
										echo "مستخدم";
										}
							*/ 			
				echo " 
				<td>".$row['RegDate']."</td>
				<td>
					<a href='?page=Ctalent&action=edit&Id=".$row['RegNO']."'><img src='assets/img/edit.png' width='20'></a> -
					<a href='?page=Ctalent&action=delete&Id=".$row['RegNO']."'><img src='assets/img/trash.png' width='20' > </a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لايوجد طالب مسجل  الان ";
 }

 mysqli_close($conn);


