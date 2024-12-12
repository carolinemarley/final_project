<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_name, count(g.artist_id) as num_genres FROM artist a JOIN genre g ON a.artist_id = g.artist_id GROUP BY artist_name");
        $stmt->execute();
        $result = $stmt->get_result();
        
        $artists = [];
        while ($row = $result->fetch_assoc()) {
            $artists[] = $row;
        }
        
        $conn->close();
        return $artists;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        throw $e;
    }
}
?>
