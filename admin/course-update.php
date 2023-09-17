
<?php
include "header.php";
include "db.php";

$course_id=$_REQUEST['course_id'];
$q="select * from course where course_id=$course_id";

$res = mysqli_query($conn, $q);
$course_data = mysqli_fetch_array($res);


 ?>
<form action="course-update-save.php" method="post" enctype="multipart/form-data">
<input type='hidden'  name='course_id' value="<?php echo $course_data['course_id'];?>">
    <div class="mb-3">
        <label for="employeeName" class="form-label">Course Name</label>
        <input type="text" class="form-control" name="course_name"  value="<?php echo $course_data['course_name'];?>" placeholder="Enter course name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <textarea class="form-control" id="" rows="3" name="description" value="" placeholder=""><?php echo $course_data['description'];?></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Recomended</label>
        <input type="text" class="form-control" id="" name="recomanded"  value="<?php echo $course_data['recomanded'];?>" placeholder="Enter Recomended for">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Pre Requirement</label>
        <input type="text" class="form-control" id="" name="requirement" value="<?php echo $course_data['requirement'];?>" placeholder="Pre Requirement ">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Will Get</label>
        <input type="text" class="form-control" name="will_get" value="<?php echo $course_data['will_get'];?>" placeholder="Pre Requirement ">
    </div>
    <div class="mb-3">
        <label for="employeeName" class="form-label">Fees</label>
        <input type="text" class="form-control" id="employeeName" name="fees"  value="<?php echo $course_data['fees'];?>" placeholder="Enter course Fees">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">content</label>
        <img src="<?php echo $course_data['content'];?>g"alt="">
        <input type="file" class="form-control" id="" name="content" value="<?php echo $course_data['content'];?>" placeholder="Pre Requirement ">
    </div>
    
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>