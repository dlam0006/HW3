<?php
include "css.php";
?>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<div style="margin-top: 20px;">
 <h1>Overview</h1>
</div>

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
          tickAmount: 3
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


<!---------------------------------------->

<br></br>
<h3>Number Shifts per Week by Driver</h3>
<div id="chart2"></div>


<script>
    var options = {
        series: [{
            name: 'Number of Shifts',
            data: [
              <?php
                while ($driver = $drivers->fetch_assoc()) {
                  echo $driver['num_shifts'] . ", ";
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
            $drivers = selectDrivers();
                while ($driver = $drivers->fetch_assoc()) {
                  echo "'" . $driver['name'] . "', ";
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

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();
</script>
