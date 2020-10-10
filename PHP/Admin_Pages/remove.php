<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$specifiedperson=$_GET['remove'];
$delete="delete from sports where id='$specifiedperson'"; 
$qry=mysqli_query($conn,$delete);

if($qry)
{
echo "<script>alert('Deleted Successfully')</script>";	

}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Data Remove</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <!-- Font-Awsome link -->
    <link rel="stylesheet" href="../CSS/all.css">

</head>
<body>
    <div class="container">
	<a href="User_Details.php" class="btn btn-success">Go Back</a>
    </div>
</body>
</html>
<?php } ?>