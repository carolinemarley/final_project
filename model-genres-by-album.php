function selectGenresByAlbum($aid) {
  try {
    // Step 1: Get the genre_id for the album with the provided album ID.
    $conn = get_db_connection();
    
    // First, fetch the genre_id for the given album_id (aid).
    $stmt = $conn->prepare("SELECT genre_id FROM album WHERE album_id = ?");
    $stmt->bind_param("i", $aid);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // If no result is returned, exit the function.
    if ($result->num_rows == 0) {
        return null;  // No album found
    }
    
    $album = $result->fetch_assoc();
    $genre_id = $album['genre_id'];
    $stmt->close();

    // Step 2: Now fetch all albums with the same genre_id
    $stmt = $conn->prepare("SELECT album_id, album_title, g.genre_name, a.genre_id 
                            FROM album a
                            JOIN genre g ON a.genre_id = g.genre_id
                            WHERE a.genre_id = ?");
    $stmt->bind_param("i", $genre_id);  // Using the genre_id from the album
    $stmt->execute();
    $result = $stmt->get_result();
    $conn->close();
    
    return $result;
  } catch (Exception $e) {
      $conn->close();
      throw $e;
  }
}
