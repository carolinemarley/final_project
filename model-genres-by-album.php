<?php
function selectGenresbyAlbum($genre_id) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("select album_id, album_title, genre_name, a.genre_id from album a join genre g on a.genre_id = g.genre_id where a.genre_id = ?");
    $stmt->bind_param("i", $genre_id);
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
