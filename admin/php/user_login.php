<?php 
   
    error_reporting(0);
    session_start();
    require_once("config.php");
    $db = new dbObj();
	$conn =  $db->getConnstring();
if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
extract($_REQUEST);
    
	$sql="select * from users where email='$username' and password='$password' and type='user'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		while($rows=mysqli_fetch_array($result)){
		
			
		$_SESSION['ID']= $rows['ID'];
		$_SESSION['username']= $rows['name'];
		$_SESSION['email']= $rows['email'];
		$_SESSION['mobile']= $rows['mobile'];
		$_SESSION['type']= $rows['type'];

		echo  "<div class='alert alert-success'>Login successfully....</div>";

		if(isset($_SESSION['job_id'])){
            
            echo "<script>location='job_details.php?ID=".$_SESSION['job_id']."'</script>";
		}else{
            echo "<script>location='job_listing.php'</script>";

		}
		
		
		
        
 }

}else{
  echo "<div class='alert alert-danger'>Wrong username & Password...</div> ";
}
}else{echo "<div class='alert alert-danger'> Blank Not Allowed ..</div>";}


?>