<?php
session_start();
error_reporting('User_Details.php');
if(isset($_SESSION['email']) && isset($_SESSION['pswd']))
{
$id=$_SESSION['id'];
$email=$_SESSION['email'];


$page=$_GET['page'];
$connecting=mysqli_connect("localhost","root","","student");
$requirerecords=5;
if($page==0)
{
	$record_index=0;
}
else
{
   $record_index=$page*$requirerecords-$requirerecords;   //2*5-5=5;
   
}
$select_pagination="select *from sports limit $record_index,$requirerecords";
$qry=mysqli_query($connecting,$select_pagination);

if(isset($_POST['search']))
{
$search=$_POST['searchbox'];

$select_search="select *from sports where fullname='$search' or email_id='$search' or id='$search' or gender='$search' or phonenumber='$search' ";     //getting all data from the table
$qry=mysqli_query($connecting,$select_search);

}



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Getting Data</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <!-- Font-Awsome link -->
	<link rel="stylesheet" href="../CSS/all.css">

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

<div class="container">
<div class="float-right m-2">
	<form class="form-inline my-2 my-lg-0" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" id="search" name="searchbox" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" name="search" type="submit">Search</button>
    </form>
	<div id="result"></div>
</div>	
<table class="table table-striped" style="">
<tr>
	<th>ID</th>
	<th>FULLNAME</th>
	<th>PHONE NUMBER</th>
	
	<th colspan="3" class="text-center">
	<a class="btn btn-warning text-white">ACTIONS</a>
	<a class="btn btn-info" href="Admin_Dash_Board.php">Go To Back</a>
	</th>

</tr>

<?php while($fetch=mysqli_fetch_assoc($qry))
{

?>
<tr>
		<td><?php echo $fetch['id'];?></td>

		<td><?php echo $fetch['fullname'];?></td>
		
		<td><?php echo $fetch['phonenumber'];?></td>
	
	
	
		<td class="text-center">
		
		<a href="view.php?view=<?php echo $fetch['id'];?>" class="btn btn-primary">VIEW</a>
		<a href="edit.php?edit=<?php echo $fetch['id'];?>" class="btn btn-success">Edit</a>
		<a href="remove.php?remove=<?php echo $fetch['id'];?>" class="btn btn-danger" onclick="return confirm('Do You Want To Delete It?');">Remove</a>
		
		</td>
		
		
</tr>		
	<?php } ?>
</table>
</div>

<div class="container">
<div class="float-right" style="">
<?php 

$select_for_pagination="select *from sports";
$query=mysqli_query($connecting,$select_for_pagination);
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
    <li class="page-item"><a class="page-link" href="User_Details.php?page=<?php echo $a; ?>">
	<?php echo $a; ?></a></li>
	<?php } ?>
  </ul>
</nav>
</div>
</div>
<script>
$(document).ready(function(e){
	$('#search').keyup(function(){
		
	});
});

</script>
</body>
</html>


<?php
}


else
{
	echo mysqli_error('User_Details.php')."error";
}
?>