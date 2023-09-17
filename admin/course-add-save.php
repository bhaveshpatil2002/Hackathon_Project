
<?php
include "db.php";
$course_name=$_REQUEST['name'];
$description=$_REQUEST['description'];
$recomended=$_REQUEST['recomended'];
$requirement=$_REQUEST['requirement'];
$will_get = $_REQUEST['will_get'];
$fees = $_REQUEST['fees'];

//$image=$_FILES['content'];
$tmp_name=$_FILES['content']['tmp_name'];
    $dest='photos/'.$_FILES['content']['name'];
    move_uploaded_file($tmp_name,$dest);


$q="insert into course values(NULL,'$course_name','$description','$recomended','$requirement','$will_get','$fees','$dest')";
$res=mysqli_query($conn ,$q);
if($res){
	echo "<script>alert(' Added Successfully');</script>";
	echo "<script>window.location='course-manage.php';</script>";
}else{
	//echo "not inserted";
	echo mysqli_error($conn);
}
?>