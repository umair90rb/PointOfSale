<?php 
	include ('inc/header.php');
?>

<style type="text/css">

	@media print {
					#printableDivWrap{
						background-color:rgba(255,255,255,1) !important;
						width:100%;
						height:842px;
					}
					.printable_div	{
						display:block; 
						width:500px;
						}

					.notPrinted{
						display:none;
					}
					.print_view{
						border:0px solid black;
						
					}
					#print_name{
						width:50%;
						float:left;
					}
					
					#print_date{
						width:50%;
						float:right;
					}
				}
				@media screen {
				.print_view{
						display:none;
					}
					
				}
				/* The Modal (background) */
				.modal {
					display: none; /* Hidden by default */
					position: fixed; /* Stay in place */
					z-index: 5; /* Sit on top */
					padding-top: 100px; /* Location of the box */
					left: 0;
					top: 0;
					width: 100%; /* Full width */
					height: 100%; /* Full height */
					overflow: auto; /* Enable scroll if needed */
					background-color: rgb(0,0,0); /* Fallback color */
					background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
				}

				/* Modal Content */
				.modal-content {
					position: relative;
					background-color: #fefefe;
					margin: auto;
					padding: 0;
					border: 1px solid #888;
					width: 50%;
					box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
					-webkit-animation-name: animatetop;
					-webkit-animation-duration: 0.4s;
					animation-name: animatetop;
					animation-duration: 0.4s
				}

				/* Add Animation */
				@-webkit-keyframes animatetop {
					from {top:-300px; opacity:0} 
					to {top:0; opacity:1}
				}

				@keyframes animatetop {
					from {top:-300px; opacity:0}
					to {top:0; opacity:1}
				}

				/* The Close Button */
				.close {
					color: white;
					float: right;
					font-size: 28px;
					font-weight: bold;
				}

				.close:hover,
				.close:focus {
					color: #000;
					text-decoration: none;
					cursor: pointer;
				}

				.modal-header {
					padding: 2px 16px;
					background-color: #5cb85c;
					color: white;
				}

				.modal-body {padding: 2px 16px;}

				.modal-footer {
					padding: 2px 16px;
					background-color: #5cb85c;
					color: white;
				}
</style>
<?php
include ('inc/navbar.php');
?>
<!-- <button id="btn">Click</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Add Gift</h2>
    </div>
    <div class="modal-body">
		<div class="row">
		<div class="col-md-offset-3 col-md-6">
		<div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Enter Product Id</label>
                        <input class="form-control placeholder-no-fix" id='giftProductId' type="text" onblur="fetchGiftName()" autocomplete="off" placeholder="Product Id" name="" autofocus/> </div>
                
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Gift Name</label>
                 
                        <input class="form-control placeholder-no-fix disabled" id="giftName" type="text" autocomplete="off" placeholder="Gift name" value="" name="" disabled/>
                </div>
                <div class="form-actions">
                    <input type="submit" id="addGift" name="addGift" value="Add Gift" onclick="addGift();modal.style.display = 'none';" class="btn btn-success btn-block" /> 
                </div>
				</div>
				</div>
    </div>
    <div class="modal-footer">
	
      <p class="text">2017 &copy; Compitative Edge</p>
    
	</div>
  </div>

</div>

<div class="row" style=""> 
	<div class="col-md-12"> 
	<nav class="navbar navbar-default"> 
		<div class="container-fluid">
		
		<p class="navbar-text "><strong>Customer Detail</strong></p>
		<form class="navbar-form navbar-left">
		<div class="form-group">
		  <label for="name">Name:</label>
		  <input type=text class="form-control" name="name" id="name"  placeholder="Name" >
		</div><div class="form-group">
		  <label for="address">Address:</label>
		  <input type=text class="form-control"  name="address" id="address" placeholder="Address">
		</div>
		<div class="form-group">
		  <label for="phone">Contact No:</label>
		  <input type=text class="form-control" name="phone" onBlur="customer(); document.getElementById('accessid').focus();" id="phone" placeholder="Phone Number">
		</div>
		<div class="form-group"id="cusRes" ></div>
		</form>
		<ul class="nav navbar-nav navbar-right">
		<div class="btn-group">
		
		<button type="button" id="btnPrint" class="btn navbar-btn btn-success" onclick="printDate();"  value="Print" accesskey="p">
		<i class="glyphicon glyphicon-print"></i> Print
		</button>
		
		<button type="button" id="myBtn" class="btn navbar-btn btn-success" onclick=""  value="Add Gift" accesskey="g">
		<i class="glyphicon glyphicon-gift"></i> Add Gift
		</button>
		
		<button type="button" id="btnRefresh" class="btn navbar-btn btn-success" onclick="window.location = 'http://localhost/project/';"  value="Refresh" accesskey="r">
		<i class="glyphicon glyphicon-refresh"></i> Refresh
		</button>
		
		<button type="button" id="btnCancel" class="btn navbar-btn btn-success" onclick="resetInput()"  value="Cancel" accesskey="c">
		<i class="glyphicon glyphicon-remove"></i> Cancel
		</button>
		</div>
		</ul>
	    </div>
	</nav>
	</div>
</div>
	<div class="row">
	<div class="print_view" align="center">
			<div id="printableDivWrap">
				<div class="printable_div"  id="printable_div" align="center">
					<img width="50px" height="50px"   src="<?php echo site_url(); ?>assets/admin/img/logo/logo_2.jpg" alt="" />
					<img   src="<?php echo site_url(); ?>assets/admin/img/logo/logo_1.png" alt="" /><br>
					<span>P-147/O Hall Road Lahore</span><br>
					<span>Phone:041-1234567</span><br>
					<div class="row" align="left">
						<div class="col-md-6" align="left" id="print_name" style="">
						</div>
						<div class="col-md-6" align="right" id="print_date" style="">
						</div>
					</div>
					
					<div class="row">
					<div class="col-md-12">
					<table class="table table-striped" id="item_detail">
					<tr>
					<td>Sr#</td>
					<td>Item</td>
					<td>Qty</td>
					<td>U.Price</td>
					<td>Total</td>
					<td>Discount</td>
					<td>Dis.Ammount</td>
					<td>Net Price</td>
					</tr>
					</table>
					<table class="table" id="gift">
					
					</table>
					</div>
					</div>
					<div class="row">
						<div class="col-md-12" align="left" >
						<div >Total Items: <span id="total_items">0</span></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6" id="gross_total_label" align="right" style="width:70%;float:left;" >
						Total:
						</div>
						<div class="col-md-6"  align="left" id="gross_total" style="width:30%;float:left;" >
						0
						</div>
					</div>
					<div class="row"  >
						<div class="col-md-6" align="right" style="width:70%;float:left;">
						Discounted Ammount:
						</div>
						<div class="col-md-6" id="discount" align="left" style="width:30%;float:left;" >
						0
						</div>
					</div>
					<div class="row"  >
						<div class="col-md-6" align="right" style="width:70%;float:left;">
						Net Payable Ammount:
						</div>
						<div class="col-md-6" align="left" id="net_payable_ammount_print" style="width:30%;float:left;" >
						0
						</div>
					</div>
					<br>
					<div class="row" >
						<ul align="left" style="line-height:1;text-align:justify;text-justify:inter-word;">
						<li id="notes" style="line-height:1;">Before leaving the counter, please check the balance amount.</li>
						<li id="notes" style="line-height:1;">Items will not be refunded or exchanged after 15 days of purchase.</li>
						<li id="notes" style="line-height:1;">Thanks for shopping, hope to see you soon.</li>
						</ul>
						<p style="line-height:1;">Computer Software developed by Humbal humbal90rb@gmail.com<p>
					</div>
					
				</div>
			</div>	
		</div>
		</div>
		<div class="row">
	<div class="notPrinted">
		<div class="col-md-12">
		<div class="row" align="center">
		<div class="col-md-2">Enter Access Id</div>
		<div class="col-md-2">Enter Discount in %</div>
		<div class="col-md-2">Enter Quantity</div>
		<div class="col-md-3">Net Payable Ammount</div>
		<div class="col-md-3">Total Discounted Ammount</div>
		</div>
		<div class="row">
		<div class="col-md-2"><input  type=text id="accessid" class="form-control input-lg" name="accessId" placeholder="Access Id"></div>
		<div class="col-md-2"><input  type=text id="discount_amount" class="form-control input-lg" name="discount" placeholder="Discount" ></div>
		<div class="col-md-2"><input type=text data-default ="1" id="quantity" class="form-control input-lg" name="quantity" placeholder="Quantity"   onBlur="document.getElementById('accessid').focus(); test();"></div>
		<div class="col-md-3"><input type="text" data-default ="0" value="0" id="total"  class="form-control input-lg"  placeholder="Total" /></div>
		<div class="col-md-3"><input type="text" data-default ="0" value="0" id="show_discount_amount"  class="form-control input-lg"  placeholder="Total" />
		</div>
		</div>
		
		<table class="table" style="background-color:rgba(255,255,255,0.5);" id="demo" >
				<tr>
					<th>Sr#</th>
					<th>Product</th>
					<th>Unit Price</th>
					<th>Quantity</th>
					<th>Total</th>
					<th>Discount</th>
					<th>Ammount Discount</th>
					<th>Net Price</th>
				<tr>
				
		</table>

	</div>
	</div>
</div>
<?php
include ('inc/footer1.php');
?>
<script type="application/javascript">
		$(document).ready(function(){$("#name").focus();})
		$.backstretch([
			"<?php echo base_url('assets/admin/img/d1.jpg'); ?>",
			"<?php echo base_url('assets/admin/img/d3.png'); ?>",
			"<?php echo base_url('assets/admin/img/d0.jpg'); ?>",
			"<?php echo base_url('assets/admin/img/d2.jpg'); ?>",
			"<?php echo base_url('assets/admin/img/d4.jpg'); ?>"
		],{
			fade:1000,
			duration:3000
		});
		
		function resetInput(){
			$(document).find('input[type=text]').each(function(){
			  var defaultVal = $(this).data('default');
			  $(this).val(defaultVal);
			});
			$.post("<?php echo base_url('dashboard/cancel');?>",{}).done(function(data){});
			
			
			var demo_content = "<tr><th>Sr#</th><th>Product</th><th>Unit Price</th><th>Quantity</th><th>Total</th><th>Discount</th><th>Ammount Discount</th><th>Net Total</th><tr>";
			var item_detail_content = "<tr><td>Sr#</td><td>Item</td><td>Qty</td><td>U.Price</td><td>Total</td><td>Discount</td>	<td>Dis.Ammount</td><td>Net Price</td></tr>";
			
			document.getElementById("print_name").innerHTML = "";
			document.getElementById("print_date").innerHTML = "";
			document.getElementById("demo").innerHTML = demo_content;
			document.getElementById("item_detail").innerHTML = item_detail_content;
			document.getElementById("total_items").innerHTML = "0";
			document.getElementById("gross_total").innerHTML = "0";
			document.getElementById("discount").innerHTML = "0";
			document.getElementById("net_payable_ammount_print").innerHTML = "0";
			document.getElementById("gift").innerHTML = "";
		}			
			$(document).ready(function(){$(document).keypress(function (e) {
			if (e == 13 ) {window.print();}
			});});
			
		function fetchGiftName(){
			var giftProductId = $('#giftProductId').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('dashboard/getData'); ?>",
				data: {accessid:giftProductId},
				dataType: "json",
				success: function (response) {
					$("#giftName").val(response.name);
				}
			});
		}
		function addGift(){
			var gift_name = $('#giftName').val();
			var gift_div = document.getElementById("gift");
			gift_div.innerHTML = gift_div.innerHTML + "<tr><td><img width='20px' height='20px' src='http://localhost/project/assets/admin/img/logo/gift.gif'></td><td>" + gift_name + "</td><td></td><td></td><td></td><td>100%</td><td></td><td> 0 </td></tr>";
		}


		function test(){	
		var accessid = $('#accessid').val();
		var discount = $('#discount_amount').val();
		var quantity = $('#quantity').val();
		
		var div = document.getElementById("demo");
		var div1 = document.getElementById("item_detail");
		
		
		$.post("http://localhost/project/dashboard/getData",{accessid:accessid}).done(function(data){
			
			var pro = JSON.parse(data);
			if(pro.name == undefined){alert("Wrong Access Id!"); return false;}
			var p_total = $('#total').val();
			var b = parseInt(p_total);
			var pro_total = pro.price * quantity;
			var discounted_ammount = (pro_total/100)*discount;
			var discounted_ammount = parseInt(discounted_ammount);
			var pro_net_price = pro_total-discounted_ammount;
			pro_net_price = parseInt(pro_net_price);
			var c = b + pro_net_price;
			var total_items = document.getElementById("total_items").innerHTML;	
			var a = parseInt(total_items);
			var total_discounted_ammount = document.getElementById("discount").innerHTML;	
			var gross_total = document.getElementById("gross_total").innerHTML;	
			gross_total = parseInt(gross_total);
			gross_total = gross_total + pro_total;
			total_discounted_ammount = parseInt(total_discounted_ammount);
			total_discounted_ammount = total_discounted_ammount + discounted_ammount;
			if(a == "")
			{
				a = 1; 
			}
			else
			{
				a = a + 1;
			}
			div.innerHTML = div.innerHTML + "<tr><td>" + a + "</td><td>" + pro.name + "</td><td>" + pro.price + "</td><td>" + quantity + "</td><td>"+ pro_total +"</td><td>"+ discount +"%</td><td>"+ discounted_ammount +"</td><td>"+ pro_net_price +"</td></tr>";
			div1.innerHTML = div1.innerHTML + "<tr><td>" + a + "</td><td>" + pro.name + "</td><td>" + quantity + "</td><td>" + pro.price + "</td><td>"+ pro_total +"</td><td>"+ discount +"%</td><td>"+ discounted_ammount +"</td><td>"+ pro_net_price +"</td></tr>";
			document.getElementById("total").value = c;
			document.getElementById("total_items").innerHTML = a;
			document.getElementById("gross_total").innerHTML = gross_total;
			document.getElementById("discount").innerHTML = total_discounted_ammount;
			document.getElementById("show_discount_amount").value = total_discounted_ammount;
			
			var net_payable_ammount_print = gross_total - total_discounted_ammount;
			
			document.getElementById('net_payable_ammount_print').innerHTML = net_payable_ammount_print;
			$.post("<?php echo base_url("dashboard/bill");?>",{pro:pro,discount:discount,qty:quantity}).done(function(data){
			});
			$.post("<?php echo base_url("dashboard/update_stock_cus");?>",{pro:pro,qty:quantity}).done(function(data){
			});
		});
		}
		//save customer detail
		function customer(){
		var name = $('#name').val();
		var phone = $('#phone').val();
		var address = $('#address').val();
		$.post("http://localhost/project/dashboard/customer",{name:name,phone:phone,address:address}).done(function(data){
			var cus = JSON.parse(data);
			document.getElementById("cusRes").innerHTML = "<div id='ok_sign'><center><span class='glyphicon glyphicon-ok'></span></center></div>";
		});
		}
		function printDate(){
		var total = $('#total').val();
		$.post("<?php echo base_url("dashboard/get_user_id"); ?>",{total:total}).done(function(data){  
		var c_id = data;
		var todayTime = new Date();
		var month = todayTime .getMonth() + 1;
		var day = todayTime .getDate();
		var year = todayTime .getFullYear();
		var hour = todayTime .getHours();
		hour = hour % 12;
		hour = hour ? hour : 12;
		var min = todayTime .getMinutes();
		var sec = todayTime .getSeconds();
			
		document.getElementById("print_date").innerHTML = day+"/"+month+"/"+year+" "+hour+":"+min+":"+sec;
		document.getElementById("print_name").innerHTML ="Customer Id."+c_id;
		window.print();
		$('#ok_sign').fadeOut();
		$.post("<?php echo base_url('dashboard/cancel');?>",{}).done(function(data){});
		
		});
		
		
		}
		
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
			modal.style.display = "block";
			$("#giftProductId").focus();
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}
		$(document).keyup(function(e) {
			if (e.keyCode == 27) { // escape key maps to keycode `27`
			 	modal.style.display = "none";
		   }
	   });
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		
</script>
<?php
include ('inc/footer.php');
?>