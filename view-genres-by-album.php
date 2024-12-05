<h1>Other Albums on Hand with the Same Genre</h1>
<div class = "table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Albums on Hand</th>
        <th>Price</th>
        <th>Release Year</th>
        <th>Genre Name </th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($genre = $genres->fetch_assoc()) {
?>
  <tr>
    <td> <?php echo $genre['album_title']?></td>
    <td> <?php echo $genre['albums_on_hand']?></td>
    <td> <?php echo $genre['price']?></td>
    <td> <?php echo $genre['release_year']?></td>
    <td> <?php echo $genre['genre_name']?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
