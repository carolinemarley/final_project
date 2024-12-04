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
    $stmt = $conn->prepare("select g.genre_id, genre_name, album_title, albums_on_hand, price, release_year FROM genre g JOIN album a ON a.genre_id WHERE g.genre_id = 1");
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
