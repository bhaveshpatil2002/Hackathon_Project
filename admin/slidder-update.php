
<?php
include "header.php";
include "db.php";

$id=$_REQUEST['id'];
$q="select * from slidder where id=$id";

$res = mysqli_query($conn, $q);
$slidder_data = mysqli_fetch_array($res);

?>
<form action="slidder-update-save.php" method="post" enctype="multipart/form-data">
<input type='hidden'  name='id' value="<?php echo $slidder_data['id'];?>">
    <div class="mb-3">
        <label for="employeeName" class="form-label">Tittle</label>
        <input type="text" class="form-control" id="employeeName" name="title" value="<?php echo $slidder_data['title'];?>" placeholder="Enter Title">
    </div>
    <div class="mb-3">
        <label for="VertimeassageInput" class="form-label">Description</label>
        <textarea class="form-control" id="VertimeassageInput" rows="3"  name="description" placeholder="Enter your description"><?php echo $slidder_data['description'];?></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label"></label>
        <img src="<?php echo $slidder_data['image'];?> "alt="" height="200px" width="200px">
        <input type="file" class="form-control" id="" name="image" value="">
    </div>
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>
