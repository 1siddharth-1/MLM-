<?php
include('dash.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});

      google.charts.setOnLoadCallback(drawChart);

      google.charts.setOnLoadCallback(drawChart1);

      google.charts.setOnLoadCallback(drawChart2);



      function drawChart() {
         var data = google.visualization.arrayToDataTable([
          ['FUNDING AGENCY', 'NO OF PROJECTS'],
          ['NABARD', <?php echo $num_rows7 ?>],
          ['NDB', <?php echo $num_rows8 ?>],
          ['STATE HEAD', <?php echo $num_rows9 ?>],
          ['DISTRICT MINING', <?php echo $num_rows11 ?>],
                    ['MINING AREA SES', <?php echo $num_rows10 ?>],

          
        ]);

        var options = {
          chart: {
            title: 'FUNDING AGENCY WISE NO OF PROJECT',
            subtitle: '',

          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

       function drawChart1() {
        var data = google.visualization.arrayToDataTable([
          ['HOUSEHOLD', 'NOs', { role: 'style' }],
          ['TOTAL NO OF HOUSEHOLD',<?php echo $num_rows13 ?>,'color:#b87333' ],
          ['TOTAL HOUSEHOLD WITH TAP CONNECTION',<?php echo $num_rows12 ?>,'#b87333'],
          ['REMAINING HOUSEHOLD', <?php echo $num_rows8 ?>,'#b87333'],
        ]);

        var options = {
          chart: {
            title: 'STATUS OF HOUSEHOLD CONNECTION',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'value'],
          ['TOTAL PROJECTS', <?php echo $num_rows3 ?>],
          ['COMPLETED PROJECTS', <?php echo $num_rows2 ?>],
          ['ONGOING PROJECTS', <?php echo $num_rows1 ?>],
        ]);

        var options = {
          chart: {
            title: 'Project Status',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>

  </body>
</html>
