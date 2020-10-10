<?php 

session_start();
error_reporting('index.php');
if(isset($_POST['signin']))
{
  $conn=mysqli_connect("localhost","root","","student");

$email_phonenumber=$_POST['email_phonenumber'];
$password=$_POST['password'];

$_SESSION['email']=$email_phonenumber;
$_SESSION['pswd']=$password;

$select="select *from admin where email_id='$email_phonenumber' or phonenumber='$email_phonenumber' and password='$password'";
$qry=mysqli_query($conn,$select);
$fetchdata=mysqli_fetch_assoc($qry);

if(($email_phonenumber==$fetchdata['email_id'] || $email_phonenumber==$fetchdata['phonenumber']) && $password==$fetchdata['password'])
{
$_SESSION['id']=$fetchdata['id'];
header('Location:Admin_Dash_Board.php');
}
else
{
  echo "<script>alert('Invalid Details.The Entered Username or Password are Incorrect.')</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMIN LOGIN</title>
 	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../../CSS/bootstrap.min.css">

  <!-- jQuery library -->
<script src="../../JS/jquery-3.4.1.min.js"></script>

<!---jQuery UI-->
<script src="../../jQuery/jquery-ui.min.js"></script>

<!-- jS library -->
<script src="../../JS/bootstrap.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Font-Awsome link -->
<link rel="stylesheet" href="../CSS/all.css">

<script src="../../JS/adminvalidation.js"></script>
<script>

function icon_change()
{
var password=document.getElementById('pswd');

if(password.type=="password")
{
password.type = "text";
document.getElementById('icon_eye').innerHTML="<i class='fas fa-eye-slash'></i>"
}
else
{
password.type = "password";
document.getElementById('icon_eye').innerHTML="<i class='fas fa-eye'></i>"
}

}

</script>
</head>
<body>
  
<div class="container bg-dark p-2 w-50 mt-5">

<h1 class="text-white text-center" id="title">Login</h1>
</div>
<div class="mx-auto w-50">
<div class="">
<div class="container p-5" style="border-radius:5px;box-sizing:border-box;background: linear-gradient(to bottom right, #ccffff 0%, #ccffcc 100%);" id="signin">	
	<form class="" method="post" onsubmit="return adminvalidation()">
	  <div class="form-group">
		<label for="">E-mail/Phonenumber</label>
		<input type="text" class="form-control shadow" name="email_phonenumber" placeholder="Type Your UserName" autocomplete="off"  id="admin_login_email_phone" aria-describedby="emailHelp">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		<span id="admin_login_email_phone_error"></span>
	  </div>

	  <div class="">
		<div class="form-row">	
		<div class="form-group col-md-11">
			<label for="inputPassword">Password</label>
			<div class="form-control shadow">
			<input type="password" class="admin_login_password bg-transparent w-75 border border-0" name="password" id="pswd" placeholder="Type Your Password" style="outline:none;" >
		</div>
		</div>
		<div class="form-group col-md-1" style="float:right;margin-top:36px;">
			<span class="mr-5" id="icon_eye" onclick="icon_change()"> <i class="fas fa-eye"></i></span>
		</div>
		</div>
		</div>
		<span id="admin_login_password_error"></span>
	<div class="mt-5 text-center">
	<button class="btn rounded-pill text-white w-50" name="signin" type="submit" style="background:linear-gradient(to left, #33ccff 0%, #ff99cc 100%);font-family: 'Open Sans', sans-serif;" >Login</button>
	</div> 
	<div class="text-center mt-3">
    <a href="forget.php" class="" style="text-decoration:none;color:black;">Forget Password</a>
	</div>

	</form>
</div>
</div>
</div>
</body>
</html>
