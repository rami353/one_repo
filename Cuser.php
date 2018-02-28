<h4>لوحة التحكم فى المستخدمين</h4>
<a href='?page=Cusers&action=add'> اضافة مستخدم</a>
<?php
// تعديل ينات مستخدم
    if(@$_GET['action'] && $_GET['action']== 'edit'){
	include_once ('config.php');

	  $Id =  $_GET['Id'];
	  $sql = " select * from users  where Id = ".$Id ;
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

		ECHO "
			<form action='".$_SERVER['PHP_SELF']."?page=users' method='post'>

                        <table>
                            <tr>
                                <td>الاسم </td>
                                <td><input type='text' name='Name' value ='".$row['Name']."'/></td>
                            </tr>
                            <tr>
                                <td>الوظيفة </td>
                                <td><input type='text' name='Email' value ='".$row['Email']."'/></td>
                            </tr>
                            <tr>
                                <td>اسم المستخدم </td>
                                <td><input type='text' name='Username' value ='".$row['Username']."'/></td>
                            </tr>
                            <tr>
                                <td>كلمة المرور </td>
                                <td><input type='text' name='Userpassword' value ='".$row['Userpassword']."'/></td>
                            </tr>
                            <tr>
                                <td>الهاتف </td>
                                <td><input type='text' name='Phone' value ='".$row['Phone']."'/></td>
                            </tr>
                            <tr>
                                <td>الصلاحية </td>
                                <td>
								<select name='Privalige' width='20'>
                                  ";
                                    if($row['Privalige']== 0){
                                          echo"<option value='0'>متستخدم</option>
						            		<option value='1'>مدير</option>";
                                    }else{
                                      echo"
                                      <option value='1'>مدير</option>
                                      <option value='0'>متستخدم</option>  ";
                                    }

								echo "

								</select>
								</td>
                            </tr>
                            <tr>

                                <td colspan='2'><input type='submit' name='edit' value='تعديل'/></td>
                                <input type='hidden' name='Id' value='".$Id."'/>
                            </tr>
                        </table>


                        </form>";
}

//تعديل
if(ISSET($_POST['edit'])){
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $Id = $_POST['Id'];
		 $Name = $_POST['Name'];
		 $Email = $_POST['Email'];
		 $Username = $_POST['Username'];
		 $Userpassword = $_POST['Userpassword'];
		 $Phone = $_POST['Phone'];
		 $Privalige = $_POST['Privalige'];
          //  Id ,  Name ,  Email ,  Username ,  Userpassword ,  Phone ,  Privalige SELECT * FROM  users  WHERE 1
		@$sql="update users set Name = '$Name', Email = '$Email',Username = '$Username',Userpassword = '$Userpassword',Phone = '$Phone', Privalige ='$Privalige' where Id = ".$Id ;


		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=users");
		}


}


// اضافة مستخدم فورم
if(@$_GET['action'] && $_GET['action']== 'add'){
	echo "<form action='users.php' method='post'>
                        <table>
                            <tr>
                                <td>الاسم </td>
                                <td><input type='text' name='Name'/></td>
                            </tr>
                            <tr>
                                <td>الوظيفة </td>
                                <td><input type='text' name='Email'/></td>
                            </tr>
                            <tr>
                                <td>اسم المستخدم </td>
                                <td><input type='text' name='Username'/></td>
                            </tr>
                            <tr>
                                <td>كلمة المرور </td>
                                <td><input type='text' name='Userpassword'/></td>
                            </tr>
                            <tr>
                                <td>الهاتف </td>
                                <td><input type='text' name='Phone'/></td>
                            </tr>
                            <tr>
                                <td>الصلاحية </td>
                                <td>
								<select name='Privalige' width='20'>

								<option value='0'>متستخدم</option>
								<option value='1'>مدير</option>

								</select>
								</td>
                            </tr>
                            <tr>

                                <td colspan='2'><input type='submit' name='save' value='حفظ'/></td>
                            </tr>
                        </table>


                        </form>";
}


//اضافة المستخدم حفظ بيانات المستخدم
if(ISSET($_POST['save'])){
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $Name = $_POST['Name'];
		 $Email = $_POST['Email'];
		 $Username = $_POST['Username'];
		 $Userpassword = $_POST['Userpassword'];
		 $Phone = $_POST['Phone'];
		 $Privalige = $_POST['Privalige'];
		 @$sql="insert into  users (Name, Email, Username,Userpassword,Phone,Privalige)
		 values('$Name','$Email','$Username','$Userpassword','$Phone','$Privalige')";
		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم اضافة مستخدم جديد';
			header("location:Cpanel.php?page=users");
		}


}








// حذف
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$Id =  $_GET['Id'];
	$sql = " delete from users  where Id=".$Id ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$CID."تم حذف الجوال  رقم '</script>";
			header("location:Cpanel.php?page=users");
		}
}


// عرض المستخدمين 
include_once ('config.php');



//  Id ,  Name ,  Email ,  Username ,  Userpassword ,  Phone ,  Privalige SELECT * FROM  users  WHERE 1
$sql = "select * from users order by Id desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover'>";
		echo "<tr>
				<td><B>رقم المستخدم</B></td>
				<td><B>الاسم</td>
				<td><B>الوظيفة</B></td>
				<td><B>اسم المستخدم </B></td>
				<td><B>كلمة المرور</B></td>
				<td><B> الصلاحية</B></td>
				<td><B>الهاتف</B></td>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
				<td>".$row['Id']."</td>
				<td>".$row['Name']."</td>
				<td>".$row['Email']."</td>  
				<td>".$row['Username']."</td>
				<td>".$row['Userpassword']."</td>
				<td>";
				if($row['Privalige'] == 1){
										echo "مدير";								   
										}else{
										echo "مستخدم";
										}
										
				echo "</td>
				<td>".$row['Phone']."</td>
				<td>
					<a href='?page=users&action=edit&Id=".$row['Id']."'>تعديل</a> -
					<a href='?page=users&action=delete&Id=".$row['Id']."'>حذف</a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لايوجد تعليق  ";
 }

 mysqli_close($conn);


