<?php
session_start();
error_reporting('edit.php');
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$select="select *from sports where id='$id' or email_id='$email'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);
include('links.php');

?>

    <style>
    	.ex1
	{
		border:none;
		outline:none;
		background-color:transparent;
	}
    </style>
	<div class="container-fluid"><?php include('nav.php');?></div>
	<div class="container mt-5">

    <div class="container text-center">
	<img src="<?php echo $fetch['photo']; ?>" class="rounded-circle" width="100" height="100" alt="">
	</div>
    
<h5 class="text-center"><?php echo $fetch['fullname']." ";?>PROFILE</h5>
<form action="update.php" method="POST" enctype="multipart/form-data" >
	<table class="table table-striped table-borderless">
		<tr>
			<th>ID</th>
			<td><input type="text" readOnly value="<?php echo $fetch['id'];?>" style="border:none;outline:none;background-color:transparent;"/></td>
			<td><i class="fas fa-edit"></i></td>
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
			<td>
			<input type="file"  name="file" /></td>
			<td><i class="fas fa-edit" onclick="changefiletype()" ></i></td>
		</tr>
	</table>
	
	<button type="submit" class="btn btn-success float-right">Update</button>
	</form>
	</div>
	
	
	<script type="text/javascript">
	
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