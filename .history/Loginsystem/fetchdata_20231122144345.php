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
    <?php
        // Your existing PHP code here

        // Reset the result pointer to the beginning
        mysqli_data_seek($result, 0);

        // Iterate through the results again
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-4 mb-5">'; // Adjusted margin-bottom to mb-5
            echo '<div class="card">';
            echo '<canvas class="line-chart" id="lineChart' . $row['id'] . '" width="400" height="200"></canvas>';
            echo '<div class="card-body">';
            echo '<h6 class="card-title">Drivers Name: <span style="font-weight:normal;">' . $drivername . '</span></h6>';
            echo '<h6 class="card-title">Vehicle Number: <span style="font-weight:normal;">' . $ViehicleNumber . '</span></h6>';
            echo '<h6 class="card-title">Plate Number: <span style="font-weight:normal;">' . $PlateNumber . '</span></h6>';
            echo '<h6 class="card-title">Phone Number: <span style="font-weight:normal;">' . $phone . '</span></h6>';
            echo '<h6 class="card-title">Home Address: <span style="font-weight:normal;">' . $home . '</span></h6>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
<script>
    // Initialize Bootstrap tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $(document).ready(function () {
        <?php
            // Reset the result pointer to the beginning
            mysqli_data_seek($result, 0);

            // Iterate through the results again
            while ($row = mysqli_fetch_assoc($result)) {
                echo 'var ctx' . $row['id'] . ' = document.getElementById("lineChart' . $row['id'] . '").getContext("2d");';
                echo 'var myChart' . $row['id'] . ' = new Chart(ctx' . $row['id'] . ', {';
                echo '  type: "line",';
                echo '  data: {';
                echo '    labels: ["January", "February", "March", "April", "May", "June", "July"],';
                echo '    datasets: [{';
                echo '      label: "Graph Data",';
                echo '      data: [12, 19, 3, 5, 2, 3, 8],'; // Replace with your actual data from the database
                echo '      borderColor: "rgba(75,192,192,1)",';
                echo '      borderWidth: 1';
                echo '    }]';
                echo '  },';
                echo '  options: {';
                echo '    scales: {';
                echo '      y: {';
                echo '        beginAtZero: true';
                echo '      }';
                echo '    }';
                echo '  }';
                echo '});';
            }
        ?>
    });
</script>
</body>
</html>
