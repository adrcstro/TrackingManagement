function updateSearchBar() {
    console.log('Button clicked!');
    var driverName = document.querySelector('.form-control').value;
    document.getElementById('PassSearchDriver').value = driverName;
}
