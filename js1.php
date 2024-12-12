<h1>Artists Chart</h1>
<div>
    <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart');
const artistsData = <?php
    // Fetch artists once
    $artists = selectArtists();
    $data = [];
    $labels = [];
    
    // Prepare data for the chart
    while ($artist = array_shift($artists)) {
        $data[] = $artist['num_genres'];
        $labels[] = $artist['artist_name'];
    }
    
    // Convert PHP arrays to JSON for JavaScript
    echo json_encode(['data' => $data, 'labels' => $labels]);
?>;

new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: artistsData.data,
            backgroundColor: [ // Optional: Add colors for each segment
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
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
        labels: artistsData.labels
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Artists and Their Genres'
            }
        }
    }
});
</script>
