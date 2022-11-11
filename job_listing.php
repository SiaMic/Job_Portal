<?php
session_start();
require_once("admin/php/config.php");
$db = new dbObj();
$conn =  $db->getConnstring();


if(!empty($_REQUEST['job_title']) && !empty($_REQUEST['location']) && !empty($_REQUEST['category'])){
 
  $sql="SELECT *,(select img from category where name=jobs.category) as img from jobs where title like '%".$_REQUEST['job_title']."%' and (location='".$_REQUEST['location']."' and category='".$_REQUEST['category']."')";

}elseif(!empty($_REQUEST['location']) && !empty($_REQUEST['category'])){

  $sql="SELECT *,(select img from category where name=jobs.category) as img from jobs where (location='".$_REQUEST['location']."' and category='".$_REQUEST['category']."')";

}elseif(!empty($_REQUEST['category'])){

  $sql="SELECT *,(select img from category where name=jobs.category) as img from jobs where category='".$_REQUEST['category']."'";

}elseif(!empty($_REQUEST['location'])){

  $sql="SELECT *,(select img from category where name=jobs.category) as img from jobs where location='".$_REQUEST['location']."'";

}elseif(!empty($_REQUEST['job_title'])){

  $sql="SELECT *,(select img from category where name=jobs.category) as img from jobs where title like '%".$_REQUEST['job_title']."%'";

}else{

  $sql="SELECT *,(select img from category where name=jobs.category) as img from jobs";

}

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
    <h3>Job Listing</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content listing">
  <div class="container"> 
    
    <!--Job Listing Start-->
    <div class="row">











     




      <div class="col-md-12 col-sm-12">
        <div class="sortbybar">
          <div class="sortbar listingSearch">
            
            <div class="form-wrap">
        <form method="post" action="">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <input type="text" name="job_title" placeholder="Job title" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <select name="location" class="form-control">
                  <option value="">Location... </option>
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
                  <option value="">..Category... </option>
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
        <ul class="listService">

<?php

//echo $_REQUEST['category'];
//echo $sql;
               $res=mysqli_query($conn,$sql);
               while($rows_jobs=mysqli_fetch_assoc($res)){
             ?>

          <li>
        <div class="listWrpService featured-wrap">



          <div class="row">


            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="admin/uploads/<?php echo $rows_jobs['img']; ?>" alt=""></div>
            </div>


            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="#"><?php echo $rows_jobs['title']; ?></a></h3>
              <p><?php echo $rows_jobs['company_name']; ?></p>
              <p>Salary : <?php echo $rows_jobs['salary']; ?></p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $rows_jobs['location']; ?></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $rows_jobs['date_time']; ?> </li>
                <li><?php echo $rows_jobs['type']; ?></li>
                <li>skills :<?php echo $rows_jobs['skills']; ?></li>
              </ul>
              
              
              <p class="para"><?php echo $rows_jobs['description']; ?></p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="job_details.php?ID=<?php echo $rows_jobs['ID']; ?>">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
      
      <?php
}

      ?>
      
      
        </ul>
        
      </div>
    </div>
    
    <!--Job Listing End--> 
  </div>
</div>
<!--Inner Content End--> 
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