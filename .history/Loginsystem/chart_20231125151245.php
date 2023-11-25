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

    .rate-modal-container {
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

    .rate-modal-content {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .rate-close-button {
      cursor: pointer;
      float: right;
      font-size: 20px;
    }

    .rate-reload-button {
      margin-top: 10px;
      padding: 10px;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <button id="rate-open-modal-button">Open Modal</button>

  <div id="rate-modal-container" class="rate-modal-container">
    <div id="rate-modal-content" class="rate-modal-content">
      <span id="rate-close-button" class="rate-close-button">&times;</span>
      <p>This is the modal content.</p>
      <button id="rate-reload-button" class="rate-reload-button">Reload</button>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const openModalButton = document.getElementById('rate-open-modal-button');
      const modalContainer = document.getElementById('rate-modal-container');
      const closeButton = document.getElementById('rate-close-button');
      const reloadButton = document.getElementById('rate-reload-button');

      // Check if the modal should be open from a previous state
      const isModalOpen = localStorage.getItem('isRateModalOpen') === 'true';
      if (isModalOpen) {
        modalContainer.style.display = 'flex';
      }

      openModalButton.addEventListener('click', function () {
        modalContainer.style.display = 'flex';
        localStorage.setItem('isRateModalOpen', 'true');
      });

      closeButton.addEventListener('click', function () {
        modalContainer.style.display = 'none';
        localStorage.removeItem('isRateModalOpen');
      });

      reloadButton.addEventListener('click', function () {
        // Add your logic for reloading here
        location.reload();
      });

      // Handle refresh or close of the browser
      window.addEventListener('beforeunload', function (event) {
        if (modalContainer.style.display === 'flex') {
          localStorage.setItem('isRateModalOpen', 'true');
        } else {
          localStorage.removeItem('isRateModalOpen');
        }
      });
    });
  </script>

</body>
</html>
