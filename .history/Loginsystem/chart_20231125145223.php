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
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    #close-button {
      cursor: pointer;
      float: right;
      font-size: 20px;
    }

    #reload-button {
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

  <button id="open-modal-button">Open Modal</button>

  <div id="modal-container">
    <div id="modal-content">
      <span id="close-button">&times;</span>
      <p>This is the modal content.</p>
      <button id="reload-button">Reload</button>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const openModalButton = document.getElementById('open-modal-button');
      const modalContainer = document.getElementById('modal-container');
      const closeButton = document.getElementById('close-button');
      const reloadButton = document.getElementById('reload-button');

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
        localStorage.removeItem('isModalOpen');
      });

      reloadButton.addEventListener('click', function () {
        // Add your logic for reloading here
        location.reload();
      });

      // Handle refresh or close of the browser
      window.addEventListener('beforeunload', function (event) {
        if (modalContainer.style.display === 'flex') {
          localStorage.setItem('isModalOpen', 'true');
        } else {
          localStorage.removeItem('isModalOpen');
        }
      });
    });
  </script>

</body>
</html>
