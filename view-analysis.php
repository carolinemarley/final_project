<body style = "background-color: #f8c9d4;">
<h1>Store Chart Analysis</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: data = {
    datasets: [{
        data: [
<?php
while ($artist = $artists->fetch_assoc()) {
  echo $artist['num_albums'] . ",";
}
?> 
        ]
    }],

    labels: [
<?php
$artists = selectArtists(); 
while ($artist = $artists->fetch_assoc()) {
  echo "'" .$artist['stage_name'] . "',";
}
?> 
    ]
}, 
  });
  const barCtx = document.getElementById('myBarChart');
    new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: [
          <?php
          $artists = selectArtists(); 
          while ($artist = $artists->fetch_assoc()) {
            echo "'" .$artist['stage_name'] . "',";
          }
          ?> 
        ],
        datasets: [{
          label: 'Number of Albums',
          data: [
            <?php
            while ($artist = $artists->fetch_assoc()) {
              echo $artist['num_albums'] . ",";
            }
            ?> 
          ],
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
</script>
