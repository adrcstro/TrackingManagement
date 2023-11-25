<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blurred Overlay Example</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Adjust the alpha value for the desired level of transparency */
            backdrop-filter: blur(10px); /* Adjust the blur value as needed */
        }

        #overlay-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        button {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <button id="showOverlayBtn">Show Overlay</button>
    <div id="overlay">
        <!-- Content for the overlay -->
        <div id="overlay-content">
            <p>This is the overlay content.</p>
            <button id="closeOverlayBtn">Close Overlay</button>
        </div>
    </div>

    <script>
        document.getElementById('showOverlayBtn').addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'block';
        });

        document.getElementById('closeOverlayBtn').addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'none';
        });
    </script>
</body>
</html>
s