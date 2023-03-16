<?php


require_once("include/connect.php");
ob_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/3.png" sizes="90x90">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
<?php

$query="select count(*) as count_h from book_hotel
";

$x=mysqli_query($conn,$query);
$arr=mysqli_fetch_array($x);

?>
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work', <?php echo $arr['count_h'];?>],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

</head>
<body>
    
</body>
</html>