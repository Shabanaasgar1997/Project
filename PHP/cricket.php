<?php
session_start();
error_reporting('cricket.php');
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
  <div class="row">

    <div class="container-fluid">
    <!-- Carousel Starts Here -->
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="">
         <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
       <div class="carousel-inner sports_pictures_carousel">
        <div class="carousel-item active">
          <img src="../IMAGES/Cricket/Slider-1-1.jpg" width="100%" height="500" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../IMAGES/Cricket/Slider-2.jpg"  width="100%" height="500" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../IMAGES/Cricket/Slider-3-1.jpg" width="100%" height="500" class="d-block" alt="...">
        </div>
       <div class="carousel-item">
          <img src="../IMAGES/Cricket/Slider-4-1.jpg" width="100%" height="500" class="d-block" alt="...">
        </div>
       <div class="carousel-item">
          <img src="../IMAGES/Cricket/Gallery-1.jpg" width="100%" height="500" class="d-block" alt="...">
      </div>
<!--Nav Bar Starts Here-->
     <?php
     include('nav.php');
     ?>
<!---Nav Bar Ends Here-->     
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon border border-warning h-25 w-25 " aria-hidden="true" style=""></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon border border-warning h-25 w-25 " aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>   
       </div>
       
    </div>
    </div>

</div>
<!-- Main Navbar Ends Here -->

<!-- Match Details Starts Here -->
<div class="container-fluid">
    <div class="container mt-5 ">  
    <div class="row bg-dark">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" style="border:5px slateblue inset">
      <div class="bg-danger w-25 text-center mx-auto" style="height:120px;clip-path: polygon(0 0, 100% 0, 90% 18%, 12% 18%);position:relative;">
        <p class="text-white">LIVE NEWS</p>
      </div>      
    <div class="carousel-item active">
    <img src="../IMAGES/Stadium/aboutbg.jpg" height="400" class="d-block w-100" alt="..." style="">
    <div class="row mt-2">
    <table class="table text-white w-50 mx-auto table-borderless">
    <thead>
    <tr>
    <th scope="col">YET TO BAT</th>
    <th scope="col"> Pakistan<img src="../IMAGES/Cricket/pakistan.png" width="25" class="rounded-circle" alt=""></th>
    <th scope="col">VS</th>
    <th scope="col">Bangladesh<img src="../IMAGES/Cricket/bangladesh.png" width="25" class="rounded-circle"  alt=""></th>
    <th scope="col">38/1 Overs:(6.3)Run rate:6.03</th>
    </tr>
    </thead>
    </table>
    </div>
    <p class="text-white text-center">Bangladesh Elected To Field</p>
</div>

<div class="carousel-item">
    <img src="../IMAGES/Stadium/stadium.jpg" height="400" class="d-block" width="100%" alt="...">
    <div class="row mt-2">
    <table class="table text-white w-50 mx-auto table-borderless">
    <thead>
    <tr>
    <th scope="col">YET TO BAT</th>
    <th scope="col">South Africa<img src="../IMAGES/Cricket/south-africa.png" width="25" class="rounded-circle" alt=""></th>
    <th scope="col">VS</th>
    <th scope="col">England<img src="../IMAGES/Cricket/england.png" width="25" class="rounded-circle"  alt=""></th>
    <th scope="col">38/1 Overs:(6.3)Run rate:6.03</th>
    </tr>
    </thead>
    </table>
    </div>
    <p class="text-white text-center">South Africa Elected To Field</p>
</div>

<div class="carousel-item">
    <img src="../IMAGES/Stadium/ageas-bowl.jpg" height="400" class="d-block" width="100%" alt="...">
    <div class="row mt-2">
    <table class="table text-white w-50 mx-auto table-borderless">
    <thead>
    <tr>
    <th scope="col">YET TO BAT</th>
    <th scope="col">West-Indies<img src="../IMAGES/Cricket/west-indies.png" width="25" class="rounded-circle" alt=""></th>
    <th scope="col">VS</th>
    <th scope="col">Australia<img src="../IMAGES/Cricket/australia.png" width="25" class="rounded-circle"  alt=""></th>
    <th scope="col">38/1 Overs:(6.3)Run rate:6.03</th>
    </tr>
    </thead>
    </table>
    </div>
    <p class="text-white text-center">Bangladesh Elected To Field</p>
</div>


<!-- Carousel Inner Ends Here -->
</div>
<!-- Carousel Ends Here -->
</div>
<!-- Row Ends Here -->
    </div>
<!-- Container Ends Here -->
    </div>
</div>
<!-- Match Details Ends Here -->


<!-- Cricket News Starts Here -->
<div class="container-fluid">
<div class="container mt-5">
<div class="row">
<div class="col-8">
    <div class="border border-danger" style="">
    <div class="row">
    <div class="col-7">
    <img src="../IMAGES/Cricket/first.jpg" class="h-100 w-100" style=""  alt="">
    <div class=""><p class="text-white" style="margin-top:-20%;font-size: 20px;">"Something About Him": Tendulkar Names Aussie Batsman Who Resembles Him</p></div>
    </div>
    <div class="col-5" style="height:auto">
    <div class="list-group">
    <div class="list-group-item" style="border:none;">
    <div class="row" style="border-bottom: 1px solid black;">
    <div class="col-4"><img src="../IMAGES/Cricket/cri.jpg" class="" alt=""></div>
    <div class="col-8"><span class="" style="font-size: 15px;">2nd ODI: India Out To Right The Wrongs Of Shock Hamilton Defeat</span></div>
    </div>

    </div>
    <div class="list-group-item" style="border:none;">
    <div class="row" style="border-bottom: 1px solid black;">
    <div class="col-4"><img src="../IMAGES/Cricket/jofraarchaer.jpg" class=" " alt=""></div>
    <div class="col-8"><span style="font-size: 15px;">Jofra Archer's Old "Stress Fracture" Tweet Leaves Fans Shocked</span></div>
    </div>

    </div>
    <div class="list-group-item" style="border:none;">
    <div class="row" style="border-bottom: 1px solid black;">
    <div class="col-4"><img src="../IMAGES/Cricket/third.jpg" class="" alt=""></div>
    <div class="col-8"><span style="font-size: 15px;">Sciver Stars As England Women Beat India Women By 4 Wickets</span></div>
    </div>

    </div>
    <div class="list-group-item" style="border:none;">
    <div class="row" style="border-bottom: 1px solid black;">
    <div class="col-4"><img src="../IMAGES/Cricket/sachin.jpg " class="" alt=""></div>
    <div class="col-8"><span style="font-size: 15px;">"This Was My Favourite Corner": Yuvraj Turns Photographer For Sachin</span></div>
    </div>

    </div>
    <div class="list-group-item" style="border:none;">
    <div class="row">
    <div class="col-4"><img src="../IMAGES/Cricket/shoaibakhter.jpg" class="" alt=""></div>
    <div class="col-8"><span style="font-size: 15px ;">"Is This How You Treat Your Stars?": Shoaib Akhtar Fumes At PCB</span></div>
    </div>
    </div>

<!-- List Group Ends Here -->
    </div>

<!-- Column Ends Here -->
    </div>
<!-- Row Ends Here -->
    </div>
<!-- Container Ends Here -->    
    </div>

<div class="container mt-3">
    <h6 class="text-white bg-info w-25 p-2 text-center shadow" style="border-bottom: 3px outset red;">BOOK TICKETS</h6>
    <div class="row bg-dark p-2">
    <div class="col-8">
    <img src="../IMAGES/Cricket/gallery-thumb_640x480.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-4">
    <div>
    <img src="../IMAGES/Cricket/thumb(4)_640x480.jpg" class="img-fluid" alt="">
    </div>
    <div>
    <img src="../IMAGES/Cricket/gallery-thumb_0.jpg" class="img-fluid" alt="">
    </div>
    </div>
    </div>
    <p class="text-dark text-center"><a href="bookingtickets.php">VIEW MORE</a></p>
</div>

<div class="container mt-2">
  <h6 class="text-white bg-info w-25 p-2 text-center shadow" style="border-bottom: 3px outset red;">BLOG NEWS</h6>
  <div class="row bg-dark p-2">
  <div class="col-8">
  <img src="../IMAGES/Cricket/t20series.jpg" class="img-fluid" alt="">
  </div>
  <div class="col-4">
    <div class="row bg-light border">
    <div class="col-4"> 
    <img src="../IMAGES/Cricket/col-4(1).jpg" class="img-fluid" alt="">
    </div>
    <div class="col-8">
      <p>Loss Against New Zealand A reality Check For India: Atul Wassan</p>
    </div> 
    </div>
    <div class="row bg-light border">
    <div class="col-4">
    <img src="../IMAGES/Cricket/col-4(2).jpg" class="img-fluid" alt="" />
    </div>
    <div class="col-8">
    <p>India's Reacord Breaking Whitewash of New Zealand</p>
    </div>
    </div>
    <div class="row bg-light">
    <div class="col-4"><img src="../IMAGES/Cricket/col-4(3).jpg" class="img-fluid" alt=""></div>
    <div class="col-8"><p>India Outclass to Australia To Win ODI Series 2-1</p></div>
    
    </div>
    </div>
    </div>
    <p class="text-dark text-center"><a href="blog.php">VIEW MORE</a></p>
    </div>


</div>
<!-- Col-8 Ends Here -->
<div class="col-4">

    <div class="bg-danger">
    <p class="text-white p-3 font-weight-bold">LIVE SCORES & RESULTS</p>
    </div>

    <div class="">
    <ul id="myTab" class="nav nav-tabs" style="border-bottom: none">
    <li class="nav-item">
    <a href="#indiamatches" class="nav-link active bg-dark text-white" data-toggle="tab">INDIA MATCHES</a>
    </li>
    <li class="nav-item">
    <a href="#allmatches" class="nav-link bg-light " data-toggle="tab">ALL MATCHES <span class="badge badge-danger badge-pill">LIVE</span></a>

    </li>
    </ul>

<div class="tab-content" style=";">
<div class="tab-pane fade show active" id="indiamatches">

  <ul id="myTab" class="nav nav-tabs" style="">
  <li class="nav-item">
  <a href="#upcoming" class="nav-link active" data-toggle="tab">UpComing</a>
  </li>
  <li class="nav-item">
  <a href="#recent" class="nav-link" data-toggle="tab">Recent</a>
  </li>
  </ul> 
<div class="tab-pane fade show active" id="upcoming">
<div class="mt-2">
  <div class="list-group">
    <div class="list-group-item">
    <div class=" justify-content-between">
    <div class="row mt-2">
    <table class="table table-borderless">
    <thead>
    <tr>
    <td>West-Indies<img src="../IMAGES/Cricket/west-indies.png" width="25" class="rounded-circle" alt=""></td>
    <td>VS</td>
    <td>Australia<img src="../IMAGES/Cricket/australia.png" width="25" class="rounded-circle"  alt=""></td>
    <td>38/1 Overs:(6.3)Run rate:6.03</td>
    </tr>
    </thead>
    </table>
    </div>
    <div class="">
    <h5 class="text-center text-danger">South Africa Elected To Field</h5>
    </div>
    </div>
  </div>

  <div class="list-group-item">
    <div class="justify-content-between">
    <div class="row mt-2">
    <table class="table table-borderless">
    <thead>
    <tr>
    <td scope="col">South Africa<img src="../IMAGES/Cricket/south-africa.png" class="rounded-circle w-50" alt=""></td>
    <td scope="col">VS</td>
    <td scope="col">England<img src="../IMAGES/Cricket/england.png"  class="rounded-circle w-75"  alt=""></td>
    <td scope="col">38/1 Overs:(6.3)Run rate:6.03</td>
    </tr>
    </thead>
    </table>
    </div>
    <h5 class="text-center text-danger">South Africa Elected To Field</5>
    </div>
  </div>

  <div class="list-group-item">
    <div class="justify-content-between">

    <div class="row mt-2">
    <table class="table w-50 mx-auto table-borderless">
    <thead>
    <tr>
    <td scope="col"> Pakistan<img src="../IMAGES/Cricket/pakistan.png" width="25" class="rounded-circle" alt=""></td>
    <td scope="col">VS</td>
    <td scope="col">Bangladesh<img src="../IMAGES/Cricket/bangladesh.png" width="25" class="rounded-circle"  alt=""></td>
    <td scope="col">38/1 Overs:(6.3)Run rate:6.03</td>
    </tr>
    </thead>
    </table>
    </div>
    <h5 class="text-danger text-center">Bangladesh Elected To Field</5>

    </div>
  </div>
</div>

</div>
</div>

</div>
</div>

</div>

<div class="bg-danger mt-2">

  <p class="text-white p-3">Rankings</p>

 
  <ul class="nav nav-tabs float-right" style="margin-top:-18% ;border-bottom:none;" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-dark" data-toggle="tab" href="#test">TEST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" data-toggle="tab" href="#odi">ODI</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" data-toggle="tab" href="#t20">T20</a>
    </li>
  </ul>

</div>
<div class="container">
  <div class="tab-content">
    <div id="test" class="tab-pane active">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs d-flex" role="tablist" style="border-bottom: none;;">
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#team">Team</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#batting">Batting</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#bowling">Bowling</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#allrounder">Allrounder</a>
      </li>
    </ul>
  </div>
  <div id="odi" class="tab-pane">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs d-flex" role="tablist" style="border-bottom: none;;">
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#team">Team</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#batting">Batting</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#bowling">Bowling</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#allrounder">Allrounder</a>
      </li>
    </ul>
  </div>

  <div id="t20" class="tab-pane">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs d-flex" role="tablist" style="border-bottom: none;">
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#team">Team</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#batting">Batting</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#bowling">Bowling</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#allrounder">Allrounder</a>
      </li>
    </ul>
  </div>

</div>
<!-- Tab panes -->
  <div class="tab-content">
      <div id="team" class="tab-pane active">
        <table class="table table-striped">
          <tr>
            <th>RANK</th>
            <th>TEAM</th>
            <th>RATING</th>
          </tr>
          <tr>
            <td>1</td>
            <td><img src="../IMAGES/Cricket/india-6.png" class="rounded-circle" width="25" alt=""> INDIA</td>
            <td>120</td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="../IMAGES/Cricket/australia.png" class="rounded-circle" width="25" alt=""> AUSTRALIA</td>
            <td>108</td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="../IMAGES/Cricket/england.png" class="rounded-circle" width="25" alt=""> ENGLAND</td>
            <td>105</td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="../IMAGES/Cricket/new-zealand-2115.png" class="rounded-circle" width="25" alt=""> NEW ZEALAND</td>
            <td>105</td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <img src="../IMAGES/Cricket/south-africa.png" class="rounded-circle" width="25" alt="" />SOUTHAFRICA</td>
            <td>98</td>
          </tr>
        </table>

      </div>
      <div id="batting" class="tab-pane fade">

        <table class="table table-striped">
          <tr>
            <th>RANK</th>
            <th>PLAYER</th>
            <th>RATING</th>
          </tr>
          <tr>
            <td>1</td>
            <td><img src="../IMAGES/Cricket/virat-kohli-967.png" width="25" alt=""><h6>Virat Kohli</h6> <p>India</p></td>
            <td>928</td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="../IMAGES/Cricket/steven-smith-1053.png" width="25" alt=""><h6>Steven Smith</h6> <p>Australia</p></td>
            <td>911</td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="../IMAGES/Cricket/default-player.png" width="25" alt=""><h6>Marnus Labuschagne</h6> <p>Australia</p></td>
            <td>827</td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="../IMAGES/Cricket/kane-williamson-1058.png" width="25" alt=""><h6>Kane Williamson</h6> <p>New Zealand</p></td>
            <td>814</td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="../IMAGES/Cricket/david-warner-1285.png" width="25" alt=""><h6>David Warner</h6> <p>Australia</p></td>
            <td>793</td>
          </tr>
        </table>

      </div>
      <div id="bowling" class=" tab-pane fade">


        <table class="table table-striped">
          <tr>
            <th>RANK</th>
            <th>PLAYER</th>
            <th>RATING</th>
          </tr>
          <tr>
            <td>1</td>
            <td><img src="../IMAGES/Cricket/pat-cummins-1656.png" width="25" alt=""><h6>Pat Cummins</h6> <p>Australia</p></td>
            <td>904</td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="../IMAGES/Cricket/default-player.png" width="25" alt=""><h6>Neil Wagner</h6> <p>Australia</p></td>
            <td>852</td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="../IMAGES/Cricket/jason-holder-1446.png" width="25" alt=""><h6>Jason Holder</h6> <p>West Indies</p></td>
            <td>830</td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="../IMAGES/Cricket/kagiso-rabada_636949907034482316.png" width="25" alt=""><h6>Kagiso Rabada</h6> <p>South Africa</p></td>
            <td>802</td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="../IMAGES/Cricket/mitchell-starc-1416.png" width="25" alt=""><h6>Mitchell Starc</h6> <p>Australia</p></td>
            <td>796</td>
          </tr>
        </table>


      </div>
      <div id="allrounder" class="tab-pane fade">
        <table class="text-center w-100">
          <tr style="height: 30px;">
            <th>RANK</th>
            <th colspan="2" style="text-align: center;">PLAYER</th>
            <th>RATING</th>
          </tr>
          <tr>
            <td>1</td>
            <td><img src="../IMAGES/Cricket/jason-holder-1446.png" width="40" alt=""></td>
            <td><h6>Jason Holder</h6> <p>West Indies</p></td>
            <td>473</td>
          </tr>
          <tr>
            <td>2</td>
            <td><img src="../IMAGES/Cricket/benjamin-andrew-stokes_636526681996331948.png" width="25" alt=""></td>
            <td><h6>Ben Stokes</h6> <p>England</p></td>
            <td>407</td>
          </tr>
          <tr>
            <td>3</td>
            <td><img src="../IMAGES/Cricket/ravindra-jadeja-855.png" width="25" alt=""></td>
            <td><h6>Ravindra Jadeja</h6> <p>India</p></td>
            <td>406</td>
          </tr>
          <tr>
            <td>4</td>
            <td><img src="../IMAGES/Cricket/ravichandran-ashwin-1109.png" width="25" alt=""></td>
            <td><h6>Ravichandran Ashwin</h6> <p>India</p></td>
            <td>308</td>
          </tr>
          <tr>
            <td>5</td>
            <td><img src="../IMAGES/Cricket/vernon-philander-894.png" width="25" alt=""></td>
            <td><h6>Vernon Philander</h6> <p>South Africa</p></td>
            <td>305</td>
          </tr>
        </table


      </div>

  </div>
</div>
</div>
<!--Col-4 Ends Here -->
</div>
</div>
</div>
<!--Gallery Starts Here-->
<div class="container-fluid mt-5">
  <div class="container">
    <h1 class="text-danger text-center">GALLERY</h1>
    <hr class="mx-auto" color="red" style="border: 2px solid red;" width="100">
    <div class="cricketgallery mt-5">
    <div><img src="../IMAGES/Cricket/VIRATKOHLI.png" class="" alt=""></div>
    <div><img src="../IMAGES/Cricket/ROHITSHARMA.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/BUMRAH.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/ASHWIN.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/RAVINDRA JADEJA.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/PUJARA.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/RAHANE.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/KLRAHUL.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/DHAWAN.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/SHAMI.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/ISHANTH.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/KULDEEP.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/RISHABPANT.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/YUZI.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/HARDIK.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/JADHAV.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/SAINI.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/MANISHPANDEY.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/SHARDULTHAKUR.png" alt=""></div>
    <div><img src="../IMAGES/Cricket/IYER" alt=""></div>
    </div>
    <div class="text-center mt-5"><a href="gallery.php" class="btn btn-danger w-25">VIEW MORE</a></div>
  </div>
</div>
<!---Gallery Ends Here-->
<div class="container-fluid mt-5">
  <div class="container">
    <h1 class="text-danger text-center">SHOP</h1>
    <hr class="mx-auto" width="50" color="red" style="border:2px solid red;" >
      <div class="row">
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping.png" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping2.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping3.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping4.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
      </div>
      <div class="row mt-5">  
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping5.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping6.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping7.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping8.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping9.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping10.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
        <div class="col-3 text-center border">
          <img src="../IMAGES/Cricket/shopping11.jpg" alt="" class="img-fluid ">
          <div class="row mt-3">
            <div class="col-6"><h4 class="text-left">Cricket Kit</h4></div>
            <div class="col-6">
              <div class="inline">
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
                <i class="far fa-star text-warning"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><h2 class="text-left">$20.00</h2></div>
            <div class="col-6"><i class="fas fa-shopping-cart m-2 fa-2x text-danger"></i><i class="far fa-heart fa-2x m-2 text-danger"></i></div>
          </div>
        </div>
      </div>
  </div>
</div>
<?php 

include('footer.php');
}
else
{
  header('Location:index.php?cricket=success');
}
?>