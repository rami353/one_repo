<center> <h4 >الرسائل </h4></center> 
<img src='assets/img/inbox.png' />
<?php

// حذف    
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$ContNo =  $_GET['id'];
	$sql = " delete from contact  where ContNo=".$ContNo ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$ContNo."تم حذف   رقم '</script>";
			header("location:Cpanel.php?page=CMassge");
		}
}
// عرض الرسائل 
include_once ('config.php');

// `ContNo`, ``, `ContContEmail`, `ContMassge`, `ContContDate`SELECT * FROM `contact` WHERE 1
$sql = "select * from contact order by ContNo desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover'> ";
		echo "<tr style='background-color:#ffe082;  '>
				<th><B>رقم الرسالة</B></th>
				<th><B>اسم المرسل</B></th>
				<th><B>البريد الالكترون</B>ى</th>
				<th><B>محتوى الرسالة</B></th>
				<th><B>التاريخ</B></th>
				<th><B>العمليات</B></th>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>
				<td>".$row['ContNo']."</td>
				<td>".$row['ContName']."</td>
				<td>".$row['ContEmail']."</td>  
				<td>".$row['ContMassge']."</td> 
				<td>".$row['ContDate']."</td>
				<td  style='    text-align: center; '>
					<a class='deleteImg' href='?page=CMassge&action=delete&id=".$row['ContNo']."'><img src='assets/img/trash.png' width='20' > </a>
					<a href='?page=CMassge&action=edit&id=".$row['ContNo']."'><img src='assets/img/edit.png' width='20'> </a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لاتوجد رسالة";
 }

 mysqli_close($conn);


