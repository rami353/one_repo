<center>
<h4>العملاء </h4>
</center>
<a href='?page=Cregister&action=add'><img src='assets/img/user-add.png' width='20'>اضافة عميل </a>

<?php
// تعديل ينات مستخدم
//Cust_id`, `Cust_name`, `Cust_counter`, `location`, `Cust_city`, `Cust_village`, `Cust_Home_num`, `Cust_home_type`, `Cust_home_address`, `user_id`, `Cust_home_owner`SELECT * FROM `customer` WHERE 1
    if(@$_GET['action'] && $_GET['action']== 'edit'){
	include_once ('config.php');

	  $Id =  $_GET['Id'];
	  $sql = " select * from customer  where Cust_id = ".$Id ;
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

		ECHO "
			<form action='".$_SERVER['PHP_SELF']."?page=Cregister' method='post'>";
?>
                    <form action='index.php#register-sec' method='post'>
 
                        <div class="form-group">
                            <input type="text" class="form-control " name='Cust_name' value='<?php echo $row ['Cust_name'];  ?>' required="required" placeholder="اسم مالك المبني  " />
                        </div>
						<div class="form-group">
                            <input type="text" class="form-control " name='Cust_counter' value='<?php echo $row ['Cust_counter'];  ?>' required="required" placeholder="رقم العداد  " />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " name='Cust_Home_num' value='<?php echo $row ['Cust_Home_num'];  ?>' required="required"  placeholder="رقم المبنى  " />
                        </div>
						
						 <div class="form-group">
                            <input type="text" class="form-control " name='location' value='<?php echo $row ['location'];  ?>'required="required"  placeholder="المنطقة  " />
                        </div>
						 <div class="form-group">
                            <input type="text" class="form-control " name='Cust_home_address' value='<?php echo $row ['Cust_home_address'];  ?>' required="required"  placeholder="المعلم البارز  " />
                        </div>
						 
						<div class="form-group">
                            <input type="text" class="form-control " name='Cust_village' value='<?php echo $row ['Cust_village'];  ?>'  required="required"  placeholder="الحى  " />
                        </div>
						<div class="form-group">
                            <input type="text" class="form-control " name='cust_phone' value='<?php echo $row ['cust_phone'];  ?>' required="required"  placeholder="الهاتف  " />
                        </div>
						 
						<div class=" form-group ">
					<FIELDSET>
					
					<LANG>بينات مقدم الطلب</LANG>
					<div class="form-group">
					
                            <input type="text" class="form-control " name='b_name' value='<?php echo $row ['b_name'];  ?>' required="required"  placeholder="اسم مقدم الطلب  " />
                        
						<div class="form-group">
                            <input type="text" class="form-control " name='card_num' value='<?php echo $row ['card_num'];  ?>' required="required"  placeholder="رقم بطاقة الاثبات   " />
                            <input type="hidden" class="form-control " name='Cust_id' value='<?php echo $Id; ?>' required="required"  placeholder="رقم بطاقة الاثبات   " />
                        </div>
					</FIELDSET>
                        
                           
                        </div>
						 
						 
                     
						
                        <div class="form-group">
                            <button type="SUBMIT" NAME='edit' class="btn btn-info btn-block btn-lg">  تعديل   </button>
                        </div>

                    </form>
<?php
}

//تعديل
if(ISSET($_POST['edit'])){
		INCLUDE_ONCE('config.php');  // الاتصال بقاعدة البيانات
		$b_name = $_POST['b_name'];
		$Cust_id = $_POST['Cust_id'];
									
	 
	 $card_num = $_POST['card_num'];
	 $Cust_counter = $_POST['Cust_counter'];
	 $Cust_name = $_POST['Cust_name'];
	 $location = $_POST['location'];
 
	 $Cust_village = $_POST['Cust_village'];
	 $Cust_Home_num = $_POST['Cust_Home_num'];
 
	 $Cust_home_address = $_POST['Cust_home_address'];
	  $cust_phone = $_POST['cust_phone'];
	  
		  @$sql="update customer set b_name = '$b_name',card_num = '$card_num',
		Cust_name = '$Cust_name',location = '$location',Cust_village = '$Cust_village',Cust_Home_num = '$Cust_Home_num',
		Cust_counter = '$Cust_counter',
		 Cust_home_address = '$Cust_home_address',cust_phone = '$cust_phone' where Cust_id =".$Cust_id ;
var_dump($sql);

		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم تعديل     ';
			header("location:Cpanel.php?page=Cregister");
		}


}


// اضافة مستخدم فورم
if(ISSET($_POST['save'])){
	 
	 	include_once ('config.php');

		 $card = $_POST['card'];
		 $card_num = $_POST['card_num'];
		 $Cust_name = $_POST['Cust_name'];
		 $location = $_POST['location'];
		 $Cust_city = $_POST['Cust_city'];
		 $Cust_village = $_POST['Cust_village'];
		 $Cust_Home_num = $_POST['Cust_Home_num'];
		 $Cust_home_type = $_POST['Cust_home_type'];
		 $Cust_home_address = $_POST['Cust_home_address'];
		  $cust_phone = $_POST['cust_phone'];
		 $Cust_home_owner = $_POST['Cust_home_owner'];
							  
	@$sql="insert into  customer (`Cust_name`, `location`, `Cust_city`, `Cust_village`, `Cust_Home_num`, `Cust_home_type`, `Cust_home_address`,`cust_phone`,`Cust_home_owner`,`b_name`,`card`,`card_num`)
 values('$Cust_name','$location','$Cust_city','$Cust_village','$Cust_Home_num','$Cust_home_type',' $Cust_home_address','$cust_phone','$Cust_home_owner','$b_name','$card','$card_num')";
								 
		$result = mysqli_query($conn,$sql);

		if($result == true){
			echo 'تم اضافة  بلاغ جديد';
			header("location:Cpanel.php?page=Cregister");
		}


}
  //`RegNO`, `RegName`, `RegEmail`, `RegPhone`, `TalentNo`, `RegDate`SELECT * FROM `register` WHERE 1
if(@$_GET['action'] && $_GET['action']== 'add'){
	echo "<form action='' method='post'>";?>
                        <div class="form-group">
                            <input type="text" class="form-control " name='Cust_name' required="required" placeholder="اسم مالك المنى  " />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " name='Cust_Home_num' required="required"  placeholder="رقم المبنى  " />
                        </div>
						
						 <div class="form-group">
                            <input type="text" class="form-control " name='location' required="required"  placeholder="المنطقة  " />
                        </div>
						 <div class="form-group">
                            <input type="text" class="form-control " name='Cust_home_address' required="required"  placeholder="المعلم البارز  " />
                        </div>
						<div class="form-group ">
                         <select name='Cust_city' class="form-control ">
						 <option value='1'>الخرطوم  </option>
						 <option value='1'>  ام درمان  </option>
						 <option value='1'>  حرى  </option>
						  </select>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-control " name='Cust_village' required="required"  placeholder="الحى  " />
                        </div>
						 
						<div class=" form-group  ">
                            <label>سكنى<input  type="radio" class= " " name='Cust_home_type' required="required"  value='سكنى'/> </label>
                            <label>تجارى   <input  type="radio" class= " " name='Cust_home_type' required="required" value='تجارى' /> </label>
                            <label>صناعى<input  type="radio" class= " " name='Cust_home_type' required="required" value='صناعى' /> </label>
                            <label>شقة<input  type="radio" class= " " name='Cust_home_type' required="required"  value='شقة'/> </label>
                           
                        </div>
						<div class=" form-group ">
					<FIELDSET>
					
					<LANG>بينات مقدم الطلب</LANG>
					<div class="form-group">
					
                            <input type="text" class="form-control " name='b_name' required="required"  placeholder="اسم مقدم الطلب  " />
                        </div>
						<div class="form-group ">
                         <select name='card' class="form-control ">
						 <option value=''>	اختار نوع بطاقة الاثبات    </option>
						 <option value='1'>	جنسية   </option>
						 <option value='2'> جواز  </option>
						 <option value='3'>  رقم وطنى   </option>
						 <option value='4'>  بطاقة قومية   </option>
						 <option value='5'>  رخصة قيادة  </option>

						  </select>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-control " name='card_num' required="required"  placeholder="رقم بطاقة الاثبات   " />
                        </div>
					</FIELDSET>
                        <label>صفة مقدم الطلب :</label></br>
                            <label>مالك<input  type="radio" class= " " name='Cust_home_owner' required="required"  value='مالك'/> </label>
                            <label>مستاجر   <input  type="radio" class= " " name='Cust_home_owner' required="required" value='مستاجر' /> </label>
                            <label>وكيل<input  type="radio" class= " " name='Cust_home_owner' required="required" value='وكيل' /> </label>
                             
                           
                        </div>
						 
						 
                      
						
                        <div class="form-group">
                            <button type="SUBMIT" NAME='save' class="btn btn-info btn-block btn-lg">طلب خدمة  </button>
                        </div>

                    </form>

                       <?php
}


//اضافة المستخدم حفظ بيانات المستخدم









// حذف
if(@$_GET['action'] && $_GET['action']== 'delete'){
	include_once ('config.php');
	$Id =  $_GET['Id'];
	$sql = " delete from customer  where Cust_id=".$Id ;
	$result = mysqli_query($conn,$sql);
		if($result == true){
			echo "<script>Alert='".$Id."تم حذف    رقم '</script>";
			header("location:Cpanel.php?page=Cregister");
		}
}


// عرض المستخدمين
//Cust_id`, `Cust_name`, `Cust_counter`, `location`, `Cust_city`, `Cust_village`, `Cust_Home_num`, `Cust_home_type`, `Cust_home_address`, `user_id`, `Cust_home_owner`SELECT * FROM `customer` WHERE 1
include_once ('config.php');

$sql = "select * from customer order by Cust_id desc";
$result = mysqli_query($conn,$sql);
 if(@mysqli_num_rows($result)> 0){
		echo "<table border ='1' width='100%' cellpadding='0' cellspacing='0' class='table table-hover' data-scroll-reveal='enter from the bottom after 0.1s'>";

		
		
		echo "<tr style='background-color:#ffe082;  '>
				<td><B>الرقم  </B></td>
				<td><B>الاسم</td>
				<td><B>رقم العداد </B></td>
				
				<td><B>المدينة</B></td>
				<td><B>الموقع</B></td>
				<td><B> القرية</B></td>
				<td><B> رقم المنزل</B></td>
				<td><B> نوع المنزل</B></td>
				<td><B> العنوان  </B></td>
				<td><B> المالك  </B></td>
				
				<td><B>العمليات	</B></td>
			 </tr>";
		 
		while($row = mysqli_fetch_assoc($result)){
					//Cust_id`, `Cust_name`, `Cust_counter`, `location`, `Cust_city`, `Cust_village`, `Cust_Home_num`, `Cust_home_type`, `Cust_home_address`, `user_id`, `Cust_home_owner`SELECT * FROM `customer` WHERE 1
			echo "<tr >
				<td>".$row['Cust_id']."</td>
				<td>".$row['Cust_name']."</td>
				<td>".$row['Cust_counter']."</td>  
				<td>";
				
				IF($row['Cust_city']==1){
						ECHO" الخرطوم   ";
				}ELSEIF($row['Cust_city']==2){
						ECHO"    ام درمان   ";
				}ELSEIF($row['Cust_city']==3){
						ECHO"   شرق النيل  ";
				}ELSEIF($row['Cust_city']==4){
						ECHO"   جبل اولياء  ";
				}
				ECHO "</td>
				<td>".$row['location']."</td>
				<td>".$row['Cust_village']."</td>
				<td>".$row['Cust_Home_num']."</td>
				<td>".$row['Cust_home_type']."</td>
				<td>".$row['Cust_home_address']."</td>
				<td>".$row['Cust_home_owner']."</td>
				 ";
				 echo " 
				 
				<td>
					<a href='?page=Cregister&action=edit&Id=".$row['Cust_id']."'><img src='assets/img/edit.png' width='20'></a> -
					<a href='?page=Cregister&action=delete&Id=".$row['Cust_id']."'><img src='assets/img/trash.png' width='20' > </a>
				</td>
				 
			
			</tr>";
		}
		echo "</table>";
 }else{
	 echo "لايوجد بلاغ مسجل  الان ";
 }

 mysqli_close($conn);


