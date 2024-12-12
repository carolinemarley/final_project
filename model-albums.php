<?php
function selectAlbums() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT album_id, album_title, albums_on_hand, price, release_year, genre_id FROM `album`");
    $stmt->execute(); 
    $result = $stmt->get_result();
    $conn->close(); 
    return $result; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function insertAlbum($aTitle, $aOnHand, $aPrice, $aYear, $aGenre, $aArtist) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO `album` (`album_title`, `albums_on_hand`, `price`, `release_year`, `genre_id`, `artist_id`) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssii", $aTitle, $aOnHand, $aPrice, $aYear, $aGenre, $aArtist);
    $success = $stmt->execute(); 
    $result = $stmt->get_result(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function updateAlbum($aTitle, $aOnHand, $aPrice, $aYear, $aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("UPDATE `album` set `album_title` = ?, `albums_on_hand` =?, `price` = ?, `release_year` = ?  WHERE album_id = ?");
    $stmt->bind_param("ssssi", $aTitle, $aOnHand, $aPrice, $aYear, $aid);
    $success = $stmt->execute(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function deleteAlbum($aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("delete from album where album_id =?");
    $stmt->bind_param("i", $aid);
    $success = $stmt->execute(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}
?>
