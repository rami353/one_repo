<?php
session_start();
ob_start();
echo"<a href=''></a>";
 session_destroy();
  echo"
    <script>alert=('تم تسجيل الخروج ');</script>
	  
  ";
	header("location:login.php");


ob_end_flush();
?>