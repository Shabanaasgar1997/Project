
function adminvalidation()
{
    var admin_login_email_phone=document.getElementById('admin_login_email_phone');
    var admin_login_password=document.getElementById('pswd');
    
        if(admin_login_email_phone.value=="")
        {
            admin_login_email_phone.style.border="1px solid red";
            document.getElementById('admin_login_email_phone_error').innerHTML="Please Fill The Field";
            document.getElementById('admin_login_email_phone_error').style.color="red";
            return false;
        }
    
        else
        {
            admin_login_email_phone.style.border="1px solid green";
            document.getElementById('admin_login_email_phone_error').innerHTML="";
    
        }
    
        if(admin_login_password.value=="")
        {
            admin_login_password.style.border="1px solid red";
            document.getElementById('admin_login_password_error').innerHTML="Please Fill The Field";
            document.getElementById('admin_login_password_error').style.color="red";
            return false;
    
        }
        else
        {
            admin_login_password.style.border="1px solid green";
            document.getElementById('admin_login_password_error').innerHTML="";
        }
    
    }
    



