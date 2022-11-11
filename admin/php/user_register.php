<?php 
   


    error_reporting(0);
    session_start();
    require_once("config.php");
    $db = new dbObj();
	$conn =  $db->getConnstring();
if(isset($_REQUEST['name']) && isset($_REQUEST['password']) && isset($_REQUEST['email']) && isset($_REQUEST['mobile']) && isset($_REQUEST['qualification']) && isset($_REQUEST['skills']) && isset($_REQUEST['city'])) {
extract($_REQUEST);
    
	






  $res=mysqli_query($conn,"select * from users where email='$email'");
  
  $num_rows=mysqli_num_rows($res);
  if($num_rows>0){
  	 
  	 die("<div class='alert alert-danger'>User Email Aready Exists..</div>");

  }


  //echo "emtpy";
  

  if(empty($_FILES['resume']['name'])){
  //echo "emtpy";
  $sql="INSERT INTO `users` (`ID`, `name`, `qualification`, `city`, `mobile`, `email`, `password`, `skills`) VALUES (NULL, '$name', '$qualification', '$city', '$mobile','$email','$password','$skills');";
  
}else{
	$tmp_name=$_FILES['resume']['tmp_name'];
	//echo $_SERVER['SERVER_NAME'];
    $randome=rand(100,9999);
    $file_name=$randome.$_FILES['resume']['name'];
	 
	if(move_uploaded_file($tmp_name, "../uploads/".$file_name)){

  
$sql="INSERT INTO `users` (`ID`, `name`, `qualification`, `city`, `mobile`, `email`, `password`, `resume`, `skills`) VALUES (NULL, '$name', '$qualification', '$city', '$mobile','$email','$password','$file_name','$skills');";	 
	  //echo $sql;
	}else{
		echo  "<div class='alert alert-danger'>something Went wrong...file not uploaded</div>";
	}
	
}

//
//echo $sql;

$result=mysqli_query($conn,$sql);
if($result){
	 echo  "<div class='alert alert-success'>User Register successfully....</div>";
}else{
	
	  echo  "<div class='alert alert-danger'>something Went wrong...</div>";

}


}else{echo "<div class='alert alert-danger'> Blank Not Allowed ..</div>";}


?>