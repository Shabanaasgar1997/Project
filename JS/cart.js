
function addtocart()
{
var a=parseInt(document.getElementById('addingElementsToCart').value);
document.getElementById('addingElementsToCart').value=++a;
	
document.getElementById('total_result').innerHTML="$"+a*128+".00";// total for selected items
document.getElementById('sub_total').innerHTML="$"+a*128+".00";//sub total for all the selected items
document.getElementById('tax').innerHTML="$"+(a*9)+".00";//tax for single selected items
document.getElementById('shipping_charges').innerHTML="$"+a*4 +".00";//shipping charges of the item
document.getElementById('order_total').innerHTML="$"+ parseInt((a*128)+(a*9)+(a*4))+".00";//entire total of the items

}

function substractingfromcart()
{
var a=parseInt(document.getElementById('addingElementsToCart').value);
if(a>=2)
{
document.getElementById('addingElementsToCart').value=--a;//substracting items
document.getElementById('total_result').innerHTML="$"+(a*(128*a))/a+".00";//altering the total while substracting
document.getElementById('sub_total').innerHTML="$"+a*128+".00";//sub total for all the selected items
document.getElementById('tax').innerHTML="$"+(a*9)+".00";//tax for single selected items
document.getElementById('shipping_charges').innerHTML="$"+a*4 +".00";//shipping charges of the item
document.getElementById('order_total').innerHTML="$"+ parseInt((a*128)+(a*9)+(a*4))+".00";//entire total of the items

}
}