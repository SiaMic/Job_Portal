<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  mysqli_query($conn,"SET NAMES utf8");
  $sql="select *  from applied where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>



 



    <div class="row">
       <div class="col-md-6">
                 <div class="form-group">
                    <label for="name" class="control-label">Job Title :</label>
                    <input type="text" class="form-control" value="<?php echo $rows['job_title']; ?>" name="job_title" required />
                  </div>
        </div>


         <div class="col-md-6">
                 <div class="form-group">
                    <label for="name" class="control-label">Description :</label>
                    <textarea class="form-control" name="status" required><?php echo $rows['status']; ?></textarea> 
                  </div>
        </div>




          
</div>





