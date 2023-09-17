<?php
include "db.php";
$course_id = $_REQUEST['course_id'];
$course_name=$_REQUEST['course_name'];
$description=$_REQUEST['description'];
$recomanded=$_REQUEST['recomanded'];
$requirement = $_REQUEST['requirement'];
$will_get = $_REQUEST['will_get'];
$fees = $_REQUEST['fees'];
$tmp_name=$_FILES['content']['tmp_name'];
    $dest='photos/'.$_FILES['content']['name'];
    move_uploaded_file($tmp_name,$dest);
$q = "update course set course_name='$course_name',description='$description',recomanded='$recomanded',requirement='$requirement', will_get='$will_get', fees='$fees', content='$dest'  where course_id='$course_id'";
$res = mysqli_query($conn, $q);
if(mysqli_affected_rows($conn)>0) {
	echo "<script>alert('record updated.');window.location='course-manage.php';</script>";
    //echo "record updated";
} else {
    //echo "not updated";
	//echo "<script>alert('record not updated.');window.location='dashboard.php';</script>";
	  echo mysqli_error($conn);
}
?>