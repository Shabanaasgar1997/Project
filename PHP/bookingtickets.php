<?php
session_start();
error_reporting('bookingtickets.php');
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
<div class="container-fluid" style="">
  <div class="w-100" style="">
  <img class="img-fluid" src="../IMAGES/Stadium/aboutbg.jpg" alt="" width="97.8%"  style="box-sizing: border-box;position: absolute;height:500px;">
  </div>

<!-- Main Navbar Starts Here -->
<?php include('nav.php');?>
<!-- Main Navbar Ends Here -->

<!-- Title Starts Here -->

<div class="container-fluid" style="margin-top:100px;position: relative;">
<h1 class="text-center font-weight-bold" style="color:white;font-size:75px;">BOOK<span style="color:#b81e20;">TICKETS</span></h1>
</div>
</div>
<!-- Title Ends Here -->

<!-- Premium League Starts Here -->
<div class="container-fluid" style="background:#f5f5f5;">
  <div class="container p-5" style="margin-top: 250px;">
        <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">PREMIUM LEAGUE<span style="color:#b81e20;">TICKETS THE OFFICIAL WAY</span></h1>
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

        <div class="p-2 text-center" style="background:#454c54;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>1</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-success ">BOOK TICKETS</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>

        <div class="p-2 mt-2 text-center" style="background:#868f98;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>2</td>
              <td>FC POISON DUCKS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC BLACK MAFIA</td>
              <td><button class="btn btn-danger w-100">SOLD OUT</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>
        </div>


        <div class="p-2 mt-2 text-center" style="background:#454c54;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>3</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-success ">BOOK TICKETS</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>

        <div class="p-2 mt-2 text-center" style="background:#868f98;;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>4</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-success ">BOOK TICKETS</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>

        <div class="p-2 mt-2 text-center" style="background:#454c54;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>5</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-success ">BOOK TICKETS</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>


        <div class="p-2 mt-2 text-center" style="background:#868f98;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>6</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-danger w-100 ">SOLD OUT</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>


        <div class="p-2 mt-2 text-center" style="background:#454c54;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>7</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-danger w-100 ">SOLD OUT</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>


        <div class="p-2 mt-2 text-center" style="background:#868f98;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>8</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-success ">BOOK TICKETS</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>


        <div class="p-2 mt-2 text-center" style="background:#454c54;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>9</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-danger w-100 ">SOLD OUT</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>


        <div class="p-2 mt-2 text-center" style="background:#868f98;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>10</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-success ">BOOK TICKETS</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>


        <div class="p-2 mt-2 text-center" style="background:#454c54;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>11</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-success ">BOOK TICKETS</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>


        <div class="p-2 mt-2 text-center" style="background:#868f98;font-size: 20px;">
          <table class="table table-borderless text-white">
            <tr>
              <td>12</td>
              <td>FC RED XPRESS</td>
              <td class="font-weight-bold" style="color:#b81e20;">VS</td>
              <td>FC HOT HAWKS</td>
              <td><button class="btn btn-danger w-100 ">SOLD OUT</button></td>
            </tr>
          </table>
          <p class="text-white">AUGUST 24,2015 | 18.25PM | Antigua Recreation</p>

        </div>

        <div class="mt-5 p-2" style="background-color:  #962a2a;">
        <h3 class="text-white text-center">HOW BY A MATCH TICKET</h3>
      </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, illum ut qui tenetur earum placeat? 
          Molestiae libero debitis alias quo officiis amet quos mollitia vero modi, praesentium, iusto, harum eaque.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ratione ad cum nobis voluptatum veritatis 
          consequuntur distinctio quia velit reiciendis, quod rem earum alias, tempore placeat! Modi dolore necessitatibus quod.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ratione ad cum nobis voluptatum veritatis consequuntur 
          distinctio quia velit reiciendisd.</p>


          <!-- SocialMedia Starts Here -->
          <div class="mr-5">
            <a href="https://www.facebook.com/" target="_blank">
            <i class="fab fa-facebook rounded-pill m-2 p-2  border facebook" aria-hidden="true" style="color:#962a2a;;"></i></a>
            <a href="https://twitter.com/" target="_blank" >
            <i class="fab fa-twitter rounded-pill m-2 p-2  border twitter" aria-hidden="true" style="color:#962a2a;;"></i></a>
            <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
            com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
            net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
            hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
            -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client
            _id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client
            %2Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri
            %3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from
            _ims%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.ne
            t%2522%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2
            522%252C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b38
            8aa9%22%2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_U
            S&flow_type=token&idp_flow_type=login#/" target="_blank">
            <i class="fab fa-behance rounded-pill m-2 p-2 border" aria-hidden="true" style="color:#962a2a;"></i></a>
            </div>
          <!-- SocialMedia Ends Here -->
        
  
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
  header('Location:index.php?bookingtickets=success');
}
?>