<?php
include 'inc/header.php';
include 'inc/navbar.php';
?>
<div class="row">
	<div class="col-md-offset-3 col-md-6">
<table class="table table-responsive" >
	<tr>
	<th>No#</th>
	<th>Name</th>
	<th>Price</th>
	<th>Access Id</th>
	<th>Action</th>
	</tr>
	<?php 
	foreach ($products as $row){
		$update = "updateproduct/showproduct/".$row->id;
		$delete = "updateproduct/deleteproduct/".$row->id;
			echo "<tr>";
			echo "<td>".$row->id."</td>";
			echo "<td>".$row->name."</td>";
			echo "<td>".$row->price."</td>";
			echo "<td>".$row->accessid."</td>";
			echo "<td><a class='btn btn-md btn-primary' href='".base_url($update)."' >Update Product</a>";
			echo "<a class='btn btn-md btn-danger' href='".base_url($delete)."' >Delete Product</a></td>";
			echo "</tr>";
	}
	?>
</table>
	</div>
</div>
<?php 
include 'inc/footer1.php';
?>
<script>
$.backstretch("<?php echo base_url('assets/admin/img/sp0.jpg'); ?>");
</script>
<?php
include 'inc/footer.php';
?>