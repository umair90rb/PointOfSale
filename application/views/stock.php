<?php

include 'inc/header.php';
include 'inc/navbar.php';


?>

<div class="row">
	<div class="col-md-offset-3 col-md-6">
		<div width="100%" align="center">
		<div  class="btn-group">
		
		<a  class="btn  btn-success" href="<?php echo base_url("Stock/add_stock"); ?>">
		<i class="glyphicon glyphicon-plus	"></i> Add Stock
		</a>
		
		<a class="btn btn-success" href="<?php echo base_url("Stock/update_stock"); ?>">
		<i class="glyphicon glyphicon-upload"></i> Update Stock
		</a>
		</div>
		</div>
		<table class="table">
			<tr>
				<th>No#</th>
				<th>Access Id</th>
				<th>Item</th>
				<th>Total Quantity</th>
				<th>Saled</th>
				<th>Remained Items</th>
			</tr>
			<?php 
				foreach($stock as $row){
					echo "<tr>";
					echo "<td>".$row->id."</td>";
					echo "<td>".$row->accessid."</td>";
					echo "<td>".$row->item."</td>";
					echo "<td>".$row->total_qty."</td>";					
					echo "<td>".$row->saled."</td>";					
					echo "<td>".$row->remained."</td>";					
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
$.backstretch("<?php echo base_url('assets/admin/img/s0.jpg'); ?>");
</script>
<?php
include 'inc/footer.php';
?>