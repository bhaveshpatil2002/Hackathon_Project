<?php
include "db.php";
$id=$_REQUEST['id'];
$title=$_REQUEST['title'];
$description=$_REQUEST['description'];


$tmp_name=$_FILES['image']['tmp_name'];
    $dest='photos1/'.$_FILES['image']['name'];
    move_uploaded_file($tmp_name,$dest);
$q = "update slidder set title='$title', description='$description', image='$dest' where id=$id";
$res = mysqli_query($conn, $q);
if(mysqli_affected_rows($conn)>0) {
	echo "<script>alert('record updated.');window.location='slidder-manage.php';</script>";
} else {
    echo "not updated";
	//echo "<script>alert('record not updated.');window.location='dashboard.php';</script>";
   // echo mysqli_error($conn);
}
?>