<hr>
<h2 style="text-align: center"><?= $title ?></h2>

<div class="container">
	<h5><b>SLO:</b></h5><br>
	<p>
		<?php foreach($about as $abt): ?>
			<?php echo $abt['opis_slo']; ?>
		<?php endforeach; ?>
	</p>
	<br>
	<h5><b>ENG:</b></h5>
	<p>
		<?php foreach($about as $abt): ?>
			<?php echo $abt['opis_eng']; ?>
		<?php endforeach; ?>
	</p>
</div>
<hr style="height: 40px">

<?php if($this->session->userdata('logged_in')){ ?>
	<h3 style="text-align: center">Edit About</h3>
<div class="container">
	<form class="form-group" method="post" action="<?php echo base_url();?>admin/about/update_about">
		<b><label>Opis SLO</label></b>
		<textarea class="form-control" id="editor1" name="opis_slo"><?php echo $abt['opis_slo']; ?></textarea><br>
		<b><label>Opis ENG</label></b>
		<textarea class="form-control" id="editor2" name="opis_eng"><?php echo $abt['opis_eng']; ?></textarea><br>
		<input type="submit" class="btn btn-primary" value="Edit">
	</form>
</div>

<?php } ?>