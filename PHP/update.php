<?php

session_start();
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$fullname= $_POST['fullname'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$languages=$_POST['languages'];

$fileuploadings=$_FILES['file']['name'];
$file_tmpname=$_FILES['file']['tmp_name'];
$upload="../IMAGES/Profile-img/".$fileuploadings;
move_uploaded_file($file_tmpname,$upload);

$host="localhost";
$username="root";
$database="student";
$pwd="";

$con=mysqli_connect($host,$username,$pwd,$database);   //syntax for connecting database 
$update="update sports set fullname='$fullname',email_id='$email',phonenumber='$phonenumber',password='$password',gender='$gender',dob='$dob',languages='$languages',photo='$upload' where id='$id' or email_id='$email'";
$updates=mysqli_query($con,$update);

if($updates)
{
    echo "Data Updated Successfully";
    header('Location:Profile_Fetch.php');

}
else
{
	echo "<script>alert('Server Error');</script>".mysqli_error($con);
}

?>
