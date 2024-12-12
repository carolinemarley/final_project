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

function insertArtist($aName, $aSName) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO `artist` (`artist_name`, `stage_Name`) VALUES (?, ?)");
    $stmt->bind_param("ss", $aName, $aSName);
    $success = $stmt->execute(); 
    $result = $stmt->get_result(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function updateArtist($aName, $aSName, $aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("UPDATE `artist` set `artist_name` = ?, `stage_name` =?  WHERE artist_id = ?");
    $stmt->bind_param("ssi", $aName, $aSName, $aid);
    $success = $stmt->execute(); 
    $conn->close(); 
    return $success; 
  } catch (Exception $e){
      $conn->close();
    throw $e;
  }
}

function deleteArtist($aid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("delete from artist where artist_id =?");
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
?>
