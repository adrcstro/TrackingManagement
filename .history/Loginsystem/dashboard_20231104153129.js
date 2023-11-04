document.addEventListener("DOMContentLoaded", function() {
    const link = document.getElementById('hide-table-link');
    const table = document.getElementById('passengers-table');

    link.addEventListener('click', function() {
        table.style.display = 'none';
    });
});
