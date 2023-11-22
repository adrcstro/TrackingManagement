<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="60%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Your Form</title>
</head>
<body>

<div class="container mt-5">
  <form method="POST">
    <div class="form-group">
      <label for="address">Enter address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
    </div>

    <button type="submit" class="btn btn-primary" name="submit_address">
      Submit <i class="fas fa-check"></i>
    </button>
  </form>
</div>

<!-- Add Font Awesome for the icon -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>

<!-- Add Bootstrap JS if needed -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
