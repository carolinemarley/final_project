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
          label: 'Number of Albums',  
          data: [
            <?php
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
          $artists = selectArtists(); 
          while ($artist = $artists->fetch_assoc()) {
            echo "'" . $artist['album_title'] . "',";  
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
            display: false  
          }
        }
      }
    });
  </script>

