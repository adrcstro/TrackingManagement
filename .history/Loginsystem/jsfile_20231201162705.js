document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('button-addon2').addEventListener('click', function() {
        var driverName = document.querySelector('.form-control').value;
        document.getElementById('PassSearchDriver').value = driverName;
    });
});
