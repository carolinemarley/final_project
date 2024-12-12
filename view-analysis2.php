<body style="background-color: #f8c9d4;">
  <h1>Bar Analysis</h1>
  <div>
    <canvas id="myChart"></canvas>
  </div>

  <div style="background-color: white; padding: 20px; text-align: center; margin-top: 20px;">
    <p style="color: lightpink; font-size: 18px; text-align: center;">You can see here the artists we have records for and how many per artist. Please come back to this page to see updated records.</p>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar', 
      data: {
        datasets: [{
          label: 'Number of Albums',  
          data: [
            <?php
            // Loop through artists to output their number of albums
            while ($artist = $artists->fetch_assoc()) {
              echo $artist['num_albums'] . ",";
            }
            ?> 
          ],
          backgroundColor: '#FF5733',  
          borderColor: '#C70039',      
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
            beginAtZero: true 
          }
        },
        plugins: {
          legend: {
            display: true  
          }
        }
      }
    });
  </script>
</body>
