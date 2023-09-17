
<?php
include "header.php";
?>
<form action="course-add-save.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="employeeName" class="form-label">Course Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter course name" required>
    </div>
    <div class="mb-3">
        <label for="VertimeassageInput" class="form-label">Description</label>
        <textarea class="form-control" id="VertimeassageInput" rows="3" name="description" placeholder="Enter your description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Recomended</label>
        <input type="text" class="form-control" id="employeeName" name="recomended" placeholder="Enter Recomended for" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Pre Requirement</label>
        <input type="text" class="form-control" id="employeeName" name="requirement" placeholder="Pre Requirement " required>
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Will Get</label>
        <input type="text" class="form-control" name="will_get" placeholder="WILL GET " required>
    </div>
    <div class="mb-3">
        <label for="employeeName" class="form-label">Fees</label>
        <input type="text" class="form-control" id="employeeName" name="fees" placeholder="Enter course Fees" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Content PDF</label>
        <input type="file" class="form-control" name="content" id="" required>
    </div>
    
   
    <div class="">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
</form>
<?php
include "footer.php";
?>