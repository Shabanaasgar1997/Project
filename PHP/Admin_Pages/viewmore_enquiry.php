<?php
session_start();
error_reporting('viewmore_enquiry.php');
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];

$conn=mysqli_connect("localhost","root","","student");

$page=$_GET['page'];
$requirerecords=5;
if($page==0)
{
	$record_index=0;
}
else
{
   $record_index=$page*$requirerecords-$requirerecords;   //2*5-5=5;
   
}
$select_pagination="select *from enquiry limit $record_index,$requirerecords";
$qry=mysqli_query($conn,$select_pagination);

if(isset($_POST['search']))
{
$search=$_POST['searchbox'];

$select_search="select *from enquiry where name='$search' or email='$search' or id='$search' or country='$search'";     //getting all data from the table
$qry=mysqli_query($conn,$select_search);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">

    <!-- Font-Awsome link -->
    <link rel="stylesheet" href="../../CSS/all.css">

    <!-- jQuery Styles -->
    <link rel="stylesheet" href="../../jQuery/jquery-ui.min.css">

    <!-- jQuery library -->
    <script src="../../JS/jquery-3.4.1.min.js"></script>

    <!---jQuery UI-->
    <script src="../../jQuery/jquery-ui.min.js"></script>
    
    <!-- jS library -->
    <script src="../../JS/bootstrap.min.js"></script>

</head>
<body>
<div class="container mt-2">
<form class="form-inline my-2 my-lg-0 justify-content-end" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="searchbox" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" name="search" type="submit">Search</button>
</form>
</div>
<div class="container-fluid">
    <div class="container mt-5">

    <table class="table table-borderless table-striped">
            <h5 class="text-center text-warning bg-dark p-3">Enquiry Details</h5>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>DETAILS</th>
        </tr>
  
        <?php while($fetchingenquiry=mysqli_fetch_assoc($qry))
        
        {
        
        ?>
        <tr>
            <td><?php echo $fetchingenquiry['id']?></td>
            <td><?php echo $fetchingenquiry['name']?></td>
            <td><?php echo $fetchingenquiry['phone']?></td>
            <td><a href="enquiry_fulldetails.php?enquirydetails=<?php echo $fetchingenquiry['id']?>" class="">Full Details</a></td>
        </tr>
        <?php } ?>
        </table>
    </div>
</div>

<div class="container">
<div class="float-right" style="">
<?php 

$select_for_pagination="select *from enquiry";
$query=mysqli_query($conn,$select_for_pagination);
$total_records=mysqli_num_rows($query);
$pagerecords=ceil($total_records/$requirerecords);
?>


<nav aria-label="Page navigation example">
  <ul class="pagination"> 
  <?php

  for($a=1;$a<=$pagerecords;$a++)
  {
	  
  ?>
    <li class="page-item"><a class="page-link" href="viewmore_enquiry.php?page=<?php echo $a; ?>">
	<?php echo $a; ?></a></li>
	<?php } ?>
  </ul>
</nav>
</div>
</div>

<div class="container">
<a href="Admin_Dash_Board.php" class="btn btn-info">Go Back</a>
</div>

</body>
</html>

<?php } ?>