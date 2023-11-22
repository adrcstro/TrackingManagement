function showDriver() {
    document.getElementById('Dashboard-table').style.display = 'block';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
}

function showPassengers() {
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'block';
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
}

function showAdmin() {
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'block';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
}
function showCalculator(){
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'block';
    document.getElementById('Complein-table').style.display = 'none';
}
function showComplaincenter(){
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'block';
}









function calculateFare() {
    // Retrieve input values
    var location = document.getElementById('location').value;
    var distance = parseFloat(document.getElementById('distance').value);
    var meters = parseFloat(document.getElementById('meters').value);
    var fareRate = parseFloat(document.getElementById('fareRate').value);

    // Check if inputs are valid
    if (isNaN(distance) || isNaN(fareRate) || isNaN(meters)) {
        Swal.fire({
            title: 'Error',
            text: 'Please enter valid distance, meters, and fare rate values.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return;
    }

    // Convert meters to kilometers
    var distanceInKm = distance + meters / 1000;

    // Perform the fare calculation
    var result;
    if (location === 'within') {
        // Your calculation logic for within Barangay 409
        result = distanceInKm * fareRate;
    } else {
        // Your calculation logic for outside Barangay 409
        // Replace this with your actual logic
        result = distanceInKm * fareRate * 1.5; // Example: 1.5 times the rate for outside
    }

    // Display the result using SweetAlert
    Swal.fire({
        title: 'Fare Calculation Result',
        html: `<p>The calculated fare is: ${result.toFixed(2)}</p>`, // Display result with two decimal places
        icon: 'success',
        confirmButtonText: 'OK'
    });
}
