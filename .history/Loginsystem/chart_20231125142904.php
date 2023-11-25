<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal Example</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    #modal-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    #modal-content {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
    }

    #close-button {
      cursor: pointer;
      float: right;
      font-size: 20px;
    }
  </style>
</head>
<body>

  <button id="open-modal-button">Open Modal</button>

  <div id="modal-container">
    <div id="modal-content">
      <span id="close-button">&times;</span>
      <p>This is the modal content.</p>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const openModalButton = document.getElementById('open-modal-button');
      const modalContainer = document.getElementById('modal-container');
      const closeButton = document.getElementById('close-button');

      // Check if the modal should be open from a previous state
      const isModalOpen = localStorage.getItem('isModalOpen') === 'true';
      if (isModalOpen) {
        modalContainer.style.display = 'flex';
      }

      openModalButton.addEventListener('click', function () {
        modalContainer.style.display = 'flex';
        localStorage.setItem('isModalOpen', 'true');
      });

      closeButton.addEventListener('click', function () {
        modalContainer.style.display = 'none';
        localStorage.setItem('isModalOpen', 'false');
      });

      // Handle refresh or close of the browser
      window.addEventListener('beforeunload', function () {
        localStorage.setItem('isModalOpen', 'false');
      });
    });
  </script>

</body>
</html>
