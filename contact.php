<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Job Finder</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">

</head>
<body>
<?php require_once('include/header.php'); ?>



<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Contact Us</h3>
  </div>
</div>
<!--inner heading end--> 


<!--Inner Content start-->
<div class="inner-content contact-now"> 
<div class="container">  

  <!--Contact Start-->
  <div class="row">
	      <div class="col-md-4">
        <div class="contact"> <span><i class="fa fa-home"></i></span>
          <div class="information"> <strong>Address:</strong>
            <p>31, Vadjai Road, Near Maruti Mandir, Haji Nagar Dhule - 424001</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact"> <span><i class="fa fa-phone"></i></span>
          <div class="information"> <strong>Phone No:</strong>
            <p>(+91) 9926926292</p>
            <p>(+91) 9271431483</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact"> <span><i class="fa fa-envelope"></i></span>
          <div class="information"> <strong>Email Address:</strong>
            <p>logicunion17@gmail.com</p>
          </div>
        </div>
      </div>
    </div>  
    
    
    
    <div class="row formCont">
      <div class="col-md-6">
        <form>
          <div class="row">
            <div class="col-sm-6">
              <div class="input-wrap">
                <input type="text" name="name" placeholder="Full Name" class="form-control">
                <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-wrap">
                <input type="text" name="phone" placeholder="Your Phone" class="form-control">
                <div class="form-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
          <div class="input-wrap">
            <input type="text" name="email" placeholder="Your Email" class="form-control">
            <div class="form-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          </div>
          <div class="input-wrap">
            <textarea class="form-control" placeholder="Type Your Message here.."></textarea>
            <div class="form-icon"><i class="fa fa-comment" aria-hidden="true"></i></div>
          </div>
          <div class="contact-btn">
            <button class="sub" type="submit" value="submit" name="submitted"> <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message</button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
      <div class="mapWrp">

       


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59642.57133624712!2d74.72884128180921!3d20.88572163535026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdec5f2c571bb47%3A0x5827ae11b9d7cb1c!2sDhule%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1527262914129" width="100" height="300" style="border:0" allowfullscreen=""></iframe>
      </div>
      </div>
    </div>
    
    
  <!--Contact End--> 
  
  </div>
</div>
<!--Inner Content End-->

<?php require_once('include/footer.php'); ?>


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