<?php
session_start();
require_once('library.php');
?>

<html>
<head>
<title>Number of Bookings Per Month</title>
<style type="text/css">
BODY {
    background-color:rgb(128, 238, 241);
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


</head>
<body>
    <div id="chart-container" class="parent" style="position: relative;top:10%;left:15%; height:40vh; width:80vw">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
      var months= ["January","February","March","April","May","June","July","August","September","October","November","December"];
      var data1;
      Chart.scaleService.updateScaleDefaults('linear', {
    ticks: {
        min: 0
    }
});
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    data=JSON.parse(data);
                    data1=data;
                    console.log(data);
                     var monthname = [];
                    var icount = [];

                    for (var i in data) {
                        monthname.push(" Month: "+ months[data[i].month-1]);
                        icount.push(data[i].countnum);

                    }

                    var chartdata = {
                        labels: monthname,
                        options: {
                            yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                              }
                          }],

                        },
                        datasets: [
                            {
                                label: 'Monthwise Consignment Check',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                barPercentage: 0.2,
                                barThickness: 2,
                                maxBarThickness:0.2,
                                minBarLength: 2,
                                data: icount,
                                min: 0,
                                backgroundColor: [
                                  'rgb(0,0,50)',
                                  'rgb(0,0,69)',
                                  'rgb(0,0,89)',
                                  'rgb(0,0,108)',
                                  'rgb(0,0,128)',
                                  'rgb(0,0,148)',
                                  'rgb(0,0,168)'

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
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>