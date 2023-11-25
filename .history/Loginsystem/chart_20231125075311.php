<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    #myModal {
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

    #myModal h2 {
      margin-top: 0;
    }

    #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }
  </style>
</head>
<body>

<div id="myModal">
  <h2>Modal Dialog</h2>
  <p>This is a persistent modal dialog.</p>
  <button onclick="closeModal()">Close</button>
</div>

<div id="overlay"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Check if the modal should be displayed
    if (!localStorage.getItem("modalClosed")) {
      openModal();
    }
  });

  function openModal() {
    document.getElementById("myModal").style.display = "block";
    document.getElementById("overlay").style.display = "block";
  }

  function closeModal() {
    document.getElementById("myModal").style.display = "none";
    document.getElementById("overlay").style.display = "none";
    
    // Set a flag in localStorage to indicate that the modal has been closed
    localStorage.setItem("modalClosed", "true");
  }
</script>

</body>
</html>
