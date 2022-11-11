<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  mysqli_query($conn,"SET NAMES utf8");
  $sql="select *  from jobs where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>



<!-- End -->

   <div class="row">

    <div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Job Type:</label>
                     <select name="type" class="form-control" required >
                        <option value="">..select..</option>
                        <option <?php if($rows['type']=="Full Time"){echo "selected";} ?>>Full Time</option>
                        <option <?php if($rows['type']=="Part Time"){echo "selected";} ?>>Part Time</option>
                     </select>
                  </div>
        </div>

      <div class="col-md-6">
                 <div class="form-group">
                    <label for="name" class="control-label">Job Title :</label>
                    <input type="text" class="form-control" value="<?php echo $rows['title']; ?>"  name="title" required />
                  </div>
        </div>
       <div class="col-md-6">
                 <div class="form-group">
                    <label for="name" class="control-label">Company Name:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['company_name']; ?>" name="company_name" required />
                  </div>
        </div>


        <div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Category:</label>
                    <select  class="form-control" name="category" required >
                      <option value="">..select..</option>
<?php

  $sql="select *  from category";
  $res = mysqli_query($conn,$sql);
  while($row =mysqli_fetch_array($res)){

?>

                      <option <?php if($rows['category']==$row['name']){echo "selected";} ?>><?php echo $row['name']; ?></option>

<?php
}
?>
                     
                  </select>
                  </div>
        </div>


        <div class="col-md-12">
                 <div class="form-group">
                    <label for="name" class="control-label">Company Description:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['company_desc']; ?>" name="company_desc" required />
                  </div>
        </div>


        



        

<div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Location:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['location']; ?>" name="location" required />
                  </div>
        </div>

        <div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Vacancies:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['vacancies']; ?>" name="vacancies" required />
                  </div>
        </div>

        <div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Qualification:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['qualification']; ?>" name="qualification" required />
                  </div>
        </div>

        


        <div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Experience:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['experience']; ?>" name="experience" required />
                  </div>
        </div>


        <div class="col-md-6">
                 <div class="form-group">
                    <label for="name" class="control-label">Skills:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['skills']; ?>" name="skills" required />
                  </div>
        </div>



        <div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Salary:</label>
                     <select name="salary" class="form-control" required >
                        <option value="">..select..</option>
                        <option <?php if($rows['salary']=="5000 - 10000"){echo "selected";} ?>>5000 - 10000</option>
                        <option <?php if($rows['salary']=="10000 - 15000"){echo "selected";} ?>>10000 - 15000</option>
                        <option <?php if($rows['salary']=="15000 - 20000"){echo "selected";} ?>>15000 - 20000</option>
                        <option <?php if($rows['salary']=="20000 - 25000"){echo "selected";} ?>>20000 - 25000</option>
                        <option <?php if($rows['salary']=="25000 - 30000"){echo "selected";} ?>>25000 - 30000</option>
                        <option <?php if($rows['salary']=="35000 - 40000"){echo "selected";} ?>>30000 - 35000</option>
                        <option <?php if($rows['salary']=="40000 - 45000"){echo "selected";} ?>>35000 - 40000</option>
                        <option <?php if($rows['salary']=="45000 - 50000"){echo "selected";} ?>>40000 - 50000</option>
                     </select>
                  </div>
        </div>


        <div class="col-md-6">
                 <div class="form-group">
                    <label  class="control-label"> Shift:</label>
                     <select name="shift" class="form-control" required >
                        <option value="">..select..</option>
                        <option <?php if($rows['shift']=="Morning"){echo "selected";} ?>>Morning</option>
                        <option <?php if($rows['shift']=="Evening"){echo "selected";} ?>>Evening</option>
                     </select>
                  </div>
        </div>
        

      <div class="col-md-12">
                 <div class="form-group">
                    <label  class="control-label"> Description:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['description']; ?>"  name="description" required />
                  </div>
        </div>


        
          


    


          
</div>





