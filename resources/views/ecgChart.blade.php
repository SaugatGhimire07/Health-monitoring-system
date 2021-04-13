@include('nav')
<!doctype html>
<html>
  <head>
  <title>Bar Chart</title>
  <script src="http://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
  <script src="http://www.chartjs.org/samples/latest/utils.js"></script>
  <style>
  canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
  </style>
  </head>
  <body>
    <div class="row">
        <h3 class="title" style="padding-top:90px; margin-left:80px ">ECG</h3>
        <div class="col-lg-12 ECG" style="width: 100%; height: 75vh;">
            <canvas id="myChart" style="padding-right:80px;"></canvas>
        </div>
    </div>
    <script>
    var chartdata = {
    type: 'line',
    data: {
    labels: <?php echo json_encode($Time); ?>,
    // labels: month,
    datasets: [
    {
        label: 'ECG',
        fill: true,
        lineTension: 0.1,
        backgroundColor: 'rgb(78,115,223,0.4)',
        borderColor: 'rgb(78,115,223,1)',
        borderCapStyle: 'butt',
        borderDash: [],
        borderDasghOffset: 0.0,
        pointBorderColor: 'rgb(78,115,223,1)',
        pointBackgroundColor: '#fff',
        pointBorderWidth: 1,
        pointHoverRadius: 10,
    data: <?php echo json_encode($Data); ?>
    }
    ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                    }
            }]
            }
        }
    }
    var ctx = document.getElementById('myChart');
    new Chart(ctx, chartdata);
    </script>
  </body>
</html>