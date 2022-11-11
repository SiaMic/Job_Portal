
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


  $sql="INSERT INTO `productmast` (`pid`, `pname`, `img`, `city`, `category`, `pdesc`, `location`) VALUES (NULL, '$pname', '', '$city', '$category', '$pdesc', '$location');";
  

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
		
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( ID LIKE '".$params['searchPhrase']."%' "; 
			$where .=" OR user_id LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR category LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR job_title LIKE '".$params['searchPhrase']."%'";   
			$where .=" OR status LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}else{

            $where .= "ORDER BY ID DESC";

		}
	   // getting total number records without any search
		$sql = "SELECT *,(select name from users where ID=applied.user_id) as username,(select resume from users where ID=applied.user_id) as resume1,(select img from category where name=applied.category) as img FROM `applied`";
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
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
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


   	$sql = "UPDATE `applied` SET `job_title` = '".$params["job_title"]."',
		`status` = '" . $params["status"]."'
		 WHERE ID='".$params["edit_ID"]."'";

//echo $_FILES['photo']['name'];

  
		
   $result = mysqli_query($this->conn, $sql) or die("error to update employee data");

 die('{"msg":"Updated successfully","type":"success","error":"1"}');


	
}
	
	function deleteEmployee($params) {

        

		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `productmast` WHERE pid='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
	}
}
?>
	