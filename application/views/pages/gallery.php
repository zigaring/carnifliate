<h2 style="text-align: center"><?= $title ?></h2>
<hr style="height: 40px">

	<div class="container">
		<div class="row">
			<?php foreach($galleries as $gallery): ?>
			<div class="">			
					<h3><a class="nav-link" href="<?php echo base_url();?>admin/galleries/gallery_view/<?php echo $gallery['slug']?>">*<?php echo $gallery['name']?></a></h3>
			</div>
			<?php endforeach; ?>
		</div>
	</div>


<?php
if($this->session->userdata('logged_in')) {  ?>
	<div class="col-md-7 mx-auto text-right">
		<a class="btn btn-primary" href="<?php echo base_url();?>admin/galleries/gallery_add">Add Gallery</a>
	</div>
<?php } ?>
