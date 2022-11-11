<!--header start-->
<div class="header-wrap">
  <div class="container"> 
    <!--row start-->
    <div class="row"> 
      <!--col-md-3 start-->
      <div class="col-md-3 col-sm-3">
        <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!--col-md-3 end--> 
      <!--col-md-7 end-->
      <div class="col-md-5 col-sm-9"> 
        <!--Navegation start-->
        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header"> </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li> <a href="index.php"> Home</a></li>
                <li> <a href="about.php"> About Us</a></li>
                <li> <a href="job_listing.php"> Job List</a></li>
                <li> <a href="contact.php"> Contact us </a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Navegation start--> 
      </div>
      <!--col-md-3 end--> 
      <!--col-md-2 start-->
      <div class="col-md-4 col-sm-12">
        <div class="header-right">
          
          <div class="user-wrap">

<?php
if(isset($_SESSION['ID'])){
?>

            <div class="login-btn"><a href="#"><?php echo $_SESSION['username']; ?></a></div>
            <div class="login-btn"><a href="account.php">Account</a></div>
            <div class="login-btn"><a href="logout.php?logout">logout</a></div>

<?php


}else{

?>



<div class="login-btn"><a href="login.php">Login</a></div>

<?php
}
?>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!--col-md-2 end--> 
    </div>
    <!--row end--> 
  </div>
</div>
<!--header start end--> 