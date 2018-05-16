<?php

include 'inc/header.php';
include 'inc/navbar.php';


?>

<div class="row">
	<div class="col-md-offset-3 col-md-6" style="background-color:rgba(255,255,255,0.7);">
	<div width=100% align=center>
	<h3> Welcome <?php echo $this->session->userdata('name'); ?></h3>	
	</div>
	
			<div class="form-group">
			<label for="oldpass">Old Password</label>
			<input type="text"  name="oldpass" class="form-control" id="oldpass">
		  </div>
		  <div class="form-group">
			<label for="newpass">New Password</label>
			<input type="password" class="form-control" id="newpass" name="newpass">
		  </div>
		  <div class="form-group">
			<label for="cpass">Confirm Password</label>
			<input type="password" class="form-control" id="cpass" name="cpass">
		  </div>
		  <button type="submit" onclick="check();" class="btn btn-success btn-block"><i class="glyphicon glyphicon-upload"></i> Update Password </button>
			&nbsp;

	
	</div>
</div>

<?php
include 'inc/footer1.php';
?>
	<script type="text/javascript">
		$.backstretch("<?php echo base_url('assets/admin/img/p0.jpg'); ?>");
		function check()
		{
			var newpass = $('#newpass').val();
			var cpass = $('#cpass').val();
			var oldpass = $('#oldpass').val();
			if(oldpass == ""){
				alert("Old Password required!");
				return false;
			}
			if(newpass == "" || cpass == ""){
				alert("Password empty!");
				return false;
			}
			else if(newpass == cpass){
				$.post("<?php echo base_url('User_Profile_C/updatepassword');?>",{newpass:newpass,oldpass:oldpass}).done(function(data){
					alert(data);
				});
			}
			else {
				alert("Password and Confirm Password not match!");
			}
		}
	</script>
<?php
include 'inc/footer.php';

?>