<?php
session_start();
error_reporting('viewmore_orders.php');
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
$select_pagination="select *from productsorder limit $record_index,$requirerecords";
$qry=mysqli_query($conn,$select_pagination);

if(isset($_POST['search']))
{
$search=$_POST['searchbox'];

$select_search="select *from productsorder where consumername='$search' or consumerphonenumber='$search' or id='$search' or productname='$search'";     //getting all data from the table
$qry=mysqli_query($conn,$select_search);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <!-- Font-Awsome link -->
    <link rel="stylesheet" href="../../CSS/all.css">
</head>
<body>
<div class="container mt-2">
<form class="form-inline my-2 my-lg-0 justify-content-end" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="searchbox" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" name="search" type="submit" >Search</button>
</form>
</div>
<div class="container-fluid">
<div class="container mt-3">
<table class="table table-borderless table-striped">
        <h5 class="text-success text-center bg-dark p-2">Order Details</h5>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
        <?php while($fetchingorders=mysqli_fetch_assoc($qry))
        
        {
        
        ?>
        <tr>
            <td><?php echo $fetchingorders['id'];?></td>
            <td><?php echo $fetchingorders['consumername']?></td>
            <td><?php echo $fetchingorders['productname']?></td>
            <td><?php echo $fetchingorders['price']?></td>
            <td> <a href="order_fulldetails.php?fulldetails=<?php echo $fetchingorders['id']?>" class="">Full Details</a></td>

        </tr>
        <?php } ?>
        <tr>
        </table>
</div>
</div>

<div class="container">
<div class="float-right" style="">
<?php 

$select_for_pagination="select *from productsorder";
$query=mysqli_query($conn,$select_for_pagination);
$total_records=mysqli_num_rows($query);
$pagerecords=ceil($total_records/$requirerecords);
?>


<nav aria-label="Page navigation example">
  <ul class="pagination"> 
  <?php
  #function pageChange()
  #{
  for($a=1;$a<=$pagerecords;$a++)
  {
	  
  ?>
    <li class="page-item"><a class="page-link" href="viewmore_orders.php?page=<?php echo $a; ?>">
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