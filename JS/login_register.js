function loginvalidation()
{
var user_login_email_phone=document.getElementById('user_login_email_phone');
var user_login_password=document.getElementById('pswd');

	if(user_login_email_phone.value=="")
	{
		user_login_email_phone.style.border="1px solid red";
		document.getElementById('user_login_email_phone_error').innerHTML="Please Fill The Field";
		document.getElementById('user_login_email_phone_error').style.color="red";
		return false;
	}

	else
	{
		user_login_email_phone.style.border="1px solid green";
		document.getElementById('user_login_email_phone_error').innerHTML="";

	}

	if(user_login_password.value=="")
	{
		user_login_password.style.border="1px solid red";
		document.getElementById('user_login_password_error').innerHTML="Please Fill The Field";
		document.getElementById('user_login_password_error').style.color="red";
		return false;

	}
	else
	{
		user_login_password.style.border="1px solid green";

	}

}
	
function registrationvalidation()
{
	var fname=/^(?=.*?[A-Z])(?=.*?[a-z]).{8,}$/
	var mailid=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
	var psword= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

	var fullname=document.getElementById('fullname');
	var phonenumber=document.getElementById('phonenumber');
	var email=document.getElementById('email');
	var password=document.getElementById('pswd_reg');

	if(fullname.value=="")
	{
		fullname.style.border="1px solid red";
		document.getElementById('fullname_warning').innerHTML="Please Enter Valid Details";
		document.getElementById('fullname_warning').style.color="red";	
		return false;	
	}
	else if(!fname.test(fullname.value))
	{
		fullname.style.border="1px solid red";
		document.getElementById('fullname_warning').innerHTML="First letter should be Capital letter followed by lowercase letter and minimum 8 letters";
		document.getElementById('fullname_warning').style.color="red";
		return false;		
	}
	else
	{
		fullname.style.border="1px solid green";
		document.getElementById('fullname_warning').innerHTML="";

	}

	if(phonenumber.value=="")
	{
		phonenumber.style.border="1px solid red";
		document.getElementById('phonenumber_warning').innerHTML="Please Enter 10 digit Mobile Number";
		document.getElementById('phonenumber_warning').style.color="red";
		return false;
	}
	else
	{
		phonenumber.style.border="1px solid green";
		document.getElementById('phonenumber_warning').innerHTML="";

	}
	if(email.value=="")
	{
		email.style.border="1px solid red";
		document.getElementById('email_warning').innerHTML="Please Enter Valid Details";
		document.getElementById('email_warning').style.color="red"
		return false;
	}
	else if(!mailid.test(email.value))
	{
		email.style.border="1px solid red";
		document.getElementById('email_warning').innerHTML="eg:Abcdegh@gmail.com ";
		document.getElementById('email_warning').style.color="red";
		return false;	
	}
	else
	{
		email.style.border="1px solid green";
		document.getElementById('email_warning').innerHTML="";
	}
	if(password.value=="")
	{
		password.style.border="1px solid red";
		document.getElementById('password_warning').innerHTML="Please Enter Password";
		document.getElementById('password_warning').style.color="red";
		return false;
	}
	else if(!psword.test(password.value))
	{
		password.style.border="1px solid red";
		document.getElementById('password_warning').innerHTML="Password Contains min-8 Should Be Atleast One Uppercase&LowerCase Letter and One Special Character";
		document.getElementById('password_warning').style.color="red";
		return false;
	}
	else
	{
		password.style.border="1px solid green";
		document.getElementById('password_warning').innerHTML="";

	}
}