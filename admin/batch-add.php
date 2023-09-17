
<?php
include "header.php";
?>
<form action="batch-add-save.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="employeeName" class="form-label">Name</label>
        <input type="text" class="form-control" id="employeeName" name="name" placeholder="Enter Batch Name">
    </div>
    
    <div class="mb-3">
        <label for="employeeName" class="form-label">Fees</label>
        <input type="text" class="form-control" id="employeeName" name="fees" placeholder="Enter Fees">
    </div>
    <div class="mb-3">
        <label for="StartleaveDate" class="form-label">Start_date</label>
        <input type="date" class="form-control" id="StartleaveDate" name="date">
    </div>
    <div class="mb-3">
        <label for="StartleaveDate" class="form-label"> Image</label>
        <input type="file" class="form-control" id="StartleaveDate" name="image">
    </div>
    
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>