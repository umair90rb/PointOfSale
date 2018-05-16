<?php 
	include 'header.php'
			
?>
<div class="row">
<div class="col-md-offset-4 col-md-4">
<div class="panel panel-default">
	<div class="panel-heading"><h2>Login</h2></div>
  <div class="panel-body">
  <form action="<?php echo base_url('login/userAthentication') ; ?>" method="post">
  	<input type=text class="form-control input-md" name="username" placeholder="User Name" autofocus>
  	<input type=password class="form-control input-md" name="password" placeholder="Password">
  	<input type=submit class="form-control btn btn-info btn-block" name="login" value="Log In">
  </form>
  </div>
  <div class="panel-footer">New Member <a href="<?php echo base_url('Signup'); ?>" >Sign Up</a></div>
</div>
</div>
</div>
<?php 			
	include 'footer.php';
?>

