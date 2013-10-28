
<body>
	<div class="setarea">	    
	    <img src=<?php echo "assets/img/252231_1002029915278_1941483569_n.jpg" ?> alt="Photo">
		<?php echo $error;?>
		<?php echo form_open_multipart('upload/do_upload');?>
		<input name="username" id="php_user" value=<?php if(!is_null($msg)&& !($msg=='registered')) echo $msg;?>>
		<input type="file" name="userfile" size="20" class="file"/>
		<input type="submit" value="upload" class="submit" />
	</div>
