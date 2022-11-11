
<?php
	//include connection file 
	include_once("../config.php");
		
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'add':
		$empCls->insertEmployee($params);
	 break;
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 case 'delete':
		$empCls->deleteEmployee($params);
	 break;
	 default:
	 $empCls->getEmployees($params);
	 return;
	}
	
	class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
	$this->conn = $connString;
	}
	
	public function getEmployees($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function insertEmployee($params) {
		extract($params);


  $res=mysqli_query($this->conn,"select * from users where email='$email'");
  
  $num_rows=mysqli_num_rows($res);
  if($num_rows>0){
  	die('{"msg":"Email Id aleady exist","type":"warning","error":"0"}');

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
	 
	if(move_uploaded_file($tmp_name, "../../uploads/".$file_name)){

  
$sql="INSERT INTO `users` (`ID`, `name`, `qualification`, `city`, `mobile`, `email`, `password`, `resume`, `skills`) VALUES (NULL, '$name', '$qualification', '$city', '$mobile','$email','$password','$file_name','$skills');";	 
	  //echo $sql;
	}else{
		die('{"msg":"something went wrong-","type":"warning","error":"0"}');
	}
	
}

//
//echo $sql;

$result=mysqli_query($this->conn,$sql) or die('{"msg":"Data Not inserted","type":"warning","error":"0"}');
if($result){
	 echo '{"msg":"saved successfully","type":"success","error":"1"}';
}else{
	
	 echo  '{"msg":"Internal Server error - database","type":"warning","error":"0"}';

}


	}
	
	
	function getRecords($params) {
       $qtot = mysqli_query($this->conn,"SET NAMES utf8"); 

		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } 
		else { 
			$page=1;
			$params['current']=0; 
		};  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		$where .=" WHERE type!='admin' ";
		if( !empty($params['searchPhrase']) ) {   
			$where .=" and ";
			$where .=" ( ID LIKE '".$params['searchPhrase']."%' "; 
			$where .=" OR name LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR mobile LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR qualification LIKE '".$params['searchPhrase']."%'";   
			
			$where .=" OR email LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}else{

            $where .= "ORDER BY ID DESC";

		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `users` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		//echo $sqlTot;
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot user data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 



			$data[] = $row;
		}
if(empty($data)){
  $data=array();
}
		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}



function updateEmployee($params) {
		
   mysqli_query($this->conn,"SET NAMES utf8");

   


  if(empty($_FILES['resume']['name'])){


   	$sql = "UPDATE `users` SET `name` = '".$params["name"]."',
		`mobile` = '" . $params["mobile"]."',
		`email` = '" . $params["email"]."',
		`qualification` = '" . $params["qualification"]."',
		`city` = '" . $params["city"]."',
		`skills` = '" . $params["skills"]."',
		`password` = '" . $params["password"]."'
		WHERE ID='".$params["edit_ID"]."'";

//echo $_FILES['photo']['name'];

   }else{


   $tmp_name=$_FILES['resume']['tmp_name'];
	//echo $_SERVER['SERVER_NAME'];
    $randome=rand(100,9999);
    $file_name=$randome.$_FILES['resume']['name'];
	 //$photo_path= "http://".$_SERVER['HTTP_HOST']."/students/cityguide/uploads/".$file_name;
	if(move_uploaded_file($tmp_name, "../../uploads/".$file_name)){
		
  	 
   	$sql = "UPDATE `users` SET `name` = '".$params["name"]."',
		`mobile` = '" . $params["mobile"]."',
		`email` = '" . $params["email"]."',
		`qualification` = '" . $params["qualification"]."',
		`city` = '" . $params["city"]."',
		`skills` = '" . $params["skills"]."',
		`resume` = '" .$file_name."',
		`password` = '" . $params["password"]."'
		WHERE ID='".$params["edit_ID"]."'";
  //die($sql);


    }else{
    	

    	die('{"msg":"Not Uploaded Please Check information","type":"warning","error":"0"}');
    }
   }



//echo $_FILES['photo']['name'];


		
   $result = mysqli_query($this->conn, $sql) or die("error to update employee data");

 die('{"msg":"Updated successfully","type":"success","error":"1"}');


	
}
	
	function deleteEmployee($params) {

        

		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `users` WHERE ID='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	