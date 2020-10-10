<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];
$conn=mysqli_connect("localhost","root","","student");
$select="select *from admin where id='$id' or email_id='$email'";
$qry=mysqli_query($conn,$select);
$fetch=mysqli_fetch_assoc($qry);

$productselect="select *from productsorder limit 3";
$query=mysqli_query($conn,$productselect);

$enquiryselect="select *from enquiry limit 3";
$enquiryquery=mysqli_query($conn,$enquiryselect);

$sports="select *from sports";
$query_sports=mysqli_query($conn,$sports);
$total_sports=mysqli_num_rows($query_sports);

$products_order="select *from productsorder";
$query_orders=mysqli_query($conn,$products_order);
$total_products=mysqli_num_rows($query_orders);

$n="select *from enquiry ";
$enquiryquery_select=mysqli_query($conn,$n);
$total_enquiry=mysqli_num_rows($enquiryquery_select);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
	  <link rel="icon" type="image/png" href="../../IMAGES/player.png" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <!-- Font-Awsome link -->
    <link rel="stylesheet" href="../CSS/all.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'India', 'Telangana', 'Andhrapradesh', 'Kerala', 'TamilNadu', 'Maharashtra'],
          ['2016/17',  20,      1110,        615,             968,           215,      609.4],
          ['2017/18',  2556,      420,           525,             326,          736,      856],
          ['2018/19',  100,      691,         629,             1026,          366,      569.6],
          ['2018/19',  4000,      700,         800,             826,          966,      789.6]

        ]);

        var options = {
          title : 'Monthly Visits by States',
          vAxis: {title: 'New Users'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {3: {type: 'line'}}        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Visit',     11],
          ['Sales',      2],
          ['New Users',  2],
          ['Enquiry', 2],
          ['login',    7]
        ]);

        var options = {
          title: 'Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>
</head>
<body>
<div class="container-fluid sticky-top">
    <div class=" bg-dark p-3 ">
    <a class="text-light"><?php echo $fetch['fullname'];?></a>
    <span class="float-right">
    <a href="adminlogout.php" class="text-white">LOGOUT</a>
    </span>
    </div>
</div>

<div class="container-fluid mt-2">  
<div class="row">
    <div class="col-2 ">
    <div class="fixed-top" style="width:16%;margin-top:60px;margin-left:15px">
    <nav class=" bg-info " style="height:600px">

        <ul class="list-unstyled p-5">
        <li><a href="editprofile.php" class="position-relative">
        <img src="../../IMAGES/player.png" class="rounded-circle border p-2" alt="ProfilePhoto" width="100" height="100">
        <span class="card-img-overlay ml-5 mt-1">
        <i class="fas fa-edit text-danger"></i></span></a></li>
        <li class="pt-3">
        <a class=" text-white" href="Admin_Dash_Board.php">DashBoard</a>
        </li>
        <li class="pt-3">
        <a class=" text-white" href="viewmore_orders.php">Orders</a>
        </li>

        <li class="pt-3">
        <a class=" text-white" href="viewmore_enquiry.php">Enquiry</a>
        </li>
        <li class="pt-3">
        <a href="User_Details.php" class=" text-white">User Details</a>
        </li>
        </ul>
    </nav>
    </div>
    </div>
    <div class="col-10">
          <div id="chart_div"></div>
          <div id="piechart" style=""></div>

         <div class="row">
           <div class="col-6">
           <h5 class="text-center bg-dark text-info p-2">Number Of Users</h5>
           <h1 class="text-center m-5 number_count" style="font-size:60px">
           <?php 
          echo $total_sports+$total_products+$total_enquiry;
            ?></h1>
            <table class="table table-borderless">
              <tr>
                <th class="text-danger">Number Of Users</th>
                <th class="text-success">Number Of Orders</th>
                <th class="text-warning">Number Of Enquiries</th>
              </tr>
              <tr class="text-center">
                <td class="text-danger font-weight-bold"><h2 class="number_count"><?php echo $total_sports;?></h2></td>
                <td class="text-success font-weight-bold"><h2 class="number_count"><?php echo $total_products;?></h2></td>
                <td class="text-warning font-weight-bold"><h2 class="number_count"><?php echo $total_enquiry;?></h2></td>
              </tr>
            </table>
            <script>
                $(".number_count").counterUp({delay:2});
            </script>
            </div>
           <div class="col-6">
          
        <table class="table table-borderless table-striped">
        <h5 class="text-success text-center bg-dark p-2">Order Details</h5>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
        <?php
        
        
        while($fetchingorders=mysqli_fetch_assoc($query))
        
        {
        
        ?>
        <tr>
            <td><?php echo $fetchingorders['id']; ?></td>
            <td><?php echo $fetchingorders['consumername']; ?></td>
            <td><?php echo $fetchingorders['productname']; ?></td>
            <td><?php echo $fetchingorders['price']; ?></td>
            <td><a href="order_fulldetails.php?fulldetails=<?php echo $fetchingorders['id']?>" class="">Full Details</a></td>

        </tr>
        <?php } 
        ?>
        <tr>
        <td colspan="5" align="right"><a class="btn btn-info"  href="viewmore_orders.php">View More..</a></td>
        </tr>
        </table>
        </div>
         </div> 
        <table class="table table-borderless table-striped">
            <h5 class="text-center text-warning bg-dark p-3">Enquiry Details</h5>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>DETAILS</th>
        </tr>
  
        <?php 
        
       
        while($fetchingenquiry=mysqli_fetch_assoc($enquiryquery))
        
        {
        
        ?>
        <tr>
            <td><?php echo $fetchingenquiry['id']; ?></td>
            <td><?php echo $fetchingenquiry['name']; ?></td>
            <td><?php echo $fetchingenquiry['phone']; ?></td>
            <td><a href="enquiry_fulldetails.php?enquirydetails=<?php echo $fetchingenquiry['id']?>" class="">Full Details</a></td>

        </tr>
        <?php } ?>
        <tr>
        <td colspan="5" align="right"><a class="btn btn-info"  href="viewmore_enquiry.php">View More..</a></td>
        </tr>
        </table>

  
</div>
</div>
</div>
</body>
</html>
<?php } ?>