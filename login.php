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
<?php require_once("include/header.php"); ?>


<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Login</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Login Start-->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="login">
          <div class="contctxt">User Login</div>
          <div class="formint conForm">

            <div id="msg"> </div>
            <form id="login">
              <div class="input-wrap">
                <label class="input-group-addon">Email</label>
                <input type="text" name="username" placeholder="User Name" class="form-control">
              </div>
              <div class="input-wrap">
                <label class="input-group-addon">Password <span><a href="#">Forgot Password?</a></span></label>
                <input type="text" name="password" placeholder="Password" class="form-control">
              </div>
              <div class="sub-btn">
                <input type="submit" id="btn" class="sbutn" value="Login">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="register.php">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    
    <!--Login End--> 
</div>
</div>
<!--Inner Content End--> 

<?php require_once("include/footer.php"); ?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $("#login").on('submit',(function(e) {

      

       $("#btn").val("Please Wait..");
            
        e.preventDefault();
        $.ajax({
            url: "admin/php/user_login.php",
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
        
             $("#btn").val(" Login ");
              

            
            }           
       });
    }));

  });
</script>
</body>

</html>