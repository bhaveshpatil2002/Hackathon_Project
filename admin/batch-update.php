
<?php
include "header.php";
include "db.php";

$batch_id=$_REQUEST['batch_id'];
$q="select * from batches where batch_id=$batch_id";

$res = mysqli_query($conn, $q);
$data = mysqli_fetch_array($res);
?>
<form action="batch-update-save.php" method="post" enctype="multipart/form-data">
<input type='hidden'  name='batch_id' value="<?php echo $data['batch_id'];?>">
    <div class="mb-3">
        <label for="employeeName" class="form-label">Name</label>
        <input type="text" class="form-control" id="employeeName" name="batch_name" value="<?php echo $data['batch_name']?>" placeholder="Enter Batch Name">
    </div>
    
    <div class="mb-3">
        <label for="employeeName" class="form-label">Fees</label>
        <input type="text" class="form-control" id="employeeName" name="batch_fees"  value="<?php echo $data['batch_fees']?>" placeholder="Enter Fees">
    </div>
    <div class="mb-3">
        <label for="StartleaveDate" class="form-label">Start_date</label>
        <input type="date" class="form-control" id="StartleaveDate" name="date" value="<?php echo $data['date']?>">
    </div>
    <div class="mb-3">
    <label for="StartleaveDate" class="form-label">Image</label>
        <img src="<?php echo $data['image'];?> "alt="" height="200px" width="200px">
        <input type="file" class="form-control" id="" name="image" value="">
    </div>
    
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>