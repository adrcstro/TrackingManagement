<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Styles for the modal */
    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 1;
    }

    /* Styles for the overlay background */
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
  <button id="openModalBtn">Open Modal</button>

  <!-- The modal -->
  <div id="myModal" class="modal">
    <p>This is a modal dialog.</p>
    <button id="reloadPageBtn">Reload Page</button>
    <button id="closeModalBtn">Close Modal</button>
  </div>

  <!-- The overlay background -->
  <div id="overlay" class="overlay"></div>

  <script>
    document.getElementById('openModalBtn').addEventListener('click', function() {
      document.getElementById('myModal').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';
    });

    document.getElementById('reloadPageBtn').addEventListener('click', function() {
      location.reload();
    });

    document.getElementById('closeModalBtn').addEventListener('click', function() {
      closeModal();
    });

    function closeModal() {
      document.getElementById('myModal').style.display = 'none';
      document.getElementById('overlay').style.display = 'none';
    }
  </script>

</body>
</html>
