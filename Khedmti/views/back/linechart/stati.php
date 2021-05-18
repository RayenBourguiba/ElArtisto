<?php 

$connection= mysqli_connect('localhost','root','','atelierphp');
$result=mysqli_query($connection,"SELECT*FROM users")

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['user_id', 'user_role', 'user_name'],

                <?php

                    if(mysqli_num_rows($result)> 0){

                        while($row = mysqli_fetch_array($result)){

                            echo "['".$row['user_id']."', '".$row['user_role']."', ['".$row['user_name']."']],";

                        }


                    }



                ?>

            ]);
            var options = {
                chart: {
                    title: 'Company Performance',
                    subtitle: 'user_id, user_role,user_name and : 2014-2017',
                    width: 5000,
                    height: 500
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

</head>
<body>

<div id="columnchart_material"></div>


</body>
</html>
<?php