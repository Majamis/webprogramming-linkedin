<body>
	<div class="setarea">	    
	    	<img src="<?php echo "$./../../assets/img/252231_1002029915278_1941483569_n.jpg"?>" alt="Photo">
   			<form action="<?php echo base_url();?>index.php/register/register/process_next_image" method="post" enctype="multipart/form-data">
        		<label for="file">Filename:</label>
        		<input class="btn btn-info" type="file" name="file" id="file">
        		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
     		</form>
	</div>
</body>