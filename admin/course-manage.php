
<?php
include "header.php";
?>
<table class="table table-success table-striped align-middle table-nowrap mb-0">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Course Name</th>
            <th scope="col">Description</th>
            <th scope="col">Recomanded</th>
            <th scope="col">Requirement</th>
            <th scope="col">Fees</th>
            <th scope="col">WillGet</th>
            <th scope="col">Contents</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
          
       <?php
      
               include "db.php";
               $q="select * from course";
               $res = mysqli_query($conn, $q);
              
               while($row=mysqli_fetch_array($res)){
                   ?>
        <tr>
                    <td><?php echo $row['course_id']; ?></td>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['recomanded']; ?></td>
                    <td><?php echo $row['requirement']; ?></td>
                    <td><?php echo $row['fees']; ?></td>
                    <td><?php echo $row['will_get']; ?></td>
                    <td><?php echo $row['content']; ?></td>
            <td>
                <div class="hstack gap-3 flex-wrap">
                    <a href='course-update.php?course_id=<?php echo $row["course_id"]; ?>' class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                    <a href='course-delete.php?course_id=<?php echo $row["course_id"]; ?>' class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                </div>
            </td>
        </tr>
        
       
        <?php
  }
 ?>
    </tbody>
</table>
<?php
include "footer.php";
?>