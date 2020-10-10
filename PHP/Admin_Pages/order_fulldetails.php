<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$specifiedorder=$_GET['fulldetails'];
$select="select *from productsorder where id='$specifiedorder'";
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
			<th>PRODUCT NAME</th>
			<td><?php echo $fetch['productname'];?></td>
		</tr>
		<tr>
			<th>PRICE</th>
			<td><?php echo $fetch['price'];?></td>
		</tr>
		<tr>
			<th>CONSUMER NAME</th>
			<td><?php echo $fetch['consumername'];?></td>
		</tr>
		<tr>
			<th>CONSUMER PHONENUMBER</th>
			<td><?php echo $fetch['consumerphonenumber'];?></td>
		</tr>
		<tr>
			<th>CONSUMER E-MAIL</th>
			<td><?php echo $fetch['consumeremail'];?></td>
		</tr>
		<tr>
			<th>CONSUMER ADDRESS</th>
			<td><?php echo $fetch['consumeraddress'];?></td>
		</tr>

	</table>
	<a href="Admin_Dash_Board.php" class="btn btn-success float-right">Go To Back</a>
	</div>


    
</body>
</html>

<?php } ?>