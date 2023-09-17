<?php
		$id=$_REQUEST['id'];
include "db.php";
		$q='delete from slidder where id='.$id;
		$res=mysqli_query($conn,$q);
		if(mysqli_affected_rows($conn))
		{
			echo '<script>alert("Record deleted.");window.location="slidder-manage.php";</script>';
            //echo mysqli_error($conn);
		}else{
			echo '<script>alert("Fail to delete Record. Please try again.");window.location="slidder-manage.php";</script>';
            
		}
	//}
?>