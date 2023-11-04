function showDashboard() {
    document.getElementById('Dashboard-table').style.display = 'block';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'none';
}

function showPassengers() {
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'block';
    document.getElementById('Admin-table').style.display = 'none';
}

function showAdmin() {
    document.getElementById('Dashboard-table').style.display = 'none';
    document.getElementById('Passengers-table').style.display = 'none';
    document.getElementById('Admin-table').style.display = 'block';
}


$(document).ready(function(){
    $("#Register").click(function(){
        var input1 = $("input[name='input1']").val();
        var input2 = $("input[name='input2']").val();
        var datePicker = $("input[name='datePicker']").val();
        var input3 = $("input[name='input3']").val();
        $.post("admin.php",
        {
            input1: input1,
            input2: input2,
            datePicker: datePicker,
            input3: input3
        },
        function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});