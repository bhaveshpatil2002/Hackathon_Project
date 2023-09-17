
<?php
include "header.php";
include "db.php";

$id=$_REQUEST['id'];
$q="select * from videos where id=$id";

$res = mysqli_query($conn, $q);
$slidder_data = mysqli_fetch_array($res);

?>
<form action="video-update-save.php" method="post" enctype="multipart/form-data">
<input type='hidden'  name='id' value="<?php echo $slidder_data['id'];?>">
    <div class="mb-3">
        <label for="" class="form-label"></label>
        <img src="<?php echo $slidder_data['video'];?> "alt="" height="200px" width="200px">
        <input type="file" class="form-control" id="" name="video" value="">
    </div>
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>
