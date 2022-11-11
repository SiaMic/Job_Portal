<?php
session_start();
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();
$res=mysqli_query($conn,"SELECT *,(select img from category where name=jobs.category) as img from jobs where ID='".$_GET['ID']."'");
$rows_jobs=mysqli_fetch_assoc($res);


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
    <h3>Job Details</h3>
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
          <div class="listWrpService jobdetail">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="listImg"><img src="admin/uploads/<?php echo $rows_jobs['img']; ?>" alt=""></div>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <h3><?php echo $rows_jobs['title']; ?></h3>
                <p><?php echo $rows_jobs['company_name']; ?></p>
                <ul class="featureInfo">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $rows_jobs['location']; ?></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_jobs['date_time']; ?> </li>
                </ul>
                <div class="time-btn">Salary : <?php echo $rows_jobs['salary']; ?></div>
                <div class="time-btn"><?php echo $rows_jobs['type']; ?></div>
                <div class="click-btn"><a href="apply.php?job_id=<?php echo $rows_jobs['ID']; ?>">Apply Now</a></div>
              </div>
            </div>


 <h3>About Company</h3>
            <p><?php echo $rows_jobs['company_desc']; ?></p>
            <div class="companyInfo">Industry</div>
            <p><?php echo $rows_jobs['company_name']; ?></p>
            <div class="companyInfo">No. of Vacancies</div>
            <p><?php echo $rows_jobs['vacancies']; ?></p>
            <div class="companyInfo">Location</div>
            <p><?php echo $rows_jobs['location']; ?></p>

            <h2>Discription</h2>
            <p> <?php echo $rows_jobs['description']; ?>.</p>
            <h2>Education Requirements</h2>
            <p><?php echo $rows_jobs['qualification']; ?></p>
            
            <h2>Specification</h2>
            <p>Working knowledge in Web Design having the following Skills in these tools and technologies</p>
            <ul class="featureLinks">
              <li><?php echo $rows_jobs['skills']; ?></li>
              
            </ul>
            
            <div class="clearfix"></div>
          </div>
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