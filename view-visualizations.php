<h1>Analysis Visualizations</h1>



    <!-- Include Highcharts library -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- Container for the chart -->
    <div id="container" style="height: 500px;"></div>

    <!-- Your JavaScript code -->
    <script>
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
        name: 'Africa',
        data: [{
            name: 'Senegal',
            value: 8.2
        },
        {
            name: 'Cameroon',
            value: 9.2
        },
        {
            name: 'Zimbabwe',
            value: 13.1
        },
        {
            name: 'Ghana',
            value: 14.1
        },
        {
            name: 'Kenya',
            value: 14.1
        },
        {
            name: 'Sudan',
            value: 17.3
        },
        {
            name: 'Tunisia',
            value: 24.3
        },
        {
            name: 'Angola',
            value: 25
        },
        {
            name: 'Libya',
            value: 50.6
        },
        {
            name: 'Ivory Coast',
            value: 7.3
        },
        {
            name: 'Morocco',
            value: 60.7
        },
        {
            name: 'Ethiopia',
            value: 8.9
        },
        {
            name: 'United Republic of Tanzania',
            value: 9.1
        },
        {
            name: 'Nigeria',
            value: 93.9
        },
        {
            name: 'South Africa',
            value: 392.7
        }, {
            name: 'Egypt',
            value: 225.1
        }, {
            name: 'Algeria',
            value: 141.5
        }]
    }, {
        name: 'Oceania',
        data: [{
            name: 'Australia',
            value: 409.4
        },
        {
            name: 'New Zealand',
            value: 34.1
        },
        {
            name: 'Papua New Guinea',
            value: 7.1
        }]
    }, {
        name: 'North America',
        data: [{
            name: 'Costa Rica',
            value: 7.6
        },
        {
            name: 'Honduras',
            value: 8.4
        },
        {
            name: 'Jamaica',
            value: 8.3
        }]
    }, {
        name: 'South America',
        data: [{
            name: 'El Salvador',
            value: 7.2
        },
        {
            name: 'Uruguay',
            value: 8.1
        },
        {
            name: 'Bolivia',
            value: 17.8
        }]
    }, {
        name: 'Asia',
        data: [{
            name: 'Nepal',
            value: 6.5
        },
        {
            name: 'Georgia',
            value: 6.5
        },
        {
            name: 'Brunei Darussalam',
            value: 7.4
        },
        {
            name: 'Kyrgyzstan',
            value: 7.4
        }]
    }]
});
    </script>

  
<div style="width: 300px; height: 300px;">
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
