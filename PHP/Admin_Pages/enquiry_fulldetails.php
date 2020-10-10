<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$specifiedorder=$_GET['enquirydetails'];
$select="select *from enquiry where id='$specifiedorder'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FULL DETAILS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <!-- Font-Awsome link -->
	<link rel="stylesheet" href="../CSS/all.css">

</head>
<body>



<div class="container mt-5">
 
	<h5 class="text-center">Order Details</h5>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<td><?php echo $fetch['id'];?></td>
		</tr>
		<tr>
			<th>NAME</th>
			<td><?php echo $fetch['name'];?></td>
		</tr>
		<tr>
			<th>PHONE</th>
			<td><?php echo $fetch['phone'];?></td>
		</tr>
		<tr>
			<th>SUBJECT</th>
			<td><?php echo $fetch['subject'];?></td>
		</tr>
		<tr>
			<th>EMAIL</th>
			<td><?php echo $fetch['email'];?></td>
		</tr>
		<tr>
			<th>COUNTRY</th>
			<td><?php echo $fetch['country'];?></td>
		</tr>
		<tr>
			<th>ADDRESS</th>
			<td><?php echo $fetch['address'];?></td>
		</tr>
        <tr>
			<th>MESSAGE</th>
			<td><?php echo $fetch['message'];?></td>
		</tr>

	</table>
	<a href="Admin_Dash_Board.php" class="btn btn-success float-right">Go To Back</a>
	</div>


    
</body>
</html>

<?php } ?>