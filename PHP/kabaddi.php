<?php
session_start();
error_reporting('kabaddi.php');
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
<?php include('nav.php'); ?>
<!-- Main Navbar Ends Here -->

<!-- Title Starts Here -->
<div class="container-fluid" style="margin-top:100px;position: relative;">
<h1 class="text-center font-weight-bold" style="color:white;font-size:75px;">KABA<span style="color:#b81e20;">DDI</span></h1>
</div>
</div>
<!-- Title Ends Here -->

<div class="container-fluid" style="margin-top: 280px;">
  <div class="container">
      <h5 class="text-white w-25 text-center bg-danger">Latest News</h5>
    <div class="row">
      <div class="col-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../IMAGES/Kabaddi/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Kabaddi/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Kabaddi/3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          </div>

      </div>
      <div class="col-6">
        <div class="row">
          <div class="col-6">
            <img src="../IMAGES/Kabaddi/1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-6">
          <img src="../IMAGES/Kabaddi/2.png" class="img-fluid" alt="">            
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <img src="../IMAGES/Kabaddi/3.jpg" class="img-fluid" alt="" style="">
          </div>
          <div class="col-6">
            <img src="../IMAGES/Kabaddi/4.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!--Container Fluid Of Latest News Ends Here-->

<div class="container-fluid mt-5">
  <div class="container">
    <h5 class="text-white w-25 text-center bg-danger">Pro Kabaddi</h5>
    <div class="row">
      <div class="col-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../IMAGES/Kabaddi/7.jpg" class="img-fluid w-100" style="height: 400px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../IMAGES/Kabaddi/3.jpg" class="img-fluid w-100" style="height: 400px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../IMAGES/Kabaddi/9.jpg" class="img-fluid w-100" style="height: 400px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../IMAGES/Kabaddi/10.jpg" class="img-fluid w-100" style="height: 400px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../IMAGES/Kabaddi/11.jpg" class="img-fluid w-100" style="height: 400px;" alt="...">
                </div>
              </div>
              </div>
            </div>
          <div class="col-4">
              <div class="">
                <div class="row m-1">
                  <div class="col-6"><img src="../IMAGES/Kabaddi/4.jpg" class="img-fluid" alt=""></div>
                  <div class="col-6"><h6>Dates announced for the 67th Senior National Kabaddi Championships</h6></div>
                </div>
              </div>

              <div class="">
                <div class="row m-1">
                  <div class="col-6"><img src="../IMAGES/Kabaddi/5.jpg" class="img-fluid" alt=""></div>
                  <div class="col-6"><h6>Dates announced for the 67th Senior National Kabaddi Championships</h6></div>
                </div>
              </div>

              <div class="">
                <div class="row m-1">
                  <div class="col-6"><img src="../IMAGES/Kabaddi/6.jpg" class="img-fluid" alt=""></div>
                  <div class="col-6"><h6>Dates announced for the 67th Senior National Kabaddi Championships</h6></div>
                </div>
              </div>
              <div class="">
                <div class="row m-1">
                  <div class="col-6"><img src="../IMAGES/Kabaddi/7.jpg" class="img-fluid" alt=""></div>
                  <div class="col-6"><h6>Dates announced for the 67th Senior National Kabaddi Championships</h6></div>
                </div>
              </div>

          </div>
        </div>

      </div>
    </div>

<!--Results Starts Here-->
<div class="container-fluid mt-5">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="">
          <h2 class="float-left text-danger">RESULTS</h2>
          <p class="float-right text-danger" >VIEW FULL SCHEDULE<i class="fas fa-chevron-right"></i></p>
        </div>
        <div class="mt-5">
          <table class="table" style="border-bottom: 2px outset red;">
            <tr class="bg-dark text-white">
              <th>Semi-Final 1</th>
              <th>COMPLETED</th>
              <th></th>
              <th></th>
              <th>October 16</th>
            </tr>
            <tr class="bg-light text-dark">
              <td class="font-weight-bold">Dabang Delhi K.C. <img src="../IMAGES/Kabaddi/dhabangdelhi.png" class="img-fluid" width="70" alt=""></td>
              <td>44</td>
             <td></td>
              <td>38</td>
              <td class="font-weight-bold"><img src="../IMAGES/Kabaddi/bengalurubulls.png" class="img-fluid" width="70" alt="">Bengaluru Bulls</td>
            </tr>
          </table>
          <span class="bg-danger text-white p-1" style="margin-left: 280px;">VIEW MATCH DETAILS</span>
        </div>
        <div class="mt-3">
          <table class="table" style="border-bottom: 2px outset red;">
            <tr class="bg-dark text-white">
              <th>Semi-Final 2</th>
              <th>COMPLETED</th>
              <th></th>
              <th></th>
              <th>October 16</th>
            </tr>
            <tr class="bg-light text-dark">
              <td class="font-weight-bold">Bengal Warriors<img src="../IMAGES/Kabaddi/bengalwarriors.png" class="img-fluid" width="70" alt=""></td>
              <td>37</td>
             <td></td>
              <td>35</td>
              <td class="font-weight-bold"><img src="../IMAGES/Kabaddi/umumba.png" class="img-fluid" width="70" alt="">U Mumba</td>
            </tr>
          </table>
          <span class="bg-danger text-white p-1" style="margin-left: 280px;">VIEW MATCH DETAILS</span>
        </div>
        <div class="mt-3">
          <table class="table" style="border-bottom: 2px outset red;">
            <tr class="bg-dark text-white">
              <th>Final</th>
              <th>COMPLETED</th>
              <th></th>
              <th></th>
              <th>October 16</th>
            </tr>
            <tr class="bg-light text-dark">
              <td class="font-weight-bold">Dabang Delhi K.C<img src="../IMAGES/Kabaddi/dhabangdelhi.png" class="img-fluid" width="70" alt=""></td>
              <td>34</td>
             <td></td>
              <td>39</td>
              <td class="font-weight-bold"><img src="../IMAGES/Kabaddi/bengalwarriors.png" class="img-fluid" width="70" alt="">Bengal Warriors</td>
            </tr>
          </table>
          <span class="bg-danger text-white p-1" style="margin-left: 280px;">VIEW MATCH DETAILS</span>
        </div>
      </div>

      <div class="col-4">
        <div class="">
          <h2 class="float-left text-danger">STANDINGS</h2>
          <p class="float-right text-danger" >VIEW FULL TABLE<i class="fas fa-chevron-right"></i></p>
        </div>
        <div class="mt-3">
          <table class="table table-borderless">
            <tr style="background: #eaf5ff;">
            <th>RANK TEAM</th>
            <th>P</th>
            <th>W</th>
            <th>L</th>
            <th>PTS</th>
          </tr>
          <tr class="bg-danger text-white">
            <td>Q 1.Dabang Delhi</td>
            <td>22</td>
            <td>14</td>
            <td>5</td>
            <td>83</td>
          </tr>
          <tr class="bg-danger text-white">
            <td>Q 3.U.P Yoddha</td>
            <td>22</td>
            <td>13</td>
            <td>7</td>
            <td>74</td>
          </tr>
          <tr class="bg-danger text-white">
            <td>Q 4.U Mumba</td>
            <td>22</td>
            <td>12</td>
            <td>8</td>
            <td>72</td>
          </tr>
          <tr class="bg-danger text-white">
            <td>Q 5.Haryana Steelers</td>
            <td>22</td>
            <td>13</td>
            <td>8</td>
            <td>71</td>
          </tr>
          <tr class="bg-danger text-white">
            <td>Q 6.Bengaluru Bulls</td>
            <td>22</td>
            <td>11</td>
            <td>10</td>
            <td>64</td>
          </tr>

          <tr>
            <td>7.Jaipur Pink Panthers</td>
            <td>22</td>
            <td>9</td>
            <td>11</td>
            <td>58</td>
          </tr>

          <tr>
            <td>8.Patna Pirates</td>
            <td>22</td>
            <td>8</td>
            <td>13</td>
            <td>51</td>
          </tr>

          <tr>
            <td>9.Gujrat Fortunegiants</td>
            <td>22</td>
            <td>7</td>
            <td>13</td>
            <td>51</td>
          </tr>

          <tr>
            <td>10.Puneri Paltan</td>
            <td>22</td>
            <td>7</td>
            <td>12</td>
            <td>48</td>
          </tr>

          <tr>
            <td>11.Telugu Titans</td>
            <td>22</td>
            <td>6</td>
            <td>13</td>
            <td>45</td>
          </tr>

          <tr>
            <td>12.Tamil Talaivas</td>
            <td>22</td>
            <td>4</td>
            <td>15</td>
            <td>37</td>
          </tr>
          </table>


        </div>


      </div>
    </div>

  </div>
</div>
<!--Results Ends Here-->
<div class="container-fluid" style="background: #eaf5ff;">
  <div class="container p-5">
    <h1 class="text-center text-danger">Pro Kabaddi Teams</h1>
    <div class="row">
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
          <img src="../IMAGES/Kabaddi/bengalwarriors.png" alt="">
          <figcaption><h3>BENGAL WARRIORS</h3></figcaption>
        </figure>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure><img src="../IMAGES/Kabaddi/bengalurubulls.png" alt=""></figure>
        <figcaption><h3>BENGALURU BULLS</h3></figcaption>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
          <img src="../IMAGES/Kabaddi/dhabangdelhi.png" alt="">
        <figcaption><h3>DABANG DELHI</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
        <img src="../IMAGES/Kabaddi/gujrathfortunnegaints.png" alt="">
        <figcaption><h3>GUJARATH FORTUNE GAINTS</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
        <img src="../IMAGES/Kabaddi/haryanasteelers.png" alt="">
        <figcaption><h3>HARYANA STEELERS</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center">
        <figure>
        <img src="../IMAGES/Kabaddi/jaipurpinkpanthers.png" alt="">
        <figcaption><h3>JAIPUR PINK PANTHERS</h3></figcaption>
      </figure>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
        <img src="../IMAGES/Kabaddi/patnapirates.png" alt="">
        <figcaption><h3>PATNA PIRATES</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
        <img src="../IMAGES/Kabaddi/puneripaltan.png" alt="">
        <figcaption><h3>PUNERI PALTAN</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
        <img src="../IMAGES/Kabaddi/tamiltalaivas.png" alt="">
        <figcaption><h3>TAMIL TALAIVAS</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
        <img src="../IMAGES/Kabaddi/telugutitan.png" alt="">
        <figcaption><h3>TELUGU TITANS</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center" style="border-right:2px solid black">
        <figure>
        <img src="../IMAGES/Kabaddi/umumba.png" alt="">
        <figcaption><h3>U MUMBA</h3></figcaption>
      </figure>
      </div>
      <div class="col-2 text-center">
        <figure>
        <img src="../IMAGES/Kabaddi/upyoddha.png" alt="">
        <figcaption><h3>U.P YODDHA</h3></figcaption>
      </figure>
      </div>
    </div>
  </div>
</div>
<!--Pro Kabaddi Teams Ends Here-->

<!--Gallery Starts Here-->
<div class="container-fluid mt-5 mb-3 p-1">
  <div class="container">
    <h1 class="text-danger text-center">GALLERY</h1>
    <hr class="mx-auto" color="red" width="100" style="border: 2px solid red;">
    <div class="row">
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/naveenkumar.png" class="bg-dark d-block" alt="">
      </div>
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/pardeeepnarwal.png" class="bg-dark d-block" alt="">
      </div>
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/pawansehrawath.png" class="bg-dark d-block" alt="">
      </div>
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/Deepak-Niwas-Hooda.png" class="bg-dark d-block" alt="">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-4">
        <img src="../IMAGES/Kabaddi/Fazel10.png" alt="" class="bg-dark d-block img-fluid">
      </div>
      <div class="col-4">
        <img src="../IMAGES/Kabaddi/Ajay-Thakur.png" alt="" class="bg-dark d-block img-fluid" style="width:100%;height:100%">
      </div>
      <div class="col-4">
        <img src="../IMAGES/Kabaddi/pawansehrawath.png" class="bg-dark d-block img-fluid" style="width:100%;height:100%" />
      </div>
    </div>

    <div class="row mt-2">
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/Siddu.png" class="bg-dark d-block img-fluid" alt="" style="width:100%;height:100%">
      </div>
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/Rahul-Chaudhari.png" class="bg-dark d-block img-fluid" alt="" style="width:100%;height:100%">
      </div>
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/Manjeet-Chillar.png" class="bg-dark d-block img-fluid" alt="" style="width:100%;height:100%">
      </div>
      <div class="col-3">
        <img src="../IMAGES/Kabaddi/Surinder1.png" class="bg-dark d-block img-fluid" alt="">
      </div>
    </div>
    <div class="text-center mt-5">
    <a href="gallery.php" class="btn btn-danger w-25">VIEW MORE</a>
  </div>
  </div>
</div>

<?php 

include('footer.php');
}
else
{
  header('Location:index.php?kabaddi=success');
}
?>