<?php
function selectAlbumsByArtist($aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("select artist_name, stage_name, album_title, release_year FROM artist a join album al on a.artist_id = al.artist_id WHERE a.artist_id = ?");
    $stmt->bind_param("i", $aid);
    $stmt->execute(); 
    $result = $stmt->get_result();
    $conn->close(); 
    return $result; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}
?>
