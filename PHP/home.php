<?php
session_start();
error_reporting('home.php');
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");
$select="select *from sports where id='$id' or email_id='$email'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);
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
<link rel="stylesheet" href="../CSS/all.css">


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

<body onload="loading()">
<div id="loading">


</div>
<div class="container-fluid" style="position:fixed;top: 0;z-index: 1;width: 100%;">
<div class="progress-container">
    <div class="progress-bar" id="myBar" style="height: 8px;background: gray;width: 0%;"></div>
  </div> 
</div>
<!-- Register Navbar Starts Here-->
<div class="container-fluid" style="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar navbar-brand text-light"  id="page_replace" href='Profile_Fetch.php' ><?php echo $fetch['fullname'];?>
  <i class="fas fa-user-edit"></i>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav registration">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>CART<span>(0)</span></a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- Register Navbar Ends Here -->
<!-- Carousel Starts Here -->
<div class="container-fluid" style="">
<div class="row">

<div class="container-fluid">

<!-- Carousel Starts Here -->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="" data-interval="2000">
   <div class="carousel-inner ">
    <div class="carousel-item active sports_pictures_carousel">
      <img src="../IMAGES/slide1.png" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item sports_pictures_carousel">
      <img src="../IMAGES/slide2.png" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item sports_pictures_carousel">
      <img src="../IMAGES/slide.jpg" class="d-block w-100 h-100" alt="...">
    </div>
	 <div class="carousel-item sports_pictures_carousel">
      <img src="../IMAGES/slide4.jpg" class="d-block w-100 h-100" alt="...">
    </div>
	 <div class="carousel-item sports_pictures_carousel">
      <img src="../IMAGES/slide5.jpg" class="d-block w-100 h-100" alt="...">
	</div>
	<!-- Main Navbar Starts Here --> 	

  <?php 
include('nav.php'); 
	?> 

</div>
   
</div>
</div>
</div>

<!-- Carousel Ends Here -->
	  
	  
<!-- About Starts Here -->	
<div class="container-fluid" style="">
<div class="">
      <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">ABOUT SPORTS</h1>
	  <hr width="60px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-lg-5">
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

<div class="" style="font-family:'Lato',sans-serif;">
<div class="matches_button" style="">
<button class="p-lg-4" style="background:#e7e7e7;color:red;border:none;">MATCHES</button>
<button class="p-lg-4" style="background:#57606a;color:white;border:none;">STATICS</button>
<button class="p-lg-4" style="background:#e7e7e7;color:red;border:none;" >TRAINING</button>
</div>
</div>

<!-- About Starts Here -->	


<!-- Latest Results Starts Here -->	
<div class="container-fluid position-relative" style="">
<img src="../IMAGES/Latest Results/bg.jpg" class="mt-5" alt="" width="100%" height="500" />
	  <div class="container card-img-overlay text-light latest_results">
      <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">LATEST RESULTS</h1>
	  <hr width="60px" color="red" class="mx-auto" style="border:1px solid red;" />
	  <h4 class="text-danger text-center" style="font-family:;">UEFA CHAMPIONS LEAGUE</h4>
	  
	  <div class="container">
      <p class="p-3">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, nemo tenetur magnam eveniet sed aut, iste facere quisquam, cumque, vitae quis deleniti animi. A ipsum iusto, temporibus, beatae porro nemo
    </p>
    <div class="text-center" style="">
    <button class="bg-danger p-lg-3 " style="color:white;border:none;">SCORE BOARD</button>
    </div>
	  </div>
	  </div>
</div>

<!-- Latest Results Ends Here -->

<!-- Match Schedule Starts Here -->
<div class="container-fluid mt-5" style="">
<div class="container" style="">
<div class="" style="">
      <h1 class="text-center" style="font-family: 'Oswald', sans-serif;">MATCH
	  <span class="" style="color:#b81e20;">SCHEDULE</span>
	  </h1>
	  <hr width="90px" color="red" class="mx-auto" style="border:2px solid red;"/>
	  <div class="container">
       <p class="p-lg-5">
	   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut! Est.
	   </p>
	   </div>
</div>
</div>
<!-- Match Schedule Ends Here -->
</div>

<!--Next Match Schedule Starts Here -->
<div class="container next_match" style="">
<div class="row bg-dark" style="" >

	<div class="col-lg-4" style="">
	<div class="next_match_first" style="background:#b81e20;">
	
	<h1 class="text-light" style="font-family:'Oswald', sans-serif">NEXT MATCH</h1>
	<p class="p-lg-3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	
	</div>
	</div>
	
	<div class="col-lg-6" style="background:#353a40;">
	<div class="p-lg-5" >
	<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse harum animi a ipsa distinctio veritatis suscipit amet.</p>

	<div class="row">
		<div class="col-lg-4"><img src="../IMAGES/logo01.png" alt="" class="" width="100" /></div>
		<div class="col-lg-4"><h2 class="text-light" style="margin:40px" >VS</h2></div>
		<div class="col-lg-4"><img src="../IMAGES/logo02.png" alt="" class="" /></div>
	</div>
		<p class="text-white">OCTOBER 31, 2015 | 18:25PM WEMSDDLEY STADIUM (LONDON)</p>
	</div>
	</div>
	
	<div class="col-lg-2">
	<div class="text-center next_match_third h-100" style="background:#1a1b1d;">
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
<div class="container bg-dark" style="box-sizing:border-box;">
<div class="row mt-5" style="height:400px;" >

	<div class="col-lg-10" style="">
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
	
	<div class="col-lg-2 " style=";">
	<div class="skew" style="">
	<h1 class="text-light p-lg-3" style="font-family:'Oswald', sans-serif">UPCOMING FEATURE</h1>
	<p class="p-lg-3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</div>
	</div>
	
</div>
</div>

<!--Feature Schedule Ends Here -->



<!--Pointed Table Starts Here -->
<div class="container bg-dark mt-5" style="box-sizing:border-box;">
<div class="row">
<div class="col-lg-2" style="background-color:#b81e20">

	<div class="w-100" >
	<h1 class="text-light mt-5" style="font-family:'Oswald', sans-serif">POINTED TABLE</h1>
	<p class="p-lg--3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
	<div class="col-lg-2"><img src="../IMAGES/logo01.png" alt="" width="80"/></div>
	<div class="col-lg-6 text-center m-auto"><h1 class="text-white">CRICKET CLUB</h1></div>
	<div class="col-lg-4 m-auto">
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
       <p class="p-lg-5">
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


	<div class="col-lg-4" style="background:#b81e20;">
	<div class="scrollHide" style="height:400px;overflow-y:scroll;">
	
	<div class="text-white">
	<div class="row video_side" style="padding:15px">
		<div class="col-lg-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-lg-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white">
	<div class="row video_side" style="padding:15px">
		<div class="col-lg-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-lg-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	<div class="text-white">
	<div class="row video_side" style="padding:15px">
		<div class="col-lg-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-lg-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white">
	<div class="row video_side" style="padding:15px">
		<div class="col-lg-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-lg-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white">
	<div class="row video_side" style="padding:15px">
		<div class="col-lg-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-lg-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white">
	<div class="row video_side" style="padding:15px">
		<div class="col-lg-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-lg-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	<div class="text-white">
	<div class="row video_side" style="padding:15px">
		<div class="col-lg-2 mt-3"><i class="fas fa-play fa-2x"></i></div>
		<div class="col-lg-10"><h5>India Vs New Zealand 5th T-20 Match Full Match Highlights</h5></div>
	</div>
	</div>
	
	</div>
	</div>

	<div class="col-lg-8" style="">
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
<div class="container-fluid latest_news" style="">
<div class="mt-5" style="background:#f5f5f5;padding:50px;">
      <h1 class="text-center" style="font-family: 'Oswald', sans-serif;">LATEST <span style="color:#b81e20;">NEWS</span> </h1>
	  <hr width="90px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-lg-3">
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

<div class="mt-5 ">
 
<div id="latest_Slide" class="carousel slide position-relative" data-ride="carousel" data-interval="1000">
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
       <p class="p-lg-5">
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
	<div class="col-lg-6 club_video">
	<iframe width="500" height="320" src="https://www.youtube.com/embed/AFEZzf9_EHk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="col-lg-6">
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
<div class="pb-3" style="background:#1d242c;">

<div class="text-white p-lg-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">OUR <span style="color:#b81e20;">HEROES</span> </h1>
	  <hr width="100px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-lg-3">
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

<div class="container-fluid mt-5">
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

</div>



</div>
</div>

<!--Hero's Ends Here -->

<!--Our Gallery Starts Here -->

<div class="container-fluid">
	<div class="container">
	
	
	<div class="p-lg-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">OUR <span style="color:#b81e20;">GALLERY</span> </h1>
	  <hr width="100px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-lg-3">
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
		<div class="col-lg-3" style="">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/1.jfif" alt="" width="300" height="300" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/2.jfif" alt="" width="300" height="150" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/3.jfif" alt="" width="300" height="500" /></div>
		</div>
		
		<div class="col-lg-3">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/4.jfif" alt="" width="300" height="300" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/5.jpg" alt="" width="300" height="150" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/6.jpg" alt="" width="300" height="400" /></div>
		</div>
		
		<div class="col-lg-3">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/7.jfif" alt="" width="300" height="200" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/8.jpg" alt="" width="300" height="300" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/9.jfif" alt="" width="300" height="200" /></div>
		</div>
		
		<div class="col-lg-3">
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/10.jfif" alt="" width="300" height="250" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/11.jfif" alt="" width="300" height="150" /></div>
		<div class="" style="border:5px solid white;" ><img class="img-fluid" src="../IMAGES/Gallery/12.jfif" alt="" width="300" height="200" /></div>
		</div>
		
	</div>	
	</div>
</div>

<div class="container text-center" style="margin-top:200px;">	
	<button class="btn btn-danger text-white w-25">VIEW MORE</button>
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
	
	 <div class="p-lg-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;"><span style="color:#b81e20;">AWARDS</span> </h1>
	  <hr width="60px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-lg-3">
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
			<div class="col-lg-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/1.png" alt="" />
			</div>
			<div class="col-lg-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/2.png" alt="" />
			</div>
			<div class="col-lg-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/3.png" alt="" />
			</div>
			<div class="col-lg-3 d-flex bg-dark w-auto" style="border:5px solid white;">
			<img class="img-fluid p-5" src="../IMAGES/Awards/4.png" alt="" />
			</div>
		</div>
		</div>
</div>
<!--Awards Ends Here -->

<!--Top Products & Merchandise Starts Here -->
<div class="container-fluid" style="background:#f5f5f5;">
	<div class="container mt-5">
	  <div class="p-lg-5">
      <h1 class="text-center mt-3" style="font-family: 'Oswald', sans-serif;">TOP PRODUCTS &
	  <span style="color:#b81e20;">MERCHANDISE</span> </h1>
	  <hr width="200px" color="red" class="mx-auto" style="border:1px solid red;"/>
	  <div class="container">
       <p class="p-lg-3">
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
    </div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
  	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
  </div>
  </div>
  <div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
    </div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
  	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
  </div>
  </div>
  <div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
    </div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
	</div>
	</div>
  	<div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
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
  	<div class="col-lg-6"><p>Sports Wear</p></div>
  	<div class="col-lg-6"><i class="fas fa-user-friends"></i><span>360</span></div>
  </div>
  </div>
  <div class="card-body bg-danger" style="" >
	<div class="row">
		<div class="col-lg-8"><a href="#" class="card-link text-white">ADD TO CART</a></div>
		<div class="col-lg-2"><i class="fas fa-shopping-cart"></i></div>
		<div class="col-lg-2"><a href="#" class="card-link text-white"><i class="fas fa-heart"></i></a></div>
	</div>
	</div>
</div>
</div>
</div>	
</div>
</div>

</div>	
</div>
	
<div class="container text-center mt-3 p-3">	
	<a href="shop.php" class="btn btn-danger text-white w-25">VIEW MORE</a>
</div>
</div>
<!--Top Products & Merchandise Ends Here -->
<script>

var preloader=document.getElementById('loading');
function loading()
{
	preloader.style.display="none";
}

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
<?php 
include('footer.php');
}?>