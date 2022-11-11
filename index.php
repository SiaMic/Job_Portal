<?php
session_start();
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();
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
<!--slider start-->
<div class="slider-wrap">
  <div class="container">
    <div class="sliderTxt">
      <p>Find your desire one in a minute</p>
      <h1>Join us & Explore Thousands of Jobs</h1>
      <div class="form-wrap">
        <form method="post" action="job_listing.php">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <input type="text" name="job_title" placeholder="Job title" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <select name="location" class="dropdown"  >
                  <option value="">...Location... </option>
                  
                    <?php
               $res=mysqli_query($conn,"SELECT DISTINCT location from jobs");
               while($rows_jobs=mysqli_fetch_assoc($res)){
               ?>   
                  <option><?php echo $rows_jobs['location']; ?></option>
               <?php
               }
               ?>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <select name="category" class="form-control">
                  <option value="">...Category... </option>


               <?php
               $res=mysqli_query($conn,"select * from category");
               while($rows_category=mysqli_fetch_assoc($res)){
               ?>   
                  <option><?php echo $rows_category['name']; ?></option>
               <?php
               }
               ?>
                 

                 </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="input-btn">
                <input type="submit" class="sbutn" value="Search">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--slider end--> 

<!--Browse Job Start-->
<div class="browse-wrap">
  <div class="container">
    <div class="heading-title">Browse <span>Jobs</span></div>
    <ul class="row">
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=IT Engineer">IT Engineer</a></div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-suitcase" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=Management">Management</a></div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=Digital & Creative">Digital & Creative</a></div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=Accounting">Accounting</a></div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=Sales & marketing">Sales & marketing</a></div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-gavel" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=Legal Job">Legal Job</a></div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=Banking">Banking</a></div>
        </div>
      </li>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <div class="jobsWrp">
          <div class="job-icon"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
          <div class="jobTitle"><a href="job_listing.php?category=Design and Art">Design & Art</a></div>
        </div>
      </li>
    </ul>
    
  </div>
</div>
<!--Browse Job End--> 

<!--featured jobs-->
<div class="featured-wrap">
  <div class="container">
    <div class="heading-title">Latest <span>Jobs</span></div>
    <div class="headTxt">new update job are listing.latest Jobs offer an opportunity to turn your aspirations into reality</div>
    <ul class="row">


            <?php
               $res=mysqli_query($conn,"SELECT *,(select img from category where name=jobs.category) as img from jobs LIMIT 6");
               while($rows_jobs=mysqli_fetch_assoc($res)){
             ?>
      <li class="col-md-6 col-sm-6">
        <div class="listWrpService">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="listImg"><img src="admin/uploads/<?php echo $rows_jobs['img']; ?>" alt=""></div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <h3><a href="#"><?php echo $rows_jobs['title']; ?></a></h3>
              <p><?php echo $rows_jobs['company_name']; ?></p>
              <ul class="featureInfo">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $rows_jobs['location']; ?></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_jobs['date_time']; ?> </li>
              </ul>
              <div class="time-btn"><?php echo $rows_jobs['type']; ?></div>
              <div class="click-btn"><a href="job_details.php?ID=<?php echo $rows_jobs['ID']; ?>">Apply Now</a></div>
            </div>
          </div>
        </div>
      </li>
      
      
   <?php

 }

 ?>
      
      
    </ul>
    <div class="read-btn"><a href="job_details.php">View All Featured Jobs</a></div>
  </div>
</div>
<!--feature end--> 

<!--How it works start-->
<div class="works-wrap">
  <div class="container">
    <div class="heading-title">How it <span>works</span></div>
    <div class="headTxt">first register user with this portal then we can apply job for every category with login user...</div>
    <ul class="row works-service">
      <li class="col-md-4">
        <div class="worksIcon"><i class="fa fa-files-o" aria-hidden="true"></i></div>
        <h3>Create Your Account with Resume</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
      <li class="col-md-4">
        <div class="worksIcon"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
        <h3>Apply for Your Jobs</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
      <li class="col-md-4">
        <div class="worksIcon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
        <h3>Hired Now</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
    </ul>
  </div>
</div>
<!--business end--> 




<?php require_once("include/footer.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from hassandesigns.top/html/jobfinder/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 12:22:03 GMT -->
</html>