<h1>Albums by Artist</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Release Year</th>
        <th>Genre Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td> <?php echo $album['album_id']?></td>
    <td> <?php echo $album['album_title']?></td>
    <td> <?php echo $album['price']?></td>
    <td> <?php echo $album['release_year']?></td>
    <td> <?php echo $album['genre_name']?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
