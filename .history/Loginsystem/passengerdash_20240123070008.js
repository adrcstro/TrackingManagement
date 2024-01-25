function showDriver() {
    document.getElementById('Dashboard-table').style.display = 'block';
   
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'none';
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';
}
function showAdmin() {
    document.getElementById('Dashboard-table').style.display = 'none';
  
    document.getElementById('Admin-table').style.display = 'block';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'none';
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';
}
function showCalculator(){
    document.getElementById('Dashboard-table').style.display = 'none';
   
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'block';
    document.getElementById('File-table').style.display = 'none';
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';
}
function showFileComplaint(){
    document.getElementById('Dashboard-table').style.display = 'none';
   
    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'block'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';
}
 

function DisplayNews(){

    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'block';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';
}

function showlostitem(){
    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'block';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';
}
function showfounditem(){
    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'block';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';
}

function showWastemanagement(){
    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'block';
    document.getElementById('Complein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-table').style.display = 'none';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'none';

}


function showmanageComplaint(){
    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
    document.getElementById('calculator-table').style.display = 'none';
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
    document.getElementById('Complein-table').style.display = 'block';
    document.getElementById('ScheduledComplein-table').style.display = 'block';
    document.getElementById('ScheduledComplein-tablecaseclose').style.display = 'block';

}









function calculateFare() {
    // Retrieve input values
    var location = document.getElementById('location').value;
    var distance = parseFloat(document.getElementById('distance').value);
    var distanceUnit = document.getElementById('distanceUnit').value;
    var fareRate = parseFloat(document.getElementById('fareRate').value);

    // Check if inputs are valid
    if (isNaN(distance) || isNaN(fareRate)) {
        Swal.fire({
            title: 'Error',
            text: 'Please enter valid distance and fare rate values.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return;
    }

    // Convert distance to kilometers if the unit is in meters
    if (distanceUnit === 'm') {
        distance = distance / 1000; // Convert meters to kilometers
    }

    // Additional input for discounts
    var isPWD = document.getElementById('isPWD').checked;
    var isStudent = document.getElementById('isStudent').checked;
    var isSeniorCitizen = document.getElementById('isSeniorCitizen').checked;

    // Apply discounts based on user status
    var discountMultiplier = 1; // Default: no discount

    if (isPWD) {
        discountMultiplier = 0.8; // 20% discount for PWD
    } else if (isStudent) {
        discountMultiplier = 0.9; // 10% discount for students
    } else if (isSeniorCitizen) {
        discountMultiplier = 0.85; // 15% discount for senior citizens
    }

    // Perform the fare calculation with the applied discount
    var result;
    if (location === 'within') {
        // Your calculation logic for within Barangay 409
        result = distance * fareRate * discountMultiplier;
    } else {
        // Your calculation logic for outside Barangay 409
        // Replace this with your actual logic
        result = distance * fareRate * discountMultiplier * 1.5; // Example: 1.5 times the rate for outside
    }

    // Display the result using SweetAlert
    Swal.fire({
        title: 'Fare Calculation Result',
        html: `<p>The calculated fare is: ${result.toFixed(2)}</p>`, // Display result with two decimal places
        icon: 'success',
        confirmButtonText: 'OK'
    });
}
