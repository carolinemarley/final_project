<body style="background-color: #f8c9d4;">
  <h1>Bar Analysis</h1>
  <div>
    <canvas id="myChart"></canvas>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',  
      data: {
        datasets: [{
          data: [
            <?php
            while ($artist = $artists->fetch_assoc()) {
              echo $artist['num_albums'] . ",";
            }
            ?> 
          ],
          backgroundColor: '#FF5733',  <!-- Set color for the bars -->
          borderColor: '#C70039',      <!-- Set color for the border of the bars -->
          borderWidth: 1
        }],
        labels: [
          <?php
          $artists = selectArtists(); 
          while ($artist = $artists->fetch_assoc()) {
            echo "'" . $artist['album_title'] . "',";
          }
          ?> 
        ]
 
