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
    $stmt = $conn->prepare("SELECT albums_on_hand, a.album_id, price, release_year, genre_name, a.genre_id FROM album a JOIN genre g on a.genre_id = g.genre_id WHERE a.genre_id = ?");
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
