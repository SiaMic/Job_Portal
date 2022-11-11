<?php
session_start();
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();

$user_id=$_SESSION['ID'];





?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php require_once("include/title.php"); ?></title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">

</head>
<body>

  <?php require_once("include/header.php"); ?>

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Job Apply History</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content listing detail">
  <div class="container"> 
    
    <!--Detail page start-->
    <div class="inner-wrap">
      <div class="row">
        <div class="col-md-12">

           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Resume</th>
        <th>Category</th>
        <th>Job Title</th>
        <th>Date & Time</th>
        <th>Description</th>

      </tr>
    </thead>
    <tbody>
<?php
$res=mysqli_query($conn,"select *,(select resume from users where ID=applied.user_id) as resume from applied where user_id='$user_id'");
while($row=mysqli_fetch_assoc($res)){
?>


      <tr>
        <td><a href="admin/uploads/<?php echo $row['resume']; ?>" target='_blank'><?php echo $row['resume']; ?> </a></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['job_title']; ?></td>
        <td><?php echo $row['date_time']; ?></td>
        <td><?php echo $row['status']; ?></td>
        
      </tr>
      
<?php
}
?>

    </tbody>
  </table>



        </div>




      </div>
    </div>
    <!--Detail page end--> 
    
  </div>
</div>
<!--Inner Content end--> 

<?php require_once("include/footer.php"); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!-- SLIDER REVOLUTION SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 

<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>