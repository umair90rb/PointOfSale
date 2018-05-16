<?php
include 'inc/header.php';
include 'inc/navbar.php';
?>
<div class="row">
<div class="col-md-offset-4 col-md-4">
<div class="panel panel-default">
	<div class="panel-heading"><h2>Update Product</h2></div>
  <div class="panel-body">
  <form action="<?php echo base_url('updateproduct/updatePro'); ?>" method="post">
  	<input type=hidden class="form-control input-md" name="oldAccessId" value="<?php echo $product->accessid; ?>">
  	<input type=text class="form-control input-md" name="name" value="<?php echo $product->name; ?>">
  	<input type=text class="form-control input-md" name="price" value="<?php echo $product->price; ?>" >
  	<input type=number class="form-control input-md" name="accessid" value="<?php echo $product->accessid; ?>">
  	<input type=submit class="form-control btn btn-info btn-block" name="update" value="Update Product">
  </form>
  </div>
  <div class="panel-footer">Update Product</div>
</div>
</div>
</div>
<?php 
include 'inc/footer1.php';
?>
<script>
$.backstretch("<?php echo base_url('assets/admin/img/up0.jpg'); ?>");
</script>
<?php
include 'inc/footer.php';
?>