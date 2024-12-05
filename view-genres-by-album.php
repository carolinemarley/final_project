<h1>Other Albums on Hand with the Same Genre</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Genre Name</th>
        <th>Genre ID</th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($genre = $genres->fetch_assoc()) {
?>
  <tr>
    <td> <?php echo $genre['album_id']?></td>
    <td> <?php echo $genre['album_title']?></td>
    <td> <?php echo $genre['genre_name']?></td>
    <td> <?php echo $genre['genre_id']?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
