<?php
include "db.php";

$batch_name = $_REQUEST['name'];
$batch_fees = $_REQUEST['fees'];
$date = $_REQUEST['date'];
//$image=$_FILES['content'];
$tmp_name=$_FILES['image']['tmp_name'];
    $dest='img/'.$_FILES['image']['name'];
    move_uploaded_file($tmp_name,$dest);


$q="insert into batches values(NULL,'$batch_name','$batch_fees','$date','$dest')";
$res=mysqli_query($conn ,$q);
if($res){
	echo "<script>alert(' Added Successfully');</script>";
	echo "<script>window.location='batch-manage.php';</script>";
}else{
	//echo "not inserted";
	echo mysqli_error($conn);
}
?>