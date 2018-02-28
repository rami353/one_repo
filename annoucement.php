<center>
<h4>الاعلانات </h4>
</center>
<a href='?page=annoucement&action=add'><img src='assets/img/user-add.png' width='20'> اضافة إعلان</a>

<?php
// تعديل ينات مستخدم

    if(@$_GET['action'] && $_GET['action']== 'edit'){
	include_once ('config.php');

	  $Id =  $_GET['Id'];
	  $sql = " select * from annoucement  where AnnNo = ".$Id ;
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);
//`AnnNo`, `AnnAdress`, `AnnContent`, `AnnImage`, `Anndate`SELECT * FROM `annoucement` WHERE 1
		ECHO "
			<form action='".$_SERVER['PHP_SELF']."?page=annoucement' method='post' enctype='multipart/form-data'>

                        <table>
                            <tr>
                                <td>عنوان الاعلان  </td>
                                <td>
									<div class='form-group'>
											<input class='form-control ' type='text' name='AnnAdress' value ='".$row['AnnAdress']."'/>
									</div>
								
								</td>
                            </tr>
                            <tr>
                                <td>صوره  </td>
                                <td>
								<div class='form-group'>
											<input class='form-control ' type='text' name='AnnImage' value ='".$row['AnnImage']."'/>
									</div>
							
								</td>
                            </tr>
                             <tr>
                                <td>المحتوى  </td>
                                <td>
								<div class='form-group'>
											<textarea class='form-control' style='min-height: 100px;' type='text' name='AnnContent' >".$row['AnnContent']."</textarea>
									</div>
							
								</td>
                            </tr>

							 
                            <tr>

                                <td colspan='2'>
									<div class='form-group'>
										<input    class='btn btn-info  btn-l' type='submit' name='edit' value='تعديل'/>
									</div>
								
								</td>
                                <input type='hidden' name='AnnNo' value='".$Id."'/>
                            </tr>
                        </table>


                        </form>";
}

//تعديل
if(ISSET($_POST['edit'])){
	//`AnnNo`, `AnnAdress`, `AnnContent`, `AnnImage`, `Anndate`SELECT * FROM `annoucement` WHERE 1
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $AnnNo = $_POST['AnnNo'];
		 $AnnAdress = $_POST['AnnAdress'];
		 $AnnContent = $_POST['AnnContent'];
		 $AnnImage = $_POST['AnnImage'];
	 
		@$sql="update annoucement set AnnAdress = '$AnnAdress', AnnContent = '$AnnContent',AnnImage = '$AnnImage' where AnnNo = ".$AnnNo ;


		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=annoucement");
		}


}


// اضافة مستخدم فورم
  //`AnnNo`, `AnnAdress`, `AnnContent`, `AnnImage`, `Anndate`SELECT * FROM `annoucement` WHERE 1
if(@$_GET['action'] && $_GET['action']== 'add'){
	echo "<form action='annoucement.php' method='post' enctype='multipart/form-data'>
                        <table>
                            <tr>
                                <td>العنوان  </td>
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='text' name='AnnAdress'/>
									</div>
								
								
								</td>
                            </tr>
                            <tr>
                                <td>المحتوى  </td>
								
                                <td>
									<div class='form-group'>
											<textarea class='form-control' style='min-height: 100px;' type='text' name='AnnContent' > </textarea>
									</div>
								 
								</td>
                            </tr>
                            <tr>
                                <td>الهاتف </td>
                                <td>
									<div class='form-group'>
										<input class='form-control ' type='file' name='AnnImage'/>
									</div>
							 
								</td>
                            </tr>
                           
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
	//`AnnNo`, `AnnAdress`, `AnnContent`, `AnnImage`, `Anndate`SELECT * FROM `annoucement` WHERE 1
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		 $AnnAdress = $_POST['AnnAdress'];
		 $AnnContent = $_POST['AnnContent'];
		  
		  
		   $AnnImage = $_FILES['AnnImage']['name'];
			$ImageSize = $_FILES['AnnImage']['size'];
		   $temp = $_FILES['AnnImage']['tmp_name'];
		   $Imagetype = $_FILES['AnnImage']['type'];

		   $folder = "uploaded/";
		   $Image = $folder.$AnnImage;

		 if(empty($AnnImage)){
			echo "يجب تحديد الجوال  ";
		 }else if( $ImageSize > 888888048){
			 echo "يجب ان يكون حج الجوال  اقل من  2"."MB";
		 } else{
			 move_uploaded_file($temp,$Image );

		 echo @$sql="insert into annoucement (`AnnAdress`, `AnnContent`, `AnnImage` )
		 values('$AnnAdress','$AnnContent','$Image'  )";
		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم اضافة  اعلان جديد';
			header("location:Cpanel.php?page=annoucement");
		}
		}


}








// حذف
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$Id =  $_GET['Id'];
	$sql = " delete from annoucement  where AnnNo=".$Id ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$Id."تم حذف    رقم '</script>";
			header("location:Cpanel.php?page=annoucement");
		}
}


// عرض المستخدمين 
include_once ('config.php');
	//`AnnNo`, `AnnAdress`, `AnnContent`, `AnnImage`, `Anndate`SELECT * FROM `annoucement` WHERE 1
 
$sql = "select * from annoucement order by AnnNo desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover' data-scroll-reveal='enter from the bottom after 0.1s'>";
		echo "<tr style='background-color:#ffe082;  '>
				<td><B>الرقم  </B></td>
				<td><B>العنوان</td>
				<td><B>المحنوى</B></td>
				<td><B>الصورة</B></td>
			 
				<td><B> التاريخ</B></td>
				
				<td><B>العمليات	</B></td>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr >
				<td>".$row['AnnNo']."</td>
				<td>".$row['AnnAdress']."</td>
				<td>".$row['AnnContent']."</td>  
				<td><img src='".$row['AnnImage']."' width='30' height='30'/></td>
				<td>".$row['Anndate']."</td>
				 
				<td>
					<a href='?page=annoucement&action=edit&Id=".$row['AnnNo']."'><img src='assets/img/edit.png' width='20'></a> -
					<a href='?page=annoucement&action=delete&Id=".$row['AnnNo']."'><img src='assets/img/trash.png' width='20' > </a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لايوجد إعلان  ";
 }

 mysqli_close($conn);


