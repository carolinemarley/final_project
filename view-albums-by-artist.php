<body style = "background-color: #f8c9d4;">
<h1>Albums by Artist</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Release Year</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td> <?php echo $album['artist_name']?></td>
    <td> <?php echo $album['stage_name']?></td>
    <td> <?php echo $album['album_title']?></td>
    <td> <?php echo $album['release_year']?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
