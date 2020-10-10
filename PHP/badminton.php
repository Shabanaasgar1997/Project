<?php
session_start();
error_reporting('badminton.php');
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
        <img src="../IMAGES/Badminton/news3.jpg" class="d-block w-100" height="600" alt="...">
        <div class="carousel-caption" style="">
        <h1 style="margin-top: -35%;font-size:50px">WAYS TO STRIKE</h1>
        <hr class="mx-auto" width="250px" color="gray" style="border:2px solid gray">
        <h5>The standard badminton racket is 26 inches (66.0 cm) long and weights anywhere from 4.5-5.5 ounces.</h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="../IMAGES/Badminton/news2.jpg" class="d-block w-100" height="600" alt="...">
        <div class="carousel-caption">
        <h1 style="margin-top: -35%;font-size:50px">MASTER THE GRIP</h1>
        <hr class="mx-auto" width="250px" color="gray" style="border:2px solid gray">
        <h5>The grip is how you hold your racket and it will affect every stroke that you hit. You have two basic grips in the game.</h5>
        </div>
        </div>
        <div class="carousel-item">
        <img src="../IMAGES/Badminton/news4.jpg" class="d-block w-100" height="600" alt="...">
        <div class="carousel-caption">
        <h1 style="margin-top: -35%;font-size:50px">THE STANCE OF READINESS</h1>
        <hr class="mx-auto" width="300px" color="gray" style="border:2px solid gray">
        <h5>Be light on your toes, and be ready for the next shot. If your opponent moves you all the way to one side of the court.</h5>
        </div>
        </div>
        <?php include('nav.php');?>
        </div>
        <!--Carousel Inner Ends Here-->
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


<div class="container-fluid mt-5">
<div class="container text-center">
    <h3 class=" ">HERE ARE SOME OF OUR TECHNIQUES</h3>
    <hr class="mx-auto" color="red" width="180px" style="border:2px solid red;">
    <h5>Broad Services For All Badminton Players</h5>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="card p-2 border-0" style="width: 18rem;">
          <i class="mt-3 fas fa-crosshairs card-img-top fa-5x text-center" style="color:#e6557c;"></i>
          <div class="card-body text-center mt-5">
            <h5 class="card-title">STROKES</h5>
            <p class="card-text">Badminton offers a wide variety of basic strokes, and players require a high level of skill to perform all of them effectively. All strokes can be played either forehand or backhand.</p>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card p-2 border-0" style="width: 18rem;">
          <i class="mt-3 fas fa-sync card-img-top fa-5x text-center" style="color:#00b9db;"></i>
          <div class="card-body text-center mt-5">
            <h5 class="card-title">SPIN</h5>
            <p class="card-text">Balls may be spun to alter their bounce or trajectory, and players may slice the ball to produce such spin; but, since the shuttlecock is not allowed to bounce.</p>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card p-2 border-0" style="width: 18rem;">
          <i class="mt-3 fas fa-cog card-img-top fa-5x text-center" style="color:#e8cb7a;"></i>
          <div class="card-body text-center mt-5">
            <h5 class="card-title">BIOMECHANICS</h5>
            <p class="card-text">Badminton biomechanics have not been the subject of extensive scientific study, but some studies confirm the minor role of the wrist in power generation.</p>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card p-2 border-0" style="width: 18rem;">
          <span class="" style="">
          <i class="mt-3 fab fa-empire card-img-top fa-5x text-center" style="color:#9792d4;"></i>
          </span>
          <div class="card-body text-center mt-5">
            <h5 class="card-title">DECEPTION</h5>
            <p class="card-text">Once players have mastered these basic strokes, they can hit the shuttlecock from and to any part of the court, powerfully and softly as required.</p>
          </div>
        </div>
      </div>
    </div>

</div>
</div>


<div class="container-fluid mt-5" style="background-color: #1bbc9b;">
  <div class="container text-center text-white p-5">
  <h2 class="">PLAY, LEARN, AND PRACTICE BADMINTON</h2>
  <hr width="250px" class="mx-auto" color="red" style="border: 2px solid red;">
  <h5>Practice makes man perfect. So, be active to learn the game.</h5>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="card p-2 w-100" style="width: 18rem;">
          <img src="../IMAGES/Badminton/Blog-10-final300.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Smash The Shuttle</h3>
            <p class="card-text">Smashing is when you hit the shuttle with all of your strength at the top of its arc. Aim your free hand up toward the direction of the shuttle for precision, and then swing the racket over your head [...]</p>
            <a href="#" class="btn float-right text-white" style="background-color: #f87a6c;border-bottom: 3px inset #ba4639;">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card p-2 w-100" style="width: 18rem;">
          <img src="../IMAGES/Badminton/Blog-9-final300.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">Slice Your Net Shots</h3>
            <p class="card-text">Because of this, you might think it’s better to avoid net shots when you respond to fast drops, and play lifts instead. But playing a lift from this position imposes huge movement pressure on yourse[...]</p>
            <a href="#" class="btn float-right text-white" style="background-color: #f87a6c;border-bottom: 3px inset #ba4639;">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="card p-2 w-100" style="width: 18rem;">
          <img src="../IMAGES/Badminton/Blog-7-final300.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">The Flick And Drive Serve</h3>
            <p class="card-text">The flick serve. Use this for a quick serve but do so sparingly. Use a forehand or a backhand, acting like you’re going to push the shuttle in a typical low serve, but instead, use your wrist to[...]</p>
            <a href="#" class="btn float-right text-white" style="background-color: #f87a6c;border-bottom: 3px inset #ba4639;">Read More</a>
          </div>
        </div>
      </div>

    </div><!--Row Ends Here-->
  </div><!--Container Ends Here-->

  <div class="container mt-3 pb-5">
  <div class="row">
    <div class="col-4">
      <div class="card p-2 w-100" style="width: 18rem;">
        <img src="../IMAGES/Badminton/Blog-6-final300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Master The High & Low Serve</h3>
          <p class="card-text">There are many ways to hit a badminton serve, from the high serve to the backhand serve. Here are a few serves you will need to know: The high serve. This is a great serve for moving your opponent bac[...]</p>
          <a href="#" class="btn float-right text-white" style="background-color: #f87a6c;border-bottom: 3px inset #ba4639;">Read More</a>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card p-2 w-100" style="width: 18rem;">
        <img src="../IMAGES/Badminton/Blog-5-final300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">How A Player Can Get A Fault</h3>
          <p class="card-text">There are several reasons that a team or player can earn a fault. If the serving team fails to serve the shuttlecock over the net. In badminton, you only get one try on each serve. The only exception [...]</p>
          <a href="#" class="btn float-right text-white" style="background-color: #f87a6c;border-bottom: 3px inset #ba4639;">Read More</a>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card p-2 w-100" style="width: 18rem;">
        <img src="../IMAGES/Badminton/Blog-2-final300.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">The Central Base Position</h3>
          <p class="card-text">When playing singles, you need to be able to cover all parts of the court. This means you must stand in a roughly central base position. This is obvious when you consider the alternatives: You stand[...]</p>
          <a href="#" class="btn float-right text-white" style="background-color: #f87a6c;border-bottom: 3px inset #ba4639;">Read More</a>
        </div>
      </div>
    </div>

  </div>
</div>

</div><!--Container-Fluid Ends Here-->




<div class="container-fluid mt-5">
  <div class="container text-center p-3">
    <h1>THE BEST PLACE TO PRACTICE BADMINTON!</h1>
    <hr width="250px" class="mx-auto" color="red" style="border: 2px solid red;">
    <h5>The best cort in the city just in our club</h5>

    <div class="container mt-5">
      <button class="btn text-white" style="background-color: #f87a6c;border-bottom: 3px inset #ba4639;">All</button>
      <button class="btn text-white" style="background-color:#9792d4;border-bottom: 3px inset #625d99;">Serving</button>
      <button class="btn text-white" style="background-color:#9792d4;border-bottom: 3px inset #625d99;">Scoring</button>
      <button class="btn text-white" style="background-color:#9792d4;border-bottom: 3px inset #625d99;">Court</button>
    </div>
  </div>

    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-2">
        <div class="hexagon">
          <div class="hexagon-inner">
            <div class="hexagon-inner-in">

              
            </div>
          </div>
        </div>
        </div>

        <div class="col-2">
          <div class="hexagon"  style="margin-left:-30px;">
            <div class="hexagon-inner">
              <div class="hexagon-inner-in2">
  
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-2">
          <div class="hexagon" style="margin-left:-60px;">
            <div class="hexagon-inner">
              <div class="hexagon-inner-in3">
  
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-2">
          <div class="hexagon" style="margin-left:-90px;">
            <div class="hexagon-inner">
              <div class="hexagon-inner-in4">
  
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-2">
          <div class="hexagon" style="margin-left:-120px;">
            <div class="hexagon-inner">
              <div class="hexagon-inner-in5">
  
                
              </div>
            </div>
          </div>
        </div>

      </div><!--Row Ending-->

      <div class="container" style="margin-top: 160px;">
        <div class="row" style="margin-bottom: 300px;">
          <div class="col-3">
            <div class="hexa">
              <div class="hexa-in">
                <div class="hexa-img">

                </div>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="hexa" style="margin-left: -90px;">
              <div class="hexa-in">
                <div class="hexa-img2">

                </div>
              </div>
          </div>
        </div>

          <div class="col-3" style="margin-left:-184px;">
            <div class="hexa">
              <div class="hexa-in">
                <div class="hexa-img3">

                </div>
              </div>
          </div>
        </div>
          <div class="col-3">
            <div class="hexa" style="margin-left:-100px ;">
              <div class="hexa-in">
                <div class="hexa-img4">

                </div>
              </div>
          </div>
        </div>
    </div><!--Row Ends Here-->
</div><!--Container Ends Here-->
</div><!--Container-Fluid Ends Here-->

<div class="container-fluid" style="background-color: #1bbc9b;">
  <div class="container p-5 text-center text-white">
    <h1>BADMINTON PURE EMOTIONS FOR YOUR LIFE</h1>
    <hr width="200px" color="red" class="mx-auto" style="border:2px solid red;">
    <h5>See the most exciting match here!</h5>
    <div class="container mt-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/_AkRAAI9h84" frameborder="0"
       allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border: 3px inset red;">
      </iframe>
    </div>
  </div>
</div>

<div class="container-fluid mt-5 mb-5">
  <div class="container text-center">
    <h1>MEET OUR TEAM PLAYERS</h1>
    <hr width="180px" color="red" class="mx-auto" style="border: 2px solid red;">
    <h5>Practice with our expert's team member to improve your game</h5>
    <div class="container mt-5">
      <div class="row">
        <div class="col-3">

          <div class="card p-2" style="width: 18rem;height:280px;">
            <img src="../IMAGES/Badminton/saina-nehwal.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h4 class="card-title">SAINA NEHWAL</h4>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card p-2" style="width: 18rem;height:280px;">
            <img src="../IMAGES/Badminton/pvsindhu.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h4 class="card-title">PV SINDHU</h4>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card p-2" style="width: 18rem;height:280px;">
            <img src="../IMAGES/Badminton/srikanthkidambi.jpg" class="card-img-top img-fluid" style="height: 200px;" alt="...">
            <div class="card-body">
              <h4 class="card-title">SRIKANTH KIDAMBI</h4>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card p-2" style="width: 18rem;height:280px;">
            <img src="../IMAGES/Badminton/kashyap.jpg" class="card-img-top img-fluid" style="height: 200px;"  alt="...">
            <div class="card-body">
              <h4 class="card-title">PARUPALLI KASHYAP</h4>
            </div>
          </div>
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
  header('Location:index.php?badminton=success');
}
?>