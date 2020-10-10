<?php
session_start();
error_reporting('football.php');
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
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../IMAGES/Football/6.jpg" class="d-block w-100" height="600" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../IMAGES/Football/9.jpg" class="d-block w-100" height="600" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../IMAGES/Football/8.jpeg" class="d-block w-100" height="600" alt="...">
        </div>
<?php include('nav.php');?>
        </div><!--Carousel Inner Ends Here-->
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true" style=""></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
</div><!--Main Row Ends Here-->
</div><!--Main Container-Fluid Ends Here-->


<div class="container-fluid mt-5 p-5" style="background: #e7e7e7;">
  <div class="container text-center p-3">
  <h1 class="">LATEST <span style="color: #b81e20;">RESULTS</span></h1>
  <hr width="80px"color="red" class="mx-auto" style="border: 2px solid red;">
  <h3 class="mt-3" style="color:#b81e20">WC CHAMPIONSHIP</h3>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-6">
      <table class="table table-borderless">
        <tr>
          <td><h4 class="">PINK FLAMINGOS</h4><hr class="" color="red" width="200px" style="border: 2px solid red;"><h3>WIN</h3></td>
          <td><img src="../IMAGES/Football/sheild1.png" alt="" style="position: relative;"></td>
        </tr>
      </table>
    </div>
    <div class="col-6">
      <table class="table table-borderless">
      <tr>
        <td> <img src="../IMAGES/Football/sheild2.png" alt=""></td>
        <td><h4 class="">SEA HORSES</h4><hr class="" color="red" width="150px" style="border: 2px solid red;"><h3>LOSS</h3></td>
      </tr>
      </table>
    </div>
  </div><!--Row Ends Here-->
  <div class="" style="text-align: center;">
    <button class="btn btn-danger">READ MORE</button></div>
  </div>
</div>

<div class="container-fluid mt-5" style="background: #1a1b1d;">
  <div class="container p-3" style="">
    <div class="row">
      <div class="col-4 mt-5">
        <div class="">
          <h5 class="text-center text-white p-3" style="background:#d61919;">NEXT MATCH</h5>
        </div>
        <div class="container">
        <div class="row">
          <div class="col-3 text-center text-white" style="background: #333c43;border-bottom: 4px outset #d61919;">
            <h4>84</h4>
            <p>Days</p>
          </div>
          <div class="col-3 text-center text-white" style="background: #333c43;border-bottom: 4px outset #d61919;">
            <h4>20</h4>
            <p>Hours</p>
          </div>
          <div class="col-3 text-center text-white" style="background: #333c43;border-bottom: 4px outset #d61919;">
            <h4>02</h4>
            <p>Minutes</p>
          </div>
          <div class="col-3 text-center text-white" style="background: #333c43;border-bottom: 4px outset #d61919;">
            <h4>52</h4>
            <p>Seconds</p>
          </div>

        </div>
        </div>

        <div class="mt-2" style="background: #242a31;border-bottom: 4px inset #d61919;">
          <table class="table text-center table-borderless">
            <tr>
              <td><img src="../IMAGES/Football/8-98x98.png" alt="" width="50"><p class="text-white">WILD KANGROOS</p></td>
              <td class="text-white" style="font-size: 30px;">-VS-</td>
              <td><img src="../IMAGES/Football/6-98x98.png" alt="" width="50"><p class="text-white">STRONG ARMS</p></td>
            </tr>
          </table>
        </div>
        <div class="text-white text-center p-2" style="background: #394149;"><h5>May 3, 2020</h5><h5>Green park</h5></div>
      </div>

      <div class="col-4 mt-5">
        <div class="">
          <h5 class="text-center text-white p-3" style="background:#d61919;">UPCOMING FIXTURES</h5>
        </div>

        <div class="mt-2" style="background: #242a31;border-bottom: 4px inset #d61919;">
          <table class="table text-center p-3 table-borderless">
            <tr>
              <td><p class="text-white">WILD KANGROOS</p></td>
              <td class="text-white" style="font-size: 20px;">-VS-</td>
              <td><p class="text-white">STRONG ARMS</p></td>
            </tr>
          </table>
        </div>
        <div class="text-white text-center p-2" style="background: #394149;"><h5>May 3, 2020 | 3:00 pm</h5><h5>Green park</h5></div>


        <div class="mt-2" style="background: #242a31;border-bottom: 4px inset #d61919;">
          <table class="table text-center table-borderless">
            <tr>
              <td><p class="text-white">CARLTON CROCODILES</p></td>
              <td class="text-white" style="font-size:;">VS</td>
              <td><p class="text-white">STREAM SHARKS</p></td>
            </tr>
          </table>
        </div>
        <div class="text-white text-center p-2" style="background: #394149;"><h5>May 24, 2020 | 4:00 pm</h5><h5>Big Stadium</h5></div>

      </div>

      <div class="col-4 mt-5">
        <div class="">
          <h5 class="text-center text-white p-3" style="background:#d61919;"> PRIMARY LEAGUE</h5>
        </div>
        <div class="">
          <table class="table table-striped text-white table-borderless">
            <tr style="background: #4f575e;">
              <th>POS</th>
              <th>CLUB</th>
              <th>P</th>
              <th>W</th>
              <th>L</th>
              <th>PTS</th>
            </tr>
            <tr style="background: #2a3138;">
              <td>1.</td>
              <td>STREAM SHARKS</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>1</td>
            </tr>
            <tr style="background: #4f575e;">
              <td>2.</td>
              <td>ESSENDON EAGLES</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>1</td>
            </tr>
            <tr style="background:#2a3138 ;">
              <td>3.</td>
              <td>FREE BUDGIES</td>
              <td>0</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
            </tr>
            <tr style="background:#4f575e ;">
              <td>4.</td>
              <td>PINK FLAMINGOS</td>
              <td>1</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr style="background: #2a3138;">
              <td>5.</td>
              <td>SEAHORSES</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>
            <tr style="background: #4f575e;">
              <td>6.</td>
              <td>WILD KANGAROOS</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
            </tr>

          </table>
        </div>
      </div>


    </div>
  </div>
</div>
<!--Upcoming Fixtures Ends Here-->

<div class="container-fluid mt-5" style="background: #ededed;">
  <div class="container p-2">
    <div class="text-center">
      <h1 class="text-danger">SHOP HERE</h1>
      <hr class="mx-auto" width="50px" />
    </div>
    <div class="row">
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop1.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop2.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop3.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop4.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop5.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop3.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop2.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
      <div class="col-3 border p-3">
        <img src="../IMAGES/Football/shop1.jpg" alt="">
        <div class="">
          <h6>Yellow T-Shirt</h6>
          <span class="float-right">No Reviews</span>
          <small>Clothing</small>
        </div>
        <div class="text-center">
          <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
          <button class="btn btn-dark">$3.00</button>
        </div>
      </div>
    </div>
    <div class="mt-5 p-2 text-center">
    <a href="shop.php" class="btn btn-danger">VIEW MORE</a>
  </div>
  </div>
</div>
<!--Shop Here Ends Here-->

<div class="container-fluid mt-5 p-5" style="background: #f5f5f5;">
  <div class="container">
      <h1 class="text-center text-danger">LATEST NEWS</h1>
      <hr class="mx-auto" width="60px">
  </div>
  <div class="container mt-3 p-2">
    <div class="row">
      <div class="col-3">
        <div class="card" style="border:none;width: 18rem;">
          <img src="../IMAGES/Football/1-270x220.jpg" class="card-img-top" alt="...">
          <div class="card-body" >
            <h5 class="card-title">THE MOST EPIC MATCH OF THE SEASON</h5>
            <p class="card-text" align="justify">They endure the daily humiliations – large and small – that come with occupation.
              And fault lines must be closed among Muslims as well, as the divisions between Sunni and Shia.</p>
            <a href="#" class="btn btn-danger float-right">Read More..</a>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="border:none;width: 18rem;">
          <img src="../IMAGES/Football/2-270x220.jpg" class="card-img-top" alt="...">
          <div class="card-body" >
            <h5 class="card-title">THE FASTET GOAL OF THE WORLD CHAMPIONSHIP</h5>
            <p class="card-text" align="justify">We will all have to make concessions to achieve this.
               It’s a racial stalemate we’ve been stuck in for years. In that time, he’s said no to higher fuel-efficiency standards..</p>
            <a href="#" class="btn btn-danger float-right">Read More..</a>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="border:none;width: 18rem;">
          <img src="../IMAGES/Football/4-270x220.jpg" class="card-img-top" alt="...">
          <div class="card-body" >
            <h5 class="card-title">STREAM SHARKS BOUGHT A NEW COACH</h5>
            <p class="card-text" align="justify">That’s the promise we need to keep. 
              I will build new partnerships to defeat the threats of the 21st century: terrorism and nuclear proliferation; poverty and genocide; .
              climate change and disease.</p>
            <a href="#" class="btn btn-danger float-right">Read More..</a>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="border:none;width: 18rem;">
          <img src="../IMAGES/Football/8-270x220.jpg" class="card-img-top" alt="...">
          <div class="card-body" >
            <h5 class="card-title">LIST OF BEST FOOTBALL TRICKS OF 2014</h5>
            <p class="card-text" align="justify">That’s the promise we need to keep. 
              I will build new partnerships to defeat the threats of the 21st century: terrorism and nuclear proliferation; 
              poverty and genocide; climate change and disease.</p>
            <a href="#" class="btn btn-danger float-right">Read More..</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!--Latest News Ends Here-->

<div class="container-fluid mt-5">
  <img src="../IMAGES/Football/gallery6.jpg" class="img-fluid" alt="" style="position: absolute;height:80%;width: 100%;">
  <div class="text-white p-5" style="position: relative;">
  <h2 class="text-center">Football Legendary Goals</h2>
  <hr class="mx-auto" width="60" color="red" style="border:2px solid red;">
  <h4 class="text-center" style="color: red;">Top 50 Goals Ever Scored</h4>
  <iframe class="mt-2" width="600" height="315" src="https://www.youtube.com/embed/dFg8qxrDQRQ" frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-left: 300px;">
</iframe>
</div>
</div>
<!--Legendry Goals Ends Here-->

<div class="container-fluid mt-5">
  <div class="container p-5">
    <h2 class="text-danger text-center">AWARDS</h2>
    <hr class="mx-auto" width="80">
    <div class="row">
      <div class="col-2"><img src="../IMAGES/Football/award2.jpeg" class="img-fluid" alt=""></div>
      <div class="col-2"><img src="../IMAGES/Football/award3.jpg" class="img-fluid" alt=""></div>
      <div class="col-2"><img src="../IMAGES/Football/award6.jpg" class="img-fluid" alt=""></div>
      <div class="col-2"><img src="../IMAGES/Football/award5.jpg" class="img-fluid" alt=""></div>
      <div class="col-2"><img src="../IMAGES/Football/award4.jpg" class="img-fluid" alt=""></div>
      <div class="col-2"><img src="../IMAGES/Football/award7.jpg" class="img-fluid bg-transparent" alt=""></div>
    </div>
  </div>
</div>
<!--Awards Ends Here-->

<div class="container-fluid mt-5" style="background: #1a1b1d;">
  <div class="container text-center p-5">
    <h1 class="text-danger">PLAYERS</h1>
    <hr class="mx-auto" width="80" color="red" style="border:2px solid red;">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-3"><img src="../IMAGES/Football/lionelmessi.png" alt="" class="img-fluid w-75"></div>
      <div class="col-3"><img src="../IMAGES/Football/ronaldo.png" class="img-fluid" style="height: 250px;" alt=""></div>
      <div class="col-3"><img src="../IMAGES/Football/salah.png" class="img-fluid w-75" alt="" style="height: 250px;"></div>
      <div class="col-3"><img src="../IMAGES/Football/Romario.png" class="img-fluid w-75" alt="" style="height: 250px;"></div>
    </div>
  </div>
</div>
<!--Players Ends Here-->

<?php 

include('footer.php');
}
else
{
  header('Location:index.php?football=success');
}
?>