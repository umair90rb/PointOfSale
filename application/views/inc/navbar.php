
<?php 

$seg1 = $this->uri->segment('1');
$seg2 = $this->uri->segment('2');
$seg3 = $this->uri->segment('3');

?>

<nav class="navbar navbar-inverse navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url('') ;?>">Competitive Edge</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if($seg1 == '' || $seg1 == 'dashboard'){ echo 'active'; }?>"><a href="<?php echo site_url('') ;?>">Home</a></li>
      <li class="<?php if($seg1 == 'Showproduct'){ echo 'active'; }?>"><a href="<?php echo site_url('Showproduct');?>">Show Products</a></li>
	  <?php if($this->session->userdata('role') == 'admin'){?>
	    <li class="<?php if($seg1 == 'Addproduct'){ echo 'active'; }?>"><a href="<?php echo site_url('Addproduct') ;?>">Add New Product</a></li>
		<li class="<?php if($seg1 == 'Stock'){ echo 'active'; }?>"><a href="<?php echo site_url('Stock') ;?>">Stock</a></li>
      <li class="<?php if($seg1 == 'AddUsers'){ echo 'active'; }?>"><a href="<?php echo site_url('AddUsers');?>">Add User</a></li>
		<?php } ?>
		<li class="<?php if($seg1 == 'Search'){ echo 'active'; }?>"><a href="<?php echo site_url('Search');?>">Search</a></li>
	</ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url('User_Profile_C'); ?>"><?php echo $this->session->userdata('name') ; ?> </a></li>
       <li><a href="<?php echo site_url('logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
    </ul>
  </div>
</nav>