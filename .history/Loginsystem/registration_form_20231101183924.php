<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="submit_form.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="Name" name="Name"><br>

        <label for="age">Age:</label><br>
        <input type="text" id="Age" name="Age"><br>

        <label for="plate_number">Plate Number:</label><br>
        <input type="text" id="PlateNumber" name="PlateNumber"><br>

        <label for="drivers_license">Drivers License:</label><br>
        <input type="file" id="DriversLicense" name="DriversLicense"><br>

        <label for="vehicle_registration">Vehicle Registration:</label><br>
        <input type="file" id="VehicleRegistration" name="VehicleRegistration"><br>

        <label for="permit_to_operate">Permit to Operate:</label><br>
        <input type="file" id="PermittoOperate" name="PermittoOperate"><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="PhoneNumber" name="PhoneNumber"><br>

        <label for="home_address">Home Address:</label><br>
        <input type="text" id="HomeAddress" name="HomeAddress"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
