<?php

include 'inc/header.php';
include 'inc/navbar.php';


?>

<div class="row">
	<div class="col-md-offset-3 col-md-6" style="background-color:rgba(255,255,255,0.7);">
&nbsp;
		<div width="100%" align="center">
			<div  class="btn-group">
			<a  class="btn  btn-success" href="<?php echo base_url("Stock/add_stock"); ?>">
			<i class="glyphicon glyphicon-plus"></i> Add Stock
			</a>
			
			<a class="btn btn-success" href="<?php echo base_url("Stock/update_stock"); ?>">
			<i class="glyphicon glyphicon-upload"></i> Update Stock
			</a>
			</div>
			</div>
		
		<div class="form-group">
			<label for="accessid">Access Id:</label>
			<input type="text" id="accessid" onblur="getitem();" class="form-control input">
		  </div>
			<div class="form-group">
			<label for="item">Item:</label>
			<input type="text"  name="item" class="form-control" id="item">
		  </div>
		  <div class="form-group">
			<label for="name">Total Quantity:</label>
			<input type="text" class="form-control" id="qty" name="qty">
		  </div>
		  <button type="submit" onclick="update();" class="btn btn-success btn-block"><i class="glyphicon glyphicon-upload"></i> Update </button>
			<div>&nbsp;</div>
		
		
		
		<form role="form" action="<?php echo base_url("stock/final_update");  ?>" method="post"> 
		  </form>	
	</div>
</div>

<?php
include 'inc/footer1.php';
?>
<script>
$.backstretch("<?php echo base_url('assets/admin/img/ups0.jpg'); ?>");
function getitem(){
	var accessid = $('#accessid').val();
	$.post("<?php echo base_url('stock/updatestock'); ?>",{accessid:accessid}).done(function(data){
			var pro = JSON.parse(data);
			$('#item').val(pro.item);
			$('#qty').val(pro.total_qty);
	});
}
function update(){
	var accessid = $('#accessid').val();
	var item = $('#item').val();
	var qty = $('#qty').val();
	$.post("<?php echo base_url('stock/final_update'); ?>",{accessid:accessid,item:item,qty:qty}).done(function(data){
	alert(data);
	});
}
</script>
<?php
include 'inc/footer.php';
?>