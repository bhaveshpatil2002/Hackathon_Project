
<?php
include "header.php";
?>
<table class="table table-success table-striped align-middle table-nowrap mb-0">
    <thead>
        <tr>
            <th scope="col">ID</th>
            
            <th scope="col">Video</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
          
       <?php
      
               include "db.php";
               $q="select * from videos";
               $res = mysqli_query($conn, $q);
              
               while($row=mysqli_fetch_array($res)){
                   ?>
        <tr>
                    <td><?php echo $row['id']; ?></td>
                    
                    <td><?php echo $row['video']; ?></td>
                    
            <td>
                <div class="hstack gap-3 flex-wrap">
                    <a href='video-update.php?id=<?php echo $row["id"]; ?>' class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                    <a href='video-delete.php?id=<?php echo $row["id"]; ?>' class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
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