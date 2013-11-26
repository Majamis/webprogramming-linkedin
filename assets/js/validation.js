var vall=1;
  var std_set=1;
  var looking_industry=1;
  var adv_search=1;
if(document.getElementById('motivation'))
{
  
  document.getElementById('EmpLiOne').style.display = "block";
  document.getElementById('EmpLiTwo').style.display = "block";
  document.getElementById('EmpLiThree').style.display = "block";
  document.getElementById('employedProfileForm_industry').style.display = "none";
  document.getElementById('JobLiOne').style.display = "none";
  document.getElementById('JobLiTwo').style.display = "none";
  document.getElementById('JobLiThree').style.display = "none";
  document.getElementById('lookingProfileForm_industry').style.display = "none";
  document.getElementById('JobLiFive').style.display = "none";
  document.getElementById('StdLiOne').style.display = "none"; 
  document.getElementById('StdLiTwo').style.display = "none";
  document.getElementById('age').style.display = "none";
  
  
  $("#selfEmployed-employeeCompany-employedProfileForm").click(function(){
    document.getElementById('employedProfileForm_industry').style.display = "none";
    if(vall==1)
    {
      vall=0;
      document.getElementById('employedProfileForm_industry').style.display = "block";
      document.getElementById('EmpLiThree').style.display = "none";
     }
     else if(vall==0)
     {
      vall=1;
        document.getElementById('employedProfileForm_industry').style.display = "none";
      document.getElementById('EmpLiThree').style.display = "block";
     }

  })

$("#employed-btn").click(function(){
  document.getElementById('EmpLiOne').style.display = "block";
  document.getElementById('EmpLiTwo').style.display = "block";
  document.getElementById('EmpLiThree').style.display = "block";
  document.getElementById('employedProfileForm_industry').style.display = "none";
  //document.getElementById('employedProfileForm_industry').style.display = "block";
  document.getElementById('JobLiOne').style.display = "none";
  document.getElementById('JobLiTwo').style.display = "none";
  document.getElementById('JobLiThree').style.display = "none";
  document.getElementById('lookingProfileForm_industry').style.display = "none";
  document.getElementById('JobLiFive').style.display = "none";
  document.getElementById('StdLiOne').style.display = "none"; 
  document.getElementById('StdLiTwo').style.display = "none";
  document.getElementById('age').style.display = "none";


})
$("#looking-btn").click(function(){

  document.getElementById('EmpLiOne').style.display = "none";
  document.getElementById('EmpLiTwo').style.display = "none";
  document.getElementById('EmpLiThree').style.display = "none";
  document.getElementById('employedProfileForm_industry').style.display = "none";
  document.getElementById('JobLiOne').style.display = "block";
  document.getElementById('JobLiTwo').style.display = "block";
  document.getElementById('JobLiThree').style.display = "block";
  document.getElementById('lookingProfileForm_industry').style.display = "none";
  document.getElementById('JobLiFive').style.display = "block";
  document.getElementById('StdLiOne').style.display = "none"; 
  document.getElementById('StdLiTwo').style.display = "none";
  document.getElementById('age').style.display = "none";



})

$("#selfEmployed-employeeCompany-lookingProfileForm").click(function(){
  document.getElementById('lookingProfileForm_industry').style.display = "none";
  if(looking_industry==1)
  {
    looking_industry=0;
  document.getElementById('lookingProfileForm_industry').style.display = "block";
  document.getElementById('JobLiThree').style.display = "none";
  document.getElementById('JobLiFive').style.display = "block";
  }
  else if(looking_industry==0)
  {
    looking_industry=1;
    document.getElementById('JobLiThree').style.display = "none";
  document.getElementById('lookingProfileForm_industry').style.display = "none";
  document.getElementById('JobLiThree').style.display = "block";
  
  document.getElementById('JobLiFive').style.display = "block";
  }

})

$("#student-btn").click(function(){
  document.getElementById('EmpLiOne').style.display = "none";
  document.getElementById('EmpLiTwo').style.display = "none";
  document.getElementById('EmpLiThree').style.display = "none";
  document.getElementById('employedProfileForm_industry').style.display = "none";
  document.getElementById('JobLiOne').style.display = "none";
  document.getElementById('JobLiTwo').style.display = "none";
  document.getElementById('JobLiThree').style.display = "none";
  document.getElementById('lookingProfileForm_industry').style.display = "none";
  document.getElementById('JobLiFive').style.display = "none";
  document.getElementById('StdLiOne').style.display = "block";  
  document.getElementById('StdLiTwo').style.display = "block";
  //document.getElementById('age').style.display = "block";




})

$("#studentProfileForm_school_ta").click(function(){
  if(document.getElementById('age').style.display == "none")
  {
    document.getElementById('age').style.display = "block";
  }

})

$("#SetAgeHere").click(function(){
  
    if(std_set==1)
    {
      std_set=0;
      document.getElementById('Set_db').style.display = "block";
    }
    else if(std_set==0)
    {
      std_set=1;
      document.getElementById('Set_db').style.display = "none";
    }

  
})


}

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

/*
if(document.getElementById('srp_container') || document.getElementById('main-search-category'))
{
  $("#advs-link").click(function(){
      if(adv_search==1)
      {
        adv_search=0;
        document.getElementById('advs').style.display= "block";
      }
      else if(adv_search==0)
      {
        adv_search=1;
        document.getElementById('advs').style.display= "none";
      }

  })
  $("#advanced-search").click(function(){
      if(adv_search==1)
      {
        adv_search=0;
        document.getElementById('advs').style.display= "block";
      }
      else if(adv_search==0)
      {
        adv_search=1;
        document.getElementById('advs').style.display= "none";
      }

  })


}*/
