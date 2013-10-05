$("#page5form").submit(function()
{
var is_valid = 1;
//firstname
var x=document.forms["coldRegistrationForm"]["firstName"].value;
if (x==null || x=="")
  {
  is_valid=0;
    document.getElementById('firstName-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
	document.getElementById('firstName-coldRegistrationForm-error').innerHTML = "Please enter a value.";
  }
  else
  {
	document.getElementById('firstName-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }
 //lastname
 var x=document.forms["coldRegistrationForm"]["lastName"].value;
if (x==null || x=="")
  {
  is_valid=0;
	document.getElementById('lastName-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
	document.getElementById('lastName-coldRegistrationForm-error').innerHTML = "Please enter a value.";
  } 
 else
  {
	document.getElementById('lastName-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }  
//email validation
//emptycheck
 var x=document.forms["coldRegistrationForm"]["email"].value;
 var atpos=x.indexOf("@");
 var dotpos=x.lastIndexOf(".");
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('email-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
  document.getElementById('email-coldRegistrationForm-error').innerHTML = "Please enter a value.";
  }  
 
//length check
else if ( x.length < 3)
{
	is_valid=0;
    document.getElementById('email-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
    document.getElementById('email-coldRegistrationForm-error').innerHTML = "The text you provided is too short (the minimum length is 3 characters, your text contains "+x.length+" characters).";
}

//validity check
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  is_valid=0;
    document.getElementById('email-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
    document.getElementById('email-coldRegistrationForm-error').innerHTML = "Please enter a valid email address.";
  }
   else
  {
	document.getElementById('email-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }

 //password
 
  var x=document.forms["coldRegistrationForm"]["password"].value;
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('password-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
  document.getElementById('password-coldRegistrationForm-error').innerHTML = "Please enter a password.";
  }  
else if ( x.length < 6)
{
	is_valid=0;
	document.getElementById('password-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
	document.getElementById('password-coldRegistrationForm-error').innerHTML = "The password you provided must have at least 6 characters.";
}
 else
  {
	document.getElementById('password-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }
  
if(is_valid==0)
{
document.getElementById('register-global-error').style.display = "block";
contentString = '<div class="alert attention">'+'<p><strong>There were one or more errors in your submission. Please correct the marked fields below.</strong></p>'+'</div>';
  $('#register-global-error').html(contentString);
;
//document.getElementById('register-global-error').write ("<div class="alert attention"><p><strong>There were one or more errors in you submission. Please correct the marked fields below.</strong></p></div>");
return false;
}

document.getElementById('register-global-error').style.display = "none"; 
return true;
  
}
)



$("#yui-gen2").submit(function()
{
var is_valid = 1;
//firstname
var x=document.forms["coldRegistrationForm"]["firstName"].value;
if (x==null || x=="")
  {
  is_valid=0;
    document.getElementById('firstName-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
  document.getElementById('firstName-coldRegistrationForm-error').innerHTML = "Please enter a first name.";
  }
  else
  {
  document.getElementById('firstName-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }
 //lastname
 var x=document.forms["coldRegistrationForm"]["lastName"].value;
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('lastName-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
  document.getElementById('lastName-coldRegistrationForm-error').innerHTML = "Please enter a last name.";
  } 
 else
  {
  document.getElementById('lastName-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }  
//email validation
//emptycheck
 var x=document.forms["coldRegistrationForm"]["email"].value;
 var atpos=x.indexOf("@");
 var dotpos=x.lastIndexOf(".");
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('email-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
  document.getElementById('email-coldRegistrationForm-error').innerHTML = "Please enter a valid email address.";
  }  
 
//length check
else if ( x.length < 3)
{
  is_valid=0;
    document.getElementById('email-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
    document.getElementById('email-coldRegistrationForm-error').innerHTML = "The text you provided is too short (the minimum length is 3 characters, your text contains "+x.length+" characters).";
}

//validity check
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  is_valid=0;
    document.getElementById('email-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
    document.getElementById('email-coldRegistrationForm-error').innerHTML = "Please enter a valid email address.";
  }
   else
  {
  document.getElementById('email-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }

 //password
 
  var x=document.forms["coldRegistrationForm"]["password"].value;
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('password-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
  document.getElementById('password-coldRegistrationForm-error').innerHTML = "Please enter a password.";
  }  
else if ( x.length < 6)
{
  is_valid=0;
  document.getElementById('password-coldRegistrationForm-error').style.display = "block"; // show body1 div tag
  document.getElementById('password-coldRegistrationForm-error').innerHTML = "The password you provided must have at least 6 characters.";
}
 else
  {
  document.getElementById('password-coldRegistrationForm-error').style.display = "none"; // hide body div tag
  }
  
if(is_valid==0)
{
document.getElementById('global-error').style.display = "block";
contentString = '<div class="alert error">'+'<p><strong>Please correct the marked field(s) below.</strong></p>'+'</div>';
  $('#global-error').html(contentString);
;
//document.getElementById('register-global-error').write ("<div class="alert attention"><p><strong>There were one or more errors in you submission. Please correct the marked fields below.</strong></p></div>");
return false;
}

document.getElementById('global-error').style.display = "none"; 
return true;
  
}
)


$("#page6login").submit(function()
{
var is_valid = 1;
//email validation
//emptycheck
 var x=document.forms["login"]["session_key"].value;
 var atpos=x.indexOf("@");
 var dotpos=x.lastIndexOf(".");
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('session_key-login-error').style.display = "block"; // show body1 div tag
  document.getElementById('session_key-login-error').innerHTML = "Please enter a value.";
  }  
 
//length check
else if ( x.length < 3)
{
  is_valid=0;
    document.getElementById('session_key-login-error').style.display = "block"; // show body1 div tag
    document.getElementById('session_key-login-error').innerHTML = "The text you provided is too short (the minimum length is 3 characters, your text contains "+x.length+" characters).";
}

//validity check
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  is_valid=0;
    document.getElementById('session_key-login-error').style.display = "block"; // show body1 div tag
    document.getElementById('session_key-login-error').innerHTML = "Please enter a valid email address.";
  }
   else
  {
  document.getElementById('session_key-login-error').style.display = "none"; // hide body div tag
  }

 //password
 
  var x=document.forms["login"]["session_password"].value;
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('session_password-login-error').style.display = "block"; // show body1 div tag
  document.getElementById('session_password-login-error').innerHTML = "Please enter a password.";
  }  
else if ( x.length < 6)
{
  is_valid=0;
  document.getElementById('session_password-login-error').style.display = "block"; // show body1 div tag
  document.getElementById('session_password-login-error').innerHTML = "The password you provided must have at least 6 characters.";
}
 else
  {
  document.getElementById('session_password-login-error').style.display = "none"; // hide body div tag
  }
  
if(is_valid==0)
{
document.getElementById('yui-gen0').style.display = "block";
contentString = '<div class="alert error" >'+'<p><strong>There were one or more errors in your submission. Please correct the marked fields below.</strong></p>'+'</div>';
  $('#yui-gen0').html(contentString);
;
//document.getElementById('register-global-error').write ("<div class="alert attention"><p><strong>There were one or more errors in you submission. Please correct the marked fields below.</strong></p></div>");
return false;
}

document.getElementById('yui-gen0').style.display = "none"; 
return true;
  
}
)



$("#page2resetpass").submit(function()
{
var is_valid = 1;
//email validation
//emptycheck
 var x=document.forms["requestPasswordReset"]["email"].value;
 var atpos=x.indexOf("@");
 var dotpos=x.lastIndexOf(".");
if (x==null || x=="")
  {
  is_valid=0;
  document.getElementById('email-requestPasswordReset-error').style.display = "block"; // show body1 div tag
  document.getElementById('email-requestPasswordReset-error').innerHTML = "Please enter a value.";
  }  
 
//length check
else if ( x.length < 3)
{
  is_valid=0;
    document.getElementById('email-requestPasswordReset-error').style.display = "block"; // show body1 div tag
    document.getElementById('email-requestPasswordReset-error').innerHTML = "The text you provided is too short (the minimum length is 3 characters, your text contains "+x.length+" characters).";
}

//validity check
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  is_valid=0;
    document.getElementById('email-requestPasswordReset-error').style.display = "block"; // show body1 div tag
    document.getElementById('email-requestPasswordReset-error').innerHTML = "Please enter a valid email address.";
  }
   else
  {
  document.getElementById('email-requestPasswordReset-error').style.display = "none"; // hide body div tag
  }

 if(is_valid==0)
{
document.getElementById('global-error').style.display = "block";
contentString = '<div class="alert error" >'+'<p><strong>There were one or more errors in your submission. Please correct the marked fields below.</strong></p>'+'</div>';
  $('#global-error').html(contentString);
;
//document.getElementById('register-global-error').write ("<div class="alert attention"><p><strong>There were one or more errors in you submission. Please correct the marked fields below.</strong></p></div>");
return false;
}

document.getElementById('global-error').style.display = "none"; 
return true;
  
}
)


