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
</script>
