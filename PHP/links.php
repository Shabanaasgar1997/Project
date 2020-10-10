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
<script type="text/javascript" src="../JS/cart.js"></script>
<style>
#profile_fetch
{
  display:none;
}
.cricketgallery
{
	column-count: 4;
}
.cricketgallery img
{
	box-shadow:2px 2px 3px 1px rgba(0,0,0,0.8);
	margin: 5px;
	border-bottom: 5px inset #FFA20A;
	background: linear-gradient(to top right, #ccffff 0%, #ff99cc 100%);
}

</style>

</head>

<body onload="loading()">
<div id="loading">


</div>
<!-- Register Navbar Starts Here-->
<div class="container-fluid" style="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar navbar-brand text-light"  id="page_replace" href="Profile_Fetch.php" ><?php echo $fetch['fullname'];?>
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
<script>

var preloader=document.getElementById('loading');
function loading()
{
	preloader.style.display="none";
}
</script>