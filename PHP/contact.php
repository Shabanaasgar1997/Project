<?php
session_start();
error_reporting('contact.php');
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];
$conn=mysqli_connect("localhost","root","","student");
$select="select *from sports where id='$id' or email_id='$email'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);
include('links.php');

if( isset($_POST['send']) )
{
  $connection_enquiry=mysqli_connect("localhost","root","","student");
  $name=$_POST['name'];
  $phonenumber=$_POST['phonenumber'];
  $subject=$_POST['subject'];
  $email=$_POST['email'];
  $country=$_POST['country'];
  $address=$_POST['address'];
  $message=$_POST['message'];

  $insert_enquiry="insert into enquiry(id,name,phone,subject,email,country,address,message)values('','$name','$phonenumber','$subject','$email','$country','$address','$message')";
  $result=mysqli_query($connection_enquiry,$insert_enquiry);
  if($result)
  {
    echo "<script> alert('Will Get Back To You as early as possible.')</script>";
    header('Location:contact.php');
  }
  else
  {
    echo "<script>alert('error')</script>". mysqli_error('contact.php');
  }
}
?>

<div class="container-fluid" style="">
  <div class="w-100" style="">
  <img class="img-fluid" src="../IMAGES/Stadium/aboutbg.jpg" alt="" width="97.8%"  style="box-sizing: border-box;position: absolute;height:500px;">
  </div>

<!-- Main Navbar Starts Here -->
<?php include('nav.php');?>
<!-- Main Navbar Ends Here -->

<!-- Title Starts Here -->

<div class="container-fluid" style="margin-top:100px;position: relative;">
<h1 class="text-center font-weight-bold" style="color:white;font-size:75px;">CONTACT<span style="color:#b81e20;">US</span></h1>
</div>
</div>
<!-- Title Ends Here -->



<!-- About Starts Here -->	
<div class="container-fluid">
  <div class="container" style="margin-top: 250px;">
        <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;"> GET IN <span style="color:#b81e20;"> TOUCH</span></h1>
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

  <div class="container">
    <div class="row text-center">
      <div class="col-4" style="color:#b81e20;">
        <i class="fas fa-phone-alt fa-2x p-3" style="border:2px solid #b81e20;border-radius: 50%; "></i>
        <p>+91-9874563210</p>
      </div>
      <div class="col-4" style="color:#b81e20;">
        <i class="far fa-envelope fa-2x p-3" style="border:2px solid #b81e20;border-radius: 50%; "></i>
        <p>sports@info.mail</p>
      </div>
      <div class="col-4" style="color:#b81e20;">
        <i class="fas fa-map-marker-alt fa-2x p-3" style="border:2px solid #b81e20;border-radius: 50%; "></i>
        <p>321/1 bakersssstreet,Newwork</p>
      </div>
    </div>


  </div>
  </div>
<!-- About Ends Here -->

<!--Contact Starts Here -->
<div class="container-fluid" style="margin-bottom:50px">
<div class="mt-5">

<img src="../IMAGES/Location/1.png" alt="" width="100%" style="position: absolute;height:900px" />

<div class="container text-white" style="background: rgba(0, 0, 0, 0.9);position: relative;padding:50px">
<h1 class="text-center" style="font-family: 'Oswald', sans-serif;"> GET IN <span style="color:#b81e20;"> TOUCH</span></h1>
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
<div class="container" style="height: 500px;">
 <form class="" style="margin: auto;" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
    
      <input type="text" class="form-control bg-transparent text-white" name="name" placeholder="NAME"  id="inputEmail4" style="padding:25px;">
    </div>
    <div class="form-group col-md-6">
    
      <input type="text" class="form-control bg-transparent text-white" name="phonenumber" placeholder="PHONE" id="inputPassword4" style="padding:25px;">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
 
    <input type="text" class="form-control bg-transparent text-white" name="subject"  placeholder="SUBJECT" style="padding:25px;">
  </div>
  <div class="form-group col-md-6">
  
    <input type="text" class="form-control bg-transparent text-white" name="email"  placeholder="E-MAIL" style="padding:25px;">
  </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
    
      <input type="text" class="form-control bg-transparent text-white" name="country" placeholder="COUNTRY" style="padding:25px;">
    </div>
    <div class="form-group col-md-6">
    
      <input type="text" class="form-control bg-transparent text-white" name="address"  placeholder="ADDRESS" style="padding:25px;">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <textarea name="message"  class="form-control bg-transparent text-white" name="message" placeholder="MESSAGE" cols="30" rows="10"></textarea>
    </div>
  </div>
   <div class="text-center">
  <button type="submit" name="send" class="btn btn-danger w-25 p-3">SEND US</button>
</div>
</form>
</div>
</div>

</div>
</div>
<!--Contact Ends Here -->


<?php 

include('footer.php');
}
else
{
  header('Location:index.php?contact=success');
}
?>