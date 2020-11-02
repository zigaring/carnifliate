<h2 style="text-align: center"><?= $title?></h2>
<hr style="height: 40px">

<?php foreach($images as $image): ?>
	<div class="container">
		
			<div class="col-md-6 offset-md-3" style="margin-bottom: 10px">
				<img style="width:100%;" src="<?php echo site_url(); ?>assets/images/gallery/<?php echo $image['image_name'];?> ">
			</div>
			<?php if($this->session->userdata('logged_in')) { ?>
			<div class="col-md-2 offset-md-8">
				<p><?php echo $image['image_name']; ?></p>
				<p><?php echo $image['posted_at']; ?></p>
			</div>
			<?php } ?>
	
	</div>
<?php endforeach; ?>

<?php if($this->session->userdata('logged_in')) { ?>
<div class="col-md-4 mx-auto text-center">
	<?php echo form_open_multipart(site_url('admin/galleries/image_insert/'.$gallery['slug'])); ?>
		<div class="form-group">
			<h5>Add Photos:</h5>
			<input type="file" name="files[]" multiple size="20">
			<input type="hidden" name="id" value="<?php echo $gallery['id'];?>">
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>

<?php } ?>
