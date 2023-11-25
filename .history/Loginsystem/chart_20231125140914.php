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
      max-width: 80%;
      max-height: 80%;
      overflow: auto;
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

<button onclick="openModal()">Open Modal</button>

<div id="myModal">
  <!-- Content from the original code -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <style>
          /* Styles from the original code */
      </style>
      <title>News and Events</title>
  </head>
  <body>

  <div class="container">
          <div class="row  mt-4">
              <div class="col-md-6">
                  <h1 class="text-center mt-4">Drivers Personal Rating Scale</h1>

                  <form method="post" action="" class="mt-3">
      <div class="form-group">
          <!-- Form content from the original code -->
      </div>
  </form>

  <div class="form-group mt-2">
      <!-- Form content from the original code -->
  </div>

              </div>

              <div class="col-md-6">
                  <div style="width: 100%;"  class="mt-4">
                      <canvas id="myChart"></canvas>
                  </div>
              </div>
          </div>
      </div>


  <script>
          // JavaScript content from the original code
  </script>
  <?php
  // PHP content from the original code
  ?>

  <script>
  // More JavaScript content from the original code
  </script>

  <div class="container mt-5 mb-5">
      <div class="row">
      <?php
          // More PHP content from the original code
      ?>
          </div>
      </div>

      <!-- Add the copyToClipboard function -->
      <script>
          // JavaScript content from the original code
      </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>

  </body>
  </html>
  <!-- End of content from the original code -->

  <button onclick="closeModal()">Close</button>
</div>

<div id="overlay"></div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Check if the modal should be displayed
    if (localStorage.getItem("modalOpened")) {
      openModal();
    }
  });

  function openModal() {
    document.getElementById("myModal").style.display = "block";
    document.getElementById("overlay").style.display = "block";
    
    // Set a flag in localStorage to indicate that the modal has been opened
    localStorage.setItem("modalOpened", "true");
  }

  function closeModal() {
    document.getElementById("myModal").style.display = "none";
    document.getElementById("overlay").style.display = "none";
    
    // Set a flag in localStorage to indicate that the modal has been closed
    localStorage.removeItem("modalOpened");
  }
</script>

</body>
</html>
