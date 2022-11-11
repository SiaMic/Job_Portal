<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php require_once('include/title.php'); ?></title>
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
    <h3>Register</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Register Start-->
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Please complete all fields.</div>
          <div class="formint conForm">
            <div id="msg"> </div>
            <form id="register">
              <div class="input-wrap">
                <input type="text" name="name" placeholder="User Name" class="form-control" required >
              </div>
              <div class="input-wrap">
                <input type="text" name="qualification" placeholder="Enter qualification" class="form-control" required >
              </div>



              <div class="input-wrap">
                <input type="text" name="city" placeholder="Enter  City " class="form-control" required >
              </div>

               <div class="input-wrap">
                <input type="number" name="mobile" placeholder="Enter  mobile Number " class="form-control" required >
              </div>

               <div class="input-wrap">
                <input type="email" name="email" placeholder="Enter  Email " class="form-control" required >
              </div>


              <div class="input-wrap">
                <input type="password" name="password" placeholder="Enter  password " class="form-control" required >
              </div>


              <div class="input-wrap">
                <input type="file" name="resume"  class="form-control" required >
              </div>


               <div class="input-wrap">
                <input type="text" name="skills" placeholder="Enter Your Skills"  class="form-control" required >
              </div>

              
              


              <div class="sub-btn">
                <input type="submit" id="btn" class="sbutn" value="Register Now">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="login.php">Cilck to Login</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
    
    <!--Register End--> 
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

<script type="text/javascript">
$(document).ready(function() {

    $("#register").on('submit',(function(e) {

      

       $("#btn").val("Please Wait..");
            
        e.preventDefault();
        $.ajax({
            url: "admin/php/user_register.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {

              $('#msg').show(1000);
                $('#msg').delay(3000).fadeOut();
            
            $('#msg').html(data); 
        
             $("#btn").val(" Register Now ");
              

            
            }           
       });
    }));

  });
</script>
</body>

</html>