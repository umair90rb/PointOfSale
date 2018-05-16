<?php

include 'inc/header.php';
include 'inc/navbar.php';


?>

<div class="row">
	<div class="col-md-offset-3 col-md-6" style="background-color:rgba(255,255,255,0.9);">
		&nbsp;
		<div width="100%" align="center">
		<div   class="text-center btn-group">
		
		<a  class="btn  btn-success" href="<?php echo base_url("Stock/add_stock"); ?>">
		<i class="glyphicon glyphicon-plus"></i> Add Stock
		</a>
		
		<a class="btn btn-success" href="<?php echo base_url("Stock/update_stock"); ?>">
		<i class="glyphicon glyphicon-wrench"></i> Update Stock
		</a>
		</div>
		</div>
		<form role="form" method="post" action="<?php echo base_url("stock/addstock"); ?>">
		  <div class="form-group">
			<label for="accessid">Access Id:</label>
			<input type="text" onblur="getname()" name="accessid" class="form-control" id="accessid" required>
		  </div>
		  <div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="item">
		  </div>
		  <div class="form-group">
			<label for="qty">Quantity:</label>
			<input type="number" class="form-control" id="qty" name="qty">
		  </div>
		  <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-plus"></i> Add </button>
			<div>&nbsp;</div>
		</form>		
		
	</div>
</div>

<?php

include 'inc/footer1.php';
?>
	<script type="text/javascript">
		$.backstretch("<?php echo base_url('assets/admin/img/ads0.jpg');?>");
		function getname(){
			var accessid = $('#accessid').val();
		$.post("http://localhost/project/dashboard/getData",{accessid:accessid}).done(function(data){
			
			var pro = JSON.parse(data);
			if(pro.name == undefined){alert("Wrong Access Id!"); return false;}
			$('#name').val(pro.name);
		});
		}
	</script>
<?php
include 'inc/footer.php';

?>