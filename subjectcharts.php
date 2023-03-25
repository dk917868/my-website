<?php
// Establish a connection to your database
include "../connection.php";
// Retrieve the data from your database
$sql = "SELECT Subject, round(avg(correctanswer),2) as avg, count(*) as total FROM examresults where username='$_SESSION[username]' GROUP BY Subject";

$result = mysqli_query($link, $sql);

// Format the data for the pie chart
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[$row['Subject']] = $row['avg'];
}
$data = json_encode($data);

// Create the pie chart using Chart.js
?>
<html>

<head>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
</head>

<body>
    <!-- <canvas id="myChart"></canvas> -->
    <script>
        var ctx = document.getElementById('mySubChart').getContext('2d');
        var data = <?php echo $data; ?>;
        var chart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(data),
                datasets: [{
                    data: Object.values(data),
                    backgroundColor: [
                        "#1C1C1C",
                        "#25d5f2",
                        "#C0392B",
                        "#27AE60",
                        "#2980B9",
                        "#F1C40F",
                        "#8E44AD",
                        "#7F8C8D",
                        "#D35400",

                    ],

                }]
            }
        });
    </script>

    <!-- bar chart  -->
    <?php
    $sql = "SELECT Subject, max(correctanswer) as highscore,examtime FROM examresults where username='$_SESSION[username]' group by Subject order by examtime asc";
    $result = mysqli_query($link, $sql);
    $chart_data = "";
    while ($row = mysqli_fetch_array($result)) {

        $Subject[]  = $row['Subject'];
        $subcorrectanswer[] = $row['highscore'];
    }
    ?>
    <!-- <canvas id="chartjs_bar"></canvas> -->
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    
    <script type="text/javascript">
        var ctx = document.getElementById("Subchartjs_bar").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($Subject); ?>,
                datasets: [{
                    backgroundColor: [
                        "#1C1C1C",
                        "#25d5f2",
                        "#C0392B",
                        "#27AE60",
                        "#2980B9",
                        "#F1C40F",
                        "#8E44AD",
                        "#7F8C8D",
                        "#D35400",
                    ],
                    data: <?php echo json_encode($subcorrectanswer); ?>,
                }]
            },
            
        });
    </script>
</body>

</html>