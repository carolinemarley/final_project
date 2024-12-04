<?php
function selectAlbums() {
  try {
    $conn = get_db_connection(); // Assuming this is your DB connection function
    $stmt = $conn->prepare("SELECT album_id, album_title, albums_on_hand, price, release_year FROM `album`");
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Fetch results into an associative array
    $albums = [];
    while ($row = $result->fetch_assoc()) {
      $albums[] = $row;  // Add each album to the array
    }
    
    $conn->close();
    
    return $albums;  // Return the array of albums
    
  } catch (Exception $e) {
    if (isset($conn)) {
      $conn->close();
    }
    throw $e; // Rethrow the exception
  }
}

?>
