<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_id, artist_name, stage_name FROM `artist`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectAlbumsByArtist($aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("select a.album_id, album_title, albums_on_hand, price, release_year, genre_name FROM album a JOIN genre g on g.genre_id WHERE a.genre_id = ?");
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
?>
