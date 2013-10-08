
<body class="en guest v2 registration-start chrome-v5 chrome-v5-responsive background-v4 sticky-bg guest" id="pagekey-reg-cold-signup">
 <input id="inSlowConfig" type="hidden" value="false" />
 
 <script>
<?php 
  if($msg== 'registered')
  
  echo '$(function()  {
    $("#dialogue").dialog();
  });'
  
  //echo 'javascript'
?>
</script>

<div id="dialogue" title = "Registered !!!">
  <p> You have been Registered. A verification Email has been sent to you</p>
</div>

<div id="header" class="guest">
 <div class="wrapper">
 <div id="nav-primary">
 <div class="wrapper">
 
 <ul class="menu">
 <li id="nav-primary-auth">
                                Already on LinkedIn? <a href="<?php echo base_url('index.php/common/page/page6');?>" rel="nofollow"><span>Sign in</span></a></li>
 </ul>
 </div>
 </div>
 </div>
</div>
<div id="body">
  
 <div class="wrapper">
  
<div id="global-error">
</div>
 <div id="main" class="join-linkedin cold cookied no-profile fb-reg">

<div id="register-global-error">

</div>


  <div class="introduction">
    <h1>
          To join LinkedIn, sign up below...it's free!
    </h1>
  </div>

<div id="content">

  <div class="register-container">
      <form action="<?php echo base_url();?>index.php/register/register/process2" novalidate method="POST" name="coldRegistrationForm" id= "page5form" class="standard-form sided " >
               <input type="hidden" name="isJsEnabled" value="false"/>

                
                <ul id="yui-gen1">
                      <li class="name">
                          <label for="firstName-coldRegistrationForm" >First Name:</label>
                          <div class="fieldgroup">
                            <span class="error" id="firstName-coldRegistrationForm-error"></span>
                            <input type="text" name="firstName" value="" id="firstName-coldRegistrationForm" maxlength="20">
                          </div>
                      </li>
                      <li class="name ">
                          <label for="lastName-coldRegistrationForm" >Last Name:</label>
                          <div class="fieldgroup">
                            <span class="error" id="lastName-coldRegistrationForm-error"></span>
                            <input type="text" name="lastName" value="" id="lastName-coldRegistrationForm" maxlength="40">
                          </div>
                      </li>
                  <li>
                      <label for="email-coldRegistrationForm" >Email:</label>
                      <div class="fieldgroup">
                        <?php if(!is_null($msg)&& !($msg=='registered')) echo $msg;?>
                        <span class="error" id="email-coldRegistrationForm-error"></span>
                        <span class="edit">Edit</span>
                        <input type="email" name="email" value="" id="email-coldRegistrationForm" maxlength="128" data-ime-mode-disabled>
                      </div>
                  </li>
                  <li class="password-field">
                      <label for="password-coldRegistrationForm" >New Password:</label>
                      <div class="fieldgroup">
                        <span class="error" id="password-coldRegistrationForm-error"></span>
                        <input type="password" name="password" value="" id="password-coldRegistrationForm" >
                      </div>
                      <p class="note">6 or more characters</p>
                  </li>
                </ul>
					
						<div class="actions_1">
							<button class="btn-tertiary" type="submit" id="btn-submit">
								<div>Join LinkedIn</div>
							</button>
							<div class="progress-indicator"></div>
							<abbr title="By clicking Join LinkedIn, you are indicating that you have read, understood, and agree to LinkedIn's User Agreement and Privacy Policy" class="hidden"><em>*</em></abbr>
							
						</div>
              
                <p id="register-custom-nav" class="key">
                                Already on LinkedIn? <a href="<?php echo base_url('index.php/common/page/page6');?>">Sign in</a>
                </p>
           
          <input type="hidden" name="webmailImport" value="false" id="webmailImport-coldRegistrationForm">
		  <input type="hidden" name="trcode" value="hb_join" id="trcode-coldRegistrationForm">
		  <input type="hidden" name="genie-reg" value="" id="genie-reg-coldRegistrationForm">
		  <input type="hidden" name="mod" value="" id="mod-coldRegistrationForm">
		  <input type="hidden" name="key" value="" id="key-coldRegistrationForm">
		  <input type="hidden" name="authToken" value="" id="authToken-coldRegistrationForm">
		  <input type="hidden" name="authType" value="" id="authType-coldRegistrationForm">
		  <input type="hidden" name="csrfToken" value="ajax:8591499911237483509" id="csrfToken-coldRegistrationForm"><input type="hidden" name="sourceAlias" value="0_0pKtnXJ9l1BopHQS-IqS2t" id="sourceAlias-coldRegistrationForm">
		  
          <div class="screen"></div>
          </form>
      
  </div>

</div>

<div id="extra">
      <div class="sign-in-with">
        <p class="handwritten">Save time by using your Facebook account to sign up for LinkedIn.</p>
        <p class="actions">
          
            
              <a class="fb_button" href="<?php echo base_url('index.php/register/register/page1');?>" id="yui-gen3"><span class="fb_button_text">Sign up with Facebook</span></a>
             <abbr title="By clicking Join LinkedIn, you are indicating that you have read, understood, and agree to LinkedIn's User Agreement and Privacy Policy">*</abbr>
        </p>
      </div>



</div>

</div>

  <p id="agreement">
            * By joining LinkedIn, you agree to LinkedIn's <a target="_blank" href="<?php echo base_url('index.php/common/page/UserAgreement');?>">User Agreement</a>, <a target="_blank" href="<?php echo base_url('index.php/register/register/page1');?>">Privacy Policy</a> and <a target="_blank" href="<?php echo base_url('index.php/register/register/page1');?>">Cookie Policy</a>
  </p>
 
 </div>
</div>
 
<div id="footer">
 <div class="wrapper">
 <div id="legal">
 <p id="copyright">LinkedIn Corporation &copy; 2013</p>
 <p id="terms-of-use">
 Commercial use of this site without express authorization is prohibited.
 </p>
 </div>
 </div>
</div>
 
	<script src="assets/js/validation.js"></script>
 
 </body>
</html>