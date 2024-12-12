<body style = "background-color: #f8c9d4;">
<h1>Bar Chart Analysis</h1>
<div>
  <canvas id="myChart"></canvas>
</div>

 <div style="background-color: white; padding: 20px; text-align: center; margin-top: 20px;">
    <p style = "color: lightgpink; font-size: 18px;">In this chart, you can see how many albums we have on hand per artist. Please continue to come back to this page to see updated numbers. </p>
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
           backgroundColor: [
            'rgba(255, 99, 132, 0.2)',  // Red
            'rgba(54, 162, 235, 0.2)',  // Blue
            'rgba(255, 206, 86, 0.2)',  // Yellow
            'rgba(75, 192, 192, 0.2)',  // Green
            'rgba(153, 102, 255, 0.2)', // Purple
            'rgba(255, 159, 64, 0.2)'   // Orange
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
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
