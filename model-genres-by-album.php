<?php
function selectGenresbyAlbum($aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("select album_id, album_title, genre_name, a.genre_id from album a join genre g on a.genre_id = g.genre_id where g.genre_id = ?");
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
