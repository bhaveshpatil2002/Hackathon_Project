
<?php
include "header.php";
?>
<table class="table table-success table-striped align-middle table-nowrap mb-0">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">fees</th>
            <th scope="col">Date</th>
            <th scope="col">image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
          
       <?php
      
               include "db.php";
               $q="select * from batches";
               $res = mysqli_query($conn, $q);
              
               while($row=mysqli_fetch_array($res)){
                   ?>
        <tr>
                    <td><?php echo $row['batch_id']; ?></td>
                    <td><?php echo $row['batch_name']; ?></td>
                    <td><?php echo $row['batch_fees']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['image']; ?></td>
                    
            <td>
                <div class="hstack gap-3 flex-wrap">
                    <a href='batch-update.php?batch_id=<?php echo $row["batch_id"]; ?>' class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                    <a href='batch-delete.php?batch_id=<?php echo $row["batch_id"]; ?>' class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
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