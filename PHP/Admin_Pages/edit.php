<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$specifiedperson=$_GET['edit'];
$_SESSION['idd']=$specifiedperson;
$select="select *from sports where id='$specifiedperson'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editing User Details</title>
	<link rel="icon" type="image/png" href="../../IMAGES/player.png" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <!-- Font-Awsome link -->
	<link rel="stylesheet" href="../CSS/all.css">

    <style>
    	.ex1
	{
		border:none;
		outline:none;
		background-color:transparent;
	}
    </style>
</head>
<body>


<div class="container mt-5">

<div class="container mt-5">

<div class="container text-center">
<img src="../../IMAGES/Profile-Img/<?php echo $fetch['photo']; ?>" class="rounded-circle" width="100" height="100" alt="">
</div>
<h5 class="text-center"><?php echo $fetch['fullname']." ";?>PROFILE</h5>
<form action="update.php" method="POST" enctype="multipart/form-data" >
	<table class="table table-striped table-borderless">
		<tr>
			<th>ID</th>
			<td><input type="text" readOnly="readonly" name="id" id="id" value="<?php echo $fetch['id'];?>" style="border:none;outline:none;background-color:transparent;"/></td>
			<td><i class="fas fa-edit" onclick="idchange()"></i></td>
		</tr>
		<tr>
			<th>FULLNAME</th>
			<td><input type="text" readOnly="readonly" value="<?php echo $fetch['fullname'];?>" class="ex1" 
			name="fullname" /></td>
			<td><i class="fas fa-edit" onclick="change(1)"></i></td>
		</tr>

		<tr>
			<th>PHONE NUMBER</th>
			<td><input type="text" readOnly="readonly" value="<?php echo $fetch['phonenumber'];?>" class="ex1" name="phonenumber"  /></td>
			<td><i class="fas fa-edit" onclick="change(2)"></i></td>
		</tr>

		<tr>
			<th>E-MAIL ADDRESS</th>
			<td><input type="text" readOnly="readonly" value="<?php echo $fetch['email_id'];?>" class="ex1" 
			name="email" /></td>
			<td><i class="fas fa-edit" onclick="change(3)"></i></td>
		</tr>

		<tr>
			<th>PASSWORD</th>
			<td><input type="password" readOnly="readonly" value="<?php echo $fetch['password'];?>" class="ex1"
			name="password" style="border:none;outline:none;background-color:transparent;" /></td>
			<td><i class="fas fa-edit" onclick="change(4)"></i></td>
		</tr>

		<tr>
			<th>GENDER</th>
			<td><input type="text" readOnly="readonly" value="<?php echo $fetch['gender'];?>" class="ex1" name="gender" /></td>
			<td><i class="fas fa-edit" onclick="change(5)"></i></td>
		</tr>

		<tr>
			<th>DATE OF BIRTH</th>
			<td><input type="text" readOnly="readonly" value="<?php echo $fetch['dob'];?>" class="ex1" name="dob" /></td>
			<td><i class="fas fa-edit" onclick="change(6)"></i></td>
		</tr>

		<tr>
			<th>LANGUAGES</th>
			<td><input type="text" readOnly="readonly" value="<?php echo $fetch['languages'];?>" class="ex1" name="languages" /></td>
			<td><i class="fas fa-edit" onclick="change(7)"></i></td>
		</tr>		
		<tr>
			<th>UPLOADED PHOTO</th>
			<td><img src="<?php echo $fetch['file']; ?>" width="80" height="80" alt="" />
			<input type="file"  name="file" /></td>
			<td><i class="fas fa-edit" onclick="changefiletype()" ></i></td>
		</tr>
	</table>
	<a href="User_Details.php" class="btn btn-info">Go To Back</a>
	<button type="submit" class="btn btn-success float-right">Update</button>
	</form>
	</div>
	
	
	<script type="text/javascript">
	function idchange()
	{
		var a=document.getElementById('id');
	    document.getElementById('id').style="border:1px solid black;box-shadow:1px 1px 1px 1px grey;"
		document.getElementById('id').removeAttribute('readonly');
	}
	
	function change(i)
	{
		var a=document.getElementsByTagName('i')[i];
	    document.getElementsByTagName('input')[i].style="border:1px solid black;box-shadow:1px 1px 1px 1px grey;"
		document.getElementsByTagName('input')[i].removeAttribute('readonly');
		
		/*
		if(a.readOnly==true)
		{
		document.getElementsByTagName('input')[i].style="border:1px solid black;"
		document.getElementsByTagName('input')[i].removeAttribute('readonly');
		document.getElementsByTagName('i')[i].innerHTML="<i class='fas fa-remove-format'></i>";
		}
		else
		{
		document.getElementsByTagName('input')[i].style="border:none;outline:none;"
		document.getElementsByTagName('input')[i].setAttribute('readOnly','readonly');
		document.getElementsByTagName('i')[i].innerHTML="<i class='fas fa-edit'></i>";	
		}
		*/
		
	}
	
	function changefiletype()
	{
			document.getElementById('ex2').setAttribute("type","file");
	}
	</script>

<?php } ?>