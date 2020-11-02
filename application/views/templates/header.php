
<html>
<head>
	<title>Carnifliate</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
<body>
	<div>
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <b><a class="nav-link" data-toggle="tab" href="<?php echo base_url();?>">Home</a></b>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="<?php echo base_url();?>about">About</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="<?php echo base_url();?>shows">Shows</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="<?php echo base_url();?>merch">Merch</a>
			  </li>
			  <li class="nav-item">
			  	<a class="nav-link" href="<?php echo base_url();?>galleries">Gallery</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
			  </li>
		<?php if($this->session->userdata('logged_in')) { ?>
			  <li class="nav-item">
			    <a class="nav-link" style="color: lightgreen" href="<?php echo base_url();?>admin/logout">Admin Logout</a>
			 </li>
		<?php } ?>
			</ul>
	</div>

  		

