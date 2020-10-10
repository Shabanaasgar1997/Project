<?php
session_start();
error_reporting('tennis.php');
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
  <img class="img-fluid" src="../IMAGES/Tennis/slider-1.jpg" alt="" width="97.8%" style="box-sizing: border-box;position: absolute;height:500px;">
  </div>

<!-- Main Navbar Starts Here -->
<?php include('nav.php');?>
<div class="container-fluid" style="margin-top: 450px;">
<div class="container">
    <h2 class="text-danger text-center">TENNIS TYPES</h2>
    <hr class="mx-auto" color="red" width="80" style="border: 2px solid red;">
    <div class="row">
      <div class="col-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../IMAGES/Tennis/1.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Tennis/2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Tennis/3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
          </div>
        </div>
        <div class="bg-dark mt-3 text-white">
          <p >GRASS COURT<i class="fas fa-angle-double-right float-right mr-2 text-success"></i></p>
        </div>
      </div>

      <div class="col-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../IMAGES/Tennis/2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Tennis/3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Tennis/1.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
          </div>
        </div>
        <div class="bg-dark mt-3 text-white">
          <p >HARD COURT<i class="fas fa-angle-double-right float-right mr-2 text-success"></i></p>
        </div>
      </div>

      <div class="col-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../IMAGES/Tennis/3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Tennis/1.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../IMAGES/Tennis/2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
          </div>
        </div>
        <div class="bg-dark mt-3 text-white">
          <p>CLAY COURT<i class="fas fa-angle-double-right float-right mr-2 text-success"></i></p>
        </div>
      </div>
    </div>

</div>
</div>
<!--Types Of Tennis Courts Ends Here-->

<div class="fixingImg container-fluid mt-5 p-3 bg-dark">
  <div class="container text-white">
    <h1 class="text-danger text-center">RULES FOR PLAYING TENNIS</h1>
    <hr class="mx-auto" width="100" color="red" style="border: 2px solid red;">
    <div class="row">
      <div class="col-6">
        <div class="row">
          <div class="col-4 mt-2">
            <img src="../IMAGES/Tennis/slider12.jpg" class="img-fluid" alt="" style="height: 200px;width: 200px;">
          </div>
          <div class="col-8 mt-2">
            <h6>STAY AHEAD OF THE CURVE</h6>
            <p>Quisque gravida libero sodales augue luctus elementum.
               In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="row">
          <div class="col-4 mt-2">
            <img src="../IMAGES/Tennis/slider13.jpg" class="img-fluid" alt="" style="height: 200px;width: 200px;">
          </div>
          <div class="col-8">
            <h6>STAY AHEAD OF THE CURVE</h6>
            <p>Quisque gravida libero sodales augue luctus elementum.
               In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="row mt-2">
          <div class="col-4">
            <img src="../IMAGES/Tennis/slider14.jpg" class="img-fluid" alt="" style="height: 200px;width: 200px;">
          </div>
          <div class="col-8">
            <h6>STAY AHEAD OF THE CURVE</h6>
            <p>Quisque gravida libero sodales augue luctus elementum.
               In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
          </div>
        </div>

      </div>
      <div class="col-6">
        <div class="row mt-2">
          <div class="col-4">
            <img src="../IMAGES/Tennis/slider15.jpg" class="img-fluid" alt="" style="height: 200px;width: 200px;">
          </div>
          <div class="col-8">
            <h6>STAY AHEAD OF THE CURVE</h6>
            <p>Quisque gravida libero sodales augue luctus elementum.
               In tristique faucibus diam, sit amet ultrices erat porttitor ut. Phasellus sit amet lorem sit amet orci lobortis mattis.</p>
          </div>
        </div>
        
      </div>
    </div>


</div>
</div>
<!---Rules Ends Here-->

<div class="container-fluid mt-5">
  <div class="container text-center">
    <h1 class="text-danger">LAST MATCH</h1>
    <hr class="mx-auto" width="100" color="red" style="border: 2px solid red;">
    <p>TIAM LAOREET, JUSTO AC MAXIMUS PLACERAT, NEQUE PURUS TRISTIQUE PURUS,VEL FAUCIBUS ELIT ERAT QUIS NISI.</p>
    <div class="">
      <table class="table table-borderless">
        <tr>
          <td><img src="../IMAGES/Tennis/player-5-420x420.jpg" class="img-fluid rounded-circle" width="150" alt=""><h6>LAURA GOFMAN</h6></td>
          <td><p>03 Jul 14:00</p><h1 class="text-danger font-weight-bold" style="font-size: 60px;">2 - 1</h1><p>Open Tennis Tournament</p></td>
          <td><img src="../IMAGES/Tennis/team-1-420x420.jpg" class="img-fluid rounded-circle" width="150" alt=""><h6>TAMMY YOUNG</h6></td>
        </tr>
      </table>
    </div>
</div>
</div>
<!--Latest Match Ends Here-->

<div class="container-fluid mt-5">
  <h1 class="text-danger text-center">LATEST NEWS</h1>
    <hr class="mx-auto" width="100" color="red" style="border: 2px solid red;">
  <div class="mansonry">
    <div class=""><img src="../IMAGES/Tennis/slider-1.jpg" class="img-fluid" style="height: 200px;" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider-2-1.jpg" class="img-fluid" style="height: 200px;" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider-3.jpg" class="img-fluid" style="height: 200px;" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider-4.jpg" class="img-fluid" style="height: 200px;" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider-5.jpg" class="img-fluid" style="height: 200px;" alt=""></div>
  </div>
  <div class="mansonry">
    <div class=""><img src="../IMAGES/Tennis/slider6.jpg" class="img-fluid" style="height: 200px;width: 100%;" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider8.jpg" class="img-fluid" style="height: 200px;width: 100%" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider9.jpg" class="img-fluid" style="height: 200px;width: 100%" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider10.jpg" class="img-fluid" style="height: 200px;width: 100%" alt=""></div>
    <div class=""><img src="../IMAGES/Tennis/slider11.jpg" class="img-fluid" style="height: 200px;width: 100%" alt=""></div>
  </div>
</div>
<!--Latest News Ends Here-->

<div class="container-fluid mt-5 bg-dark p-5">
  <h1 class="text-center text-danger">NEXT MATCHES</h1>
  <hr class="mx-auto" color="red" width="100" style="border: 2px solid red;">
  <div class="container">
    <div class="row mt-5">
      <div class="col-6">
        <img src="../IMAGES/Tennis/wp3088659.jpg" alt="" class="img-fluid" style="height: 800px;">
      </div>
      <div class="col-6">
        <h6 class="bg-info text-white p-3">UPCOMING MATCHES</h6>
        <div class="list-group">
          <div class="list-group-item text-dark">
            <div class="d-flex w-100 justify-content-between">
              <table class="table table-borderless">
                <tr>
                  <td><img src="../IMAGES/Tennis/rogerfedrer.jpg" alt="" width="50" class="img-fluid rounded-circle"><strong> ROGER FEDRER</strong></td>
                  <td class="font-weight-bold" style="font-size: 30px;">VS</td>
                  <td><strong> NOVAK DJOKOVIC</strong><img src="../IMAGES/Tennis/novak.jpg" alt="" width="50" class="img-fluid rounded-circle"> </td>
                </tr>
              </table>
            </div>
            <h6 class="text-center">MARCH 15TH | 11.45 PM Australia</h6>
          </div>
          <div class="list-group-item text-dark mt-2">
            <div class="d-flex w-100 justify-content-between">
              <table class="table table-borderless">
                <tr>
                  <td><img src="../IMAGES/Tennis/rafaelnadal.jpg" alt="" width="50" class="img-fluid rounded-circle"><strong> RAFAEL NADAL</strong></td>
                  <td class="font-weight-bold" style="font-size: 30px;">VS</td>
                  <td><strong>NICK KYRGIOS</strong><img src="../IMAGES/Tennis/nick.jpg" alt="" width="50" class="img-fluid rounded-circle"> </td>
                </tr>
              </table>
            </div>
            <h6 class="text-center">MARCH 15TH | 18.25 PM Australia</h6>
          </div>
          <div class="list-group-item text-dark mt-2">
            <div class="d-flex w-100 justify-content-between">
              <table class="table table-borderless">
                <tr>
                  <td><img src="../IMAGES/Tennis/saniamirza.jpg" alt="" width="50" class="img-fluid rounded-circle"><strong>SANIA MIRZA</strong></td>
                  <td class="font-weight-bold" style="font-size: 30px;">VS</td>
                  <td><strong>MARIA SHARAPOVA</strong><img src="../IMAGES/Tennis/sharapova.jpg" alt="" width="50" class="img-fluid rounded-circle"> </td>
                </tr>
              </table>
            </div>
            <h6 class="text-center">MARCH 17TH | 11.45 PM Australia</h6>
          </div>
          <div class="list-group-item text-dark mt-2">
            <div class="d-flex w-100 justify-content-between">
              <table class="table table-borderless">
                <tr>
                  <td><img src="../IMAGES/Tennis/Leonardo_Mayer.jpg" alt="" width="50" class="img-fluid rounded-circle"><strong>LEONARDO MAYER</strong></td>
                  <td class="font-weight-bold" style="font-size: 30px;">VS</td>
                  <td><strong>LEANDER PAES</strong><img src="../IMAGES/Tennis/leander paes.jpg" alt="" width="50" class="img-fluid rounded-circle"> </td>
                </tr>
              </table>
            </div>
            <h6 class="text-center">MARCH 18TH | 11.45 PM Australia</h6>
          </div>
          <div class="list-group-item text-dark mt-2">
            <div class="d-flex w-100 justify-content-between">
              <table class="table table-borderless">
                <tr>
                  <td><img src="../IMAGES/Tennis/maheshbhupathi.jpg" alt="" width="50" class="img-fluid rounded-circle"><strong>MAHESH BHUPATHI</strong></td>
                  <td class="font-weight-bold" style="font-size: 30px;">VS</td>
                  <td><strong>SIMONA HALEP</strong><img src="../IMAGES/Tennis/halep.jpg" alt="" width="50" class="img-fluid rounded-circle"> </td>
                </tr>
              </table>
            </div>
            <h6 class="text-center">MARCH 19TH | 11.45 PM Australia</h6>
          </div>
          </div><!--List Group Ends Here-->
      </div><!--Col-6 Ends Here-->
    </div><!--Row Ends Here-->
    <div class="text-center">
      <a href="bookingtickets.php" class="btn btn-danger mt-5">BOOK TICKETS</a>
    </div>
  </div><!--Container Ends Here-->
</div>
<!--Next Matches Ends Here-->

<div class="container-fluid mt-3 p-5">
<div class="container">
    <h1 class="text-center text-danger">AWARDS</h1>
    <hr class="mx-auto" width="100" color="red" style="border: 2px solid red;">
    <div class="mansonry1">
      <div><img src="../IMAGES/Tennis/Trophy_01.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_02.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_03.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_04.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_05.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_06.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_07.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_08.png" alt="" class="img-fluid"></div>
      <div><img src="../IMAGES/Tennis/Trophy_09.png" alt="" class="img-fluid"></div>
    </div>
</div>
</div>
<!--Awards Ends Here-->

<div class="container-fluid mt-5">
  <h1 class="text-center text-danger">GALLERY</h1>
  <hr class="mx-auto" width="60" color="red" style="border: 2px solid red;">

  <div class="gallery">
    <div class=""><img src="../IMAGES/Tennis/player1(1).jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player2.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player3.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player4.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player5.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player6.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player7.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player8.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player9.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player10.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player11.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player12.jpg" alt="" class="img-fluid"></div>
    <div class=""><img src="../IMAGES/Tennis/player1.jpg" alt="" class="img-fluid"></div>
  </div>
  <div class="text-center">
    <a href="gallery.php" class="btn btn-danger w-25">VIEW MORE</a>
  </div>

</div>
<!--Gallery Ends Here-->

<div class="container-fluid mt-5 p-2">
  <div class="container">
    <h1 class="text-center text-danger">SHOP HERE</h1>
    <hr class="mx-auto" color="red" width="100" style="border: 2px solid red;">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <img src="../IMAGES/Tennis/product-1-300x300.jpg" alt="">
          <div class="">
            <h6>Tennis Ball Basket</h6>
            <span class="float-right">No Reviews</span>
            <small>Tennis Ball</small>
          </div>
          <div class="text-center">
            <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
            <button class="btn btn-dark">$3.00</button>
          </div>
        </div>

        <div class="col-3">
          <img src="../IMAGES/Tennis/product-3-300x300.jpg" alt="">
          <div class="">
            <h6>Tennis Ball Basket</h6>
            <span class="float-right">No Reviews</span>
            <small>Tennis Ball</small>
          </div>
          <div class="text-center">
            <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
            <button class="btn btn-dark">$3.00</button>
          </div>
        </div>

        <div class="col-3">
          <img src="../IMAGES/Tennis/product-6-300x300.jpg" alt="">
          <div class="">
            <h6>Tennis Ball Basket</h6>
            <span class="float-right">No Reviews</span>
            <small>Tennis Ball</small>
          </div>
          <div class="text-center">
            <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
            <button class="btn btn-dark">$3.00</button>
          </div>
        </div>

        <div class="col-3">
          <img src="../IMAGES/Tennis/product10.jpg" class="img-fluid" style="height: 300px;" alt="">
          <div class="">
            <h6>Tennis Ball Basket</h6>
            <span class="float-right">No Reviews</span>
            <small>Tennis Ball</small>
          </div>
          <div class="text-center">
            <button class="btn btn-danger">Add<i class="fas fa-shopping-cart"></i></button>
            <button class="btn btn-dark">$3.00</button>
          </div>
        </div>

    </div><!--Row Ends Here-->
    <div class="text-center mt-5">
      <a href="shop.php" class="btn btn-danger w-25">VIEW MORE</a>
    </div>
    </div>
</div>
</div>
<!---Shop Ends Here-->

<?php 

include('footer.php');
}
else
{
  header('Location:index.php?tennis=success');
}
?>