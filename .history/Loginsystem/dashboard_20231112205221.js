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

