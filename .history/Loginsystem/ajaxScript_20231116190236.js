// ajaxScript.js

$(document).ready(function () {
    $('#filereportRegister').click(function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Collect form data using FormData
        var formData = new FormData();
        formData.append('Fileinput1', $('#Fileinput1').val());
        formData.append('datefilereport', $('#datefilereport').val());
        formData.append('Fileinput3', $('#Fileinput3').val());
        formData.append('Fileinput4', $('#Fileinput4').val());
        formData.append('Fileinput5', $('#Fileinput5').val());
        formData.append('Fileinput6', $('#Fileinput6')[0].files[0]); // File input handling
        formData.append('PassSearchDriver', $('#PassSearchDriver').val());

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: 'Filereport.php',
            data: formData,
            contentType: false, // Ensure it's false for FormData
            processData: false, // Ensure it's false for FormData
            dataType: 'json', // Change to 'html' if you're expecting HTML response
            success: function (response) {
                // Handle the response from the server (e.g., show success message)
                console.log(response);
                // Display Sweet Alert on success
                Swal.fire({
                    icon: 'success',
                    title: 'Report Created Successfully',
                    text: 'Your report has been submitted successfully.',
                    confirmButtonText: 'OK'
                });
            },
            error: function (error) {
                // Handle errors (e.g., show an error message)
                console.error('Error:', error);
                // Display Sweet Alert on error
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while submitting your report.',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});
