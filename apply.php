<?php
session_start();
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();

if(isset($_SESSION['ID'])){

  date_default_timezone_set('Asia/Kolkata');
  $user_id=$_SESSION['ID'];
  $res=mysqli_query($conn,"select * from jobs where ID='".$_REQUEST['job_id']."'");
  $job_rows=mysqli_fetch_assoc($res);


  $date_time=date('Y-m-d h:i A');
  $sql="INSERT INTO `applied` (`ID`, `user_id`, `resume`, `category`, `job_title`, `jobs_id`, `status`, `date_time`, `reading`) VALUES (NULL, '$user_id', 'resume', '".$job_rows['category']."', '".$job_rows['title']."', '".$job_rows['ID']."', 'your Description has pending - you will get Description as soon as possible.', '$date_time', '0');";




 $result=mysqli_query($conn,$sql);
if($result){
	 
	 echo  "<script> alert('job Apply successfully completed.');

       location='account.php';
	  </script>";
}else{
	
	  echo  "<script> alert('something Went wrong...'); </script>";

}

  //session_destroy();
  //echo "<script>location='login.php'</script>";
	// do statements

}else{
 
 $_SESSION['job_id']=$_REQUEST['job_id'];
 echo "<script>location='login.php'</script>";
	
}






?>
