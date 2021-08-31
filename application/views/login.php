<div class="container">
<div class="row mt-5 align-item-center justify-content-center">
<div class="col-md-5">
<div class="card">
<header class="card-header">

	<h4 class="card-title text-center mt-2">Login</h4>
</header>
<article class="card-body">
<?php
if(isset($_SESSION['success'])){?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<?php echo $_SESSION['success'];?>

</div>
<?php
}
?>
<?php
if(isset($_SESSION['error'])){?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<?php echo $_SESSION['error'];?>

</div>
<?php
}
?>
<form method="POST" action="">


	<div class="form-group">
		<label>Email address</label>
		<input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>" placeholder="Enter Your Email Address" require>
		<small class="text-danger"><?php echo form_error('email'); ?></small>
	</div> <!-- form-group end.// -->


	<div class="form-group">
		<label>password</label>
	    <input class="form-control"  name="password" id="password" type="password" id="password" placeholder="Enter Your Password">
      <small class="text-danger"><?php echo form_error('password'); ?></small>
	</div> <!-- form-group end.// -->  
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="login"> Login  </button>
    </div> <!-- form-group// -->      
                                        
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center"><a href="<?php echo base_url();?>auth/register">Register</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->
