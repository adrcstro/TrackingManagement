function showDriver() {
    document.getElementById('Dashboard-table').style.display = 'block';
   
    document.getElementById('Admin-table').style.display = 'none';
    
    document.getElementById('File-table').style.display = 'none';
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
}
function showAdmin() {
    document.getElementById('Dashboard-table').style.display = 'none';
  
    document.getElementById('Admin-table').style.display = 'block';
   
    document.getElementById('File-table').style.display = 'none';
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
}

function showFileComplaint(){
    document.getElementById('Dashboard-table').style.display = 'none';
   
    document.getElementById('Admin-table').style.display = 'none';
   
    document.getElementById('File-table').style.display = 'block'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
}
 

function DisplayNews(){

    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
   
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'block';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';
}

function showlostitem(){
    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
   
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'block';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'none';

}
function showfounditem(){
    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
   
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'block';
    document.getElementById('waste-table').style.display = 'none';
   
}

function showWastemanagement(){
    document.getElementById('Dashboard-table').style.display = 'none';

    document.getElementById('Admin-table').style.display = 'none';
   
    document.getElementById('File-table').style.display = 'none'
    document.getElementById('Displayenews').style.display = 'none';
    document.getElementById('Lostitem').style.display = 'none';
    document.getElementById('founditem').style.display = 'none';
    document.getElementById('waste-table').style.display = 'block';
   
}



