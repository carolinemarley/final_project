<h1>Albums</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Albums on Hand</th>
        <th>Price</th>
        <th>Release Yeard</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td> <?php echo $album['album_id']?></td>
    <td> <?php echo $album['album_title']?></td>
    <td> <?php echo $album['albums_on_hand']?></td>
   <td> <?php echo $album['price']?></td>
   <td> <?php echo $album['release_year']?></td>
    <td>
          <form method = "post" action = "genres-by-album.php">
            <input type = "hidden" name = "bid" value = "<?php echo $album['album_id']?>">
      <button type="submit" class="btn btn-primary">Genres</button>
    </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
