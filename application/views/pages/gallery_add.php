<div class="login col-md-4 mx-auto text-center">
	<h1>Gallery Add</h1>

	<?php echo validation_errors(); ?>

	<?php echo form_open_multipart(site_url('admin/galleries/gallery_insert')); ?>
		<div class="form-group">
			<input class="form-control" type="text" name="name" placeholder="Gallery Name">
		</div>
		<div class="form-group">
		   	<label>Upload Image</label><br>
		   	<input type="file" name="files[]" multiple size="20" >
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
