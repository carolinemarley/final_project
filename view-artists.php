<h1>Artists</h1>
<div class="container">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Stage Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
<?php
while ($artist = $artists->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $artist['artist_id'];?></td>
    <td><?php echo $artist['artist_name'];?></td>
    <td><?php echo $artist['stage_name'];?></td>
    <td><a href = "albums-by-artist.php?id=<?php echo $artist['artist_id'];?>">Albums</a></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
