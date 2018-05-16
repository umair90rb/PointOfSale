<?php

include 'inc/header.php';
include 'inc/navbar.php';


?>

<div class="row">
	<div class="col-md-offset-3 col-md-6">
	
		
		<div class="input-group">
            <input type="text" class="form-control" placeholder="Search by Customer Id" name="srch" id="srch" />
            <div class="input-group-btn">
                <button class="btn btn-primary" onclick="search()" ><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
		
	</div>
	
</div>
<div class="row" >
		<div class=" col-md-offset-2 col-md-8" style="background-color:rgba(255,255,255,0.8);">
			<table class="table" id="cus_detail">
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Mobile</th>
					<th>Total Paid Ammount</th>
				</tr>
			</table>
		</div>
	</div>
<div class="row">
		<div class=" col-md-offset-2 col-md-8" style="background-color:rgba(255,255,255,0.8);">
			<table class="table" id="bill_detail" >
				<tr>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Discount</th>
					<th>Time</th>
				</tr>
			</table>
		</div>
	</div>
<?php
include 'inc/footer1.php';
?>
<script rel="javascript/text">
	$(document).ready(function(){
		setTimeout(function() { $('#srch').focus() }, 1000);
	});
	
	$.backstretch("<?php echo base_url('assets/admin/img/se0.jpg');  ?>");
	
	
	function search(){
			var cus_detail = document.getElementById("cus_detail");
			var bill_detail = document.getElementById("bill_detail");
			cus_detail.innerHTML = "<tr><th>Name</th><th>Address</th><th>Mobile</th><th>Total Paid Ammount</th></tr>";
			bill_detail.innerHTML = "<tr><th>Item</th><th>Price</th><th>Quantity</th><th>Discount</th><th>Time</th></tr>";
		var id = $('#srch').val();
		$.post("<?php echo base_url("search/searched");?>",{id:id}).done(function(data){
			if(data == "[]"){alert("No data found");return false;}
			var detail = JSON.parse(data);
			cus_detail.innerHTML = cus_detail.innerHTML + "<tr><th>" + detail[0].name + "</th><th>" + detail[0].address + "</th><th>" + detail[0].mobile + "</th><th>" + detail[0].total_paid_ammount + "</th></tr>";
			for(var i = 0; i <= detail.length; i++){
			bill_detail.innerHTML = bill_detail.innerHTML + "<tr><td>" + detail[i].item + "</td><td>" + detail[i].price + "</td><td>" + detail[i].qty + "</td><td>" + detail[i].discount + "</td><td>"+ detail[i].time +"</td></tr>";
			}
			});
	}

</script>
<?php
include 'inc/footer.php';
?>