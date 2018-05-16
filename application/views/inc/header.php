<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/bootstrap.css"); ?>  >
<style>
html{
	max-width: 100%;
    overflow-x: hidden;
}
body {
    max-width: 100%;
    overflow-x: hidden;
	visibility: hidden;
}
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	
}
</style>
</head>
<body onload="unhideBody();">
<div class="se-pre-con" align="center">
<img width="600px" height="200px" style="margin-top:200px;"  src="<?php echo base_url('/assets/admin/img/gear.png'); ?>">
</div>