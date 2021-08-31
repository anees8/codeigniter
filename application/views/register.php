<div class="container">
<div class="row justify-content-center">
<div class="col-md-5">
<div class="card">
<header class="card-header">
	<h4 class="card-title text-center">Register</h4>
</header>
<article class="card-body">

 
<form method="POST" action="">

	<div class="form-group">
        			<label>UserName </label>   
		  	<input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username')?>" placeholder="Enter Your UserName" >
			  <small class="text-danger"><?php echo form_error('username'); ?></small>
	
	
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control"  name="email" id="email"  value="<?php echo set_value('email');?>"  placeholder="Enter Your Email Address" >
		<small class="text-danger"><?php echo form_error('email'); ?></small>
		
	</div> <!-- form-group end.// -->
    <div class="form-group">
		<label>Mobile Number</label>
		<input type="text" class="form-control"  name="mobile" id="mobile"  value="<?php echo set_value('mobile');?>"  placeholder="Enter Your Mobile Number" >
		<small class="text-danger"><?php echo form_error('mobile'); ?></small>
		
	</div> <!-- form-group end.// -->
	

	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password" id="password"  name="password" placeholder="Enter Your Password" >
		<small  class="text-danger"><?php echo form_error('password'); ?></small>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
		<label>Confirm password</label>
	    <input class="form-control" type="password" id="cpassword" name="cpassword"  placeholder="Enter Your Confirm Password" >
		<small  class="text-danger"><?php echo form_error('cpassword'); ?></small>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
                                        
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="<?php echo base_url();?>auth/login">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 

<!--container end.//-->
