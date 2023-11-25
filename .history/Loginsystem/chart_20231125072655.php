<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    <style>
        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        /* Style for the overlay background */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
    </style>
</head>
<body>

<!-- Button to open the modal -->
<button onclick="openModal()">Open Modal</button>

<!-- The Modal -->
<div class="modal" id="myModal">
    <p>Modal content goes here!</p>
    <button onclick="reloadPage()">Reload Page</button>
    <button onclick="closeModal()">Close</button>
</div>

<!-- The Overlay -->
<div class="overlay" id="overlay" onclick="closeModal()"></div>

<script>
    // Function to open the modal
    function openModal() {
        var modal = document.getElementById("myModal");
        var overlay = document.getElementById("overlay");
        modal.style.display = "block";
        overlay.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        var modal = document.getElementById("myModal");
        var overlay = document.getElementById("overlay");
        modal.style.display = "none";
        overlay.style.display = "none";
    }

    // Function to reload the page without closing the modal
    function reloadPage() {
        location.reload();
    }
</script>

</body>
</html>
