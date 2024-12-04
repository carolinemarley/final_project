<?php
function selectGenresbyAlbum($bid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT album_title, albums_on_hand, price, release_year, genre_name FROM album a join genre g on a.genre_id = g.genre_id WHERE a.genre_id = ?");
    $stmt->bind_param("i", $bid);
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
