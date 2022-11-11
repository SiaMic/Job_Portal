<?php
    $id=$_GET['id'];
    require_once("../config.php");
    $db = new dbObj();
  $conn =  $db->getConnstring();
  mysqli_query($conn,"SET NAMES utf8");
  $sql="select *  from category where ID='$id'";
  $result = mysqli_query($conn,$sql);
  $rows =mysqli_fetch_array($result);
  
    //mysqli_close($conn);
   //print_r($rows);
?>



 



    <div class="row">
       <div class="col-md-6">
                 <div class="form-group">
                    <label for="name" class="control-label">Category Name:</label>
                    <input type="text" class="form-control" value="<?php echo $rows['name']; ?>" name="ctname" required />
                  </div>
        </div>


        


             
        <div class="col-md-6">
          <div class="form-group">
                    <label for="dob" class="control-label">Image:</label>
                    <input type="file" id="fileupload" class="form-control"  name="photo"  />
                  </div>
         </div>

                <div class="col-lg-6">
                   <div  id="dvPreview">
                    <img class="img img-thumbnail" src="<?php echo "uploads/".$rows['img']; ?>">
                   </div>
                </div>


          
</div>





