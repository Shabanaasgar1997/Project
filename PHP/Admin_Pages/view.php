<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$specifiedperson=$_GET['view'];
$select="select *from sports where id='$specifiedperson'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <!-- Font-Awsome link -->
	<link rel="stylesheet" href="../CSS/all.css">

</head>
<body>

	<div class="container mt-5">
	<div class="container text-center">
	<img src="../../IMAGES/Profile-Img/<?php echo $fetch['photo']; ?>" class="rounded-circle" width="100" height="100" alt="">
	</div>   
	<h5 class="text-center"><?php echo $fetch['fullname']." ";?>PROFILE</h5>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<td><?php echo $fetch['id'];?></td>
		</tr>
		<tr>
			<th>FULLNAME</th>
			<td><?php echo $fetch['fullname'];?></td>
		</tr>
		<tr>
			<th>E-MAIL ADDRESS</th>
			<td><?php echo $fetch['phonenumber'];?></td>
		</tr>
		<tr>
			<th>PHONE NUMBER</th>
			<td><?php echo $fetch['email_id'];?></td>
		</tr>
		<tr>
			<th>PASSWORD</th>
			<td><input type="password" value="<?php echo $fetch['password'];?>" style="border:none;outline:none;background-color:transparent;" /></td>
		</tr>
		<tr>
			<th>GENDER</th>
			<td><?php echo $fetch['gender'];?></td>
		</tr>
		<tr>
			<th>DATE OF BIRTH</th>
			<td><?php echo $fetch['dob'];?></td>
		</tr>

		<tr>
			<th>LANGUAGES</th>
			<td><?php echo $fetch['languages'];?></td>
		</tr>
		
		<tr>
			<th> PHOTO</th>
			<td><?php echo $fetch['photo'];?></td>
		</tr>
	</table>
	<a href="User_Details.php" class="btn btn-success float-right">Go To Back</a>
	</div>
</body>
</html>
<?php } ?>