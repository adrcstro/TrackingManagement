$(document).ready(function () {
    $("#printButton").on("click", function () {
        // Get the Complaint ID from the input
        var searchReport = $("#SearchReport").val();

        // Make an AJAX request to fetch the data
        $.ajax({
            type: "POST",
            url: "driverupdate.php",
            data: { SearchReport: searchReport },
            dataType: "json",
            success: function (data) {
                // Create a PDF document
                var pdf = new jsPDF();
                
                // Add content to the PDF
                pdf.text(20, 20, "Complaint ID: " + data.ComplaintID);
                pdf.text(20, 30, "Type of Complaint: " + data.TypeofComplaint);
                // Add other fields similarly

                // Save the PDF
                pdf.save("complaint_report.pdf");
            },
            error: function () {
                alert("Error fetching data from the server");
            }
        });
    });
});
