<?php require_once 'db_conn.php' ?>
<?php

$query = "SELECT * FROM product_tbl";
$result = mysqli_query($conn, $query);


?>

<!doctype html> 
<html lang="en">
<head>
<a href="dataa.php">&#8592;</a>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<title>Pai Chart in Php</title>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['male', 2],
          ['female', 2],
         
        
          
          <?php

          while ($chart = mysqli_fetch_assoc($result))
          {
          echo "['".$chart['name']."',".$chart['values']."],";
          }
          ?>
        ]);
  
        var options = {
          title: 'GENDER'
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
