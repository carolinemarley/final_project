<body style = "background-color: #f8c9d4;">
<h1>Store Chart Analysis</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


 <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',  // Changed from 'doughnut' to 'bar'
      data: {
        datasets: [{
          label: 'Number of Albums',  // Added label for the bars
          data: [
            <?php
              while ($artist = $artists->fetch_assoc()) {
                echo $artist['num_albums'] . ",";
              }
            ?>
          ],
          backgroundColor: 'rgba(75, 192, 192, 0.2)',  // Bar color
          borderColor: 'rgba(75, 192, 192, 1)',  // Bar border color
          borderWidth: 1
        }],
        labels: [
          <?php
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
            beginAtZero: true  // Ensures the y-axis starts from 0
          }
        }
      }
    });
  </script>
</body>
