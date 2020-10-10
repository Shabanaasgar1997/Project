<?php 
session_start();
error_reporting('about.php');
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
<?php
include('nav.php');
?>
<!-- Main Navbar Ends Here -->

<!-- Title Starts Here -->
<div class="container-fluid" style="margin-top:100px;position: relative;">
<h1 class="text-center font-weight-bold" style="color:white;font-size:75px;">ABOUT<span style="color:#b81e20;">US</span></h1>
</div>
</div>
<!-- Title Ends Here -->



<!-- About Starts Here -->	
<div class="container-fluid" style="">
  <div class="container" style="margin-top: 250px;">
        <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">SOCCER <span style="color:#b81e20;"> COUNTRY CLUB</span></h1>
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
<!-- About Ends Here -->

<!-- Board Members Starts Here -->	
<div class="container-fluid" style="background: #1d2228;">
  <div class="container text-white" style="padding:100px;">
        <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">BOARD  <span style="color:#b81e20;">MEMBERS</span></h1>
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
 
<div class="container-fluid mb-3 text-white pb-5">
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
  
</div>
  <!--Hero's Ends Here -->
  
<!-- Board Members Ends Here -->	

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
    <div class="col-lg-6">
    <iframe width="500" height="320" src="https://www.youtube.com/embed/AFEZzf9_EHk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-lg-6">
     <h4 class="" style="font-family: 'Oswald', sans-serif;">FIFA 1991 ,<span style="color:#b81e20;">UEFA CHAMPIONS LEAGUE</span> </h4>
     
     <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam non voluptatibus error a esse maiores, ducimus sit unde alias aspernatur perspiciatis itaque corporis? Accusamus pariatur dolorum repellendus consectetur tempore harum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos, error impedit voluptatum quo quaerat placeat accusantium molestiae quod dolore, quae quos, blanditiis recusandae id iste? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium a modi atque reprehenderit eos, error impedit voluptatum quo quaerat placeat .</p>
   <!-- SocialMedia Starts Here -->
   <div class="float-right style="">
    <a href="https://www.facebook.com/" target="_blank">
    <i class="fab fa-facebook rounded-pill m-2 p-2 border facebook" aria-hidden="true" style="color:gray;"></i></a>
    <a href="https://twitter.com/" target="_blank" >
    <i class="fab fa-twitter rounded-pill m-2 p-2 border twitter" aria-hidden="true" style="color:gray;"></i></a>
    <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
    com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
    net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
    hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
    -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
    id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2
    Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3D
    https%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims
    %253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%252
    2%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%25
    2C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22
    %2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_t
    ype=token&idp_flow_type=login#/" target="_blank">
    <i class="fab fa-behance rounded-pill m-2 p-2 border behance" 
    aria-hidden="true" style="color:gray;"></i></a>
  </div>
  <!-- SocialMedia Ends Here -->
    <button class="btn btn-danger text-white">READ MORE</button>
    </div>
  </div>
  
  </div>
  </div>
<!--Club History Ends Here -->


<!-- Achievements Starts Here -->	
<div class="container-fluid" style="background:#f5f5f5 ;">
  <div class="mt-5 container">
        <h1 class="text-center" style="font-family: 'Oswald', sans-serif;padding-top: 100px;">OUR <span style="color:#b81e20;">ACHIEVEMENTS</span> </h1>
      <hr width="150px" color="red" class="mx-auto" style="border:1px solid red;"/>
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

<div class="container" style="margin-bottom: 50px;">
    <div class="container row"  style="background: white;">
    <div class="col-lg-4 d-flex p-3">
    <img src="../IMAGES/Awards/1.png" alt="" class="img-fluid p-5 w-100 h-75" style="background: #1d2228;">
    </div>
    <div class="col-lg-8">
    <div class="mt-5" style="">
    <h3 style="color:#b81e20;">WINNER 2007 , UEFA CHAMPIONS LEAGUE</h3>
    <p class="mt-5">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      Enim amet cumque quo at eius nulla, 
      voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
      consectetur adipisicing elit. nemo ab praesentium voluptatum, 
      exercitationem ad quo tempore quam temporibus voluptates odio, 
      qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </p>
    </div>
    <!-- SocialMedia Starts Here -->
    <div class="mr-5">
      <a href="https://www.facebook.com/" target="_blank">
      <i class="fab fa-facebook rounded-pill m-2 p-2 border facebook" aria-hidden="true" style="color:gray;"></i></a>
      <a href="https://twitter.com/" target="_blank" >
      <i class="fab fa-twitter rounded-pill m-2 p-2 border twitter" aria-hidden="true" style="color:gray;"></i></a>
      <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
      com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
      net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
      hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
      -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
      id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2
      Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3D
      https%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims
      %253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%252
      2%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%25
      2C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22
      %2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_t
      ype=token&idp_flow_type=login#/" target="_blank">
      <i class="fab fa-behance rounded-pill m-2 p-2 border behance" 
      aria-hidden="true" style="color:gray;"></i></a>
    </div>
    <!-- SocialMedia Ends Here -->

    </div>

    </div>


    <div class="container row mt-5"  style="background: white;">
      <div class="col-lg-4 d-flex p-3">
      <img src="../IMAGES/Awards/2.png" alt=""  class="img-fluid w-100 h-75 p-5" style="background: #1d2228;">
      </div>
      <div class="col-lg-8">
      <div class="mt-5" style="">
      <h3 style="color:#b81e20;">WINNER 2007 , UEFA CHAMPIONS LEAGUE</h3>
      <p class="mt-5">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Enim amet cumque quo at eius nulla, 
        voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. nemo ab praesentium voluptatum, 
        exercitationem ad quo tempore quam temporibus voluptates odio, 
        qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
      <!-- SocialMedia Starts Here -->
      <div class="mr-5">
        <a href="https://www.facebook.com/" target="_blank">
        <i class="fab fa-facebook rounded-pill m-2 p-2 border facebook" aria-hidden="true" style="color:gray;"></i></a>
        <a href="https://twitter.com/" target="_blank" >
        <i class="fab fa-twitter rounded-pill m-2 p-2 border twitter" aria-hidden="true" style="color:gray;"></i></a>
        <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
        com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
        net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
        hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
        -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
        id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2
        Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3D
        https%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims
        %253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%252
        2%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%25
        2C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22
        %2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_t
        ype=token&idp_flow_type=login#/" target="_blank">
        <i class="fab fa-behance rounded-pill m-2 p-2 border behance" 
        aria-hidden="true" style="color:gray;"></i></a>
      </div>
      <!-- SocialMedia Ends Here -->
  
      </div>
  
      </div>


      <div class="container row mt-5"  style="background: white;background-size: 50%;">
        <div class="col-lg-4 d-flex p-3">
        <img src="../IMAGES/Awards/3.png" alt="" class="img-fluid w-100 h-75 p-5" style="background: #1d2228;">
        </div>
        <div class="col-lg-8">
        <div class="mt-5" style="">
        <h3 style="color:#b81e20;">WINNER 2007 , UEFA CHAMPIONS LEAGUE</h3>
        <p class="mt-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Enim amet cumque quo at eius nulla, 
          voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. nemo ab praesentium voluptatum, 
          exercitationem ad quo tempore quam temporibus voluptates odio, 
          qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- SocialMedia Starts Here -->
        <div class="mr-5">
          <a href="https://www.facebook.com/" target="_blank">
          <i class="fab fa-facebook rounded-pill m-2 p-2 border facebook" aria-hidden="true" style="color:gray;"></i></a>
          <a href="https://twitter.com/" target="_blank" >
          <i class="fab fa-twitter rounded-pill m-2 p-2 border twitter" aria-hidden="true" style="color:gray;"></i></a>
          <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
          com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
          net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
          hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
          -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
          id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2
          Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3D
          https%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims
          %253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%252
          2%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%25
          2C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22
          %2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_t
          ype=token&idp_flow_type=login#/" target="_blank">
          <i class="fab fa-behance rounded-pill m-2 p-2 border behance" 
          aria-hidden="true" style="color:gray;"></i></a>
        </div>
        <!-- SocialMedia Ends Here -->
    
        </div>
    
        </div>
        <div class="container">
        <nav class="mt-5" aria-label="Page navigation example" style="margin-left:500px;">
          <ul class="pagination" style="">
            <li class="page-item"><a class="page-link bg-danger text-white" href="#">1</a></li>
            <li class="page-item"><a class="page-link bg-danger text-white" href="#">2</a></li>
            <li class="page-item"><a class="page-link bg-danger text-white" href="#">3</a></li>
          </ul>
        </nav>
      </div>
</div>
<!-- Achievements Ends Here -->	


<!-- Our Players Starts Here -->	
<div class="container-fluid" style="background: #1d2228;">
  <div class="container text-white" style="padding:100px;">
        <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">OUR <span style="color:#b81e20;">PLAYERS</span></h1>
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
       <div class="container-fluid">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container row mt-5"  style="background: white;background-size: 50%;">
          <div class="col-lg-4 d-flex p-3">
          <img src="../IMAGES/Players/2.jpg" alt="" width="400" class="img-fluid" style="background: #1d2228;">
          </div>
          <div class="col-lg-8">
          <div class="mt-5" style="">
          <h3 style="color:#b81e20;">WINNER 2007 , UEFA CHAMPIONS LEAGUE</h3>
          <p class="mt-5 text-dark">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Enim amet cumque quo at eius nulla, 
            voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. nemo ab praesentium voluptatum, 
            exercitationem ad quo tempore quam temporibus voluptates odio, 
            qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- SocialMedia Starts Here -->
          <div class="mr-5">
            <a href="https://www.facebook.com/" target="_blank">
            <i class="fab fa-facebook rounded-pill m-2 p-2 border facebook" aria-hidden="true" style="color:gray;"></i></a>
            <a href="https://twitter.com/" target="_blank" >
            <i class="fab fa-twitter rounded-pill m-2 p-2 border twitter" aria-hidden="true" style="color:gray;"></i></a>
            <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
            com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
            net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
            hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
            -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
            id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2
            Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3D
            https%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims
            %253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%252
            2%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%25
            2C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22
            %2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_t
            ype=token&idp_flow_type=login#/" target="_blank">
            <i class="fab fa-behance rounded-pill m-2 p-2 border behance" 
            aria-hidden="true" style="color:gray;"></i></a>
            <p class="text-danger float-right">Read More</p>
          </div>
          <!-- SocialMedia Ends Here -->
      
          </div>
      
          </div>
        </div>
        <div class="carousel-item">
          <div class="container row mt-5"  style="background: white;background-size: 50%;">
            <div class="col-lg-4 d-flex p-3">
            <img src="../IMAGES/Players/1.jpg" alt="" width="400" class="img-fluid" style="background: #1d2228;">
            </div>
            <div class="col-lg-8">
            <div class="mt-5" style="">
            <h3 style="color:#b81e20;">WINNER 2007 , UEFA CHAMPIONS LEAGUE</h3>
            <p class="mt-5 text-dark">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Enim amet cumque quo at eius nulla, 
              voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. nemo ab praesentium voluptatum, 
              exercitationem ad quo tempore quam temporibus voluptates odio, 
              qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- SocialMedia Starts Here -->
            <div class="mr-5">
              <a href="https://www.facebook.com/" target="_blank">
              <i class="fab fa-facebook rounded-pill m-2 p-2 border facebook" aria-hidden="true" style="color:gray;"></i></a>
              <a href="https://twitter.com/" target="_blank" >
              <i class="fab fa-twitter rounded-pill m-2 p-2 border twitter" aria-hidden="true" style="color:gray;"></i></a>
              <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
              com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
              net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
              hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
              -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
              id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2
              Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3D
              https%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims
              %253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%252
              2%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%25
              2C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22
              %2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_t
              ype=token&idp_flow_type=login#/" target="_blank">
              <i class="fab fa-behance rounded-pill m-2 p-2 border behance" 
              aria-hidden="true" style="color:gray;"></i></a>
              <p class="text-danger float-right">Read More</p>
            </div>
            <!-- SocialMedia Ends Here -->
        
            </div>
        
            </div>
        </div>
        <div class="carousel-item">
          <div class="container row mt-5"  style="background: white;background-size: 50%;">
            <div class="col-lg-4 d-flex p-3">
            <img src="../IMAGES/Players/3.jpg" alt="" width="400" class="img-fluid" style="background: #1d2228;">
            </div>
            <div class="col-lg-8">
            <div class="mt-5" style="">
            <h3 style="color:#b81e20;">WINNER 2007 , UEFA CHAMPIONS LEAGUE</h3>
            <p class="mt-5 text-dark">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Enim amet cumque quo at eius nulla, 
              voluptates asaliquid placeat!Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. nemo ab praesentium voluptatum, 
              exercitationem ad quo tempore quam temporibus voluptates odio, 
              qui laborum pariatur perferendis! Sapiente, itaque facilis deleniti unde?
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- SocialMedia Starts Here -->
            <div class="mr-5">
              <a href="https://www.facebook.com/" target="_blank">
              <i class="fab fa-facebook rounded-pill m-2 p-2 border facebook" aria-hidden="true" style="color:gray;"></i></a>
              <a href="https://twitter.com/" target="_blank" >
              <i class="fab fa-twitter rounded-pill m-2 p-2 border twitter" aria-hidden="true" style="color:gray;"></i></a>
              <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
              com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
              net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
              hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552
              -d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
              id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_client%2
              Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_uri%3D
              https%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims
              %253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%252
              2%252C%2522csrf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%25
              2C%2522version%2522%253A1%257D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22
              %2C%22timestamp%22%3A%221580713338917%22%2C%22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_t
              ype=token&idp_flow_type=login#/" target="_blank">
              <i class="fab fa-behance rounded-pill m-2 p-2 border behance" 
              aria-hidden="true" style="color:gray;"></i></a>
              <p class="text-danger float-right">Read More</p>
            </div>
            <!-- SocialMedia Ends Here -->
        
            </div>
        
            </div>
        </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon  bg-danger rounded-circle"  aria-hidden="true"></span>
          <span class="sr-only" >Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-danger rounded-circle" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


  </div>

  </div>


<!-- Our Players Ends Here -->	


<?php 

include('footer.php');
}
else
{
  header('Location:index.php?about=success');
}
?>