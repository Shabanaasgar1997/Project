<?php
session_start();
error_reporting('Profile_Fetch.php');
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
<div class="container-fluid  sticky-top">
	<?php 
       include('nav.php');
	?>
</div>
	<div class="container mt-5">
	<div class="container text-center">
	<img src="<?php echo $fetch['photo']; ?>" class="rounded-circle" width="100" height="100" alt="">
	</div>
	<h5 class="text-center">PROFILE</h5>
	<form  method="post" enctype="multipart/form-data">
	<table class="table table-striped mt-3 table-borderless">
		<tr>
			<th>FULLNAME</th>
			<td><?php echo $fetch['fullname'];?></td>
		</tr>

		<tr>
			<th>E-MAIL ADDRESS</th>
			<td><?php echo $fetch['email_id'];?></td>
		</tr>

		<tr>
			<th>PHONE NUMBER</th>
			<td><?php echo $fetch['phonenumber'];?></td>
		</tr>

		<tr>
			<th>PASSWORD</th>
			<td>
			<input type="password" readonly id="pswd_profile" value="<?php echo $fetch['password'];?>" style="border:none;outline:none;background-color:transparent;" />

			<span id="icon_eye_profile" onclick="icon_change_profile()"><i class="fas fa-eye"></i></span>
			<script>
			function icon_change_profile()
			{
				var pswd=document.getElementById('pswd_profile');

				if(pswd.type=='password')
				{
					pswd.type="text";
					document.getElementById('icon_eye_profile').innerHTML="<i class='fas fa-eye-slash'></i>"
				}
				else
				{
					pswd.type="password";
					document.getElementById('icon_eye_profile').innerHTML="<i class='fas fa-eye'></i>"					
				}
			}
			</script>
			</td>
		</tr>
		
		<tr>
			<th>GENDER</th>
			<td> <?php echo $fetch['gender']; ?>    </td>
		</tr>

		<tr>
			<th>DATE OF BIRTH</th>
			<td><?php echo $fetch['dob']; ?>  </td>
            <script>  
            $( function() {
            $( "#dateOfBirth" ).datepicker();
            } );
            </script>
		</tr>

		<tr>
			<th>LANGUAGES</th>
			<td><?php echo $fetch['languages']; ?></td>
		</tr>

	</table>
	</form>
	<a href="edit.php" class="btn btn-info float-right">EDIT</a>
	</div>
	<!----
	<script>
	
	function icon_change_profile()
			{
				var password_profile=document.getElementById('pswd_profile');
				if(password_profile.type==password)
				{
					password_profile.type="text";
					document.getElementById(icon_eye_profile).innerHTML="<i class='fas fa-eye-slash'></i>"
				}
				else
				{
					password_profile.type="password";
					document.getElementById(icon_eye_profile).innerHTML="<i class='fas fa-eye'></i>"

				}
			}
			
	
	</script>
	--->
<?php 
}

?>