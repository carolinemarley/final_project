<?php
function selectArtists() {
    try {
        $conn = get_db_connection(); // Make sure the connection is successful
        if (!$conn) {
            throw new Exception('Database connection failed.');
        }

        $stmt = $conn->prepare("select stage_name, COUNT(albums_on_hand) as num_albums from artist a join album al on a.artist_id = al.artist_id group by stage_name");

        // Execute the query and check if it's successful
        if (!$stmt->execute()) {
            throw new Exception('Query execution failed: ' . $stmt->error);
        }

        // Get the result set
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            throw new Exception('No artists found.');
        }

        $conn->close(); // Close the connection
        return $result;
    } catch (Exception $e) {
        // Handle exceptions (e.g., connection errors, query errors)
        if (isset($conn)) {
            $conn->close();
        }
        echo "Error: " . $e->getMessage();
        return null; // Return null in case of an error
    }
}
?>
