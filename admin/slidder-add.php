
<?php
include "header.php";
?>
<form action="slidder-add-save.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="employeeName" class="form-label">Tittle</label>
        <input type="text" class="form-control" id="employeeName" name="title" placeholder="Enter Title">
    </div>
    <div class="mb-3">
        <label for="VertimeassageInput" class="form-label">Description</label>
        <textarea class="form-control" id="VertimeassageInput" rows="3"  name="description" placeholder="Enter your description"></textarea>
    </div>
    <div class="mb-3">
        <label for="StartleaveDate" class="form-label">Slidder image</label>
        <input type="file" class="form-control" id="StartleaveDate" name="image">
    </div>
    
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>