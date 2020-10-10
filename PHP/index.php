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

<!-- jQuery library -->
<script src="../JS/jquery-3.4.1.min.js"></script>

<!-- jS library -->
<script src="../JS/bootstrap.min.js"></script>
<script src="../JS/script.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Font-Awsome link -->
<link rel="stylesheet" href="../CSS/all.css">


<script src="../JS/login_register.js"></script>
<script>
function toggle()
	{
		var inputOfSwitch=document.getElementById('customSwitch');
		var titleOfSwitch=document.getElementById('login');
		var signin=document.getElementById('signin');
		var signup=document.getElementById('signup');
		var title=document.getElementById('title');
		
		if(inputOfSwitch.checked)
		{
		titleOfSwitch.innerHTML="LOGIN";
		signup.style.display="block";
		signin.style.display="none";
		title.innerHTML="REGISTER";
		}
		else
		{
		titleOfSwitch.innerHTML="REGISTER NOW";
		signup.style.display="none";
		signin.style.display="block";
		title.innerHTML="LOGIN";
		}
		
	}
	/* Jquery For Popping Up the Login Form */
	$(document).ready(function(){
	$('#myModal').modal('show');
	})

	function icon_change()
	{
	var password=document.getElementById('pswd');
	var password_reg=document.getElementById('pswd_reg');

	if(password.type=="password")
	{
	password.type = "text";
	password_reg.type = "text";
	
    document.getElementById('icon_eye').innerHTML="<i class='fas fa-eye-slash'></i>"
    document.getElementById('icon_eye_reg').innerHTML="<i class='fas fa-eye-slash'></i>"

	}
	else
	{
	password.type = "password";
	password_reg.type = "password";

    document.getElementById('icon_eye').innerHTML="<i class='fas fa-eye'></i>"
    document.getElementById('icon_eye_reg').innerHTML="<i class='fas fa-eye'></i>"

	}
	
	}

</script>

</head>

<body>

<!-- Register Navbar Starts Here-->
<div class="container-fluid" style="">
<div class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">

<!-- Links -->
  <ul class="navbar-nav mr-5 registration">
    <li class="nav-item">
      <a class="nav-link" type="button" data-toggle="modal" data-target="#myModal">SIGNUP/LOGIN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>CART<span>(0)</span></a>
    </li>
  </ul>
  
</div>
</div>
<!-- Register Navbar Ends Here -->
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog ">
    <div class="modal-content bg-transparent" style="border:none;">
	<?php 

		session_start();
		error_reporting('index.php');
		$conn=mysqli_connect("localhost","root","","student");
		if(isset($_POST['login']))
		{

		$email_phonenumber=$_POST['email_phonenumber'];
		$password=$_POST['password'];

		$_SESSION['email']=$email_phonenumber;
		$_SESSION['pswd']=$password;

		$select="select *from sports where email_id='$email_phonenumber' or phonenumber='$email_phonenumber' and password='$password'";
		$qry=mysqli_query($conn,$select);
		$fetchdata=mysqli_fetch_assoc($qry);

		$about=$_GET['about'];
		$gallery=$_GET['gallery'];
		$contact=$_GET['contact'];
		$booktickets=$_GET['booktickets'];
		$shop=$_GET['shop'];
		$blog=$_GET['blog'];
		$cricket=$_GET['cricket'];
		$kabaddi=$_GET['kabaddi'];
		$badminton=$_GET['badminton'];
		$tennis=$_GET['tennis'];
		$football=$_GET['football'];


		if(($email_phonenumber==$fetchdata['email_id'] || $email_phonenumber==$fetchdata['phonenumber']) && $password==$fetchdata['password'])
		{
		$_SESSION['id']=$fetchdata['id'];
		if(isset($about))
		{
			header('Location:about.php');
		}

		elseif(isset($gallery))
		{
			header('Location:gallery.php');
		}

		elseif(isset($blog))
		{
			header('Location:blog.php');
		}
		elseif(isset($booktickets))
		{
			header('Location:bookingtickets.php');
		}

		elseif(isset($shop))
		{
			header('Location:shop.php');
		}
		elseif(isset($contact))
		{
			header('Location:contact.php');
		}
		elseif(isset($cricket))
		{
			header('Location:cricket.php');
		}
		elseif(isset($tennis))
		{
			header('Location:tennis.php');
		}
		elseif(isset($badminton))
		{
			header('Location:badminton.php');
		}
		elseif(isset($football))
		{
			header('Location:football.php');
		}
		elseif(isset($kabaddi))
		{
			header('Location:kabaddi.php');
		}
		else
		{
			header('Location:home.php');
		}
		}
		
		else
		{
		echo "<script>alert('Entered Username Or Password are incorrect')</script>".mysqli_error('index.php');
		}

		}
		if(isset($_POST['signup']))
		{

		$fullname=$_POST['fullname'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$_SESSION['email']=$email;
		$_SESSION['pswd']=$password;
		

		$insert="insert into sports(id,fullname,phonenumber,email_id,password)values('','$fullname','$phonenumber','$email','$password')";
		$result=mysqli_query($conn,$insert);
			if($result)
			{
			
			header('Location:profile.php');
			}
			else
			{
			echo mysqli_error($conn)."<script>alert('<h1>Please Enter Valid Details</h1>')<script>";
			}

		}

?>
<div class="container-fluid">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<div class="container bg-dark p-2">
	<div class="custom-control custom-switch mt-3" style="float:right">
		<input type="checkbox" class="custom-control-input" onclick="toggle()" id="customSwitch">
		<label class="custom-control-label text-white" id="login" for="customSwitch">REGISTER NOW</label>
	</div>
	<h1 class="text-white" id="title">LOGIN</h1>
</div>
<div class="mx-auto">
<div class="">
<div class="p-5" style="border-radius:5px;box-sizing:border-box;background: linear-gradient(to bottom right, #ccffff 0%, #ccffcc 100%);" id="signin">	
	<form class="" method="post" onsubmit="return loginvalidation()">
	  <div class="form-group">
		<label for="">E-mail/Phonenumber</label>
		<input type="text" class="form-control shadow" name="email_phonenumber" placeholder="Type Your UserName" autocomplete="off"  id="user_login_email_phone" aria-describedby="emailHelp">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  <span id="user_login_email_phone_error"></span>
	  </div>

	  <div class="">
		<div class="form-row">	
		<div class="form-group col-md-11">
			<label for="inputPassword">Password</label>
			<div class="form-control shadow">
			<input type="password" class=" user_login_password bg-transparent w-75 border border-0" name="password" id="pswd" placeholder="Type Your Password" style="outline:none;" >
		</div>
		</div>
		<div class="form-group col-md-1" style="float:right;margin-top:36px;">
			<span class="mr-5" id="icon_eye" onclick="icon_change()"> <i class="fas fa-eye"></i></span>
		</div>
		<span id="user_login_password_error"></span>
		</div>
		</div>
		
	<div class="mt-5 text-center">
	<button class="btn rounded-pill text-white w-50" name="login" type="submit" style="background:linear-gradient(to left, #33ccff 0%, #ff99cc 100%);font-family: 'Open Sans', sans-serif;" >Login</button>
	</div> 
	<div class="text-center mt-3">
    <a href="forget.php" class="" style="text-decoration:none;color:black;">Forget Password</a>
	</div>
	<div class="mt-5" style="text-align: center;">
    <p>Or SignUp Using</p>
	<div class="text-center">
	<a href="https://www.facebook.com/" target="_blank" class="rounded-circle"  style=""><i class="fab fa-facebook fa-2x" style="" ></i></a>

	<a href="https://twitter.com/" class="rounded-circle" target="_blank" style=""><i class="fab fa-twitter fa-2x text-info" ></i></a>

	<a href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.
	google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" 
	class="rounded-circle" target="_blank" style="">
	<i class="fab fa-google fa-2x text-danger" ></i></a>
	</div>
	</div>
	</form>
</div>
</div>
</div>
<div class="container-fluid p-5" id="signup" style="border-radius:5px;box-sizing:border-box;background: linear-gradient(to bottom right, #ccffff 0%, #ccffcc 100%);">
<div class="container" >
<form method="post" onsubmit="return registrationvalidation()">
  <div class="form-group">
    <label for="">Full Name</label>
    <input type="text" class="form-control shadow" name="fullname"  placeholder="Type Your Name" autocomplete="off"  id="fullname" aria-describedby="emailHelp">
  <span id="fullname_warning"></span>
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="text" class="form-control shadow" name="phonenumber" placeholder="Type Your PhoneNumber" autocomplete="off" id="phonenumber">
  <span id="phonenumber_warning"></span>
  </div>
	<div class="form-group">
	<label>E-mail Address</label>
	<input type="email" class="form-control shadow" name="email" placeholder="Type Your E-mail" autocomplete="off" id="email">
	<span id="email_warning"></span>
	</div>
	<div class="">
		<div class="form-row">	
		<div class="form-group col-md-11">
			<label for="inputPassword">Password</label>
			<div class="form-control shadow">
			<input type="password" class="register_password bg-transparent w-75 border border-0" name="password" id="pswd_reg" placeholder="Type Your Password" style="outline:none;" >
		</div>
		</div>
		<div class="form-group col-md-1" style="float:right;margin-top:36px;">
			<span class="mr-5" id="icon_eye_reg" onclick="icon_change()"> <i class="fas fa-eye"></i></span>
		</div>
		<span id="password_warning"></span>
		</div>
		</div>
	<div class="container text-center">
	<input name="signup" value="Sign Up" type="submit" class="btn rounded-pill text-white w-75"  style="background:linear-gradient(to left, #33ccff 0%, #ff99cc 100%);font-family: 'Open Sans', sans-serif;">
	</div>
	<div class="mt-5" style="text-align: center;">
    <p>Or SignUp Using</p>
	<div class="text-center">
	<a href=""class="rounded-circle" style=""><i class="fab fa-facebook fa-2x" style="" ></i></a>

	<a href=""class="rounded-circle" style=""><i class="fab fa-twitter fa-2x text-info" ></i></a>

	<a href=""class="rounded-circle" style=""><i class="fab fa-google fa-2x text-danger" ></i></a>
	</div>
	</div>

</form>
</div>
</div>        
</div>
</div>
</div>
</div>


<!-- Carousel Starts Here -->
<div class="container-fluid" style="">
<div class="row">

<div class="container-fluid">
<!-- Carousel Starts Here -->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="" data-interval="2000">
     <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
   <div class="carousel-inner sports_pictures_carousel">
    <div class="carousel-item active">
      <img src="../IMAGES/sports1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../IMAGES/sports2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../IMAGES/sports3.jpg" class="d-block w-100" alt="...">
    </div>
	 <div class="carousel-item">
      <img src="../IMAGES/sports4.jpg" class="d-block w-100" alt="...">
    </div>
	 <div class="carousel-item">
      <img src="../IMAGES/sports5.jpg" class="d-block w-100" alt="...">
	</div>
	
<!-- Main Navbar Starts Here --> 	
<nav class="navbar navbar-expand-lg navbar-dark p-3" style="height:50px;background:rgba(0, 0, 0, 0.6);height:100px;">
  <a class="navbar-brand" href="#" style="font-size:20px;font-family: 'Open Sans', sans-serif; ">BRAND</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center nav_menu" id="navbarSupportedContent" style="position:relative;">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link text-white nav_hover" href="index.php" style="font-size:16px;">	
		<i class="fa fa-home" aria-hidden="true"></i>HOME</a>
      </li>
      <li class="nav-item sub_menu">
        <a class="nav-link text-white nav_hover" href="about.php" style="font-size:16px;">ABOUT</a>
      </li>
      <li class="nav-item" style="">
        <a class="nav-link text-white nav_hover" style="font-size:16px;" href="#" onmouseover="myfun()" onmouseout="myfun_1()" id="navbarDropdown" role="button" data-toggle="dropdown" data-target="#drop" aria-haspopup="true" aria-expanded="false">
          SPORTS
        </a>
		<div id="drop" onmouseover="myfun()" onmouseout="myfun_1()" class="text-left p-3" style="background-color:#BBFF65;margin-top:5px;">
		
		<ul class="list-unstyled submenu_sports text-left">
			<li><a href="cricket.php" class="sub_options nav_hover" style="font-size:16px;">Cricket</a></li>
			<li><a href="kabaddi.php" class="sub_options nav_hover" style="font-size:16px;">Kabaddi</a></li>
			<li><a href="badminton.php" class="sub_options nav_hover" style="font-size:16px;">Badminton</a></li>
			<li><a href="tennis.php" class="sub_options nav_hover" style="font-size:16px;">Tennis</a></li>
			<li><a href="football.php" class="sub_options nav_hover " style="font-size:16px;">Football</a></li>
		</ul>
		</div>
		
	  </li>
      <li class="nav-item">
        <a class="nav-link text-white nav_hover" style="font-size:16px;" href="gallery.php">GALLERY</a>
      </li>
	  </li>  
      </li>
      <li class="nav-item">
        <a class="nav-link text-white nav_hover" style="font-size:16px;" href="blog.php">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white nav_hover" style="font-size:16px;" href="bookingtickets.php">BOOKTICKETS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white nav_hover" style="font-size:16px;" href="shop.php">SHOP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white nav_hover" style="font-size:16px;" href="contact.php">CONTACT</a>
      </li>
</ul>
</div>
<!-- SocialMedia Starts Here -->
  <div class="mr-5">
  <a href="https://www.facebook.com/" class="" target="_blank">
  <i class="fab fa-facebook m-2 p-2 text-white rounded-circle facebook" aria-hidden="true"></i></a>
  <a href="https://twitter.com/" target="_blank" >
  <i class="fab fa-twitter rounded-pill m-2 p-2 text-white twitter" aria-hidden="true"></i></a>
  <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22%2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_type=token&idp_flow_type=login#/" target="_blank">
  <i class="fab fa-behance  rounded-pill m-2 p-2 text-white behance" aria-hidden="true"></i></a>
  </div>
<!-- SocialMedia Ends Here -->
</nav>
<!-- Main Navbar Ends Here -->
</div>
   </div>
   
</div>
</div>
</div>

<!-- Carousel Starts Here -->
	  
<!-- About Starts Here -->	
<div class="container-fluid" style="">
<div class="">
      <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">ABOUT SPORTS</h1>
	  <hr width="60px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-5">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>
</div>
</div>

<div class="container" style="font-family:'Lato',sans-serif;">
<div class="text-center" style="">
<button class="btn" style="background:#e7e7e7;color:red;">MATCHES</button>
<button class="btn" style="background:#57606a;color:white;">STATICS</button>
<button class="btn" style="background:#e7e7e7;color:red;" >TRAINING</button>
</div>
</div>

<!-- About Starts Here -->	


<!-- Latest Results Starts Here -->	


<div class="container-fluid" style="">
<img src="../IMAGES/Latest Results/bg.jpg" class="mt-5" alt="" width="100%" height="500" />
	  <div class="container text-light" style="margin-top:-400px;">
      <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">LATEST RESULTS</h1>
	  <hr width="60px" color="red" class="mx-auto" style="border:1px solid red;position:relative;" />
	  <h4 class="text-danger text-center" style="font-family:;">UEFA CHAMPIONS LEAGUE</h4>
	  
	  <div class="container">
      <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nemo tenetur magnam eveniet sed aut, iste facere quisquam, cumque, vitae quis deleniti animi. A ipsum iusto, temporibus, beatae porro nemo
	  </p>
	  </div>
	  
	  </div>
</div>
<div class="container" style="font-family:'Lato',sans-serif;">
<div class="w-50" style="margin-left:500px;position:relative;">
<button class="tablink btn btn-danger" style="color:white;">SCORE BOARD</button>
</div>
</div>

<!-- Latest Results Ends Here -->

<!-- Match Schedule Starts Here -->
<div class="">
<div class="container-fluid" style="">
<div class="" style="margin-top:250px;">
      <h1 class="text-center" style="font-family: 'Oswald', sans-serif;">MATCH
	  <span class="" style="color:#b81e20;">SCHEDULE</span>
	  </h1>
	  <hr width="90px" color="red" class="mx-auto" style="border:2px solid red;"/>
	  <div class="container">
       <p class="p-5">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut! Est.
	   </p>
	   </div>
</div>
</div>
<!-- Match Schedule Ends Here -->
</div>

<!--Next Match Schedule Starts Here -->
<div class="container bg-dark" style="box-sizing:border-box;">
<div class="row" style="height:400px;" >

	<div class="col-4" style="margin-left:-15px;">
	<div class="" style="background:#b81e20;height:400px;">
	
	<div class="" style="padding:100px;">
	<h1 class="text-light" style="font-family:'Oswald', sans-serif">NEXT MATCH</h1>
	<p class="p-3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</div>
	
	</div>
	</div>
	
	<div class="col-6" style="background:#353a40;">
	<div class="p-5" style="height:400px;">
	<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse harum animi a ipsa distinctio veritatis suscipit amet.</p>

	<div class="row">
		<div class="col-4"><img src="../IMAGES/logo01.png" alt="" class="" width="100" /></div>
		<div class="col-4"><h2 class="text-light" style="margin:40px" >VS</h2></div>
		<div class="col-4"><img src="../IMAGES/logo02.png" alt="" class="" /></div>
	</div>
		<p class="text-white">OCTOBER 31, 2015 | 18:25PM WEMSDDLEY STADIUM (LONDON)</p>
	</div>
	</div>
	
	<div class="col-2">
	<div class="text-center" style="background:#1a1b1d;margin-right:-30px;height:400px;">
		<div class="border border-danger text-white h-25"><h2>00</h2><h4>days</h4></div>
		<div class="border border-danger text-white h-25"><h2>00</h2><h4>hours</h4></div>
		<div class="border border-danger text-white h-25"><h2>00</h2><h4>minutes</h4></div>
		<div class="border border-danger text-white h-25"><h2>00</h2><h4>seconds</h4></div>
	</div>
	</div>
</div>
</div>
<!--Next Match Schedule Ends Here -->


<!--Feature Schedule Starts Here -->
<div class="container bg-dark " style="box-sizing:border-box;">
<div class="row mt-5" style="height:400px;" >

	<div class="col-10" style="">
	<div class="scrollHide" style="background:#353a40;height:400px;">
	<table class="table table-striped text-white" cellpadding="20" >

      <tr>
        <th>1</th>
        <th>INDIA</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
		
		<h5 class="text-white"> FEBRUARY 24,2020 18.25PM</h5>
      </tr>
	  
		<tr>
        <th>2</th>
        <th>PAKISTHAN</th>
        <th>VS</th>
        <th>ENGLAND</th>
		</tr>
	  
		<tr>
        <th>3</th>
        <th>BANGLADESH</th>
        <th>VS</th>
        <th>ZIMBABWE</th>
		</tr>
	  
		<tr>
        <th>4</th>
        <th>AUSTRALIA</th>
        <th>VS</th>
        <th>NEWZELAND</th>
		</tr>
	  
		<tr>
        <th>5</th>
        <th>AFGHANISTHAN</th>
        <th>VS</th>
        <th>SRILANKA</th>
		</tr>
	  
		<tr>
        <th>6</th>
        <th>INDIA</th>
        <th>VS</th>
        <th>WEST INDIES</th>
		</tr>
	  
		<tr>
        <th>7</th>
        <th>NEWZELAND</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
		</tr>
		
		<tr>
        <th>8</th>
        <th>ENGLAND</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
		</tr>
		
		
		<tr>
        <th>9</th>
        <th>SRILANKA</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
		</tr>

		<tr>
        <th>10</th>
        <th>INDIA</th>
        <th>VS</th>
        <th>SRILANKA</th>
		</tr>		
  </table>


	</div>
	</div>
	
	<div class="col-2 " style=";">
	<div class="skew" style="">
	<h1 class="text-light p-3" style="font-family:'Oswald', sans-serif">UPCOMING FEATURE</h1>
	<p class="p-3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</div>
	</div>
	
</div>
</div>

<!--Feature Schedule Ends Here -->



<!--Pointed Table Starts Here -->
<div class="container bg-dark mt-5" style="box-sizing:border-box;">
<div class="row">
<div class="col-2" style="background-color:#b81e20">

	<div class="w-100" >
	<h1 class="text-light mt-5" style="font-family:'Oswald', sans-serif">POINTED TABLE</h1>
	<p class="p-3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</div>
</div>
<div class="col-10">
<div class="scrollHide " style="background:#353a40;height:400px;overflow-y:scroll;position:relative">

	<table class="table table-striped text-white" cellpadding="20">
	  <tr>
        <th></th>
		<th></th>
		<th>1</th>
        <th>INDIA</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
      </tr>
	  
		<tr>
		<th></th>
		<th></th>
        <th>2</th>
        <th>PAKISTHAN</th>
        <th>VS</th>
        <th>ENGLAND</th>
		</tr>
	  
		<tr>
		<th></th>
		<th></th>
        <th>3</th>
        <th>BANGLADESH</th>
        <th>VS</th>
        <th>ZIMBABWE</th>
		</tr>
	  
		<tr>
		<th></th>
		<th></th>
        <th>4</th>
        <th>AUSTRALIA</th>
        <th>VS</th>
        <th>NEWZELAND</th>
		</tr>
	  
		<tr>
		<th></th>
		<th></th>
        <th>5</th>
        <th>AFGHANISTHAN</th>
        <th>VS</th>
        <th>SRILANKA</th>
		</tr>
	  
		<tr>
		<th></th>
		<th></th>
        <th>6</th>
        <th>INDIA</th>
        <th>VS</th>
        <th>WEST INDIES</th>
		</tr>
	  
		<tr>
		<th></th>
		<th></th>
        <th>7</th>
        <th>NEWZELAND</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
		</tr>
		
		<tr>
		<th></th>
		<th></th>
        <th>8</th>
        <th>ENGLAND</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
		</tr>
		
		
		<tr>
		<th></th>
		<th></th>
        <th>9</th>
        <th>SRILANKA</th>
        <th>VS</th>
        <th>SOUTH AFRICA</th>
		</tr>

		<tr>
		<th></th>
		<th></th>
        <th>10</th>
        <th>INDIA</th>
        <th>VS</th>
        <th>SRILANKA</th>
		</tr>		
  </table>
	</div>
	<div class="pointedtableBox">
	
	</div>
	</div>
	
</div>
</div>
</div>
<!--Pointed Table Ends Here -->


<!--Booking Starts Here -->
<div class="container-fluid">
<div class="mt-5" style="background:#f66b34;">
<div class="row" style="padding:100px;display:flex;">
	<div class="col-4"><img src="../IMAGES/logo01.png" alt="" width="80" style="margin-top:-25px;"/></div>
	<div class="col-4"><h1 class="text-white">CRICKET CLUB</h1></div>
	<div class="col-4">
	<a  href="bookingtickets.php" class="booking btn" style="background:white;color:black;padding:20px 50px 20px 50px;">BOOK NOW</a>
	</div>
</div>

</div>
</div>
</div>
<!--Booking Ends Here -->

<!--Latest Videos Starts Here -->
<div class="container-fluid" style="">
<div class="mt-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">LATEST <span style="color:#b81e20;">VIDEO</span> </h1>
	  <hr width="60px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-5">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>
</div>
</div>


<div class="container bg-dark" style="box-sizing:border-box;">
<div class="row mt-5" style="height:400px;" >


	<div class="col-4" style="background:#b81e20;">
	<div class="scrollHide" style="height:400px;overflow-y:scroll;">
	
	<div class="text-white border video_side">
	<div class="row" style="padding:15px">
		<div class="col-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white border video_side">
	<div class="row" style="padding:15px">
		<div class="col-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	<div class="text-white border video_side">
	<div class="row" style="padding:15px">
		<div class="col-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white border video_side">
	<div class="row" style="padding:15px">
		<div class="col-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white border video_side">
	<div class="row" style="padding:15px">
		<div class="col-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white border video_side">
	<div class="row" style="padding:15px">
		<div class="col-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white border video_side">
	<div class="row" style="padding:15px">
		<div class="col-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	</div>
	</div>

	<div class="col-8" style="">
	<div class="" style="background:#353a40;height:400px;">
		
		<div>
		<iframe width="100%" height="400" src="https://www.youtube.com/embed/ChRo27vkm-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

	
	</div>
	</div>
	
</div>
</div>
<!--Latest Videos Ends Here -->


<!--Latest News Starts Here -->
<div class="container-fluid" style="">
<div class="mt-5" style="background:#f5f5f5;padding:50px;">
      <h1 class="text-center" style="font-family: 'Oswald', sans-serif;">LATEST <span style="color:#b81e20;">NEWS</span> </h1>
	  <hr width="90px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>

<div class="container" style="font-family:'Lato',sans-serif;">
<div class="text-center" style="">
<button class="btn btn-danger p-3" style="color:white;">WORLD NEWS</button>
<button class="btn p-3" style="background:#57606a;color:white;">CLUB NEWS</button>
</div>
</div>

<div class="mt-5">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row" style="">
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_02.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_03.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_04.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
</div>

</div>
</div>

<div class="carousel-item">
<div class="row" style="">
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_02.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_03.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_04.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
</div>

</div>
    </div>
<div class="carousel-item">
<div class="row" style="">
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_02.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_03.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_04.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
</div>

</div>
    </div>
  </div>
  <div class="arrows">
  <a class="arrows_pre" href="#carouselExampleControls" role="button" data-slide="prev">
  <i class="fas fa-chevron-left fa-4x"></i>
  </a>
  <a class="arrow_nex" href="#carouselExampleControls" role="button" data-slide="next">
  <i class="fas fa-chevron-right fa-4x"></i>
  </a>
  </div>
</div>



</div>
</div>
<!--Latest News Ends Here -->



<!--Club History Starts Here -->
<div class="container-fluid" style="">
<div class="mt-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">CLUB <span style="color:#b81e20;">HISTORY</span> </h1>
	  <hr width="100px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-5">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>
</div>
</div>


<div class="container-fluid mb-5">
<div class="container">


<div class="row">
	<div class="col-6">
	<iframe width="500" height="320" src="https://www.youtube.com/embed/AFEZzf9_EHk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="col-6">
	 <h4 class="" style="font-family: 'Oswald', sans-serif;">FIFA 1991 ,<span style="color:#b81e20;">UEFA CHAMPIONS LEAGUE</span> </h4>
	 
	 <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos, error impedit voluptatum quo quaerat placeat .</p>
	
	<button class="btn btn-danger text-white">READ MORE</button>
	</div>
</div>

</div>
</div>
<!--Club History Ends Here -->


<!--Hero's Starts Here -->
<div class="container-fluid">
<div class="" style="background:#1d242c;">


<div class="text-white p-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">OUR <span style="color:#b81e20;">HEROES</span> </h1>
	  <hr width="100px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>
</div>

<div class="mt-5">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row" style="">
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_02.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_03.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_04.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
</div>

</div>
</div>

<div class="carousel-item">
<div class="row" style="">
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_02.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_03.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_04.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
</div>

</div>
    </div>
<div class="carousel-item">
<div class="row" style="">
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_02.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_03.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
  </div>
  <div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/c_news_04.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

  <div class="card-body bg-danger">
    <a href="#" class="card-link text-white">FEBRUARY 24,2020.18.25PM</a>
    <a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a>
  </div>
  </div>
</div>

</div>
    </div>
  </div>
  <div class="arrows">
  <a class="arrows_pre" href="#carouselExampleControls" role="button" data-slide="prev">
  <i class="fas fa-chevron-left fa-4x"></i>
  </a>
  <a class="arrow_nex" href="#carouselExampleControls" role="button" data-slide="next">
  <i class="fas fa-chevron-right fa-4x"></i>
  </a>
  </div>
</div>
</div>
</div>

<!--Hero's Ends Here -->

<!--Our Gallery Starts Here -->

<div class="container-fluid">
	<div class="container">
	
	
	<div class="p-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">OUR <span style="color:#b81e20;">GALLERY</span> </h1>
	  <hr width="100px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>
	</div>
	</div>
	
	<div class="container-fluid">
	<div class="row" style="height:700px;margin:10px;display:flex;">
		<div class="col-3" style="">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/1.jfif" alt="" width="300" height="300" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/2.jfif" alt="" width="300" height="150" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/3.jfif" alt="" width="300" height="500" /></div>
		</div>
		
		<div class="col-3">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/4.jfif" alt="" width="300" height="300" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/5.jpg" alt="" width="300" height="150" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/6.jpg" alt="" width="300" height="400" /></div>
		</div>
		
		<div class="col-3">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/7.jfif" alt="" width="300" height="200" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/8.jpg" alt="" width="300" height="300" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/9.jfif" alt="" width="300" height="200" /></div>
		</div>
		
		<div class="col-3">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/10.jfif" alt="" width="300" height="250" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/11.jfif" alt="" width="300" height="150" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/12.jfif" alt="" width="300" height="200" /></div>
		</div>
		
	</div>	
	</div>
	
	
</div>

<div class="container">	
<div class="container" style="margin-top:300px;text-align:center;">
	<button class="btn btn-danger text-white w-25">VIEW MORE</button>
</div>
</div>
<!--Our Gallery Ends Here -->


<!--Social Network Starts Here -->

<div class="container-fluid">
<div class="mt-5">

<div class="social_network" style="height:400px;box-sizing:border-box;">

<div class="container text-white" style="position:relative;padding:150px;">
       <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>

</div>

</div>

</div>
</div>
<!--Social Network Ends Here -->

<!--Awards Starts Here -->

<div class="container-fluid">
	<div class="container">
	
	 <div class="p-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;"><span style="color:#b81e20;">AWARDS</span> </h1>
	  <hr width="60px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>
	</div>
	</div>
	
		<div class="container">
		<div class="row" style="">
			<div class="col-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/1.png" alt="" />
			</div>
			<div class="col-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/2.png" alt="" />
			</div>
			<div class="col-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/3.png" alt="" />
			</div>
			<div class="col-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/4.png" alt="" />
			</div>
		</div>
		</div>
</div>
<!--Awards Ends Here -->

<!--Top Products & Merchandise Starts Here -->
<div class="container-fluid" style="background:#f5f5f5;">
	<div class="container mt-5">
	  <div class="p-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">TOP PRODUCTS &
	  <span style="color:#b81e20;">MERCHANDISE</span> </h1>
	  <hr width="200px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	   Enim amet cumque quo at eius nulla, 
	   voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
	   consectetur adipisicing elit. nemo ab praesentium voluptatum, 
	   exercitationem ad quo tempore quam temporibus voluptates odio, 
	   qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit.
	   </p>
	   </div>
	  </div>
	</div>
	
<div class="container-fluid">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
 
<div class="row" style="">
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
	<img src="../IMAGES/Shopping Cart/1.jfif" class="card-img-top" alt="..." />
	<div class="card-body" style="">
	<h5 class="card-title">Men Sportswear Fashion</h5>
	<div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
    </div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
	</div>
	</div>
  
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
	<img src="../IMAGES/Shopping Cart/2.jfif" class="card-img-top" alt="..." />
	<div class="card-body">
	<h5 class="card-title">Men Sportswear Fashion</h5>
	<div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
	</div>
	</div>
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
  	<img src="../IMAGES/Shopping Cart/3.jfif" class="card-img-top" alt="..." />
  	<div class="card-body">
  	<h5 class="card-title">Men Sportswear Fashion</h5>
    <div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
  	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
  </div>
  </div>
  </div>

  
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/Shopping Cart/4.jfif" class="card-img-top" alt="..." />
  <div class="card-body">
  <h5 class="card-title">Men Sportswear Fashion</h5>
  <div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
  </div>
  </div>
  <div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
</div>
</div>
</div>	

    </div>
    <div class="carousel-item">

	<div class="row" style="">
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
	<img src="../IMAGES/Shopping Cart/1.jfif" class="card-img-top" alt="..." />
	<div class="card-body" style="">
	<h5 class="card-title">Men Sportswear Fashion</h5>
	<div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
    </div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
	</div>
	</div>
  
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
	<img src="../IMAGES/Shopping Cart/2.jfif" class="card-img-top" alt="..." />
	<div class="card-body">
	<h5 class="card-title">Men Sportswear Fashion</h5>
	<div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
	</div>
	</div>
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
  	<img src="../IMAGES/Shopping Cart/3.jfif" class="card-img-top" alt="..." />
  	<div class="card-body">
  	<h5 class="card-title">Men Sportswear Fashion</h5>
    <div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
  	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
  </div>
  </div>
  </div>

  
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/Shopping Cart/4.jfif" class="card-img-top" alt="..." />
  <div class="card-body">
  <h5 class="card-title">Men Sportswear Fashion</h5>
  <div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
  </div>
  </div>
  <div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
</div>
</div>
</div>	

    </div>
    <div class="carousel-item">

	<div class="row" style="">
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
	<img src="../IMAGES/Shopping Cart/1.jfif" class="card-img-top" alt="..." />
	<div class="card-body" style="">
	<h5 class="card-title">Men Sportswear Fashion</h5>
	<div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
    </div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
	</div>
	</div>
  
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
	<img src="../IMAGES/Shopping Cart/2.jfif" class="card-img-top" alt="..." />
	<div class="card-body">
	<h5 class="card-title">Men Sportswear Fashion</h5>
	<div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
	</div>
	</div>
<div class="col-lg-3">
	<div class="card text-white" style="width: 18rem;background:#282425;">
  	<img src="../IMAGES/Shopping Cart/3.jfif" class="card-img-top" alt="..." />
  	<div class="card-body">
  	<h5 class="card-title">Men Sportswear Fashion</h5>
    <div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
  	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
  </div>
  </div>
  </div>

  
<div class="col-lg-3">
  <div class="card text-white" style="width: 18rem;background:#282425;">
  <img src="../IMAGES/Shopping Cart/4.jfif" class="card-img-top" alt="..." />
  <div class="card-body">
  <h5 class="card-title">Men Sportswear Fashion</h5>
  <div class="row">
  	<div class="col-6"><p>Sports Wear</p></div>
  	<div class="col-6"><i class="fas fa-user-friends"></i><span>360</span></div>
  </div>
  </div>
  <div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
</div>
</div>
</div>	
</div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
</div>
	
<div class="container text-center mt-3 p-3">	
	<a href="shop.php" class="btn btn-danger text-white w-25">VIEW MORE</a>
</div>
</div>
<!--Top Products & Merchandise Ends Here -->


<!--Miscellaneous Starts Here -->

<div class="container-fluid" style="background:#ececec;">
	<div class="mt-5">
	
	
	<div class="row p-3">
	
		<div class="col-3">
		<p class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">ABOUT
		<span style="color:#b81e20;">CRICKET CLUB</span> </p>
		<hr width="50px" color="red" class="mx-auto" style="border:1px solid red;"/>
		<p align="justify" class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis dolor atque magni, porro minus repellendus nostrum alias ea deserunt. Vel quam explicabo laudantium accusamus est, nulla minima!</p>
		
		<p align="justify" class="p-5">ADDRESS:239 main street London,England.</p>
		<p align="justify" class="p-5">CALL: <span style="color:#b81e20;">1800-2222-3333</span></p>
		</div>
		
		<div class="col-3">
		<p class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">RECENT
		<span style="color:#b81e20;">NEWS</span> </p>
		<hr width="50px" color="red" class="mx-auto" style="border:1px solid red;"/>
		
		<div class="mt-5">
		<div class="row">
			<div class="col-6">
			<img class="m-2" src="../IMAGES/c_news_01.jpg" alt="" width="100" height="100" />
			</div>
			<div class="col-6">
			<p style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae.</p>
			<hr class="" color="black" width="130" />
			
			</div>
		</div>
		
		<div class="row">
			<div class="col-6">
			<img class="m-2" src="../IMAGES/c_news_02.jpg" alt="" width="100" height="100" />
			</div>
			<div class="col-6">
			<p style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae. </p>
			<hr class="" color="black" width="130" />
			</div>
		</div>
		
		<div class="row">
			<div class="col-6">
			<img class="m-2" src="../IMAGES/c_news_03.jpg" alt="" width="100" height="100" />
			</div>
			<div class="col-6">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae.</p>
			<hr class="" color="black" width="130" />
			</div>
		</div>

		</div>
		
		</div>
		
		<div class="col-3">
		<p class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">REAL
		<span style="color:#b81e20;">CRICKET PRODUCTS</span> </p>
		<hr width="50px" color="red" class="mx-auto" style="border:1px solid red;"/>	
		
		<div class="mt-5" style="margin-left:80px;">
		<div class="p-2" style="font-size:18px;">
		<i class="far fa-play-circle fa-1x text-danger"></i>SHOES <span>(4)</span>
		<hr class="" color="black" width="130" style="" />
		</div>
			
		<div class="p-2" style="font-size:18px;">
		<i class="far fa-play-circle fa-1x text-danger"></i>BATS <span>(5)</span>
		<hr class="" color="black" width="130" style="" />
		</div>
		<div class="p-2" style="font-size:18px;">
		<i class="far fa-play-circle fa-1x text-danger"></i>T-SHIRT <span>(5)</span>
		<hr class="" color="black" width="130" style="" />
		</div>
		<div class="p-2" style="font-size:18px;">
		<i class="far fa-play-circle fa-1x text-danger"></i>BALL <span>(5)</span>
		<hr class="" color="black" width="130" style="" />
		</div>
		<div class="p-2" style="font-size:18px;">
		<i class="far fa-play-circle fa-1x text-danger"></i>GLASSES <span>(5)</span>
		<hr class="" color="black" width="130" style="" />
		</div>
		<div class="p-2" style="font-size:18px;">
		<i class="far fa-play-circle fa-1x text-danger"></i>HELMET <span>(5)</span>
		<hr class="" color="black" width="130" style="" />
		</div>
		</div>
		</div>
		
		<div class="col-3">
		<p class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">RECENT
		<span style="color:#b81e20;">COMMENTS</span> </p>
		<hr width="50px" color="red" class="mx-auto" style="border:1px solid red;"/>
		
		<div class="m-5">
		<div class="row">
			<div class="col-6"><img src="../IMAGES/Comments/1.jpg" class="rounded-circle" alt="" /></div>
			<div class="col-6"><p>Jhone Doe 18th April,2019.Nice & Cool</p></div>
		</div>
			
		</div>
		<div class="m-5">		
		<div class="row">
			<div class="col-6"><img src="../IMAGES/Comments/2.jpg" class="rounded-circle" alt="" /></div>
			<div class="col-6"><p>Jhone Doe 18th April,2019.Nice & Cool</p></div>
		</div>
		</div>
		<div class="m-5">
		<div class="row">
			<div class="col-6"><img src="../IMAGES/Comments/3.jpg" class="rounded-circle" alt="" /></div>
			<div class="col-6"><p>Jhone Doe 18th April,2019.Nice & Cool</p></div>
		</div>
		</div>
		</div>
		
	</div>
	
	
	
	</div>
</div>

<!--Miscellaneous Ends Here -->


<!--Copyright Starts Here -->

<div class="container-fluid" style="background:#1b2026;">
	<div class="container">
	
	<div class="row">
		<div class="col-2">
		<img src="../IMAGES/logo.png" alt="" style="margin-top:50px;"/>
		</div>
		<div class="col-6 text-center">
		<div class="" style="margin-top:100px;">
		<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook rounded-pill m-2 p-2 text-white facebook" aria-hidden="true"></i></a>
		<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter  rounded-pill m-2 p-2 text-white twitter"></i></a>
		<a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22%2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_type=token&idp_flow_type=login#/" target="_blank">
		<i class="fab fa-behance rounded-pill m-2 p-2 text-white behance"></i></a>
		</div>
		<p align="center" class="text-white">Copyright, 2020 <span style="color:#b81e20;">Shabana Anjum</span></p>
		</div>
		
		<div class="col-4">
		
			<div class="row" style="margin-top:100px;">
				<div class="col-6"><img src="../IMAGES/AppImg/apple.png" alt="" /></div>
				<div class="col-6"><img src="../IMAGES/AppImg/google.png" alt="" /></div>
			</div>
		
		
		</div>
	</div>
	
	
	</div>
</div>


<!--Copyright Ends Here -->



</body>
</html>