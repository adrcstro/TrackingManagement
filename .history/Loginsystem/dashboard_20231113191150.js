function showDriver() {
    document.getElementById('Dashboard-table').style.display = 'block';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
}

function showPassengers() {
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'block';
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
}

function showAdmin() {
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'block';
    document.getElementById('calculator-table').style.display = 'none';
}
function showCalculator(){
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'block';
}

function calculateFare() {
    // Retrieve input values
    var location = document.getElementById('location').value;
    var distance = parseFloat(document.getElementById('distance').value);

    // Check if inputs are valid
    if (isNaN(distance)) {
        Swal.fire({
            title: 'Error',
            text: 'Please enter a valid distance value.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return;
    }

    // Define standard fare matrix (replace with actual values)
    var withinBarangay409Rate = 10; // Fare rate within Barangay 409 per kilometer
    var outsideBarangay409Rate = 15; // Fare rate outside Barangay 409 per kilometer

    // Perform the fare calculation
    var result;
    if (location === 'within') {
        result = distance * withinBarangay409Rate;
    } else {
        result = distance * outsideBarangay409Rate;
    }

    // Display the result using SweetAlert
    Swal.fire({
        title: 'Fare Calculation Result',
        html: `<p>The calculated fare is: PHP ${result.toFixed(2)}</p>`, // Display result with two decimal places
        icon: 'success',
        confirmButtonText: 'OK'
    });
}
