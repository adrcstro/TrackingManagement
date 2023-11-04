document.addEventListener("DOMContentLoaded", function() {
    const link = document.getElementById('toggle-table-link');
    const table = document.getElementById('passengers-table');

    link.addEventListener('click', function() {
        if (table.style.display === 'none') {
            table.style.display = 'table';
        } else {
            table.style.display = 'none';
        }
    });
});
