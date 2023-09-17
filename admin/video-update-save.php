<?php
include "db.php";
$id=$_REQUEST['id'];

$tmp_name=$_FILES['video']['tmp_name'];
    $dest='gallery/'.$_FILES['video']['name'];
    move_uploaded_file($tmp_name,$dest);
$q = "update video set video='$dest' where id=$id";
$res = mysqli_query($conn, $q);
if(mysqli_affected_rows($conn)>0) {
	echo "<script>alert('record updated.');window.location='video-manage.php';</script>";
} else {
    echo "not updated";
	//echo "<script>alert('record not updated.');window.location='dashboard.php';</script>";
   // echo mysqli_error($conn);
}
?>