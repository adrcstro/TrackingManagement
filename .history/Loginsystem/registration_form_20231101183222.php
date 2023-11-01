<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="submit_form.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="age">Age:</label><br>
        <input type="text" id="age" name="age"><br>

        <label for="plate_number">Plate Number:</label><br>
        <input type="text" id="plate_number" name="plate_number"><br>

        <label for="drivers_license">Drivers License:</label><br>
        <input type="file" id="drivers_license" name="drivers_license"><br>

        <label for="vehicle_registration">Vehicle Registration:</label><br>
        <input type="file" id="vehicle_registration" name="vehicle_registration"><br>

        <label for="permit_to_operate">Permit to Operate:</label><br>
        <input type="file" id="permit_to_operate" name="permit_to_operate"><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number"><br>

        <label for="home_address">Home Address:</label><br>
        <input type="text" id="home_address" name="home_address"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
