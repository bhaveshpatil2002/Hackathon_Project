
<?php
include "header.php";
?>
<form action="video-add-save.php" method="post" enctype="multipart/form-data">
    
    <div class="mb-3">
        <label for="StartleaveDate" class="form-label"> choose Video</label>
        <input type="file" class="form-control" id="StartleaveDate" name="video">
    </div>
    
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>