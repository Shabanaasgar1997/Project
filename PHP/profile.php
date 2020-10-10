<?php
session_start();
error_reporting('profile.php');
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$select="select *from sports where id='$id' or email_id='$email'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);



if(isset($_POST['Save']))
{
	$gender=$_POST['gender'];
	$dateofbirth=$_POST['dateofbirth'];
	$languages=$_POST['Languages'];
	$array=implode(',',$languages);
	$files=$_FILES['file']['name'];
	$files_name=$_FILES['file']['tmp_name'];
	$upload="../IMAGES/Profile-Img/".$files;
	move_uploaded_file($files_name,$upload);
	

	$conn_saving=mysqli_connect("localhost","root","","student");
	$updating="update sports set gender='$gender',dob='$dateofbirth',languages='$array',photo='$files' where id='$id' or email_id='$email'";
	$query=mysqli_query($conn_saving,$updating);
	if($query)
	{
		
		echo "<script>alert('data saved successfully')</script>".header('Location:home.php');
		
	}
	else
	{
		echo "<script>alert('Error')</script>".mysqli_error('profile.php');
	}

}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SPORTS</title>
	<link rel="icon" type="image/png" href="../IMAGES/player.png" />
	
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../CSS/bootstrap.min.css">

<!-- Latest compiled CSS -->
<link rel="stylesheet" href="../CSS/style.css">
<link rel="stylesheet" href="../CSS/cricket.css">
<link rel="stylesheet" href="../CSS/kabaddi.css">
<link rel="stylesheet" href="../CSS/football.css">
<link rel="stylesheet" href="../CSS/tennis.css">
<link rel="stylesheet" href="../CSS/badminton.css">
<link rel="stylesheet" href="../CSS/blog.css">
<link rel="stylesheet" href="../CSS/bookingtickets.css">
<link rel="stylesheet" href="../CSS/shop.css">
<link rel="stylesheet" href="../CSS/contact.css">
<link rel="stylesheet" href="../jQuery/jquery-ui.min.css">

<!-- jQuery library -->
<script src="../JS/jquery-3.4.1.min.js"></script>

<!---jQuery UI-->
<script src="../jQuery/jquery-ui.min.js"></script>
<!-- jS library -->
<script src="../JS/bootstrap.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Font-Awsome link -->
<script src="https://kit.fontawesome.com/d84aa80240.js" crossorigin="anonymous"></script>

<!-- Local Script link -->
<script type="text/javascript" src="../JS/script.js"></script>
<script type="text/javascript" src="../JS/fetch.js"></script>
<style>
#profile_fetch
{
  display:none;
}
</style>

</head>

<body>
<!-- Register Navbar Starts Here-->
<div class="container-fluid" style="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar navbar-brand text-light"  id="page_replace" href="profile.php" ><?php echo $fetch['fullname'];?>
  <i class="fas fa-user-edit"></i>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav registration">

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>CART<span>(0)</span></a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- Register Navbar Ends Here -->

	<div class="container mt-5 " id="profile">
	<div class="container text-center">
	<img src="../IMAGES/Profile/profile.png" class="img-fluid rounded-circle" width="50" alt="">
	</div>
	<h5 class="text-center"><?php echo $output[1]." ";?>PROFILE</h5>
	<form  method="post" enctype="multipart/form-data">
	<table class="table table-striped mt-3">
		<tr>
			<th>FULLNAME</th>
			<td><?php echo $fetch['fullname'];?></td>
		</tr>

		<tr>
			<th>E-MAIL ADDRESS</th>
			<td><?php echo $fetch['email_id'];?></td>
		</tr>

		<tr>
			<th>PHONE NUMBER</th>
			<td><?php echo $fetch['phonenumber'];?></td>
		</tr>

		<tr>
			<th>PASSWORD</th>
			<td>
			<input type="password" id="pswd_profile" readonly value="<?php echo $fetch['password'];?>" style="border:none;outline:none;background-color:transparent;" />
			<!---
			<span id="icon_eye_profile" onclick="icon_change_profile()"><i class="fas fa-eye"></i></span>
			-->
			</td>
		</tr>
		
		<tr>
			<th>GENDER</th>
			<td>

            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            
            
            </td>
		</tr>

		<tr>
			<th>DATE OF BIRTH</th>
			<td>
            <input type="text" name="dateofbirth" id="dateOfBirth">
            </td>
            <script>  
            $( function() {
            $( "#dateOfBirth" ).datepicker();
            } );
            </script>
		</tr>

		<tr>
			<th>LANGUAGES</th>
			<td>
            
            <input type="checkbox" name="Languages[]" value="English" id="">English
            <input type="checkbox" name="Languages[]" value="Hindi" id="">Hindi
            <input type="checkbox" name="Languages[]" value="Urdu" id="">Urdu
            <input type="checkbox" name="Languages[]"  value="Telugu" id="">Telugu
            
            </td>
		</tr>
		<tr>
			<th>PROFILE PICTURE</th>
			<td><input type="file" name="file"></td>
		</tr>
		
	</table>
	<input type="submit" name="Save" value="Save" class="btn btn-success float-right text-white" />
	</form>
	</div>

	<div class="container mt-5" id="profile_fetch">
	<div class="container text-center">
	<img src="<?php echo $fetch['photo']; ?>" class="img-fluid rounded-circle" width="75" height="100" alt="">
	</div>
	<h5 class="text-center">PROFILE</h5>
	<form  method="post" enctype="multipart/form-data">
	<table class="table table-striped mt-3">
		<tr>
			<th>FULLNAME</th>
			<td><?php echo $fetch['fullname'];?></td>
		</tr>

		<tr>
			<th>E-MAIL ADDRESS</th>
			<td><?php echo $fetch['email_id'];?></td>
		</tr>

		<tr>
			<th>PHONE NUMBER</th>
			<td><?php echo $fetch['phonenumber'];?></td>
		</tr>

		<tr>
			<th>PASSWORD</th>
			<td>
			<input type="password" id="pswd_profile" value="<?php echo $fetch['password'];?>" style="border:none;outline:none;background-color:transparent;" />

			</td>
		</tr>
		
		<tr>
			<th>GENDER</th>
			<td> <?php echo $fetch['gender']; ?>    </td>
		</tr>

		<tr>
			<th>DATE OF BIRTH</th>
			<td><?php echo $fetch['dob']; ?>  </td>
            <script>  
            $( function() {
            $( "#dateOfBirth" ).datepicker();
            } );
            </script>
		</tr>

		<tr>
			<th>LANGUAGES</th>
			<td><?php echo $fetch['languages']; ?></td>
		</tr>

	</table>
	<input type="submit" name="save" value="Save" class="btn btn-success float-right text-white" />
	</form>
	</div>
	
<?php 
}
else
{
	header('location:index.php');
}
?>