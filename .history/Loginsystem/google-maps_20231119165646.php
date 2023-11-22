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

    <button type="button" class="btn btn-primary btn-sm m-1" id="trackButton" data-toggle="modal" data-target="#mapModal">
        <i class="bi bi-geo"></i> View in Maps
    </button>

    <!-- Modal -->
    <div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Map</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="mapIframe" width="100%" height="500" src=""></iframe>

                    <form method="POST" class="text-center mt-3" id="addressForm">
                        <div class="form-group row justify-content-center">
                            <label for="address" class="col-sm-2 col-form-label">Enter address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-primary" onclick="updateMap()">
                                    Submit <i class="fas fa-check"></i>
                                </button>

                                <button type="button" class="btn btn-secondary ml-2" name="paste_address">
                                    Paste <i class="fas fa-paste"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function updateMap() {
            var address = document.getElementById('address').value;
            var mapIframe = document.getElementById('mapIframe');
            mapIframe.src = 'https://maps.google.com/maps?q=' + encodeURIComponent(address) + '&output=embed';
        }

        // Show the modal when the page loads
        $(document).ready(function () {
            $('#mapModal').modal('show');
        });
    </script>
</body>

</html>
