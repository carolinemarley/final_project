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

function selectAlbumsByArtist($gid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("select DISTINCT album_title, albums_on_hand, price, release_year FROM album a join genre g on a.genre_id WHERE a.genre_id = ?");
    $stmt->bind_param("i", $gid);
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
