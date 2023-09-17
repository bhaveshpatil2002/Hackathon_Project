
<?php
include "db.php";

$title = $_REQUEST['title'];
$description = $_REQUEST['description'];

//$image=$_FILES['content'];
$tmp_name=$_FILES['image']['tmp_name'];
    $dest='photos1/'.$_FILES['image']['name'];
    move_uploaded_file($tmp_name,$dest);


$q="insert into slidder values(NULL,'$title','$description','$dest')";
$res=mysqli_query($conn ,$q);
if($res){
	echo "<script>alert(' Added Successfully');</script>";
	echo "<script>window.location='slidder-manage.php';</script>";
}else{
	//echo "not inserted";
	echo mysqli_error($conn);
}
?>