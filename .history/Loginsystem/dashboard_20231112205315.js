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
    var location = document.getElementById('location').value;
    var distance = parseFloat(document.getElementById('distance').value);
    var fareRate = parseFloat(document.getElementById('fareRate').value);

    if (isNaN(distance) || isNaN(fareRate)) {
        alert('Please enter valid numbers for distance and fare rate.');
        return;
    }

    // Adjust fare rate based on location
    if (location === 'within') {
        fareRate *= 1.5; // Adjust the multiplier as needed
    }

    var fare = distance * fareRate;

    // Assuming fare is now in PHP
    document.getElementById('result').innerHTML = 'Total Fare: ₱' + fare.toFixed(2);
}
