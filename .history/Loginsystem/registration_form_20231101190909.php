<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="submit_form.php" method="post" enctype="multipart/form-data">
        <label for="Name">Name:</label><br>
        <input type="text" id="Name" name="Name"><br>

        <label for="Age">Age:</label><br>
        <input type="text" id="Age" name="Age"><br>

        <label for="PlateNumber">Plate Number:</label><br>
        <input type="text" id="PlateNumber" name="PlateNumber"><br>

        <label for="DriversLicense">Drivers License:</label><br>
        <input type="file" id="DriversLicense" name="DriversLicense"><br>

        <label for="VehicleRegistration">Vehicle Registration:</label><br>
        <input type="file" id="VehicleRegistration" name="VehicleRegistration"><br>

        <label for="PermittoOperate">Permit to Operate:</label><br>
        <input type="file" id="PermittoOperate" name="PermittoOperate"><br>

        <label for="PhoneNumber">Phone Number:</label><br>
        <input type="text" id="PhoneNumber" name="PhoneNumber"><br>

        <label for="HomeAddress">Home Address:</label><br>
        <input type="text" id="HomeAddress" name="HomeAddress"><br>

        <input type="submit" value="Submit">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      $(function(){
		$('#Registerdriver').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


      var Name                = $('#Name').val();
      var Age                 = $('#Age').val();
      var PlateNumber         = $('#PlateNumber').val();
      var DriversLicense      = $('#DriversLicense').val();
      var VehicleRegistration = $('#VehicleRegistration').val();
      var PermittoOperate     = $('#PermittoOperate ').val();
      var PhoneNumber         = $('#PhoneNumber').val();
      var HomeAddress         = $('#HomeAddress').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'Submit_form.php',
				  data:{Name: Name,Age: Age ,PlateNumber: PlateNumber,DriversLicense: DriversLicense,VehicleRegistration: VehicleRegistration,PermittoOperate : PermittoOperate ,PhoneNumber:PhoneNumber, HomeAddress:HomeAddress},
         
         
          success: function(data) {
    swal("Success", data, "success").then((value) => {
        if (value) {
            $('#clear')[0].reset(); // Reset the form
        }
    });
},
					error: function(data){
						swal("Error", "There were errors while saving the data.", "error");
					}
				});

				
			}else{
				
			}

      
			



		});		

		
	});
	
    
    
    
    
    
    </script>





</body>




</html>
  