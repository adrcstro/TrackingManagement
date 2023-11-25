<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Rating Form</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<form id="updateForm" action="#" method="post" enctype="multipart/form-data">
    <label for="SearchDriver">Search for Driver Name</label>
    <input type="text" name="SearchDriver" id="SearchDriver" class="form-control" placeholder="Driver's Name" required>
    <div id="searchResults"></div>

    <div style="padding: 50px;">
        <div data-stepped-bar='{"title": "Service Rating", "categories": [ {"name": "Unsatisfactory/Very Poor", "value": 10, "color": "#ff6384"}, {"name": "Poor", "value": 50, "color": "#ff9f40"}, {"name": "Satisfactory/Fair", "value": 10, "color": "#ffcd56"}, {"name": "Good", "value": 10, "color": "#4bc0c0"}, {"name": "Excellent", "value": 5, "color": "#36a2eb"} ]}'>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        $('#SearchDriver').on('input', function () {
            var searchQuery = $(this).val();

            // Perform an AJAX request to fetch data based on the searchQuery
            $.ajax({
                url: 'index.php', // Assume the file is named index.php
                method: 'POST',
                data: { SearchDriver: searchQuery },
                success: function (response) {
                    // Update the searchResults div with the fetched data
                    $('#searchResults').html(response);

                    // Parse the response and update the data-stepped-bar
                    var ratingData = JSON.parse(response);
                    updateSteppedBar(ratingData.rate);
                }
            });
        });

        function updateSteppedBar(rate) {
            // Update the data-stepped-bar with the new rate
            var steppedBar = $('[data-stepped-bar]');
            steppedBar.attr('data-stepped-bar', JSON.stringify({ title: 'Service Rating', categories: rate }));
        }
    });
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the request is a POST request
    $searchDriver = $_POST['SearchDriver'];

    // Perform a database query to get the rating data based on the driver name
    // Replace the following lines with your actual database query
    $ratingData = [
        'rate' => [
            ['name' => 'Unsatisfactory/Very Poor', 'value' => 10, 'color' => '#ff6384'],
            // Add other categories as needed
        ],
        // Other data you want to send back to the client
    ];

    echo json_encode($ratingData);
}
?>

</body>
</html>
