<?php

include 'inc/header.php';
include 'inc/navbar.php';
?>

		<div class="row">
		<div class="col-md-offset-4 col-md-4" style="background-color:rgba(255,255,255,0.5);">
		    <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo base_url('AddUsers/addUser') ; ?>" method="post">
                <h3 class="form-title">Add User</h3>
                
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Name</label>
                    <div class="input-icon">
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Name" name="name" autofocus required/> </div>
                </div>
				
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">User Name</label>
                    <div class="input-icon">
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="username" name="username" required/> </div>
                </div>
				
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required/> </div>
                </div>

				<div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">User Role</label>
                    <div class="input-icon">
						
						<select name="role" class="form-control placeholder-no-fix">
						
						<option value="">---Select Role---</option>
						<option value="admin">Admin</option>
						<option value="user">User</option>
						
						</select></div>
                </div>

				
                <div class="form-actions">
                    <input type="submit" name="register" value="Register" class="btn btn-block pull-right" /> 
                </div>
                
			</form>
			 <div height="10px">&nbsp;</div>
			</div>
		  </div>
	
        

<?php
include 'inc/footer1.php';?>
<script>
$.backstretch("<?php echo base_url('assets/admin/img/adu0.jpg');  ?>");
</script>
<?php
include 'inc/footer.php';
?>