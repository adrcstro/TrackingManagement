<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js -->
    <style>
        /* Your existing styles here */

        .line-chart {
            max-width: 100%;
            margin-top: 20px;
        }
    </style>
    <title>News and Events</title>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card">
                <canvas class="line-chart" id="lineChart1" width="400" height="200"></canvas>
                <div class="card-body">
                    <h6 class="card-title">Drivers Name: <span style="font-weight:normal;">John Doe</span></h6>
                    <h6 class="card-title">Vehicle Number: <span style="font-weight:normal;">123</span></h6>
                    <h6 class="card-title">Plate Number: <span style="font-weight:normal;">ABC123</span></h6>
                    <h6 class="card-title">Phone Number: <span style="font-weight:normal;">555-1234</span></h6>
                    <h6 class="card-title">Home Address: <span style="font-weight:normal;">123 Main St</span></h6>
                </div>
            </div>
        </div>

        <!-- Repeat the above card structure for additional cards -->

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        var ctx1 = document.getElementById("lineChart1").getContext("2d");
        var myChart1 = new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Graph Data",
                    data: [12, 19, 3, 5, 2, 3, 8],
                    borderColor: "rgba(75,192,192,1)",
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Repeat the above chart initialization for additional charts
    });
</script>
</body>
</html>
