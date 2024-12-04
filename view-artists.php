<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Stage Name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
// Get database connection
$conn = get_db_connection();

if ($conn === false) {
    // If the connection fails, stop the script and display an error message
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch artists from the correct table 'artist'
$query = "SELECT artist_id, artist_name, stage_name FROM artist";
$artists = $conn->query($query);

if ($artists === false) {
    // If the query fails, display the error message
    die("Query failed: " . $conn->error);
}

// Check if there are any artists to display
if ($artists->num_rows > 0) {
    // Loop through the result set and display each artist
    while ($artist = $artists->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $artist['artist_id']; ?></td>
    <td><?php echo $artist['artist_name']; ?></td>
    <td><?php echo $artist['stage_name']; ?></td>
    <td><a href="albums-by-artist.php?id=<?php echo $artist['artist_id']; ?>">Albums</a></td>
  </tr>
  <?php
    }
} else {
    // If no artists are found
    echo "<tr><td colspan='4'>No artists found.</td></tr>";
}

// Close the connection
$conn->close();
?>
    </tbody>
  </table>
</div>

