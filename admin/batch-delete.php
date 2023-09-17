<?php
		$batch_id=$_REQUEST['batch_id'];
include "db.php";
		$q='delete from batches where batch_id='.$batch_id;
		$res=mysqli_query($conn,$q);
		if(mysqli_affected_rows($conn))
		{
			echo '<script>alert("Record deleted.");window.location="batch-manage.php";</script>';
            //echo mysqli_error($conn);
		}else{
			echo '<script>alert("Fail to delete Record. Please try again.");window.location="batch-manage.php";</script>';
            
		}
	//}
?>