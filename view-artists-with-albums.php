<body style = "background-color: #f8c9d4;">
<h1>Artists with Albums</h1>
<div class="row row-cols-1 ro-cols-md-5 g-4" style="background-color: #f8d7da;">
<?php
while ($artist = $artists->fetch_assoc()) {
  ?>
  <div class="col">
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist['artist_name'];?></h5>
      <p class="card-text">
      <ul class="list-group">
  <?php
    $albums = selectAlbumsByArtist($artist['artist_id']);
  while ($album = $albums->fetch_assoc()){
?>
     <li class="list-group-item"><?php echo $album['album_title']?> - <?php echo $album['albums_on_hand']?> - <?php echo $album['price']?> - <?php echo $album['release_year']?> </li>
<?php
  }
  ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Stage Name: <?php echo $artist['stage_name'];?></small></p>
    </div>
    </div>
  </div>
  <?php
}
?>
</div>
