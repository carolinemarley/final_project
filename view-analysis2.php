<body style="background-color: #f8c9d4;">
  <h1>Bar Analysis</h1>
  <div>
    <canvas id="myChart"></canvas>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',  <!-- Change the chart type to 'bar' -->
      data: {
        datasets: [{
          label: 'Number of Albums',  <!-- Label for the dataset -->
          data: [
            <?php
            // Loop through artists to output their number of albums
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
          // Loop through artists to output their stage names as labels
          $artists = selectArtists(); 
          while ($artist = $artists->fetch_assoc()) {
            echo "'" . $artist['stage_name'] . "',"; 
          }
          ?> 
        ]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true  <!-- Ensure Y-axis starts at 0 -->
          }
        },
        plugins: {
          legend: {
            display: true  <!-- Display legend if needed -->
          }
        }
      }
    });
  </script>
</body>
