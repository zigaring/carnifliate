<h2 style="text-align: center">Upcoming Shows</h2>

<div>
  <table class="table table-hover">
      <thead>
        <tr class="table-active">
          <th scope="col">Date</th>
          <th scope="col">City</th>
          <th scope="col">Country</th>
          <th scope="col">Venue</th>
        <?php if($this->session->userdata('logged_in')){ ?>
          <th scope="col">Edit/Delete</th>
        <?php } ?>
        </tr>
      </thead>
  <?php foreach($shows as $show): ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $show['date'] ?></th>
          <td><?php echo $show['city'] ?></td>
          <td><?php echo $show['country'] ?></td>
          <td><?php echo $show['venue'] ?></td>
        <?php if($this->session->userdata('logged_in')){ ?>
          <td>
            <button class="btn btn-secondary">
              <a href="<?php echo base_url();?>admin/shows/edit/<?php echo $show['id'] ?>">Edit</a></button>
            <button class="btn btn-danger">
              <a href="<?php echo base_url();?>admin/shows/delete/<?php echo $show['id'] ?>">Delete</a></button>
          </td>
        <?php } ?>
        </tr>
      </tbody>
  <?php endforeach; ?>
  </table>
  <hr style="height:30px">
</div>

<?php if($this->session->userdata('logged_in')){ ?>
  <div class="container">
    <h2 style="text-align: center">Add Shows</h2>
    <form class="form-group" method="post" action="<?php echo site_url('shows/create'); ?>">
        <label>Concert Date</label>
        <input type="text" class="form-control" name="date" placeholder="Concert date">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="City">
        <label>Country</label>
        <input type="text" class="form-control" name="country" placeholder="Country">
        <label>Venue</label>
        <input type="text" class="form-control" name="venue" placeholder="Venue">
        <br>
        <button type="submit" class="btn btn-secondary" name="submit" value="Submit">Submit</button>
    </form>
  </div>
<?php } ?>

<?php echo validation_errors(); ?>

