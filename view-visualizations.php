<h1>Analysis Visualizations</h1>

   
<div style="width: 600px; height: 600px;">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
            <?php
                while ($driver = $drivers->fetch_assoc()) {
                  echo $driver['num_shifts'] . ", ";
            }
            ?>
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
            <?php
            $drivers = selectDrivers();
                while ($driver = $drivers->fetch_assoc()) {
                  echo "'" . $driver['name'] . "', ";
            }
            ?>
    ]
}
  });
</script>
