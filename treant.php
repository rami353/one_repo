<?php 

include_once ('config.php');
	// `noti_id`, `noti_type`, `noti_loc`, `noti_date`, `noti_name`, `noti_phone`, `recive_by`, `
	// proced`, `proced_date`, `discription`SELECT * FROM `notification` WHERE 1
 if(@$_POST['noti_phone']){
	 
$noti_phone = $_POST['noti_phone'];
$sql = "select * from notification  where noti_phone=$noti_phone order by noti_id desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover' data-scroll-reveal='enter from the bottom after 0.1s'>";
		echo "<tr style='background-color:#ffe082;  '>
				<td><B>الرقم  </B></td>
				<td><B>الاسم</B></td>
				<td><B>الهاتف</B></td>
				<td><B>نوع البلاغ </B></td>
				<td><B>الموقع</B></td>
		 
				<td><B>الاجراء</B></td>
				<td><B> مستلم البلاغ</B></td>
				<td><B> تاريخ المعالجة</B></td>
				
				 
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
				ECHO "</td> <td>  ";
				  
				if($row['proced']==1){
					echo "جارى التنفيز";
				}else{
				echo " تم الاجراء  ";
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
								  echo " <td>لايوجد مستلم الى الان </td>";
							  }
				  			
				echo " 
				<td>".$row['proced_date']."</td>
				 
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لايوجد بلاغ بهذا الرقم  !!! ";
 }

 mysqli_close($conn);
  }
?>