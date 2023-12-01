<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generation Example</title>
    <!-- Include Dompdf library from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/dompdf@0.8.6/dist/dompdf.full.min.js"></script>
</head>
<body>

    <div id="content">
        <h1>Hello, World!</h1>
        <p>This is a sample content for PDF generation using Dompdf.</p>
    </div>

    <button onclick="generatePDF()">Generate PDF</button>

    <script>
        function generatePDF() {
            // Get the content element
            const element = document.getElementById('content');

            // Create a Dompdf instance
            const pdf = dompdf.create();

            // Generate PDF from the content
            pdf.from(element).outputPdf();
        }
    </script>

</body>
</html>
