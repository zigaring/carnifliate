<?php if($this->session->userdata('logged_in')){ ?>

<h2 style="text-align: center"><?= $title ?></h2>

  <div class="container">
    <form class="form-group" method="post" action="<?php echo site_url('admin/shows/update'); ?>">
        <input type="hidden" name="id" value="<?php echo $show['id'] ?>">
        <label>Concert Date</label>
        <input type="text" class="form-control" name="date" value="<?php echo $show['date'] ?>">
        <label>City</label>
        <input type="text" class="form-control" name="city" value="<?php echo $show['city'] ?>">
        <label>Country</label>
        <input type="text" class="form-control" name="country" value="<?php echo $show['country'] ?>">
        <label>Venue</label>
        <input type="text" class="form-control" name="venue" value="<?php echo $show['venue'] ?>">
        <br>
        <button type="submit" class="btn btn-secondary" name="submit" value="Submit">Submit</button>
    </form>
  </div>
<?php } ?>