<?php
session_start();
error_reporting('shop.php');
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

<div class="container-fluid">
  <div class="" style="">
  <img class="img-fluid" src="../IMAGES/Stadium/aboutbg.jpg" alt="" width="97.8%" style="box-sizing: border-box;position: absolute;height:500px;">
  </div>

<!-- Main Navbar Starts Here -->
<?php include('nav.php');?>
<!-- Main Navbar Ends Here -->

<!-- Title Starts Here -->
<div class="container-fluid" style="margin-top:100px;position: relative;">
<h1 class="text-center font-weight-bold" style="color:white;font-size:75px;">SH<span style="color:#b81e20;">OP</span></h1>
</div>
</div>
<!-- Title Ends Here -->



<!-- About Starts Here -->	
<div class="container-fluid" style="">
  <div class="container" style="margin-top: 250px;">
        <h1 class="text-center mt-5" style="">BEST SOCCER <span style="color:#b81e20;"> ACCESSORIES SHOP</span></h1>
      <hr width="120px" color="red" class="mx-auto" style="border:1px solid red;"/>
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
<!-- About Ends Here -->


<!-- Premium League Starts Here -->
<div class="container-fluid" style="background:#f5f5f5;">
  <div class="container p-3">
    <div class="row">
      <div class="col-4">
        <div class="">
        <div class="bg-dark">
          <h4 class="text-center text-white p-3">WHY BOOK WITH US?</h4>
        </div>
        <div class="row p-2">
          <div class="col-2"><i class="fas fa-check text-danger fa-1x"></i></div>
          <div class="col-10">150% MONEY BACK GURANTEE</div>
        </div>

        <div class="row p-2">
          <div class="col-2"><i class="fas fa-check text-danger fa-1x"></i></div>
          <div class="col-10">REAL TIME INVENTORY</div>
        </div>

        <div class="row p-2">
          <div class="col-2"><i class="fas fa-check text-danger fa-1x"></i></div>
          <div class="col-10">FRIENDLY CUSTOMER SERVICE</div>
        </div>

        <div class="row p-2">
          <div class="col-2"><i class="fas fa-check text-danger fa-1x"></i></div>
          <div class="col-10">SECURE PAYMENT</div>
        </div>

        <div class="row p-2">
          <div class="col-2"><i class="fas fa-check text-danger fa-1x"></i></div>
          <div class="col-10">LAST MINUTE BOOKINGS</div>
        </div>

        <div class="row p-2">
          <div class="col-2"><i class="fas fa-check text-danger fa-1x"></i></div>
          <div class="col-10">7 YEARS ONLINE SWERING FANS</div>
        </div>
        <div class="text-center m-5">
          <button class="btn btn-dark text-white">LEARN MORE</button>
        </div>
      </div>

      <div class="">
        <div class="bg-dark">
          <h4 class="text-center text-white p-3">ENGLISH MEMEBERSHIP</h4>
        </div>
          <div class="text-center">
          <div class="col-12" style="border-bottom: 1px solid black;"> <p>LIVERPOOL TICKET</p> </div>
      
          <div class="col-12" style="border-bottom: 1px solid black;"><p>ARSENASL TICKET</p></div>
       
          <div class="col-12" style="border-bottom: 1px solid black;"><p>TICKET 03</p></div>
     
          <div class="col-12" style="border-bottom: 1px solid black;"><p>TICKET 04</p></div>
      
          <div class="col-12" style="border-bottom: 1px solid black;"><p>BUSINESS TICKET</p></div>

          <div class="col-12" style="border-bottom: 1px solid black;"><p>GROUND TICKET</p></div>
        </div>
        <div class="text-center">
          <button class="btn btn-dark m-5 text-white">LEARN MORE</button>
        </div>
      </div>

      <div class="">
        <div class="bg-dark">
          <h4 class="text-center text-white p-3">SPANISH LA LIGA</h4>
        </div>
          <div class="text-center">
          <div class="col-12" style="border-bottom: 1px solid black;"> <p>LIVERPOOL TICKET</p> </div>
      
          <div class="col-12" style="border-bottom: 1px solid black;"><p>ARSENASL TICKET</p></div>
       
        </div>
        <div class="text-center">
          <button class="btn btn-dark m-5 text-white">LEARN MORE</button>
        </div>
      </div>

      <div class="">
        <div class="bg-dark">
          <h4 class="text-center text-white p-3">CHAMPIONS LEAUGE</h4>
        </div>
          <div class="text-center">
          <div class="col-12" style="border-bottom: 1px solid black;"> <p>LIVERPOOL TICKET</p> </div>
      
          <div class="col-12" style="border-bottom: 1px solid black;"><p>ARSENASL TICKET</p></div>
       
        </div>
        <div class="text-center">
          <button class="btn btn-dark m-5 text-white">LEARN MORE</button>
        </div>
      </div>

      <div class="">
        <div class="bg-dark">
          <h4 class="text-center text-white p-3">NATINAL FOOTBALL TEAMS</h4>
        </div>
          <div class="text-center">
          <div class="col-12" style="border-bottom: 1px solid black;"> <p>LIVERPOOL TICKET</p> </div>
      
          <div class="col-12" style="border-bottom: 1px solid black;"><p>ARSENASL TICKET</p></div>
          <div class="col-12" style="border-bottom: 1px solid black;"><p>TICKET 03</p></div>
     
          <div class="col-12" style="border-bottom: 1px solid black;"><p>TICKET 04</p></div>
       
        </div>
        <div class="text-center">
          <button class="btn btn-dark m-5 text-white">LEARN MORE</button>
        </div>
      </div>

      </div>
      <div class="col-8">
        <div class="" style="background-color: #962a2a;">
          <h4 class="p-3 text-white">MOST POPULAT MATCH TICKET</h4>
        </div>

        <div class="" style="">
          <div class="container row mt-2 w-100"  style="background: white;background-size: 50%;">
            <div class="col-4 d-flex p-3">
            <img src="../IMAGES/Shopping Cart/1.jpg" alt="" class="img-fluid w-100" style="background: #1d2228;">
            </div>
            <div class="col-8">
            <div class="mt-5" style="">
            <h3 style="color:#b81e20;">Men's Running Clothes</h3>
              <div class="d-inline ml-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

            <p class="mt-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Enim amet cumque quo at eius nulla, 
              voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. nemo ab praesentium voluptatum, 
   
              </p>
            </div>
            <div class="">
              <button class="btn btn-danger text-white">ADD TO CART</button>
              <i class="fas fa-heart float-right text-danger">ADD TO WISHLIST</i>
            </div>
        
            </div>
        
            </div>

        </div>

        <div class="p-2 mt-2" style="">
          <div class="container row mt-2 w-100"  style="background: white;background-size: 50%;">
            <div class="col-4 d-flex p-3">
            <img src="../IMAGES/Shopping Cart/2.jpg" alt="" class="img-fluid w-100" style="background: #1d2228;">
            </div>
            <div class="col-8">
              <div class="mt-5" style="">
                <h3 style="color:#b81e20;">Men's Running Clothes</h3>
                <div class="d-inline ml-2">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
  
              <p class="mt-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Enim amet cumque quo at eius nulla, 
                voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. nemo ab praesentium voluptatum, 
     
                </p>
                </div>
                <div class="">
                  <button class="btn btn-danger text-white">ADD TO CART</button>
                  <i class="fas fa-heart float-right text-danger">ADD TO WISHLIST</i>
                </div>
        
            </div>
        
            </div>
        </div>


        <div class="p-2 mt-2" style="">
          <div class="container row mt-2 w-100"  style="background: white;background-size: 50%;">
            <div class="col-4 d-flex p-3">
            <img src="../IMAGES/Shopping Cart/3.jpg" alt="" class="img-fluid w-100" style="background: #1d2228;">
            </div>
            <div class="col-8">
            <div class="mt-5" style="">
              <h3 style="color:#b81e20;">Men's Running Clothes</h3>
              <div class="d-inline ml-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

            <p class="mt-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Enim amet cumque quo at eius nulla, 
              voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. nemo ab praesentium voluptatum, 
   
              </p>
            </div>
            <div class="">
              <button class="btn btn-danger text-white">ADD TO CART</button>
              <i class="fas fa-heart float-right text-danger">ADD TO WISHLIST</i>
            </div>
        
            </div>
        
            </div>

        </div>

        <div class="p-2 mt-2" style="">
          <div class="container row mt-2 w-100"  style="background: white;background-size: 50%;">
            <div class="col-4 d-flex p-3">
            <img src="../IMAGES/Shopping Cart/4.jpg" alt="" class="img-fluid w-100" style="background: #1d2228;">
            </div>
            <div class="col-8">
            <div class="mt-5" style="">
              <h3 style="color:#b81e20;">Men's Running Clothes</h3>
              <div class="d-inline ml-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

            <p class="mt-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Enim amet cumque quo at eius nulla, 
              voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. nemo ab praesentium voluptatum, 
   
              </p>
            </div>
            <div class="">
              <button class="btn btn-danger text-white">ADD TO CART</button>
              <i class="fas fa-heart float-right text-danger">ADD TO WISHLIST</i>
            </div>
        
            </div>
        
            </div>

        </div>

        <div class="p-2 mt-2" style="">
          <div class="container row mt-2 w-100"  style="background: white;background-size: 50%;">
            <div class="col-4 d-flex p-3">
            <img src="../IMAGES/Shopping Cart/5.jpg" alt="" class="img-fluid w-100" style="background: #1d2228;">
            </div>
            <div class="col-8">
            <div class="mt-5" style="">
              <h3 style="color:#b81e20;">Men's Running Clothes</h3>
              <div class="d-inline ml-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

            <p class="mt-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Enim amet cumque quo at eius nulla, 
              voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. nemo ab praesentium voluptatum, 
   
              </p>
            </div>
            <div class="">
              <button class="btn btn-danger text-white">ADD TO CART</button>
              <i class="fas fa-heart float-right text-danger">ADD TO WISHLIST</i>
            </div>
        
            </div>
        
            </div>

        </div>
      </div>
    </div>
  </div>
<!-- Premium League  Ends Here -->
</div>

<?php 

include('footer.php');
}
else
{
  header('Location:index.php?shop=success');
}
?>