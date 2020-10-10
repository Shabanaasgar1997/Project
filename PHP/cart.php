<?php 
session_start();
error_reporting('cart.php');
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
<div class="container-fluid"><?php include('nav.php');?></div>
<div class="container-fluid">
<div class="">
    <img src="../IMAGES/Shopping Cart/banner.jpg" class="img-fluid" alt="" style="width:100%;height:500px;"/>
	<div class="text-center" >
	<h1 class="text-center text-danger font-weight-bold">Shopping Cart</h1>
	<h6 class="text-warning" style="">HOME/SHOPPING CART</h6>
    </div>
</div>

<div class="container" style="">
   <table class="table">
   
     <tr>
      <th scope="col">Products</th>
      <th scope="col">Name Of Products</th>
      <th scope="col">Price</th>
      <th scope="col" class="text-center">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Cart</th>
    </tr>
	
<tr id="first_row">
      <td scope="col"><img src="../IMAGES/Shopping Cart/1.jfif" alt="" height="80px"/></td>
      <td class="pt-5" scope="col" >Adidas</td>
      <td class="pt-5" scope="col">$128.00</td>
	  
	
	  <td class="pt-5 text-center">
	  <input type="text" class="w-25 border-0 text-center" id="addingElementsToCart" value="1"  />
	  <button class="btn btn-danger" onclick="addtocart()">+</button>
	  <button class="btn btn-dark" onclick="substractingfromcart()">-</button>
	  </td>
      <td class="pt-5" id="total_result">$128.00</td>
      <td class="pt-5"><i class="fa fa-trash-alt" id="trash" onclick="removingitem()"></i></td>
</tr>


<tr>
      <td scope="col text-center"><img src="../IMAGES/Shopping Cart/2.jfif" alt="" height="80px"/></td>
      <td class="pt-5" scope="col">Nike</td>
      <td class="pt-5" scope="col">$128.00</td>
	  
       <td class="pt-5 text-center">
	 <input type="text" class="w-25 border-0 text-center" id="addingElements_ToCart" value="1"  />
	  <button class="btn btn-danger">+</button>
	  <button class="btn btn-dark">-</button>
	  </td>
	  
      <td class="pt-5" scope="col">$128.00</td>
      <td class="pt-5" scope="col"><i class="fa fa-trash-alt"></i></td>
</tr>


<tr>
      <td scope="col"><img src="../IMAGES/Shopping Cart/3.jfif" alt="" height="80px"/></td>
      <td class="pt-5" scope="col">Puma</td>
      <td class="pt-5" scope="col">$128.00</td>
	  
        <td class="pt-5 text-center">
	   <input type="text" class="w-25 border-0 text-center" value="1"  />
	  <button class="btn btn-danger">+</button>
	  <button class="btn btn-dark">-</button>
	  </td>
	  
      <td class="pt-5" scope="col">$128.00</td>
      <td class="pt-5" scope="col"><i class="fa fa-trash-alt"></i></td>
</tr>


<tr>
      <td scope="col"><img src="../IMAGES/Shopping Cart/4.jpg" alt="" height="80px"/></td>
      <td class="pt-5" scope="col">Armour</td>
      <td class="pt-5" scope="col">$128.00</td>
	  
       <td class="pt-5 text-center">
	  <input type="text" class="w-25 border-0 text-center" value="1"  /> 
	  <button class="btn btn-danger">+</button>
	  <button class="btn btn-dark">-</button>
	  </td>
	  
      <td class="pt-5" scope="col">$128.00</td>
      <td class="pt-5" scope="col"><i class="fa fa-trash-alt"></i></td>
</tr>

<tr>
      <td scope="col"><img src="../IMAGES/Shopping Cart/5.png" alt="" height="80px"/></td>
      <td class="pt-5" scope="col">DKS</td>
      <td class="pt-5" scope="col">$128.00</td>
	  
       <td class="pt-5 text-center">
	 <input type="text" class="w-25 border-0 text-center" value="1"  />
	  <button class="btn btn-danger">+</button>
	  <button class="btn btn-dark">-</button>
	  </td>
	  
      <td class="pt-5" scope="col">$128.00</td>
      <td class="pt-5" scope="col"><i class="fa fa-trash-alt"></i></td>
</tr>

<tr class="">
   <td colspan="6" align="right">
   <button class="btn btn-info m-2 shadow">Update</button>
   <button class="btn text-white m-2 shadow" style="background:#fe5722">CheckOut</button>
   </td>
</tr>

</table>
</div>

<div class="container" style="margin-left:700px;width:500px;">
<h3 style="background:#fe5722;font-size:18px;" class="text-white p-3 w-75 text-center shadow">CART TOTAL</h3>

<table class="table table-borderless mt-3">
      <thead>
        <tr>
          <th>Sub Total</th>
          <td id="sub_total">$0.00</td>
         
        </tr>
      </thead>
        <tr>
          <th>Tax</th>
          <td id="tax">$9.00</td>
        
        </tr>
        <tr style="border-bottom:1px solid black;">
          <th>Shipping</th>
          <td id="shipping_charges">$4.00</td>
        </tr>

        <tr>
            <th>Order Total</th>
            <td id="order_total">0.00</td>
          </tr>
          <tr>
           <td class="text-center"><button class="btn btn-info shadow w-75">Payment</button></td>
          </tr>  
          <tr>
            <td class="text-center"><button class="btn btn-info shadow w-75">Continue Shopping</button></td> 
          </tr> 
    </table>
    </div>
</div>	
<?php } ?>