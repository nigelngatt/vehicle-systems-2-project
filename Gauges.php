<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="jquery-1.9.1.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge, corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var button = document.getElementById('btn1');
        var button2 = document.getElementById('btn2');
        var button3 = document.getElementById('btn3');

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Speed', 0],
          ['Acceleration', 0],
          ['Air Pressure', 0],          
          ['GPS Coordinates', 0]
        ]);

        var data2 = google.visualization.arrayToDataTable([
          ['Label', 'Value', {role: 'style' }],
          ['Weight Capacity', 500, '#FF8E0E'],
          ['Lift Capacity', 700, '#17F034']
		]);

        var options2 = {
            backgroundColor: "transparent",
            style: {color: 'red'},
            height: 100,
            hAxis: { title: "", gridlines: { color: "transparent"}, minorGridlines: {color: "transparent"}},
            series: [{color: "transparent", visibleInLegend:false, labelInLegend: false}],
            legend: "none",
            orientation: "horizontal",
            vAxis: {title: ""}
		};

        var options = {
          backgroundColor: "transparent",
          max: 1000,
          width: 1800, height: 240,
          greenColor: '#FFAA55',
          redColor: '#DC0039',
          yellowColor: '#FF0099',
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          greenFrom: 50, greenTo: 75,
          majorTicks: 0,
          minorTicks: 0,
          animation: {easing: 'linear', duration: 1000},
          forcelFrame: true,
          vAxis:{ticks: 'MPH'}
          //vAxis.gridlines.count
          //vAxis:{gridlines:{count: }}
        };

        button.onclick = function() {
        var newValue1 = 1000 - data.getValue(0, 1);
        var newValue2 = 1000 - data.getValue(1, 1);
        //hitta metod att mäta tiden som knappen är tryckt;
        data.setValue(0, 1, newValue1);
        data.setValue(1, 1, newValue2);
        }

        button2.onclick=function(){
        var newValue1 = 0;
        var newValue2 = 0;
        data.setValue(0, 1, newValue1);
        data.setValue(1, 1, newValue2);
		}

        button3.onclick=function(){
        var newValue1 = 1000 - data.getValue(2, 1);
        data.setValue(2, 1, newValue1);
		}

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
        var chart2 = new google.visualization.BarChart(document.getElementById('chart_div_two'));

        chart.draw(data, options);
        chart2.draw(data2, options2);

        google.visualization.events.addListener(chart, 'select', callbackFnc);

        function callbackFnc() {
            alert('Modification attempt found.');
        };

        setInterval(function() {
          data.setValue(0, 1, 0);
          chart.draw(data, options);
        }, 13000);
        setInterval(function() {
          data.setValue(1, 1, 0);
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
          data.setValue(2, 1, 0);
          chart.draw(data, options);
        }, 26000);
         setInterval(function () {
              data.setValue(3, 1, 0);
              chart.draw(data, options);
          }, 1000);
         setInterval(function () {
              data.setValue(4, 1, 0);
              chart.draw(data, options);
          }, 10000);
      }
    </script>
    <style>body{margin:0 auto}.gauges{}</style>
    <link href="http://gatsfield.com/style/style.css" rel="stylesheet" />
    <link href="http://gatsfield.com/style/http_use.typekit.net_toj0cci.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://moviezimmer.com/style/style.css">
    <link rel="stylesheet" href="https://moviezimmer.com/style/column.css">
    <link rel="stylesheet" href="https://moviezimmer.com/style/menu.css">
    <link rel="stylesheet" href="https://moviezimmer.com/style/media.css">
    <link rel="stylesheet" href="https://moviezimmer.com/style/fonts.css">
    <link rel="stylesheet" href="https://moviezimmer.com/style/appearance.css">
    <link rel="stylesheet" href="https://moviezimmer.com/style/buttons.css">
    <link rel="stylesheet" href="https://uate.co.uk/style/custom.css">
    <link rel="stylesheet" href="https://use.typekit.net/hay7yxr.css">    <script src="jquery-1.9.1.js"></script>
    <style>
    .grids{
      margin: 0 auto;
      display: grid;
    }
    .col-1{
        grid-column: auto;
        grid-column-start: 1;
	}

    .col-2{
     width:620px;
     grid-column: auto;
	}
    </style>
</head>
<body class="bd-cl-2">
    <?php include('menu.php');?>
    <div class="grids">
    <div class="col-1 row-1">
    <div class="gauges"><div id="chart_div" style="width: 700px; height: 240px;"></div></div>
    </div>

    <div class="col-2 row-1">
    <div class="capacity"><div id="chart_div_two" style="width:700px; height:240px;"></div></div>
    </div>
    </div>
        <!--<button id="speed">Speed</button>
        <button id="acc">Acceleration</button>
        <button id="press">Pressure</button>-->
        <button class="btn-md-lg xxxl" id="btn3">Check Psi</button>
        <!--<button id="cap1">Weight Capascity</button>
        <button id="cap2">Lift Capacity</button>-->
<div><?php include('ShowPages.php'); ?></div>
<button class="btn-md-lg xxxl" id="btn1">Gas</button>
<button class="btn-md-lg xxxl" id="btn2">Break</button>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>
<script>
    var audio = document.createElement('audio');
    audio.setAttributeNode(new DOMAttr('controls'));
    audio.setAttribute('src', '/audio/');
    $("#speed").click(function () {
        alert("Speed modification started.");
        document.getElementById("speed").appendChild(audio);
    });
</script>