  <style>
    .chart-container {
      display: flex;
      justify-content: space-between;
    }
    .chart-container > div {
      flex: 1;
    }
  </style>

<h1>Analysis Visualizations</h1>

  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<h3>Number of Trips per Day</h3>
  <div id="myChart2"></div>

  <script>
    var data = [{
      type: 'bar',
      orientation: 'h',
      x: [
        <?php
                while ($day = $days->fetch_assoc()) {
                  echo $day['num_trips'] . ", ";
            }
            ?>
      ],
      y: [
        <?php
            $days = selectDays();
                while ($day = $days->fetch_assoc()) {
                  echo "'" . $day['shift_days'] . "', ";
            }
            ?>
      ],
      marker: {
        color: 'rgba(75, 192, 192, 0.6)',
        line: {
          color: 'rgba(75, 192, 192, 1)',
          width: 1
        }
      }
    }];

    var layout = {
      xaxis: { title: 'Number of Trips' },
      yaxis: { title: 'Days' }
    };

    Plotly.newPlot('myChart2', data, layout);
  </script>

<h3>Number of Trips a Bus Makes a Week</h3>
<div id="chart"></div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.26.0/dist/apexcharts.min.js"></script>

<script>
    var options = {
        series: [{
            name: 'Number of Shifts',
            data: [
              <?php
                while ($bus = $buses->fetch_assoc()) {
                  echo $bus['num_shifts'] . ", ";
            }
            ?>
            ]
        }],
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                columnWidth: '50%',
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 2
        },
        grid: {
            row: {
                colors: ['#fff', '#f2f2f2']
            }
        },
        xaxis: {
            labels: {
                rotate: -45
            },
            categories: [
            <?php
            $buses = selectBuses();
                while ($bus = $buses->fetch_assoc()) {
                  echo "'" . $bus['bus_name'] . "', ";
            }
            ?>
            ],
            tickPlacement: 'on'
        },
        yaxis: {
            title: {
                text: 'Number of Shifts',
            },
          tickAmount: 2
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: "horizontal",
                shadeIntensity: 0.25,
                gradientToColors: undefined,
                inverseColors: true,
                opacityFrom: 0.85,
                opacityTo: 0.85,
                stops: [50, 0, 100]
            },
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
<div class="chart-container">
    <div style="width: 600px; height: 600px;">
      <h3>Number of Shifts for each Drive per Week</h3>
      <canvas id="myChart"></canvas>
    </div>
    <center><h3>Route Count per Week</h3></center>
    <div id="piechart" style="width: 600px; height: 600px;"></div>
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Route', 'Route Count'],
          <?php
                while ($route = $routes->fetch_assoc()) {
                  echo "['Route " . $route['route_id'] . "', " . $route['route_count'] . "], ";
            }
            ?>
        ]);

        var options = {
      chartArea: { width: '200%', height: '80%' }, // Adjust the width and height as needed
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
      }
    </script>


