<?php
include 'inc/header.php';
include 'inc/navbar.php';
?>
<div class="row">
<div class="col-md-offset-4 col-md-4" style="background-color:rgba(255,255,255,0.7);">
  <form class="login-form" action="<?php echo base_url('Addproduct/addProduct'); ?>" method="post">
	<h3 class="form-title">Add Product</h3>
	
	<div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Product Name</label>
            <div class="input-icon">
			<input type=text class="form-control input-md" name="name" placeholder="Product Name">
			</div>
	</div>
	
	<div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Product Price</label>
            <div class="input-icon">
			<input type=number class="form-control input-md" name="price" placeholder="Price">
			</div>
	</div>		
	
	<div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Product Access Code</label>
            <div class="input-icon">
			<input type=number class="form-control input-md" name="accessid" placeholder="Access Id">
			</div>
	</div>
	
	<div class="form-group">
			<input type=submit class="form-control btn btn-info btn-block" name="add" value="Add Product">
			</div>
	</div>
  </form>
</div>
</div>
<?php 			
	include 'inc/footer1.php';?>
	<script>
	$.backstretch("<?php echo base_url('assets/admin/img/adp0.jpg'); ?>");
	</script>
	<?php
	include 'inc/footer.php';
?>
