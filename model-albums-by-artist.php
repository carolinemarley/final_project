<?php
function selectAlbumsByArtist($aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("select album_title, albums_on_hand, price, release_year, genre_name FROM album a JOIN genre g ON a.genre_id = g.genre_id WHERE a.genre_id = ?");
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
