<?php
include 'inc/header.php'
		
?>
<div class="row">
<div class="col-md-offset-4 col-md-4">
<div class="panel panel-default">
	<div class="panel-heading"><h2>Sign Up</h2></div>
  <div class="panel-body">
  <form action="<?php echo base_url('signup/addUser'); ?>" method="post">
  	<input type=text class="form-control input-md" name="name" placeholder="Name">
  	<input type=text class="form-control input-md" name="username" placeholder="User Name">
  	<input type=password class="form-control input-md" name="password" placeholder="Password">
  	<input type=submit class="form-control btn btn-info btn-block" name="signup" value="Sign Up">
  </form>
  </div>
  <div class="panel-footer">Already Register <a href="<?php echo base_url('Login'); ?>" >Log In</a></div>
</div>
</div>
</div>
<?php 			
	include 'inc/footer1.php';
	include 'inc/footer.php';
?>

