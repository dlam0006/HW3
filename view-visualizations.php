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

    <div id="piechart" style="width: 900px; height: 500px;"></div>

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
          title: 'Routes Count'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <!-- Include Highcharts library -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/packed-bubble.js"></script>
</head>
<body>
    <!-- Container for the chart -->
    <div id="container" style="height: 500px;"></div>

    <!-- Your JavaScript code -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

Highcharts.chart('container', {
    chart: {
        type: 'packedbubble',
        height: '100%'
    },
    title: {
        text: 'Carbon emissions around the world (2014)',
        align: 'left'
    },
    tooltip: {
        useHTML: true,
        pointFormat: '<b>{point.name}:</b> {point.value}m CO<sub>2</sub>'
    },
    plotOptions: {
        packedbubble: {
            minSize: '30%',
            maxSize: '120%',
            zMin: 0,
            zMax: 1000,
            layoutAlgorithm: {
                splitSeries: false,
                gravitationalConstant: 0.02
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}',
                filter: {
                    property: 'y',
                    operator: '>',
                    value: 250
                },
                style: {
                    color: 'black',
                    textOutline: 'none',
                    fontWeight: 'normal'
                }
            }
        }
    },
    series: [{
        name: 'Europe',
        data: [{
            name: 'Germany',
            value: 767.1
        }, {
            name: 'Croatia',
            value: 20.7
        },
        {
            name: 'Belgium',
            value: 97.2
        },
        {
            name: 'Czech Republic',
            value: 111.7
        },
        {
            name: 'Netherlands',
            value: 158.1
        },
        {
            name: 'Spain',
            value: 241.6
        },
        {
            name: 'Ukraine',
            value: 249.1
        },
        {
            name: 'Poland',
            value: 298.1
        },
        {
            name: 'France',
            value: 323.7
        },
        {
            name: 'Romania',
            value: 78.3
        },
        {
            name: 'United Kingdom',
            value: 415.4
        }, {
            name: 'Turkey',
            value: 353.2
        }, {
            name: 'Italy',
            value: 337.6
        },
        {
            name: 'Greece',
            value: 71.1
        },
        {
            name: 'Austria',
            value: 69.8
        },
        {
            name: 'Belarus',
            value: 67.7
        },
        {
            name: 'Serbia',
            value: 59.3
        },
        {
            name: 'Finland',
            value: 54.8
        },
        {
            name: 'Bulgaria',
            value: 51.2
        },
        {
            name: 'Portugal',
            value: 48.3
        },
        {
            name: 'Norway',
            value: 44.4
        },
        {
            name: 'Sweden',
            value: 44.3
        },
        {
            name: 'Hungary',
            value: 43.7
        },
        {
            name: 'Switzerland',
            value: 40.2
        },
        {
            name: 'Denmark',
            value: 40
        },
        {
            name: 'Slovakia',
            value: 34.7
        },
        {
            name: 'Ireland',
            value: 34.6
        },
        {
            name: 'Croatia',
            value: 20.7
        },
        {
            name: 'Estonia',
            value: 19.4
        },
        {
            name: 'Slovenia',
            value: 16.7
        },
        {
            name: 'Lithuania',
            value: 12.3
        },
        {
            name: 'Luxembourg',
            value: 10.4
        },
        {
            name: 'Macedonia',
            value: 9.5
        },
        {
            name: 'Moldova',
            value: 7.8
        },
        {
            name: 'Latvia',
            value: 7.5
        },
        {
            name: 'Cyprus',
            value: 7.2
        }]
    };
 </script>
