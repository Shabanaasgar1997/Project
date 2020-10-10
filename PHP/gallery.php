<?php
session_start();
error_reporting('gallery.php');
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

<div class="container-fluid" style="margin-left:;">
  <div class="w-100" style="">
  <img class="img-fluid" src="../IMAGES/Stadium/aboutbg.jpg" alt="" width="97.8%"  style="box-sizing: border-box;position: absolute;height:500px;">
  </div>

<!-- Main Navbar Starts Here -->
<?php include('nav.php');?>
<!-- Main Navbar Ends Here -->

<!-- Title Starts Here -->

<div class="container-fluid" style="margin-top:100px;position: relative;">
<h1 class="text-center font-weight-bold" style="color:white;font-size:75px;"><span style="color:#b81e20;">GALLERY</span></h1>
</div>
</div>
<!-- Title Ends Here -->


<!-- Gallery Starts Here -->

<div class="container-fluid">
<div class="container" style="margin-top: 300px;">
    

<div class=" container example" style="" >
<ul id="myTab" class="nav nav-tabs" style="margin-left:350px;border-bottom: none;">
<li class="nav-item">
<a href="#allitems" class="nav-link btn btn-danger active" data-toggle="tab">ALL ITEMS</a>
</li>
<li class="nav-item">
<a href="#players" class="nav-link btn btn-danger" data-toggle="tab">PLAYERS</a>
</li>
<li class="nav-item">
<a href="#stadiums" class="nav-link btn btn-danger" data-toggle="tab">STADIUMS</a>
</li>
<li class="nav-item">
<a href="#grounds" class="nav-link btn btn-danger" data-toggle="tab">GROUNDS</a>
</li>
</ul>
<div class="tab-content" style="margin-top: 50px;">
<div class="tab-pane fade show active" id="allitems">

<div class="container-fluid">

    <div class="gallery" style="">
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/1.jfif" alt=""  /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/2.jfif" alt=""  /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/3.jfif" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/4.jfif" alt=""/></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/5.jpg" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/6.jpg" alt=""/></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/7.jfif" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/8.jpg" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/9.jfif" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/10.jfif" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/11.jfif" alt="" /></div>
		<div class="" ><img class="img-fluid" src="../IMAGES/Gallery/12.jfif" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/13.jpg" alt="" /></div>
        <div class="" ><img class="img-fluid" src="../IMAGES/Gallery/14.jpg" alt="" /></div>
	</div>
	
</div>

</div>
<div class="tab-pane fade" id="players">
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
<div class="tab-pane fade" id="stadiums">
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
<div class="tab-pane fade" id="grounds">
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
</div>
</div>

</div>
</div>

<div class="container">	
    <div class="container" style="margin-top:100px;margin-bottom:50px;text-align:center;">
        <button class="btn btn-danger text-white w-25">VIEW MORE</button>
    </div>
</div>
<!-- Gallery Ends Here -->
<?php 

include('footer.php');
}
else
{
  header('Location:index.php?gallery=success');
}
?>