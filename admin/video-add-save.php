
<?php
include "db.php";
//$image=$_FILES['content'];
$tmp_name=$_FILES['video']['tmp_name'];
    $dest='gallery/'.$_FILES['video']['name'];
    move_uploaded_file($tmp_name,$dest);


$q="insert into videos values(NULL,'$dest')";
$res=mysqli_query($conn ,$q);
if($res){
	echo "<script>alert(' Added Successfully');</script>";
	echo "<script>window.location='video-manage.php';</script>";
}else{
	//echo "not inserted";
	echo mysqli_error($conn);
}
?>