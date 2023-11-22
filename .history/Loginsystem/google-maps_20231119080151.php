<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Your Form</title>
</head>
<body>

<div class="container mt-5 mx-auto">
  <form method="POST" class="text-center">
    <div class="form-group row justify-content-center">
      <label for="address" class="col-sm-2 col-form-label">Enter address</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit_address">
          Submit <i class="fas fa-check"></i>
        </button>

        <button type="button" class="btn btn-secondary ml-2" name="paste_address">
          Paste <i class="fas fa-paste"></i>
        </button>
      </div>
    </div>
  </form>
</div>

<!-- Add Bootstrap JS if needed -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
