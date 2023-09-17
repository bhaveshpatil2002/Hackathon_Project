<?php
include "db.php";
$batch_id = $_REQUEST['batch_id'];
$batch_name=$_REQUEST['batch_name'];
$batch_fees = $_REQUEST['batch_fees'];
$tmp_name=$_FILES['image']['tmp_name'];
    $dest='img/'.$_FILES['image']['name'];
    move_uploaded_file($tmp_name,$dest);

$q = "update batches set batch_name='$batch_name', batch_fees='$batch_fees', image='$dest'  where batch_id='$batch_id'";
$res = mysqli_query($conn, $q);
if(mysqli_affected_rows($conn)>0) {
	echo "<script>alert('record updated.');window.location='batch-manage.php';</script>";
    //echo "record updated";
} else {
    echo "not updated";
	//echo "<script>alert('record not updated.');window.location='dashboard.php';</script>";
	  echo mysqli_error($conn);
    //print_r($q);
}
?>