<?php
session_start();
error_reporting('blog.php');
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
<h1 class="text-center font-weight-bold" style="color:white;font-size:75px;">OUR<span style="color:#b81e20;">BLOG</span></h1>
</div>
</div>
<!-- Title Ends Here -->


<!-- Blog Page Ends Here -->
<div class="container-fluid" style="background:#ececec;">
  <div class="container p-5" style="margin-top: 250px;">
        <h1 class="text-center mt-5" style="font-family: 'Oswald', sans-serif;">THIS IS OUR <span style="color:#b81e20;"> BLOG PAGE</span></h1>
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
  <div class="container">
    <div class="row">
      <div class="col-lg-8">

   <div class="w-100 h-50 bg-light">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../IMAGES/Blog/blog01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../IMAGES/Blog/blog01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../IMAGES/Blog/blog01.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="border: 2px solid red;border-radius:50%;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="border: 2px solid red;border-radius:50%;"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    
    <div class="">
      <i class="fas fa-image text-danger float-left fa-3x ml-5" ></i>
      <h3 class="">THE BEST <span style="color:#b81e20;"> MOMENTS &nbsp; </span>IN THE SEASONS</h3>
      <p class="">OCTOBER 27 ,<span style="color:#b81e20;">2015</span> </p>
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

      <!-- SocialMedia Starts Here -->
  <div class="w-100">
      <div class=" float-left">
    <a href="https://www.facebook.com/" target="_blank">
    <i class="fab fa-facebook rounded-pill m-2 p-2  border facebook" aria-hidden="true" style="color:gray" ></i></a>
    <a href="https://twitter.com/" target="_blank" >
    <i class="fab fa-twitter rounded-pill m-2 p-2  border twitter" aria-hidden="true" style="color:gray"></i></a>
    <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
    com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
    net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
    hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552-
    d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
    id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_
    client%2Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_
    uri%3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_i
    ms%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522cs
    rf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%25
    7D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22%2C%22timestamp%22%3A%221580713338917%22%2C
    %22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_type=token&idp_flow_type=login#/" target="_blank">
    <i class="fab fa-behance  rounded-pill m-2 p-2 border behance" aria-hidden="true" style="color:gray"></i></a>
    </div>
  <!-- SocialMedia Ends Here -->
  
  <button class="btn btn-danger mr-5 text-white w-25 float-right">VIEW MORE</button>

</div>
  </div>


  <div class="w-100 h-50  mt-3 bg-light">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../IMAGES/Blog/blog01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../IMAGES/Blog/blog01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../IMAGES/Blog/blog01.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="border: 2px solid red;border-radius:50%;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="border: 2px solid red;border-radius:50%;"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    
<div class="">
      <i class="fas fa-image text-danger float-left fa-3x ml-5" ></i>
      <h3 class="">THE BEST <span style="color:#b81e20;"> MOMENTS &nbsp; </span>IN THE SEASONS</h3>
      <p class="">OCTOBER 27 ,<span style="color:#b81e20;">2015</span> </p>
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

      <!-- SocialMedia Starts Here -->
  <div class="w-100">
  <div class="mr-5 float-left">
    <a href="https://www.facebook.com/" target="_blank">
    <i class="fab fa-facebook rounded-pill m-2 p-2  border facebook" aria-hidden="true" style="color:gray" ></i></a>
    <a href="https://twitter.com/" target="_blank" >
    <i class="fab fa-twitter rounded-pill m-2 p-2  border twitter" aria-hidden="true" style="color:gray"></i></a>
    <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
    com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
    net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
    hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552-
    d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
    id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_
    client%2Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_
    uri%3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_i
    ms%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522cs
    rf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%25
    7D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22%2C%22timestamp%22%3A%221580713338917%22%2C
    %22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_type=token&idp_flow_type=login#/" target="_blank">
    <i class="fab fa-behance  rounded-pill m-2 p-2 border behance" aria-hidden="true" style="color:gray"></i></a>
    </div>
  <!-- SocialMedia Ends Here -->
      <button class="btn mr-5 btn-danger text-white w-25 float-right">VIEW MORE</button>
    </div>

  </div>



  </div>
  
    <div class="col-lg-4">
      <h3>SEARCH</h3>
      <form class="form-inline my-2 my-lg-0 w-75" style="border:1px solid black;">
        <input class="form-control bg-transparent" type="search" placeholder="Enter Your Keyword" aria-label="Search" style="border:0px;outline: 0px;" />
        <i class="fas fa-search text-danger mr-0"></i>
      </form>
      <h3 style="color:#b81e20;">BLOG CATAGORIES</h3>
      <div class="accordion w-75" id="accordionExample">
        <div class="card  bg-transparent" style="border:none;">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0 " style=";">
              <button class="btn btn-link" style="color: gray;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-plus"></i> General Questions
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="text-danger">
                <ul class="text-center">
                  <li>Sub Category 01</li>
                  <li>Sub Category 02</li>
                  <li>Sub Category 03</li>
                  <li>Sub Category 04</li>
                  <li>Sub Category 05</li>
                  <li>Sub Category 06</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-transparent" style="border:none;">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link" style="color: gray;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fas fa-plus"></i> Licensing And Payement
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <div class="text-danger">
                <ul class="text-center">
                  <li>Sub Category 01</li>
                  <li>Sub Category 02</li>
                  <li>Sub Category 03</li>
                  <li>Sub Category 04</li>
                  <li>Sub Category 05</li>
                  <li>Sub Category 06</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
        <div class="card bg-transparent" style="border:none;">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" style="color: gray;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fas fa-plus"></i> Best Matches
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="text-danger">
                <ul class="text-center">
                  <li>Sub Category 01</li>
                  <li>Sub Category 02</li>
                  <li>Sub Category 03</li>
                  <li>Sub Category 04</li>
                  <li>Sub Category 05</li>
                  <li>Sub Category 06</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
        <div class="card bg-transparent" style="border:none;">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" style="color: gray;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                <i class="fas fa-plus"></i>Technical Support
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="text-danger">
                <ul class="text-center">
                  <li>Sub Category 01</li>
                  <li>Sub Category 02</li>
                  <li>Sub Category 03</li>
                  <li>Sub Category 04</li>
                  <li>Sub Category 05</li>
                  <li>Sub Category 06</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
        <div class="card bg-transparent" style="border:none;">
          <div class="card-header" id="headingThree">
            <h2 class="">
              <button class="btn btn-link collapsed" style="color: gray;" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                <i class="fas fa-plus"></i>Cupons And Promotion
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">

              <div class="text-danger">
                <ul class="text-center">
                  <li>Sub Category 01</li>
                  <li>Sub Category 02</li>
                  <li>Sub Category 03</li>
                  <li>Sub Category 04</li>
                  <li>Sub Category 05</li>
                  <li>Sub Category 06</li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>

     
        <span class="h3">FOLLOW US</span>
      
      <!-- SocialMedia Starts Here -->
  <div class="mr-5">
    <a href="https://www.facebook.com/" target="_blank">
    <i class="fab fa-facebook rounded-pill m-2 p-2  border facebook" aria-hidden="true" style="color:gray" ></i></a>
    <a href="https://twitter.com/" target="_blank" >
    <i class="fab fa-twitter rounded-pill m-2 p-2  border twitter" aria-hidden="true" style="color:gray"></i></a>
    <a href="https://auth.services.adobe.com/en_US/index.html?callback=https%3A%2F%2Fims-na1.adobelogin.
    com%2Fims%2Fadobeid%2FBehanceWebSusi1%2FAdobeID%2Ftoken%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.behance.
    net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_ims%253Dtrue%2526old_
    hash%253D%2526api%253Dauthorize%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522csrf%2522%253A%252286a09552-
    d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%257D&client_
    id=BehanceWebSusi1&scope=AdobeID%2Copenid%2Cgnav%2Csao.cce_private%2Ccreative_cloud%2Ccreative_sdk%2Cbe.pro2.external_
    client%2Cadditional_info.roles&denied_callback=https%3A%2F%2Fims-na1.adobelogin.com%2Fims%2Fdenied%2FBehanceWebSusi1%3Fredirect_
    uri%3Dhttps%253A%252F%252Fwww.behance.net%252Fgallery%252F55462459%252FWires-wireframe-kits-for-Adobe-XD%253Fisa0%253D1%2523from_i
    ms%253Dtrue%2526old_hash%253D%2526api%253Dauthorize%26response_type%3Dtoken%26state%3D%257B%2522ac%2522%253A%2522behance.net%2522%252C%2522cs
    rf%2522%253A%252286a09552-d5b7-414d-837c-1c4f6b388aa9%2522%252C%2522timestamp%2522%253A%25221580713338917%2522%252C%2522version%2522%253A1%25
    7D&state=%7B%22ac%22%3A%22behance.net%22%2C%22csrf%22%3A%2286a09552-d5b7-414d-837c-1c4f6b388aa9%22%2C%22timestamp%22%3A%221580713338917%22%2C
    %22version%22%3A1%7D&relay=acb5d734-cbbf-4905-a91a-e8ae1161fa81&locale=en_US&flow_type=token&idp_flow_type=login#/" target="_blank">
    <i class="fab fa-behance  rounded-pill m-2 p-2 border behance" aria-hidden="true" style="color:gray"></i></a>
    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-youtube rounded-pill m-2 p-2  border" style="color:gray"></i></a>
    </div>
  <!-- SocialMedia Ends Here -->

    <h3 style="font-family: 'Oswald', sans-serif;">POPULAR POSTS</h3>
    <p class="text-danger">@Lorem ipsum dolor sit amet</p>

    <div class="row p-3">
			<div class="col-6"><img src="../IMAGES/Comments/1.jpg" class="rounded-circle" alt="" /></div>
			<div class="col-6"><p>Jhone Doe 18th April,2019.Nice & Cool</p></div>
    </div>
    
    <div class="row p-3">
			<div class="col-6"><img src="../IMAGES/Comments/2.jpg" class="rounded-circle" alt="" /></div>
			<div class="col-6"><p>Jhone Doe 18th April,2019.Nice & Cool</p></div>
    </div>
    
    
      <div class="row p-3">
        <div class="col-6"><img src="../IMAGES/Comments/3.jpg" class="rounded-circle" alt="" /></div>
        <div class="col-6"><p>Jhone Doe 18th April,2019.Nice & Cool</p></div>
      </div>
     
      <div class="">
      <h3>TWITTER</h3>
      <p class="text-danger">@Showcase & Discover</p>
      <p class="p-2">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iste amet omnis molestiae "</p>
    </div>

    <div class="" style="padding-bottom: 50px;">
      <h3>INSTAGRAM</h3>
      <p class="text-danger">@experimental lettering project</p>

      <div class="row">
        <div class="col-4"><img src="../IMAGES/Players/1.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
        <div class="col-4"><img src="../IMAGES/Players/2.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
        <div class="col-4"><img src="../IMAGES/Players/3.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
      </div>

      <div class="row">
        <div class="col-4"><img src="../IMAGES/Players/4.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
        <div class="col-4"><img src="../IMAGES/Players/2.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
        <div class="col-4"><img src="../IMAGES/Players/1.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
      </div>


      <div class="row">
        <div class="col-4"><img src="../IMAGES/Players/1.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
        <div class="col-4"><img src="../IMAGES/Players/2.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
        <div class="col-4"><img src="../IMAGES/Players/3.jpg" width="150" height="100" alt="" style="border: 3px solid white;"></div>
      </div>

    </div>
  </div>

    </div>

  </div>

</div>
<!-- Blog Page Ends Here -->
<?php 

include('footer.php');
}
else
{

  header('Location:index.php?blog=success');
}
?>