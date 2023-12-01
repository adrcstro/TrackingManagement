$(document).ready(function () {
    $("#printButton").on("click", function () {
        // Get the Complaint ID from the input
        var searchReport = $("#SearchReport").val();

        // Make an AJAX request to fetch the data
        $.ajax({
            type: "POST",
            url: "generate_pdf.php",
            data: { SearchReport: searchReport },
            dataType: "json",
            success: function (data) {
                // Create a PDF document
                var pdf = new jsPDF();

                // Add content to the PDF
                pdf.text(20, 20, "Complaint ID: " + data.ComplaintID);
                pdf.text(20, 30, "Type of Complaint: " + data.TypeofComplaint);
                pdf.text(20, 40, "Date of Report: " + data.DateofReport);
                pdf.text(20, 50, "Complainant Name: " + data.ComplainantName);
                pdf.text(20, 60, "Contact Number: " + data.ContactNumber);
                pdf.text(20, 70, "Address: " + data.Address);
                pdf.text(20, 80, "Name of Complainee: " + data.NameofComplainee);

                // Save the PDF
                pdf.save("complaint_report.pdf");
            },
            error: function () {
                alert("Error fetching data from the server");
            }
        });
    });
});
