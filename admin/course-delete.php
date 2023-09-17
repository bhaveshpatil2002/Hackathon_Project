<?php
		$course_id=$_REQUEST['course_id'];
include "db.php";
		$q='delete from course where course_id='.$course_id;
		$res=mysqli_query($conn,$q);
		if(mysqli_affected_rows($conn))
		{
			echo '<script>alert("Record deleted.");window.location="course-manage.php";</script>';
            //echo mysqli_error($conn);
		}else{
			echo '<script>alert("Fail to delete Record. Please try again.");window.location="course-manage.php";</script>';
            
		}
	//}
?>